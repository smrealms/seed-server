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
    parser.add_argument('-v', '--verbose', action='count', default=1,
        help="Add extra verbosity to the ansible-playbook command.")
    args = parser.parse_args()

    # Install the roles that we're using from the Ansible Galaxy.
    force = '--force' if args.force else ''
    cmd = "ansible-galaxy install -p roles -r requirements.yml {}".format(force)
    print("Running: {}".format(cmd))
    sp.check_call(shlex.split(cmd))

    # Limit deployment to specific tags, if specified.
    tags = '--tags "{}"'.format(','.join(args.tags)) if args.tags else ''

    # Perform a dry-run if requested
    dry_run = '--check' if args.dry_run else ''

    # Add verbosity if requested
    verbose = '-' + 'v' * args.verbose if args.verbose else ''

    cmd = f"ansible-playbook einstein.yml {verbose} {tags} {dry_run}"
    print("Running:", cmd)
    sp.check_call(shlex.split(cmd))

if __name__ == "__main__":
    main()
