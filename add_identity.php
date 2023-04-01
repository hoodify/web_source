<?php


 
  try {


                
              require("connect_db.php");

                if(isset($_SESSION['user_code'])){
                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];

                $query = "INSERT INTO user_identity (identity_code, user_code) VALUES ('$identity_code', '$user_code')";

                $stmt = $conn->prepare($query);
                
                if($stmt->execute()){

                      echo "success";
                  }
                  else{
                      echo "failure";
                  }

                }
                
                else{

                  echo "no user";

                }


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>