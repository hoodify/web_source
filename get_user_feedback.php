

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


    session_start();

    try {

                  $dbName = "hoodify";
                  $tblName = "testTBL";
                  $user_feedback = $_POST['feedback_cont'];



                  $conn = new PDO("mysql:host=127.0.0.1;dbname=${dbName}", "root", "050638");
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $query = "INSERT INTO feedback (feedback_desc) VALUES ('$user_feedback')";

                  $stmt = $conn->prepare($query);

                  if($stmt->execute())echo "success";
                  else echo "failure";





    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
