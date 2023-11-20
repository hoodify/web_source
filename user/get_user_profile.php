

<?php

require("../connect_db.php");
          
  if(!isset($_SESSION['user_code'])){
    echo json_encode("nothing");
  }
  else{
    try {
              
                $user_code = $_SESSION['user_code'];

            
                $query = "SELECT * FROM user WHERE user_code = '$user_code'";

                $stmt = $conn->prepare($query);

                $get_identities_query = "SELECT identity.identity_name FROM user_identity INNER JOIN identity ON user_identity.identity_code = identity.identity_code WHERE user_identity.user_code = '$user_code' AND user_identity.active = 1";  
               
                $get_identities_stmt = $conn->prepare($get_identities_query);
                

            
                

                if($stmt->execute() AND $get_identities_stmt->execute()){

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  $user_identities = $get_identities_stmt->fetchAll(PDO::FETCH_ASSOC);

                  $total_identities ="";
                  for ($i = 0; $i < count($user_identities); $i++) {
                    $identity_name = $user_identities[$i]['identity_name'];
                    $total_identities = $total_identities.$identity_name." / ";
                    
                  }



                  $mergeArray = array(0=>$row, 1=>$total_identities);

                  $jsonResult = json_encode($mergeArray);



                  echo $jsonResult;


                }
                else{
                  json_encode("fail");
                }



          }

    catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
    }

}


?>
