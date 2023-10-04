<?php



  try {


    require("connect_db.php");

                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];




                $get_sequence = "SELECT sequence_val AS sequence_val FROM user_identity WHERE user_code = $user_code AND identity_code = $identity_code";
                $result = $conn->query($get_sequence)->fetch();
                $sequence_val = $result['sequence_val'];


                
                $updt_query = "UPDATE user_identity SET sequence_val = sequence_val-1  WHERE sequence_val > $sequence_val AND active = 1";
                $updt_stmt = $conn->prepare($updt_query);
                $updt_stmt->execute();
                




                $query = "UPDATE user_identity SET active = 0, sequence_val = 99 WHERE user_code = $user_code AND identity_code = $identity_code";
               
                $stmt = $conn->prepare($query);
                
                if($stmt->execute()){
                    echo "success";
                }
                else{
                    echo "fail";
                }
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>