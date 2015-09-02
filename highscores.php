
<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//mysql_connect('mysql13.000webhost.com', 'a8596221_pexea12', 'pexea12');
//mysql_select_db('a8596221_pexea12');

//$mysql = new mysqli("localhost", "root", "", "a8596221_pexea12");
$mysql = new mysqli("mysql13.000webhost.com", "a8596221_pexea12", "pexea12", "a8596221_pexea12");

$result = $mysql->query("SELECT * FROM highscores");

$output = "";
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		if ($output != "") $output .= ",";
		$output .= '{"name":"' . $row["name"] . '",';
		$output .= '"score":' . $row["score"] . "}";
}

$mysql->close();

$output = "[" . $output . "]";

echo $output;
exit;
?>