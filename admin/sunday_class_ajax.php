<?php
require("../database.php");

$db = DB();
$json = array();

$selected_class = "";

if (isset($_GET['my_class'])) {
	$selected_class = $_GET['my_class'];
}





$stmt = $db->prepare("SELECT * FROM sunday_class");
$stmt->execute();
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	$class_id = $result['id'];
	$first = $result['first_name'];
	$last = $result['last_name'];

	$json[] = array(

		"one" => $class_id,
		"two" => $first,
		"three" => $last
		);
}

echo json_encode($json);

?>



