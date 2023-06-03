<?php

//-------------------
// Main
//-------------------

const URL = 'https://www.smrealms.de';

const ENABLE_LIBXML_ERRORS = false;
const ENABLE_DEBUG = false;
const ENABLE_BETA = false;

const RECAPTCHA_PUBLIC = '{{ smr_recaptcha_public }}';
const RECAPTCHA_PRIVATE = '{{ smr_recaptcha_private }}';

const FACEBOOK_APP_ID = '{{ smr_facebook_app_id }}';
const FACEBOOK_APP_SECRET = '{{ smr_facebook_app_secret }}';

const TWITTER_CONSUMER_KEY = '{{ twitter_consumer_key }}';
const TWITTER_CONSUMER_SECRET = '{{ twitter_consumer_secret }}';

const GOOGLE_CLIENT_ID = '{{ google_client_id }}';
const GOOGLE_CLIENT_SECRET = '{{ google_client_secret }}';

const GOOGLE_ANALYTICS_ID = '{{ smr_google_analytics_id }}';

// E-mail addresses to receive bug reports
const BUG_REPORT_TO_ADDRESSES = [
	'bugs@smrealms.de',
	'daniel.hemberger@gmail.com',
];

# Refer to the smtp container name in the dockerize (live) repo. This name is
# unique, unlike the service name ("smtp"), which is the same in both beta and
# live. This ensures we only ever connect to the live smtp service.
const SMTP_HOSTNAME = 'smr-smtp';

const HISTORY_DATABASES = [
	'smr_classic_history' => 'old_account_id',
	'smr_12_history' => 'old_account_id2',
];

//-------------------
// Discord
//-------------------

const DISCORD_TOKEN = '{{ smr_discord_token }}';
const DISCORD_COMMAND_PREFIX = '.';
const DISCORD_LOGGER_LEVEL = 'NOTICE';

//-------------------
// IRC
//-------------------

const IRC_BOT_SERVER_ADDRESS = 'irc.theairlock.net';
const IRC_BOT_SERVER_PORT = 6667;
const IRC_BOT_NICK = 'Caretaker';
const IRC_BOT_PASS = '{{ smr_irc_bot_pass }}';
const IRC_BOT_USER = IRC_BOT_NICK . ' einstein smrealms.de :Official SMR bot';
const IRC_BOT_VERBOSE_PING = false;

//-------------------
// NPC
//-------------------

const NPC_LOG_TO_DATABASE = false;
const NPC_MAX_ACTIONS = 2500; // About a half hour worth of actions
const NPC_LOW_TURNS = 100;
const NPC_MINIMUM_RESERVE_CREDITS = 100000;
const NPC_MIN_SLEEP_TIME = 800000;
const NPC_MAX_SLEEP_TIME = 1100000;

//-------------------
// NPC Chess
//-------------------

const ENABLE_NPCS_CHESS = false;
