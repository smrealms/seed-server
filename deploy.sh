#!/usr/bin/env bash

set -eo pipefail

ansible-galaxy install -p roles -r requirements.yml

TAGS="${1}"

if [[ -n "${TAGS}" ]]; then
    ANSIBLE_OPTIONS=(--tags "${TAGS}")
fi

SECRETS_FILE=~/.ansible_einstein.secret
if [ ! -f $SECRETS_FILE ]; then
    SECRETS_FILE=.ansible_secret
fi

ansible-playbook einstein.yml \
  -i hosts \
  --vault-id $SECRETS_FILE \
  "${ANSIBLE_OPTIONS[@]}"
