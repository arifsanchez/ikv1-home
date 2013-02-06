<?php
class DATABASE_CONFIG {
	

	var $production = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'instance38153.db.xeround.com',
		'login' => 'app11602012',
		'password' => 'oipolloi88',
		'database' => 'app11602012',
		'prefix' => '',
		'port' => '6199',
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
	        $this->default = $this->development;
	    }
	}

	
}
