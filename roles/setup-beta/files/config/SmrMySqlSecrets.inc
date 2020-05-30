<?php

trait SmrMySqlSecrets {
	protected static $databaseName = 'smr_live';
	private static $host = 'beta-mysql';
	private static $user = 'smr';
	private static $password = '{{ beta_mysql_password }}';

	private static $port = null;
	private static $socket = null;
}
