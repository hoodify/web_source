

  <?php

  // 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리



    try {

                 
      
                  require("connect_db.php");
                  $user_feedback = $_POST['feedback_cont'];



                 
                  $query = "INSERT INTO feedback (feedback_desc) VALUES ('$user_feedback')";

                  $stmt = $conn->prepare($query);

                  if($stmt->execute())echo "success";
                  else echo "failure";





    }

    catch (PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
    }


?>
