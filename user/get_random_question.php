

<?php

// 유저가 가진 activity 중 임의의 activity_category에 해당하는 값들 반환



  try {

            require("../connect_db.php");

            $user_code = $_SESSION['user_code'];

      
            $query = "SELECT * FROM activity INNER JOIN identity ON activity.identity_code = identity.identity_code INNER JOIN user_identity ON user_identity.identity_code = identity.identity_code 
                                            INNER JOIN activity_category_relation ON activity_category_relation.activity_code = activity.activity_code 
                                            INNER JOIN activity_category ON activity_category_relation.activity_category_code = activity_category.category_code
                                            
                                            WHERE user_identity.user_code = $user_code";



            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);


            $category_code_array = [];

            // 유저의 보유 activity의 activity_category 뽑기
            foreach($row as $key){

              array_push($category_code_array, $key['category_code']);

            }


            // 그 중 임의 activity_category 하나 뽑기
            $ran_category_selected = array_rand($category_code_array);
            $ran_category = $category_code_array[$ran_category_selected];


            // 뽑은 activity_category에 해당하는 activity들로 추리기
            $filter_result = array_values(array_filter( $row , function($val) use ($ran_category){
              return ($val['category_code'] == $ran_category);
            }));


            $jsonResult = json_encode($filter_result);
            echo $jsonResult;



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
