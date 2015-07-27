<?php
$dbconfig = array(
    'class' => 'mongoYii.EMongoClient',
    'server' => 'mongodb://127.0.0.1:27017/',
    'db' => '{{ph_db_name}}',
);
$dbconfigtest = array(
		'class' => 'mongoYii.EMongoClient',
		'server' => 'mongodb://127.0.0.1:27017/',
		'db' => '{{ph_db_test_name}}',
);
$mysqldbconfig = array(
    //Mysql
    'db.name' => 'phyii',
    'db.connectionString' => 'mysql:host=localhost;dbname=phyii',
    'db.username' => '',
    'db.password' => '',
);
// DB connection configurations
/*'db.name' => 'phyii',
'db.connectionString' => 'mysql:host=localhost;dbname=phyii',
'db.username' => 'root',
'db.password' => '',*/

//
//	// test database {
//	'testdb.name' => '',
//	'testdb.connectionString' => 'mysql:host={DATABASE-HOST};dbname={DATABASE-NAME}_test',
//	'testdb.username' => '{DATABASE-USERNAME}',
//	'testdb.password' => '{DATABASE-PASSWORD}',
