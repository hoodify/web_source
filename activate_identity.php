<?php



  try {


                
                 require("connect_db.php");

                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];


                $max_sequence_query = "SELECT MAX(sequence_val) AS max_value FROM user_identity WHERE user_code = $user_code AND active = 1";
                $result = $conn->query($max_sequence_query)->fetch();
                $max_value = $result['max_value'];

                $active_count_query = "SELECT * FROM user_identity  WHERE user_code = '$user_code' AND active = 1 ";
                $stmt3 = $conn->prepare($active_count_query);
                $stmt3->execute();


                if($stmt3->rowCount() == 3){
                  echo "full";
                }
                else{
                  $sequence_val = $max_value+1;



                  $query = "UPDATE user_identity SET active = 1, sequence_val = $sequence_val WHERE user_code = $user_code AND identity_code = $identity_code";
                
                  $stmt = $conn->prepare($query);
                  
                  if($stmt->execute()){
                      echo "success";
                  }
                  else{
                      echo "fail";
                  }
                

              }




  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>