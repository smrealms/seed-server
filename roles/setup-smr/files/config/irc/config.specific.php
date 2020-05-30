<?php

const IRC_BOT_SERVER_ADDRESS = 'irc.theairlock.net';
const IRC_BOT_SERVER_PORT = 6667;
const IRC_BOT_NICK = 'Caretaker';
const IRC_BOT_NICK_BACKUP = 'CareGhost';
const IRC_BOT_PASS = '{{ smr_irc_bot_pass }}';
define('IRC_BOT_USER', strtolower(IRC_BOT_NICK) . ' einstein smrealms.de :Official SMR bot');
const IRC_BOT_VERBOSE_PING = false;
