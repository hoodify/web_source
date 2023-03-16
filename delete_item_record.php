<?php

  session_start();

  try {


                $dbName = "test";
                  
                $dbName = "hoodify";
                $user_code = $_SESSION['user_code'];

                $record_code = $_POST['record_code'];



                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "DELETE FROM user_item WHERE user_item_code = $record_code AND user_code = $user_code";

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