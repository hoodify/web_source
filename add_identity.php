<?php



  try {


                
              require("connect_db.php");

                if(isset($_SESSION['user_code'])){
                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];
                
                $sequence_val;
                $active_val;


                $max_sequence_query = "SELECT MAX(sequence_val) AS max_value FROM user_identity WHERE user_code = $user_code AND active = 1";
                $result = $conn->query($max_sequence_query)->fetch();
                $max_value = $result['max_value'];



                
                

                if($max_value<3){
                  $sequence_val = $max_value+1;
                  $active_val = 1;

                 

                }
                else{
                  $sequence_val = 99;
                  $active_val = 0;
                }

                $query = "INSERT INTO user_identity (identity_code, user_code, active, sequence_val) VALUES ('$identity_code', '$user_code', $active_val, $sequence_val )";

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