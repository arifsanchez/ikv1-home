<?php
class DATABASE_CONFIG {
	

	var $production = array(
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
	
	var $development = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'the_xe_test',
		'prefix' => '',
		'port' => '',
		'encoding' => 'utf8',
	);

	public function __construct()
	{
	    if (!$_SERVER['SERVER_NAME'] == 'localhost') {
	        $this->default = $this->production;
	    } else {
	        $this->default = $this->production;
	    }
	}

	
}
