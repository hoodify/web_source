<?php


  session_start();

  try {


                
                $dbName = "hoodify";

                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];

                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "UPDATE user_identity SET active = 1 WHERE user_code = $user_code AND identity_code = $identity_code";
               
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