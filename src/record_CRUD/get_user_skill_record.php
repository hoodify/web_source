

<?php

/*////////////////////////////////////////////////////

parameter : skill_code   

유저의 해당 skill 기록 불러오기

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
          $skill_code = $_POST['skill_code'];
          
          $query = "SELECT * FROM user_skill WHERE user_code = '$user_code' AND skill_code = :skill_code";

          $stmt = $conn->prepare($query);
          $stmt->bindParam(':skill_code',$skill_code);
          

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
