<?php
	/** IF URL was /players.php?id=3&name=Sindri&player=true
	 * $_GET = array(
	 *	"id" => 3,
	 *	"name" => "Sindri",
	 *	"player" => true
	 * );
	 * $id = $_GET["id"];
	 * In index.php have link to /players.php?id=<?php echo $player->id; ?>
	 **/
	require("controllers/Player.php");
    try {
        $player = Player::getPlayer(1);
    } catch(Exception $e) {
        die($e->getMessage());
    }
?>
<?php require("includes/header.php"); ?>
<div class="container">
	<h1>Players</h1>
	<hr />
	<div class="row">
		<!-- Player Image -->
		<div class="col-md-4">
			<img class="player_pic" src="<?php echo $player->picture; ?>" alt="<?php echo $player->name; ?>'s Profile Picture" />
		</div>
		<!-- Player Information -->
		<div class="col-md-8">
			<h2><?php echo $player->name; ?></h2>
			<table class="player_details">
				<tr>
					<td><b>League</b></td>
					<td><?php echo $player->league_id; ?></td>
				</tr>
				<tr>
					<td><b>Record</b></td>
					<td><?php echo $player->wins . '-' . $player->losses; ?></td>
				</tr>
				<tr>
					<td><b>Preferred Car</b></td>
					<td><?php echo $player->car; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php require("includes/footer.php"); ?>
