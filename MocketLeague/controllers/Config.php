<?php

class Config {

    private function __construct() {}

    public static function getDBConnection() {
        $dbname = "mocket_league"; 
        $dbuser = "dev_mocket"; 
        $dbpass = 'R0AbpV$UtxH2fhwG'; 
        $dbhost = "localhost";
        static $self;
        if (!isset($self)) {
            $dbstring = "mysql:host=$dbhost;dbname=$dbname";
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            $self = new PDO($dbstring, $dbuser, $dbpass, $options);
        }
        return $self;
    }

}

?>
