

<?php
require("connect_db.php");


  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
                
                $user_code = $_SESSION['user_code'];
                $activity_code = $_POST['activity_code'];

              
                $query = "SELECT * FROM user_activity WHERE user_code = '$user_code' AND activity_code = '$activity_code' ORDER BY user_activity_code DESC";

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
