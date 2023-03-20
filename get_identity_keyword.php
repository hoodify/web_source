<?php


  session_start();

  try {


                
                $dbName = "hoodify";
                $identity_code = $_POST['identity_code'];

                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "SELECT * FROM keyword INNER JOIN identity_keyword ON keyword.keyword_code = identity_keyword.keyword_code WHERE identity_keyword.identity_code = $identity_code";
                $stmt = $conn->prepare($query);
                
                if($stmt->execute()){

                  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  $jsonResult = json_encode($row);
                  echo $jsonResult;

                }
                else{
                    echo "fail";
                }
                



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>