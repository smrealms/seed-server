<?php

//-------------------
// Main
//-------------------

const URL = 'https://beta.smrealms.de';

const ENABLE_DEBUG = false;
const ENABLE_BETA = true;

const RECAPTCHA_PUBLIC = '{{ beta_recaptcha_public }}';
const RECAPTCHA_PRIVATE = '{{ beta_recaptcha_private }}';

const FACEBOOK_APP_ID = '{{ beta_facebook_app_id }}';
const FACEBOOK_APP_SECRET = '{{ beta_facebook_app_secret }}';

const TWITTER_CONSUMER_KEY = '{{ twitter_consumer_key }}';
const TWITTER_CONSUMER_SECRET = '{{ twitter_consumer_secret }}';

const GOOGLE_CLIENT_ID = '{{ google_client_id }}';
const GOOGLE_CLIENT_SECRET = '{{ google_client_secret }}';

const GOOGLE_ANALYTICS_ID = '{{ beta_google_analytics_id }}';

// E-mail addresses to receive bug reports
const BUG_REPORT_TO_ADDRESSES = [
	'daniel.hemberger@gmail.com',
];

const SMTP_HOSTNAME = 'smtp';

const HISTORY_DATABASES = [];

//-------------------
// NPC
//-------------------

const NPC_LOG_TO_DATABASE = true;
const NPC_MAX_ACTIONS = 2500; // About a half hour worth of actions
const NPC_LOW_TURNS = 75;
const NPC_MINIMUM_RESERVE_CREDITS = 100000;
const NPC_MIN_SLEEP_TIME = 800000;
const NPC_MAX_SLEEP_TIME = 1100000;

//-------------------
// NPC Chess
//-------------------

const ENABLE_NPCS_CHESS = false;
