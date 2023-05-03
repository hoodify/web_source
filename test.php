<?php

require("connect_db.php");
//$max_sequence = $pdo->query("SELECT MAX(sequence) FROM user_identity WHERE user_code = 43 AND active = 1")->fetch();
//$stmt = $pdo->query("SELECT MAX(sequence) FROM user_identity WHERE user_code = 43 AND active = 1");
//echo $max_sequence;

$min_sequence_query = "SELECT MIN(sequence_val) AS min_value FROM user_identity WHERE user_code = 43 AND active = 1";
$result = $conn->query($min_sequence_query)->fetch();
$min_value = $result['min_value'];
echo $min_value;
/*
if ($result-> num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo $row;
      }


}
else{
    echo 'tt';
}
*/
?>