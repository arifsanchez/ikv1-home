<?php
class DATABASE_CONFIG {
	
	var $aliranpertama = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'us-cdbr-east-03.cleardb.com',
			'login' => 'b85eadea7f676c',
			'password' => '11fd9bdd',
			'database' => 'heroku_9f2a562c4bcc93f',
			'prefix' => '',
			'encoding' => 'utf8',
	);

	var $alirankedua = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'us-cdbr-east-03.cleardb.com',
		'login' => 'b9c78850a0818d',
		'password' => '3a9127c7',
		'database' => 'heroku_084542947a871a7',
		'prefix' => '',
		#'port' => '6199',
		'encoding' => 'utf8',
	);
	
	public function __construct()
	{
	    if ($_SERVER['SERVER_NAME'] == 'iktrust.co.nz') {
	        $this->default = $this->aliranpertama;
	    } else {
	        $this->default = $this->alirankedua;
	    }
	}

	
}
