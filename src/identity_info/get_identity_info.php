<?php

/*////////////////////////////////////////////////////

모든 정보

////////////////////////////////////////////////////*/

  try {

        // DB 접속 
        require("../../connect_db.php");

        // 넘겨받는 parameter, 정체성 코드
        $identity_code = $_POST['identity_code'];
        $user_code = $_SESSION['user_code'];



        // 해당 정체성과 관련된 모든 키워드 받기
        $keyword_qry = "SELECT * FROM keyword INNER JOIN identity_keyword ON keyword.keyword_code = identity_keyword.keyword_code WHERE identity_keyword.identity_code = :identity_code";
                
        $keyword_stmt = $conn->prepare($keyword_qry);
        $keyword_stmt->bindParam(':identity_code',$identity_code);
        $keyword_stmt->execute();
        $keyword_row = $keyword_stmt->fetchAll(PDO::FETCH_ASSOC);



        // 해당 정체성의 모든 activity 불러오기
       // $activity_qry = "SELECT * FROM activity INNER JOIN identity ON activity.identity_code = identity.identity_code INNER JOIN user_activity_relation ON activity.activity_code = user_activity_relation.activity_code WHERE identity.identity_code = :identity_code AND user_activity_relation.user_code = $user_code ORDER BY user_activity_relation.sequence_val";
        $activity_qry = "SELECT * FROM user_activity_relation INNER JOIN activity ON user_activity_relation.activity_code = activity.activity_code INNER JOIN identity ON activity.identity_code = identity.identity_code WHERE activity.identity_code = :identity_code AND user_activity_relation.user_code = $user_code ORDER BY user_activity_relation.sequence_val";


        $activity_stmt = $conn->prepare($activity_qry);
        $activity_stmt->bindParam(':identity_code',$identity_code);
        $activity_stmt->execute();
        $activity_row = $activity_stmt->fetchAll(PDO::FETCH_ASSOC);


        // 해당 정체성의 모든 item 불러오기
        $item_qry = "SELECT * FROM item INNER JOIN identity ON item.identity_code = identity.identity_code WHERE item.identity_code = :identity_code";
                
        $item_stmt = $conn->prepare($item_qry);
        $item_stmt->bindParam(':identity_code',$identity_code);
        $item_stmt->execute();
        $item_row = $item_stmt->fetchAll(PDO::FETCH_ASSOC);


        // 해당 정체성의 모든 skill 불러오기
        $skill_qry = "SELECT * FROM skill  WHERE identity_code = :identity_code";
                  

        $skill_stmt = $conn->prepare($skill_qry);
        $skill_stmt->bindParam(':identity_code',$identity_code);
        $skill_stmt->execute();
        $skill_row = $skill_stmt->fetchAll(PDO::FETCH_ASSOC);



        // 해당 정체성의 모든 caution 불러오기
        $defect_qry = "SELECT * FROM caution  WHERE identity_code = :identity_code ";

        $defect_stmt = $conn->prepare($defect_qry);
        $defect_stmt->bindParam(':identity_code',$identity_code);
        $defect_stmt->execute();
        $defect_row = $defect_stmt->fetchAll(PDO::FETCH_ASSOC);
  
      
    
       $mergeArray = array(0=>$keyword_row, 1=>$activity_row, 2=>$item_row,3=>$skill_row, 4=>$defect_row);
        

        
        $jsonResult = json_encode($mergeArray);
        echo $jsonResult;



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
