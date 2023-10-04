
<?php

// 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



// 해당 유저 코드가 user 테이블에 없으면 새로 추가

  try {



                require("connect_db.php");
                
                $user_code = $_POST['user_code'];
                
                $cookie_array = $_POST['identity_cookie'];
                $cookie_array2 = explode(',', $cookie_array);



                $query = "SELECT * FROM user  WHERE user_value = '$user_code' ";

                $stmt = $conn->prepare($query);
                $stmt->execute();
                if($stmt->rowCount() > 0){


                    $queryt = "SELECT user_code FROM user WHERE user_value = $user_code";
                    $stmtt = $conn->prepare($queryt);
                    $stmtt->execute();
                    
                    $row = $stmtt->fetch(PDO::FETCH_ASSOC);

                    

                    $_SESSION['user_code'] = $row['user_code'];



                    echo "user exist";
                    
                }

                else{
                    $query3 = "INSERT INTO user (user_value) VALUES ($user_code)";
                    $stmt3 = $conn->prepare($query3);
                    $stmt3->execute();

                    $queryt = "SELECT user_code FROM user WHERE user_value = $user_code";
                    $stmtt = $conn->prepare($queryt);
                    $stmtt->execute();
                    
                    $row = $stmtt->fetch(PDO::FETCH_ASSOC);
                    
                    $_SESSION['user_code'] = $row['user_code'];

                    

                    
                    for ($i = 0; $i < count($cookie_array2); $i++) {
                        $cookie_identity = $cookie_array2[$i];
                        $cookie_identity_int = (int)$cookie_identity;


                        if($i < 3){
                        $query4 = "INSERT INTO user_identity (identity_code, user_code) VALUES ($cookie_identity_int, $row[user_code])";
                        $stmt4 = $conn->prepare($query4);
                        $stmt4->execute();
                        }
                        else{
                        $query5 = "INSERT INTO user_identity (identity_code, user_code, active) VALUES ($cookie_identity_int, $row[user_code], 0)";
                        $stmt5 = $conn->prepare($query5);
                        $stmt5->execute();

                        }





                    }

                    
                    
                     echo "not exist";




                }
                


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>