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

/*
<div class = "public_record_post" style= "flex-direction: column;  border: 3px solid black; border-radius: 12px; align-items: center;">
    <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    

            <div style="display:flex; margin-top: 20px; width:100%;">
                <img class = "record_post_activity_img">
                <h3 class = "record_post_activity_title"></h3>

            </div>
            <h4 class = "public_record_title"> </h4>
            <h4 class = "public_record_cont"> </h4>
                <p class = "public_record_nickname"></p>

            <div></div>
            

    

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
    </div>




*/
?>