<?php

const URL = 'https://www.smrealms.de';

const ENABLE_DEBUG = false;
const ENABLE_BETA = false;

const RECAPTCHA_PUBLIC = '{{ smr_recaptcha_public }}';
const RECAPTCHA_PRIVATE = '{{ smr_recaptcha_private }}';

const FACEBOOK_APP_ID = '{{ smr_facebook_app_id }}';
const FACEBOOK_APP_SECRET = '{{ smr_facebook_app_secret }}';

const TWITTER_CONSUMER_KEY = '{{ twitter_consumer_key }}';
const TWITTER_CONSUMER_SECRET = '{{ twitter_consumer_secret }}';

const GOOGLE_ANALYTICS_ID = '{{ smr_google_analytics_id }}';

const ENABLE_NPCS_CHESS = false;

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
