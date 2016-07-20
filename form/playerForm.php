<link rel="stylesheet" type="text/css" href="css/style.css">
<form id="form2" action="../proc/process2.php" target="third" method="POST">
	
	<select id="playerlist" name="playerlist">
 	<?php
        $pdo = new PDO('mysql:host=localhost;dbname=bleaguedb', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

		$stmt = $pdo->prepare('Select PlayerName from Players');
		$stmt->execute();
		   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo '<option>'.$row['PlayerName'].'</option>';
		   }
     ?>
 	</select>
	
	<input type="Submit" value="Submit"/>
</form>