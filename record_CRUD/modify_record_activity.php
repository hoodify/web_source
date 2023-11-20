<?php


/*////////////////////////////////////////////////////

parameter : record_code   
            record_title
            recort_cont
            public_state


유저의 activity 게시물 수정하기

////////////////////////////////////////////////////*/


  try {

        // DB 연결
        require("../connect_db.php");

        // 유저 session 정보 받기
        $user_code = $_SESSION['user_code'];

        // 넘겨받는 parameter들
        $record_code = $_POST['record_code'];
        $record_title = $_POST['record_title'];
        $record_cont = $_POST['record_cont'];
        $public_state = $_POST['public_state'];

        
        // parameter 값으로 업데이트
        $query = "UPDATE user_activity SET title = '$record_title', record = '$record_cont', public = $public_state WHERE user_activity_code = $record_code AND user_code = $user_code";
        

        $stmt = $conn->prepare($query);
        
        if($stmt->execute()){
          
          echo 'success';
        }
        else{

          echo 'fail';

        }
        

  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }



?>