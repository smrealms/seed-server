#!/usr/bin/env python3

import os
import argparse
import subprocess as sp
import shlex

def main():
    parser = argparse.ArgumentParser()
    parser.add_argument('tags', nargs='*',
        help="If specified, limit deployment to these tags.")
    parser.add_argument('-d', '--dry-run', action='store_true',
        help="If specified, perform a dry run of the deployment.")
    args = parser.parse_args()

    # Install the roles that we're using from the Ansible Galaxy.
    cmd = "ansible-galaxy install -p roles -r requirements.yml"
    sp.check_call(shlex.split(cmd))

    secrets_file = '.ansible_secret'
    if not os.path.exists(secrets_file):
        secrets_file = os.path.expanduser('~/.ansible_einstein.secret')
        if not os.path.exists(secrets_file):
            raise UserWarning('Secrets file not found!')

    # Limit deployment to specific tags, if specified.
    if args.tags:
        tags = '--tags "{}"'.format(','.join(args.tags))
    else:
        tags = ''

    cmd = "ansible-playbook einstein.yml -i hosts --vault-id {} {}".format(secrets_file, tags)
    print("Running: {}".format(cmd))
    sp.check_call(shlex.split(cmd))

if __name__ == "__main__":
    main()
