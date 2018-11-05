#!/usr/bin/env bash

ansible-playbook einstein.yml -i hosts --vault-id ~/.ansible_einstein.secret
