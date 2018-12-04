<?php

trait SmrMySqlSecrets {
	private static $host = 'smr-mysql';
	private static $databaseName = 'smr_live';
	private static $user = 'smr';
	private static $password = 'XXX';

	private static $port = null;
	private static $socket = null;

	// history databases
	private static $dbName_Smr12History = 'smr_12_history';
	private static $dbName_SmrClassicHistory = 'smr_classic_history';
}
