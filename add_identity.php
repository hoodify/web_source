<?php


  session_start();

  try {


                
                $dbName = "hoodify";

                if(isset($_SESSION['user_code'])){
                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];

                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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