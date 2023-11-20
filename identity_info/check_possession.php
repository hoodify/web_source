<?php

// 넘겨받은 정체성에 해당하는 콘텐츠 리스트 요청 처리


  try {

    require("../connect_db.php");
                if(isset($_SESSION['user_code'])){
                $user_code = $_SESSION['user_code'];
                $identity_code = $_POST['identity_code'];



                $query = "SELECT * FROM user_identity WHERE identity_code = '$identity_code' AND user_code = '$user_code'";

                $stmt = $conn->prepare($query);
                $stmt->execute(); 

                  if($stmt->rowCount() > 0){

                    echo "possession";

                  }
                  else{

                    echo "no possession";
                  }


                }
                else{

                  echo "no user";

                }


  }

  catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
  }


?>
