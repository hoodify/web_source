<?php



/*////////////////////////////////////////////////////

parameter : activity_code   

유저의 해당 activity 기록 불러오기

////////////////////////////////////////////////////*/



  //DB 연결
  require("../../connect_db.php");


  // 유저 session 정보 있는지 확인
  if(!isset($_SESSION['user_code'])){
      echo json_encode("nothing");
  }
  else{

    try {
                
          // 유저 session 정보 받기
          $user_code = $_SESSION['user_code'];

          // 넘겨받는 parameter
          $activity_code = $_POST['activity_code'];

        
          $query = "SELECT * FROM user_activity WHERE user_code = '$user_code' AND activity_code = :activity_code ORDER BY user_activity_code DESC";
          
          $stmt->bindParam(':activity_code',$activity_code);
          $stmt = $conn->prepare($query);
          

            if($stmt->execute()){

              $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
              $jsonResult = json_encode($row);
              echo $jsonResult;

            }
            else{
              echo json_encode("fail");
            }

                
          }

    catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
    }

}


?>
