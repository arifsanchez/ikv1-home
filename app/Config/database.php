<?php
class DATABASE_CONFIG {
	
	var $aliranpertama = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'internal-db.s138565.gridserver.com',
			'login' => 'db138565',
			'password' => 'P6VDU+m5l!qY',
			'database' => 'db138565_iktrustcom_1',
			'prefix' => '',
			'encoding' => 'utf8',
	);

	var $alirankedua = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'internal-db.s138565.gridserver.com',
		'login' => 'db138565',
		'password' => 'P6VDU+m5l!qY',
		'database' => 'db138565_iktrustcom_2',
		'prefix' => '',
		#'port' => '6199',
		'encoding' => 'utf8',
	);
	
	
		var $mt4 = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'external-db.s138565.gridserver.com',
			'login' => 'db138565_arif',
			'password' => '>R1n"U8N{oP0',
			'database' => 'db138565_mt4rs1',
			'prefix' => '',
			//'port' => '3306',
		);
	
	public function __construct()
	{
	    if ($_SERVER['SERVER_NAME'] == 'iktrust.co.nz') {
	        $this->default = $this->alirankedua;
	    } else {
	        $this->default = $this->alirankedua;
	    }
	}

	
}
