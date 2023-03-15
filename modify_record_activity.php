<?php


//  유저의 특정 콘텐츠 기록을 수정하는 요청 처리



  session_start();

  try {


                
                $dbName = "hoodify";



                $user_code = $_SESSION['user_code'];

                $record_code = $_POST['record_code'];
                $record_title = $_POST['record_title'];
                $record_cont = $_POST['record_cont'];


                $conn = new PDO("mysql:host=127.0.0.1;dbname=$dbName", "root", "050638");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = "UPDATE user_activity SET title = '$record_title', record = '$record_cont' WHERE user_activity_code = $record_code AND user_code = $user_code";
               
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