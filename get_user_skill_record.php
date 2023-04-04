

<?php
   require("connect_db.php");
            
  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
              
                $user_code = $_SESSION['user_code'];
                $skill_code = $_POST['skill_code'];

               
                $query = "SELECT * FROM user_skill WHERE user_code = '$user_code' AND skill_code = '$skill_code'";

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
