

<?php
   require("connect_db.php");
            
  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
              
                $user_code = $_SESSION['user_code'];
                $item_code = $_POST['item_code'];

               
                $query = "SELECT * FROM user_item WHERE user_code = '$user_code' AND item_code = '$item_code'";

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
