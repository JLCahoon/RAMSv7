<?php

	 $DBhost = "localhost:3306";
	 $DBuser = "root";
	 $DBpass = "root";
	 $DBname = "RiskManagement";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
