#!/usr/bin/env python3

import os
import argparse
import subprocess as sp
import shlex

def main():
    parser = argparse.ArgumentParser()
    parser.add_argument('tags', nargs='*',
        help="If specified, limit deployment to these tags. "
             "See einstein.yml for valid tags (e.g. system, game, beta).")
    parser.add_argument('-d', '--dry-run', action='store_true',
        help="If specified, perform a dry run of the deployment.")
    parser.add_argument('--force', action='store_true',
        help="Forward this option to ansible-galaxy to update requirements.")
    args = parser.parse_args()

    # Install the roles that we're using from the Ansible Galaxy.
    force = '--force' if args.force else ''
    cmd = "ansible-galaxy install -p roles -r requirements.yml {}".format(force)
    print("Running: {}".format(cmd))
    sp.check_call(shlex.split(cmd))

    secrets_file = '.ansible_secret'
    if not os.path.exists(secrets_file):
        secrets_file = os.path.expanduser('~/.ansible_einstein.secret')
        if not os.path.exists(secrets_file):
            raise UserWarning('Secrets file not found!')

    # Limit deployment to specific tags, if specified.
    tags = '--tags "{}"'.format(','.join(args.tags)) if args.tags else ''

    # Perform a dry-run if requested
    dry_run = '--check' if args.dry_run else ''

    cmd = "ansible-playbook einstein.yml -v --vault-id {} {} {}".format(secrets_file, tags, dry_run)
    print("Running: {}".format(cmd))
    sp.check_call(shlex.split(cmd))

if __name__ == "__main__":
    main()
