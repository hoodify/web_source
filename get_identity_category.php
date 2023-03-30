<?php



  try {

                require("connect_db.php");
                
                $category_text = $_POST['category_text'];

                

                $query = "SELECT * FROM identity INNER JOIN identity_category ON identity.identity_code = identity_category.identity_code INNER JOIN category ON identity_category.category_code = category.category_code WHERE category_name ='$category_text'";
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