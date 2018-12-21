# seed-server

Ansible repository to install everything that is needed to run SMR

## Prerequisites

Create the file `~/.ansible_einstein.secret` or `./.ansible_secret` on your
machine. Ask @MichaelKunze for the content.
It contains the password to decrypt secrets in this repository

Make sure you have the latest `ansible` installed on your system

## Execution

`./deploy.sh [role-name]`

#### Arguments

`role-name` (OPTIONAL) Will only execute the role with the given name. Can be a comma seperated list of roles. 
                       Allowed values are `system`, `updates`, `access`, `packages`, `docker`, `setup-smr`
