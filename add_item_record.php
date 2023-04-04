<?php

// 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


  try {

    require("connect_db.php");

                $user_code = $_SESSION['user_code'];

                $identity_code = $_POST['curr_identity_code'];
                $item_code = $_POST['curr_item_code'];
                $record_title = $_POST['record_title'];
                $record_cont = $_POST['record_cont'];

                $public_state = $_POST['public_state'];


                $query = "INSERT INTO user_item (identity_code, item_code, user_code, title, record, public) VALUES ('$identity_code', '$item_code', '$user_code', '$record_title', '$record_cont', $public_state)";

                $stmt = $conn->prepare($query);


                if($stmt->execute()){

                    echo "success";
                }
                else{
                    echo "failure";
                }



  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
