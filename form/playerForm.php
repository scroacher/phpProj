<link rel="stylesheet" type="text/css" href="css/style.css">
<form id="form2" action="../proc/process2.php" target="third" method="POST">
	
<!--	testing code here-->
	<?php $selTeam = $_POST["Name"]; ?>
	Team Name:  <?php echo $selTeam ?><br>

<!--<div class="secondSpace">
	<iframe src='playerForm.php' height="60%" width="80%">

	</iframe>
</div>-->
<!--	end tested code-->
	
	<select id="playerlist" name="playerlist">
 	<?php
        $pdo = new PDO('mysql:host=localhost;dbname=bleaguedb', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

		$stmt = $pdo->prepare('SELECT CONCAT(PlayerName, " - ", Position) AS player, fantTeam FROM players WHERE fantTeam = "' . $selTeam . '"');
		$stmt->execute();
		   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo '<option>'.$row['player'].'</option>';
		   }
     ?>
 	</select>
	
	<input type="Submit" value="Submit"/>
	
</form>