# seed-server

Ansible repository to install everything that is needed to run SMR

## Prerequisites

Create the file `./.ansible_secret` on your machine.
Ask @MichaelKunze for the content.
It contains the password to decrypt secrets in this repository.

Make sure you have the latest `ansible` installed on your system, e.g.
```
pip install ansible
```

## Execution

```
./deploy.py [role-name]
```

#### Arguments

`role-name` (OPTIONAL) Will only execute the role with the given name.
Can be a space-delimited list of roles.

## Testing

Basic syntax checking can be performed by simply running:
```
ansible-lint
```

Ansible can also be run in "check" mode, to do a mock deployment without
actually making any changes. This has limited use, since some tasks will
not function correctly in this mode. It can be performed using:
```
./deploy.py --dry-run
```

A full test of the deployment to a local VM can be performed using:
```
vagrant up --provision
```

> **Warning**
> Since the Vagrant VM will be deployed with all of the properties of the
> production server, there are some potentially dangerous collisions.
> Most important is the `smr_live` backup cron, which might overwrite our
> production server backups. This cron should be disabled immediately.
> The Discord and IRC services also collide since they connect to 3rd party
> services using identical credentials.
