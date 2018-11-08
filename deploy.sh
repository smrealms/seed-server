#!/usr/bin/env bash

set -eo pipefail

TAGS="${1}"

if [[ -n "${TAGS}" ]]; then
    ANSIBLE_OPTIONS=(--tags "${TAGS}")
fi

ansible-playbook einstein.yml -i hosts --vault-id ~/.ansible_einstein.secret "${ANSIBLE_OPTIONS[@]}"
