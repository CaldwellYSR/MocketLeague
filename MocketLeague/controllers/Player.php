<?php

require("Config.php");

class Player {

    private $db;

	// Temporarily: Just add columns in constructor
	private function __construct($results) {
		// Eventually go to the database and get the information related to player with this ID
		$this->id = $results["id"];
		$this->name = $results["name"];
		$this->picture = $results["picture"];
		$this->league_id = $results["league_id"];
		$this->wins = $results["wins"];
		$this->losses = $results["losses"];
		$this->car = $results["car_id"];
	}

    public static function getPlayer($id) {
		// Eventually go to the database and get the information related to player with this ID
        $db = Config::getDBConnection();
        $query = "
            SELECT * 
            FROM players
            WHERE id = :id
        ";
        $statement = $db->prepare($query);
        $statement->bindParam(":id", $id);
        $results = $statement->execute();
        if ($results) {
            $row = $statement->fetchAll();
            return new Player($row[0]);
        } else {
            throw new Exception("This player doesn't exist in the database");
        }
	}

	// TODO: Make private variables with GETTERS & SETTERS to manage database

	// Rendering functions

}

?>
