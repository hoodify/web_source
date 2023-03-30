<?php


  try {


                
                require("connect_db.php");

                $search_text = $_POST['search_text'];

           
                $query = "SELECT * FROM identity WHERE identity_name LIKE '%$search_text%'";
               

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