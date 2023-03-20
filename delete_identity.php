<?php

  session_start();

  try {


                $dbName = "test";
                  
                $dbName = "hoodify";
                $user_code = $_SESSION['user_code'];

                $identity_code = $_POST['identity_code'];



                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "DELETE FROM user_identity WHERE identity_code = $identity_code AND user_code = $user_code;";
            
                $query2 = "DELETE FROM user_activity WHERE identity_code = $identity_code AND user_code = $user_code";
                
                $query3 = "DELETE FROM user_item WHERE identity_code = $identity_code AND user_code = $user_code";

                
             

                $stmt = $conn->prepare($query);
                $stmt2 = $conn->prepare($query2);
                $stmt3 = $conn->prepare($query3);

                if($stmt->execute() AND $stmt2->execute() AND $stmt3->execute()){
                
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