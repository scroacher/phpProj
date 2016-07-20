<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Player Name</th><th>NFL Team</th><th>Position</th><th>Index</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bleaguedb";

try {
	$db = new PDO(
              "mysql:host=localhost;dbname=bleaguedb;charset=utf8",
              "root","");
	
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	
	$stmt = $db->prepare("SELECT * FROM players"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }



} 



catch (PDOException $e) {
	echo "Unable to Connect - ";
	echo $e->getMessage();
exit;
}

$db = null;
echo "</table>";


?>