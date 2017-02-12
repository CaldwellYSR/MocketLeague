<?php

class Player {

	// Temporarily: Just add columns in constructor
	public function __construct($id, $name, $picture, $league_id, $wins, $losses, $car) {
		// Eventually go to the database and get the information related to player with this ID
		$this->id = $id;
		$this->name = $name;
		$this->picture = $picture;
		$this->league_id = $league_id;
		$this->wins = $wins;
		$this->losses = $losses;
		$this->car = $car;
	}

	// TODO: Make private variables with GETTERS & SETTERS to manage database

	// Rendering functions

}

?>