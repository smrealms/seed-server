<?php

trait SmrMySqlSecrets {
	protected static $databaseName = 'smr_live';
	private static $host = '{{ smr_mysql_host }}';
	private static $user = 'smr';
	private static $password = '{{ smr_mysql_password }}';

	private static $port = null;
	private static $socket = null;

	// history databases
	protected static $dbName_Smr12History = 'smr_12_history';
	protected static $dbName_SmrClassicHistory = 'smr_classic_history';
}
