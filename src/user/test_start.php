<?php
session_start(); 
// 테스트 유저로 시작하기


  try {



                require("../../connect_db.php");
                
                
           
                $query = "INSERT INTO user (nickname) VALUES ('테스트유저') ";
                $stmt = $conn->prepare($query);
               // $stmt3 -> bindParam(':user_code',$user_code);

                if($stmt->execute()){
                    $id = $conn->lastInsertId();
                    $query2 = "SELECT * FROM user WHERE user_code = $id";
                    $stmt2 = $conn->prepare($query2);
                    $stmt2->execute();
                    $row = $stmt2 -> fetch();

                    
                    $_SESSION['user_code'] = $row['user_code'];


                    echo json_encode($row);
                    
                }
                else{
                    echo json_encode("fail");
                }
                

                
                


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>