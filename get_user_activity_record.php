

<?php

  session_start();

  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
                require("connect_db.php");
                $user_code = $_SESSION['user_code'];
                $activity_code = $_POST['activity_code'];

              
                $query = "SELECT * FROM user_activity WHERE user_code = '$user_code' AND activity_code = '$activity_code'";

                $stmt = $conn->prepare($query);
                $stmt->execute();

                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $jsonResult = json_encode($row);
                echo $jsonResult;



          }

    catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
    }

}


?>
