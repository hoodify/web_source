

<html>
<head>
    <meta charset="euc-kr">
    <title>후디파이. 세상의 모든 정체성</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
    <link rel="icon" href="/hoodify/img/identity/hooodify_mini.png">


</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
*{ padding: 0; margin: 0; }
@font-face {
    font-family: 'TmoneyRoundWindRegular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindRegular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'TmoneyRoundWindExtraBold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-07@1.0/TmoneyRoundWindExtraBold.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

body{
    font-family: TmoneyRoundWindRegular;
    line-height: 30px;
}



.pop-layer .pop-container {
  width: 100%;
  height: 100%;
}


.pop-layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 58%;
  height: 80%;
  background-color: #fff;
  border: 3px solid black;
  z-index: 1000;
  border-radius: 12px;
}

.pop-layer p.ctxt {
  color: #666;
  line-height: 25px;
}

.add_record_layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 35%;
  height: 85%;
  background-color: #fff;
  border: 3px solid black;
  z-index: 1000;
  border-radius: 12px;
}

.modify_record_layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 35%;
  height: 85%;
  background-color: #fff;
  border: 3px solid black;
  z-index: 1008;
  border-radius: 12px;
  
  justify-content: center;
}



.leftCont{

flex:7;
margin-right: 20px;
border-right: 1px solid black;

}
.rightCont{

flex:3;
margin-top:15px;


}

.Dhorizontal{
 display: flex;
 width: 96%;
 height: 92%;
 margin: 2% 2% 0 2%;
 justify-content: center;

}

.identity_img_container{
  width: 100px;
  height: 100px;
}
.pop-conts{

height: 20%;
margin-right: 15px;


}

.bar-menu {
  position: relative;
  cursor: pointer;
  overflow: hidden;
}

#barMenu1 {
  position: relative;
  top: 10px;
  width: 100%;
}

.bar-menu ul.menu-body {
  position: relative;
  list-style: none;
  padding-inline-start: 10px;
}

.bar-menu ul.menu-body li {
  height: 20px;
  padding: 10px;
  width: 13%;
  margin-left: 10px;
  float: left;
  line-height: 20px;
  vertical-align: middle;
  text-align:center;
  border: 2px solid #93b0bc;
  display: inline-block;
  border-radius: 10px;
}

.bar-menu ul.menu-body li:hover {
  background-color: #1f326a;
  color: #fff;
}

.bar-menu ul.menu-body li.active {
  background-color: #1f326a;
  color: #fff;
}


.Clist{

display: block;
height: 75%;
margin: 3%;
border: 1px solid gray;

}



.Ilist{
height: 75%;
margin: 3%;
display: none;
border: 1px solid gray;
vertical-align: middle;
flex-direction: column;

}




.Slist{
height: 75%;
margin: 3%;
display: none;
border: 1px solid gray;
}

.Dlist{
height: 75%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
}


.setting_cont{
height: 75%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
}

.btn-r {
  width: 93%;
  height: 5%;
  border-top: 1px solid #304a8a;
  text-align: right;
  position: absolute;
  bottom: 10px;    
  display: flex;
  flex-direction: row-reverse;
}


.category_btn{
    
    border-radius: 12px;
    margin-top:12px;
}

.generalBtn {
  height: 25px;
  padding: 0 14px 0;
  border: 1px solid #304a8a;
  background-color: #3f5a9d;
  font-size: 13px;
  color: #fff;
  line-height: 25px;
  margin-left:10px;
  text-decoration: none;
  cursor:pointer;
}
.generalBtn:hover {
  border: 1px solid #091940;
  background-color: #1f326a;
  color: #fff;
}

.locked {
  display: none;
  height: 25px;
  padding: 0 14px 0;
  border: 1px solid gray;
  background-color: gray;
  font-size: 13px;
  color: #fff;
  line-height: 25px;
  text-decoration: none;
  margin-left:25px;
}

.itemActive{
  background-color: #bad8f2;
}

.activity_post{
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 35%;
  height: 85%;  
  z-index: 1002;
  background-color: #fff;
  border: 3px solid #3571B5;
}

.activity_post_cont{
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 50px;
  height: 80%;
}

.activity_post_title{
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 25px;


}

.activity_title{
  margin-left: 20px;
  display: inline-block;
}

.activity_desc{
  display: inline-block;
  margin-left: 20px;
}

.add_check{
             position: fixed;
             display: none;
             width: 500px;
             height: 120px;
             z-index: 1003;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             justify-content: center;
 }

 .delete_check{
             position: fixed;
             display: none;
             width: 500px;
             height: 120px;
             z-index: 1003;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             justify-content: center;
            
 }
 .delete_check_identity{
             position: fixed;
             display: none;
             width: 500px;
             height: 120px;
             z-index: 1005;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             
             justify-content: center;
             
 }

 .add_identity_check{
             position: fixed;
             display: none;
             width: 500px;
             height: 120px;
             z-index: 1010;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             
             justify-content: center;
 }

 .identity_storage{
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        width: 40%;
        height: 80%;
        z-index: 1002;
        background-color: white;
        border-radius:10px;
        border: 3px solid black;
        justify-content: center;
}

.profile_layer{
        display: none;
        justify-content: center;
        position: fixed;
        top: 50%;
        left: 50%;
        width: 35%;
        height: 50%;
        z-index: 1002;
        background-color: white;
        border-radius:10px;
        border: 3px solid black;
}


.inactive_identity_list::-webkit-scrollbar {
               	display:none
           }
.search_result::-webkit-scrollbar {
    display:none
}

.identity_desc_container::-webkit-scrollbar {
    display:none
}


.search_layer {
             display: none;
             justify-content: center;
             position: fixed;
             top: 50%;
             left: 50%;
             width: 40%;
             height: 85%;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1009;
             border-radius: 8px;

           }

           
.search_data_container::-webkit-scrollbar {
    display:none
}


.login_account{
             width: 50%;
             height: 30%;
             z-index: 1010;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;

           }


</style>


<body>
    <header style="display: flex; align-items: center;  width: 100%; height: 30px; background-color: rgba( 0, 0, 0, 0.85 );  z-index: 1010;    position: relative;">
      <div style="display: flex; align-items: center;">
          <!-- <img src ="/hoodify/img/hoodify_CRM.png" style="margin-left:25px; width:50px; height:50px; border-radius:40px; "> -->
          <p style="color: white; margin-left:35px; letter-spacing:3px;">   H O O D I F Y </p>


      </div>
    </header>
        


        <div class = 'top_menu_container' style='display:none; justify-content: space-between;align-items: center; background-color: rgba( 47, 58, 78, 0.85); height:5%; padding:20px;'>
         <div class='profile' style='display: flex; align-items: center;' >
            <img src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px; border-radius:15px;"> 
            <p class = 'nickname' style='cursor:pointer; margin-left:20px; color:whitesmoke'> 프로필 </p>
        </div>
        <div id='top_menu' style='display:flex;'>
            <p class = 'identity_storage_btn' style='cursor:pointer; margin-right:20px; color:whitesmoke'>창고 </p>
            
            <p class = 'open_search_layer' style='cursor:pointer; margin-right:20px; color:whitesmoke'>검색 </p>
            
            <p class = 'logout_btn' style='cursor:pointer; margin-right:20px; color:whitesmoke'> 로그아웃 </p>
        </div>
        </div>



        <div class = 'public_main' style="align-items: center;  justify-content: center;width: 100%;  background-color: rgba( 47, 58, 78, 0.85); display:none; height: 100%; bottom: 30px;  position: absolute;">

                <div class = 'login_account' style="padding: 20px; width: 20%; display:flex; justify-content: center; align-items: center; flex-direction: column;">
                <div >
                <img class = "login_with_kakao" style="cursor: pointer; margin-top: 200px; width:100%; height:50px;" src="/hoodify/img/login/kakao_login_medium_wide.png">
                </div>
               

            </div>

        </div>

        <div style="width:100%;"> 
            <div id='main_list' style='height:70%; margin:20px;     flex-direction: column;'>
                

            </div>
        </div>
    
  
    <div id="layer1" class="pop-layer">
      <div class="pop-container" style="display: flex;    flex-direction: column;">
      <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>

        <div class = "Dhorizontal">
          <div class = "leftCont" style="margin-top: 10px; margin-bottom: 2%; display:flex;     flex-direction: column;">
          <div style="height:20%">
                <div style="display:flex; height:100%;">
                    <img class = "identity_img_container"></img>


                    <div class="pop-conts" id = "cont" style="display:flex; flex-direction: column; width: 75%; margin-left:10px; height: inherit;">

                    <h4 class = "identity_title_container"></h4>
                    <p class = "identity_desc_container" style="overflow-y: scroll; font-size:14px;"></p>

                    </div>
                </div>

                    <div class = keyword_container style="text-align:right; margin-right:15px; color:gray; font-size:12px; display: flex; justify-content: flex-end;">  </div>
            </div>
                    
           <div style="display:flex;  flex-direction: column; height: 80%; justify-content: flex-end;">
            <div class="bar-menu" id="barMenu1">
                <ul class="menu-body">
                  <li class ="mli activity active">Activity</li>
                  <li class ="mli item">Item</li>
                  <li class ="mli skill">Skill</li>
                  <li class ="mli defect">Defect</li>
                  <li class = "mli setting">setting</li>
                </ul>
              </div>


            <div class = "LBC Clist activity">
            </div>

            <div class = "LBC Ilist item">

             <div class = "putItem" style="display:flex; flex-direction: column;"></div>

               

              <div class = "itemEA">

                <div class="addItemBtn"> + </div>


              </div>
            </div>


            <div class = "LBC Slist skill">
              <div class = "putSkill" style="display:flex; flex-direction: column;"></div>

            </div>
            <div class = "LBC Dlist defect">
              <div class = "putDefect" style="display:flex; flex-direction: column;"></div>

            </div>


            <div class = "LBC setting_cont setting">
                <div class="move_to_storage " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 창고로  </div>

                <div class="delete_identity " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 삭제하기   </div>

            </div>


            </div>
          </div>

         
          <div class = "rightCont">
            <div class = "RC RCactivity">
                <div style="display: flex; align-items: center;">
                    <img class = "mylistIMG" style="width:70px; height:70px;  margin-right:10px;">
                    <h4 class = "mylistT"> </h4>
                </div>
              <p class = "mylistC" style='margin-bottom:15px; font-size:14px;'> </p>
              <hr/>
              <ul class="mylist"> </ul>
              <div id = 'addbtn_container'></div>
            </div>

            <div class = "RC RCitem">
             <div style="display: flex; align-items: center;">
                <img class = "mylistIMG_item" style="width:70px; height:70px;  margin-right:10px;">
                <h4 class = "mylistT_item"> </h4>
            </div>

              <p class = "mylistC_item" style='margin-bottom:15px; font-size:14px;'> </p>
              <hr/>
              <ul class="mylist_item"> </ul>
              <div id = 'addbtn_container_item'></div>

            </div>
            <div class = "RC RCskill">
            <div style="display: flex; align-items: center;">
                    <img class = "mylistIMG_skill" style="width:70px; height:70px;  margin-right:10px;">
                    <h4 class = "mylistT_skill"> </h4>
            </div>
              <p class = "mylistC_skill" style='margin-bottom:15px;font-size:14px;'> </p>
              <hr/>
              <ul class="mylist_skill"> </ul>
              <div id = 'addbtn_container_skill'></div>



            </div>

            <div class = "RC RCdefect">
            <div style="display: flex; align-items: center;">
                <img class = "mylistIMG_defect" style="width:70px; height:70px;  margin-right:10px;">
                <h4 class = "mylistT_defect"> </h4>
                </div>
              <p class = "mylistC_defect" style='margin-bottom:15px; font-size:14px;'> </p>
              <hr/>
              <ul class="mylist_defect"> </ul>
              <div id = 'addbtn_container_defect'></div>



            </div>

          </div>

          <div class="btn-r">
          <div class="btn_layerClose generalBtn">닫기</div>
        </div>

        </div>

        

      </div>
    </div>


    <div id="layer2" class="add_record_layer state_activity">
      <div class="pop-container" style="width:100%; display: flex;  flex-direction: column;  align-items: center;">
    
            <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>
            <div style="display:flex;  margin-top:15px; height: 20%; width: 100%;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; width: 120px; height: 120px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc" style="margin:12px;"> activity desc </p>
                </div>

            </div>

           <div style="width:95%; height:4%; display: flex; flex-direction: row-reverse; margin-right: 40px;"> 
            
                
                <input type="checkbox"style="margin-left:8px;" class="public_check" name="public_check" checked>
                <label for="public_check" > 공개 </label>
           

            </div>

            <div style="display: flex; flex-direction: column; height:65%;  width: 95%;">
                <textarea class="record_title" placeholder="제목을 입력하세요" style="font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px;;"></textarea>    
                <textarea class="record_cont" placeholder="내용을 입력하세요" style="font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px; height:80%; padding:8px;"></textarea>

            </div>


           <div class="btn-r">
                <div class="btn_layerClose generalBtn">닫기</div>
                <div class="btn_add_record generalBtn">추가</div>
            
           </div>

       </div>
     </div>



    <div class = "activity_post state_activity" style= "flex-direction: column;  border: 3px solid black; border-radius: 12px; align-items: center;">
    <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    

            <div style="display:flex; margin-top: 20px; width:100%;  ">
                <img class = "popup_activity_img2" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:150px; width:150px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title2" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc2" style="margin:12px;"> activity desc </p>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; width:100%;  height:75%" >
                <h4 class="popup_activity_record_title" style="margin:25px;"></h4>  

                <p class="popup_activity_record_cont" style="margin:25px;">tt</p>
                

            </div>

    

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
      <div class="btn_modify generalBtn">수정</div>
      <div class="btn_delete generalBtn">삭제</div>
    </div>

  </div>


  <div id="layer3" class="modify_record_layer state_activity">
  <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    
      <div class="pop-container" style="width:100%; margin-top:20px;" >

            <div style="display:flex;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:150px; width:150px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc" style="margin:12px;"> activity desc </p>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; height:70%">
                <textarea class="record_title_modify" placeholder="제목을 입력하세요" style="font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px;;"></textarea>    
                <textarea class="record_cont_modify" placeholder="내용을 입력하세요" style="font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px; height:65%; padding:8px;"></textarea>

            </div>


           <div class="btn-r">
           <div class="btn_layerClose generalBtn">닫기</div>
           <div class="btn_modify_com generalBtn">수정</div>
            
           </div>

       </div>
     </div>






  <div class="add_check">
         <div style="margin-top:5%; margin-left:5%; width:100%;">  추가하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_addCom">확인</div>
        </div>
    </div>

    <div class="delete_check">
         <div style="margin-top:5%; margin-left:5%; width:100%;">  삭제하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_deleteCom">확인</div>
        </div>
    </div>

    <div class="delete_check_identity">
         <div style="margin-top:5%; margin-left:5%; width: 100%;"> 모든 관련 기록들이 삭제됩니다. 삭제하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_deleteCom_identity">확인</div>
        </div>
    </div>

    <div class="add_identity_check">
         <div style="margin-top:5%; margin-left:5%; width:100%;">  추가 하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="add_identity_checkCom">확인</div>
        </div>
    </div>


    <div class = "identity_storage">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
      <div class = "inactive_identity_list_container" style="width: 100%; padding:25px;">
        <div style="width: 100%; height: 10%; display:flex; align-items: center; margin-bottom:25px;  border-Bottom: 1px solid black; ">
            <img src="/hoodify/img/identity/hooodify_mini.png" style="cursor:pointer; width:40px; height:40px; margin-left:10px; border: 2px solid black; border-radius: 12px;">
            <p style="font-family:TmoneyRoundWindExtraBold; font-size:20px; margin-left:25px;"> 창 고 </p>
        </div>

        <div class = "inactive_identity_list" style ="height: 80%; overflow-y: scroll;"> </div>
      </div>

      <div class="btn-r">
        <div class="btn_layerClose generalBtn">닫기</div>
        <div class="btn_activate generalBtn">활성화</div>
      </div>
    </div>


    <div class = "profile_layer">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
      <div class = "profile_layer_container" style="width: 100%; padding:25px;">
        <div style="width: 100%; height: 20%; display:flex; margin-top:15px; margin-bottom:15px; ">
            <img class = "profile_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:100px; height:100px; border: 2px solid black; border-radius: 12px;">
            <p class = "profile_nickname" style="font-family:TmoneyRoundWindExtraBold; font-size:20px; margin-left:25px; "> 프로필 이름 </p>
        </div>

        <div class = "profile_details" style ="display:flex; height: 70%;  flex-direction: column;">
            <h3 style="margin-top:15px; margin-left:15px;">소개</h3>
           <div class ="profile_introduction"style="margin:15px; height:25%; padding:20px; border: 2px solid black; border-radius: 12px;"> </div>
        </div>
        <div class="btn-r">
        <div class="btn_layerClose generalBtn">닫기</div>
      </div>
      </div>

      
    </div>



    <div class = "search_layer">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    
        
      <div class = "search_layer_container" style="flex-direction: column; display: flex; align-items: center; height: inherit; width: 90%; padding:25px; ">
        
      <div style="width: 100%; display: flex; flex-direction: row; align-items: center; margin-top: 25px;">
            <div class="search_text" tabindex="0" contenteditable="true" style="overflow-y: auto; width:100%; padding:5px; font-family: TmoneyRoundWindRegular; font-size:16px; border: 1px solid gray; border-radius: 5px;"></div>
            <img class="search_btn" src="/hoodify/img/identity/hooodify_mini.png" style="cursor:pointer; width:40px; height:40px; margin-left:10px; border: 2px solid black; border-radius: 12px; ">
        </div>
       
 <div class = "category_container" style="width: 100%; display: flex; flex-wrap: wrap; margin-top:10px;">
            <div class = "generalBtn category_btn">가치관</div>
            <div class = "generalBtn category_btn">능력</div>
            <div class = "generalBtn category_btn">상태</div>
            <div class = "generalBtn category_btn">생활</div>
            <div class = "generalBtn category_btn">성격</div>
            <div class = "generalBtn category_btn">성향</div>
            <div class = "generalBtn category_btn">습관</div>
            <div class = "generalBtn category_btn">신체</div>
            <div class = "generalBtn category_btn">예술</div>
            <div class = "generalBtn category_btn">음식</div>
            <div class = "generalBtn category_btn">인간관계</div>
            <div class = "generalBtn category_btn">자기관리</div>
            <div class = "generalBtn category_btn">지성</div>
            <div class = "generalBtn category_btn">직업</div>
            <div class = "generalBtn category_btn">취미</div>
            <div class = "generalBtn category_btn">취향</div>
            <div class = "generalBtn category_btn">태도</div>
        
        </div>
        <div class = "search_result" style = "margin-top : 20px; overflow-y: scroll; float: left;    width: 100%;"> 
    
       
    
    
    </div>

        <div class = "search_result_identity" style = "margin-top : 20px; display:none; flex-direction: column; height: 90%;"> 
            <div style = "display:flex;  flex-direction: row; margin-top:15px; border-Bottom:1px solid black; padding-bottom:10px; border-top:1px solid black; padding-top:10px;">
            <div style = "display:flex; flex-direction: row;">
                <img class = search_identity_img style = 'width:120px; height:120px;'>
                <div style="display: flex; flex-direction: column; margin-left:10px;">
                    <div style="display: flex; flex-direction: row;  align-items: flex-end;">
                        <h3 class = "search_identity_name"></h3>
                        <div class = 'add_identity generalBtn' style ="margin-left:25px; border-radius: 12px;"  > 추가 </div>
                        <div class = 'locked'> 보유중 </div>
                    </div>
                        <p class = "search_identity_desc" style="width:80%; margin-top:15px;"></p>
                        
                </div>
                     <div class = "to_search_list" style="width:70px; height:50px; cursor:pointer; position:absolute; right:0;"> 뒤로</div>
                 </div>
             </div>
             <div class = "search_data_container" style="margin: 15px; overflow-y: scroll;">
                
             <div>
                <p style="font-family: TmoneyRoundWindExtraBold; margin-bottom:15px;"> Activity </p>
                <div class = "search_activity_list"></div>
             </div>
             <div>
                <p style="font-family: TmoneyRoundWindExtraBold; margin-bottom:15px; margin-top:15px;"> Item </p>
                <div class = "search_item_list"></div>
             </div>
             <div>
                <p style="font-family: TmoneyRoundWindExtraBold; margin-bottom:15px; margin-top:15px;"> Skill </p>
                <div class = "search_skill_list"></div>
             </div>
             <div>
                <p style="font-family: TmoneyRoundWindExtraBold; margin-bottom:15px; margin-top:15px;"> Defect </p>
                <div class = "search_defect_list"></div>
             </div>

             </div>

        </div>


        <div class="btn-r">
        <div class="btn_layerClose generalBtn">닫기</div>
      </div>
      </div>

      
    </div>



</body>


<footer style="bottom:0; width: 100%; height: 30px; position : absolute; bottom : 0; background-color: rgba( 0, 0, 0, 0.85 );"></footer>

<script>
    Kakao.init('07f6eafd69281ab56438dbcc4a88c39e');
    $(document).ready(function(){

        
        $.ajax({
            type : "POST",
            url : "/hoodify/check_main_user.php",

            success : function(res){


            if(res == "no user"){

                
                $('.top_menu_container').css({display: 'none',});
                $('#main_list').css({display: 'none',});
                $('.public_main').css({display: 'flex',});
                // 카카오로 시작하기

                $('.login_with_kakao').click(function(){
                    kakaoLogin();
                    })

                    function kakaoLogin() {
                        Kakao.Auth.login({
                        success: function (response) {
                            console.log(response);

                            Kakao.API.request({
                            url: '/v2/user/me',
                            success: function (response) {

                                

                                $.ajax({
                                type : "POST",
                                url : "/hoodify/start_with_kakao.php",
                                data : {
                                        'user_code': response.id,
                                    },
                                success : function(res){
                                
                                                console.log("체크"+res);
                                                $('.login_account').fadeOut('fast');
                                                window.location.href='http://127.0.0.1/hoodify/main.php';
                                                //window.location.href='https://hoodify.cafe24.com/hoodify/main.php';

                                            },
                                            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                alert("통신 실패.")
                                            }
                                            });


                                        },
                                        fail: function (error) {
                                            console.log(error)
                                        },
                                        })

                                    },
                                    fail: function (error) {
                                        console.log(error)
                                    },
                                    })
                                }







            }
            else if(res == "user on"){

                
    var curr_identity_code;

    $('.top_menu_container').css({display: 'flex',});
    $('#main_list').css({display: 'flex',});
    $('.public_main').css({display: 'none',});

$(".RCitem").css({
      display: "none",
    });
$(".RCskill").css({
    display: "none",
});
$(".RCdefect").css({
    display: "none",
});

    $(".mli").click(function(){

      $(".mli").removeClass("active");
      $(this).addClass("active");

      $(".LBC").css({
        display: "none",
      });

      $(".RC").css({
        display: "none",
      });

      if($(this).hasClass("activity")){
        $(".Clist").css({
          display: "block",
        });
        $(".RCactivity").css({
          display: "block",
        });

        $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");
        $('.modify_record_layer').removeClass("state_item state_skill").addClass("state_activity");
        $('.activity_post').removeClass("state_item state_skill").addClass("state_activity");

      }

      else if($(this).hasClass("item")){

        $(".Ilist").css({
          display: "flex",
        });
        $(".RCitem").css({
          display: "block",
        });

        $('.add_record_layer').removeClass("state_activity state_skill").addClass("state_item");
        $('.modify_record_layer').removeClass("state_activity state_skill").addClass("state_item");
        $('.activity_post').removeClass("state_activity state_skill").addClass("state_item");

      }

      else if($(this).hasClass("skill")){
      $(".Slist").css({
          display: "block",
        });
      $(".RCskill").css({
          display: "block",
        });

        $('.add_record_layer').removeClass("state_activity state_item").addClass("state_skill");
        $('.modify_record_layer').removeClass("state_activity state_item").addClass("state_skill");
        $('.activity_post').removeClass("state_activity state_item").addClass("state_skill");


      }
      
      else if($(this).hasClass("defect")){
      $(".Dlist").css({
          display: "block",
        });
      $(".RCdefect").css({
          display: "block",
        });

        $('.add_record_layer').removeClass("state_activity state_item").addClass("state_skill");
        $('.modify_record_layer').removeClass("state_activity state_item").addClass("state_skill");
        $('.activity_post').removeClass("state_activity state_item").addClass("state_skill");


      }


      else if($(this).hasClass("setting")){
      $(".setting_cont").css({
          display: "block",
        });

      }
    })
////////////////////////////////////////////////////////////////////////////////////
///////////// 로그아웃
$('.logout_btn').click(function(){


document.location.href='logout.php';
kakaoLogout();


})

function kakaoLogout() {
if (Kakao.Auth.getAccessToken()) {
  Kakao.API.request({
  //  url: '/v1/user/unlink',
    success: function (response) {
        console.log(response)
    },
    fail: function (error) {
      console.log(error)
    },
  })
  Kakao.Auth.setAccessToken(undefined)
}
}

///////////////////////////////////////////////////////////////////////////////////////
// 카테고리 버튼 클릭 리스너  (검색 레이어)

$('.category_btn').click(function(){
var category_text = $(this).text();
console.log(category_text);

$.ajax({
    type : "POST",
    url : "/hoodify/get_identity_category.php",
    data: { 'category_text' : category_text,},
    dataType : 'json',
    success : function(res){

      console.log(res);

     /// 카테고리에 따른 정체성 목록 불러오기 (각 항목에 대한 클릭 이벤트)
     $('.search_result').empty();

      for (var i = 0; i < res.length; i++) {


        

        var object = res[i];
        var object_name = object.identity_name;

        var list_container = document.createElement("div");

        $(list_container).css({

                width: "500px",
                height: "60px",
                padding: "5px",
                borderBottom: "1px solid #D8D8D8",
                display: 'flex',
                //  alignItems: 'center',
                paddingBottom: '5px',
                alignItems: 'center',
                overflow:'hidden',

                }).hover(function() {
                $(this).css("background-color", "#bad8f2");
                }, function(){
                $(this).css("background-color", "white");
                }).click(((object) => function (e) {

                    // 검색 결과 정체성 처리
                    console.log(object);

                    $('.search_identity_img').attr("src",object.identity_img);
                    $('.search_identity_name').text(object.identity_name);
                    $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                    $('.search_activity_list').empty();
                    $('.search_item_list').empty();
                    $('.search_skill_list').empty();
                    $('.search_defect_list').empty();

                    Global_Var.userInfo.curr_identity_code = object.identity_code;



                    $.ajax({
                        type : "POST",
                        url : "/hoodify/check_possession.php",
                        data : { 'identity_code' : object.identity_code},
                        success : function(res){

                            if(res=='possession'){

                                $('.add_identity').css({ display : 'none',});
                                $('.locked').css({ display : 'block',});

                            }else if(res=='no possession'){

                                $('.add_identity').css({ display : 'block',});
                                $('.locked').css({ display : 'none',});

                            }




                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });
                    


                    $.ajax({
                        type : "POST",
                        url : "/hoodify/get_search_identity_data.php",
                        data : {'identity_code' : object.identity_code},
                        dataType : 'json',
                        success : function(res){

                            // identity의 activity, item, skill, caution 모든 data 가 합쳐진 json 파일 반환 확인
                            console.log(res);
                            
                            var activity_data = res[0];


                            if(activity_data.length === 0){
                      
                                $('.search_activity_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_activity_list');
        
        
                            }

                            else{

                            for (var i = 0; i < activity_data.length; i++) {
                                
                                var activity_object = activity_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_activity_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: activity_object.activity_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: activity_object.activity_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: activity_object.activity_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }

                        }
                            var item_data = res[1];

                            if(item_data.length === 0){
                      
                                $('.search_item_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_item_list');
        
        
                            }
                            else{
                            for (var i = 0; i < item_data.length; i++) {
                                
                                var item_object = item_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_item_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: item_object.item_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: item_object.item_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: item_object.item_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }

                        }
                            var skill_data = res[2];

                            if(skill_data.length === 0){
                      
                                $('.search_skill_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_skill_list');
        
        
                            }
                            else{

                            for (var i = 0; i < skill_data.length; i++) {
                                
                                var skill_object = skill_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_skill_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: skill_object.skill_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: skill_object.skill_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: skill_object.skill_desc,  

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }
                        }

                        
                            var caution_data = res[3];

                            console.log(caution_data.length)
                            if(caution_data.length === 0){
                      
                                $('.search_defect_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_defect_list');
        
        
                            }
                            else{


                            for (var i = 0; i < caution_data.length; i++) {
                                
                                var caution_object = caution_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_defect_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: caution_object.caution_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: caution_object.caution_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: caution_object.caution_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }

                        }


                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });



                    $('.search_identity_img').attr("src",object.identity_img);
                    $('.search_identity_name').text(object.identity_name);
                    $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                    $('.search_result_identity').css("display","flex").hide().fadeIn('fast');
                    
                    $('.search_result').css({ display : 'none',});
                    $('.category_container').css({ display : 'none',});

                })(object)).appendTo(".search_result");

        
                $('<img>',{

                    src: object.identity_img,
                }).css({
                width: "50px",
                height: "50px",
                margin: "5px",
                float: "left",

                }).appendTo(list_container);        

            
                $('<p>', {
                    text: object.identity_name,

                }).css({
                "margin-left": "12px",
                "width": "100%",
                "fontWeight": "bold",
                
                }).appendTo(list_container);



      }


    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});




$('.search_result_identity').css({ display : 'none',});
$('.search_result').css("display","block").hide().fadeIn('fast');


})


////////////////////////////////////////////////////////////////////////////////////
// record 기록 시 최대 글자수 제한

$(document).ready(function() {


    
    $('.record_title').on('keyup', function() {

        if($(this).val().length > 40) {
            $(this).val($(this).val().substring(0, 40));
        }
    });
    $('.record_cont').on('keyup', function() {

        if($(this).val().length > 500) {
            $(this).val($(this).val().substring(0, 500));
        }
        });





    
});
//////////////////////////////////////////////////////////////////////////////////////
///////// 세팅 > 정체성 삭제 버튼


$('.delete_identity').click(function(){
layer_popup($('.delete_check_identity'));
console.log(Global_Var.userInfo.curr_identity_code);
})

$('#btn_deleteCom_identity').click(function(){


$.ajax({
    type : "POST",
    url : "/hoodify/delete_identity.php",
    data : {

        'identity_code': Global_Var.userInfo.curr_identity_code,  
    },
    success : function(res){
        if(res == 'success'){
            
            get_main_list();

            $('.delete_check_identity').fadeOut('fast');
            $('.pop-layer').fadeOut('fast');
            console.log(res);
        }
        else{
            console.log(res);
        }

    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});



});

$('.search_text').on('keydown', function(event) {
//console.log(event.keyCode);
if (event.keyCode == 13) {
    event.preventDefault();
    search_identity();
}

if (event.keyCode == 27) {
    // z-index


}

});
//////////////////////////////////////////////////////////////////////////////////////
///////// 검색

function search_identity(){
$('.search_result_identity').css({ display : 'none',});
$('.search_result').css("display","block").hide().fadeIn('fast');


$('.category_container').css("display","flex").hide().fadeIn('fast');



var search_text = $('.search_text').text();
console.log(search_text);

$.ajax({
    type : "POST",
    url : "/hoodify/get_search_data.php",
    data : {

        'search_text' : search_text,

    },
    dataType : 'json',
    success : function(res){

      console.log(res[0]);
      $('.search_result').empty();

      for (var i = 0; i < res.length; i++) {


        

        var object = res[i];
        var object_name = object.identity_name;

        var list_container = document.createElement("div");

        $(list_container).css({

                width: "500px",
                height: "60px",
                padding: "5px",
                borderBottom: "1px solid #D8D8D8",
                display: 'flex',
                //  alignItems: 'center',
                paddingBottom: '5px',
                alignItems: 'center',
                overflow:'hidden',

                }).hover(function() {
                $(this).css("background-color", "#bad8f2");
                }, function(){
                $(this).css("background-color", "white");
                }).click(((object) => function (e) {

                    // 검색 결과 정체성 처리
                    console.log(object);

                    $('.search_identity_img').attr("src",object.identity_img);
                    $('.search_identity_name').text(object.identity_name);
                    $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                    $('.search_activity_list').empty();
                    $('.search_item_list').empty();
                    $('.search_skill_list').empty();
                    $('.search_defect_list').empty();

                    Global_Var.userInfo.curr_identity_code = object.identity_code;



                    $.ajax({
                        type : "POST",
                        url : "/hoodify/check_possession.php",
                        data : { 'identity_code' : object.identity_code},
                        success : function(res){

                            if(res=='possession'){

                                $('.add_identity').css({ display : 'none',});
                                $('.locked').css({ display : 'block',});

                            }else if(res=='no possession'){

                                $('.add_identity').css({ display : 'block',});
                                $('.locked').css({ display : 'none',});

                            }




                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });
                    


                    $.ajax({
                        type : "POST",
                        url : "/hoodify/get_search_identity_data.php",
                        data : {'identity_code' : object.identity_code},
                        dataType : 'json',
                        success : function(res){

                            // identity의 activity, item, skill, caution 모든 data 가 합쳐진 json 파일 반환 확인
                            console.log(res);
                            
                            var activity_data = res[0];
                            if(activity_data.length === 0){
                      
                                $('.search_activity_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_activity_list');
        
        
                            }
                            else{

                            for (var i = 0; i < activity_data.length; i++) {
                                
                                var activity_object = activity_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_activity_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: activity_object.activity_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: activity_object.activity_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: activity_object.activity_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }
                        }

                            var item_data = res[1];
                            if(item_data.length === 0){
                      
                                $('.search_item_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_item_list');
        
        
                            }
                            else{
                            

                            for (var i = 0; i < item_data.length; i++) {
                                
                                var item_object = item_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_item_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: item_object.item_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: item_object.item_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: item_object.item_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }
                        }


                            var skill_data = res[2];
                            if(skill_data.length === 0){
                      
                                $('.search_skill_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_skill_list');
        
        
                            }
                            else{


                            for (var i = 0; i < skill_data.length; i++) {
                                
                                var skill_object = skill_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_skill_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: skill_object.skill_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: skill_object.skill_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: skill_object.skill_desc,  

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }

                        }
                            var caution_data = res[3];

                            if(caution_data.length === 0){
                      
                                $('.search_defect_list').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                    text: "(비어있음)",
        
                                }).css({
                                    fontSize: "12px",
                                    marginLeft:"4.5px",
                                    margin: "4.5px",
                                    color: 'gray',
                                    marginTop:"15px",
        
        
                                }).appendTo('.search_defect_list');
        
        
                            }
                            else{

                            for (var i = 0; i < caution_data.length; i++) {
                                
                                var caution_object = caution_data[i];


                                var list = document.createElement("div");

                                $(list).css({

                                
                                    height: "70px",
                                    borderBottom: "1px solid #D8D8D8",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',

                                }).appendTo('.search_defect_list');

                                var VerticalList = $("<div>", {
                                }).css({

                                });

                                $('<img>', {
                                    src: caution_object.caution_img

                                }).css({
                                    width: "30px",
                                    height: "30px",
                                    margin: "4.5px",
                                    float: "left",
                                    margin: "7px",
                                }).appendTo(list);


                                $('<p>', {
                                    text: caution_object.caution_name,

                                }).css({
                                    margin: "4.5px",


                                }).appendTo(VerticalList);

                                $('<p>', {
                                    text: caution_object.caution_desc,

                                }).css({
                                    fontSize: "12px",
                                    margin: "4.5px",
                                    lineHeight:"15px",


                                }).appendTo(VerticalList);

                                VerticalList.appendTo(list);

                            }

                            }


                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });












                    $('.search_identity_img').attr("src",object.identity_img);
                    $('.search_identity_name').text(object.identity_name);
                    $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                    $('.search_result_identity').css("display","flex").hide().fadeIn('fast');

                    $('.search_result').css({ display : 'none',});
                    $('.category_container').css({ display : 'none',});




                })(object)).appendTo(".search_result");

        
                $('<img>',{

                    src: object.identity_img,
                }).css({
                width: "50px",
                height: "50px",
                margin: "5px",
                float: "left",

                }).appendTo(list_container);        

            
                $('<p>', {
                    text: object.identity_name,

                }).css({
                "margin-left": "12px",
                "width": "100%",
                "fontWeight": "bold",
                
                }).appendTo(list_container);



      }


    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});


}

$('.search_btn').click(function(){

search_identity();


})





///////////////////////////////////////////////////////////////////////////////////////
///////// 검색해서 추가

$('.add_identity').click(function(){

layer_popup($('.add_identity_check'));

});

$('#add_identity_checkCom').click(function(){

$.ajax({
    type : "POST",
    url : "/hoodify/add_identity.php",

    data:{ 

        'identity_code' : Global_Var.userInfo.curr_identity_code,

    },
    success : function(res){

        if(res=='success'){

            $('.add_identity').css({ display : 'none',});
            $('.locked').css({ display : 'block',});
            get_main_list();


        }
        else{
            console.log(res);
        }

    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});


$('.add_identity_check').fadeOut('fast');
// add_identity.php
// identity_code


})




/////////////////////
// 검색 결과에서 뒤로가기 > 정체성 리스트 다시 보이기

$('.to_search_list').click(function(){

$('.search_result_identity').css({ display : 'none',});
$('.search_result').fadeIn('fast');

$('.category_container').css("display","flex").hide().fadeIn("fast");
})



/////////////////////////////////////////////////////////////////////////////////////////////////
// 유저 정보를 바탕으로 해당 유저의 정체성 리스트 불러오기
// 유저 정보는 세션을 통해 받기
// join sql 확인하기
// 활성화된 정체성인지 확인 > db에 attribute 추가해야함

Global_Var = {}
Global_Var.userInfo = {
   // 'Identity_ID_storage' : null,
   // 'Record_ID_storage' : null,
   // 'Content_ID_storage' : null,
   // 'Item_ID_storage' : null,

    
    'curr_identity_code' : null,
    'curr_activity_code' : null,
    'curr_item_code' : null,
    'curr_skill_code' : null,
    'curr_defect_code' : null,

    'curr_record_code' : null,


}


/////////////////////////////////////////////////////////////////////////////////////
// 검색 버튼

$('.open_search_layer').click(function(){
$('.search_result').empty();
$('.search_result_identity').css({ display : 'none',});
$('.search_result').fadeIn('fast');
$('.category_container').css("display","flex").hide().fadeIn("fast");
layer_popup($('.search_layer'));
});


/////////////////////////////////////////////////////////////////////////////////////
// 프로필 버튼

$('.profile').click(function(){



$.ajax({
    type : "POST",
    url : "/hoodify/get_user_profile.php",
    dataType : 'json',
    success : function(res){

        console.log(res[0]);
        $('.profile_img').text(res[0].profile_img);
        $('.profile_nickname').text(res[0].nickname);
        $('.profile_introduction').text(res[0].introduction);


    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ 
        alert("통신 실패.")
    }
});


layer_popup($('.profile_layer'));


})




/////////////////////////////////////////////////////////////////////////////////////
// 정체성 창고 버튼
$('.identity_storage_btn').click(function(){
storage_identities();
});




////////////////////////////////////
// 창고 리스트 불러오기

function storage_identities(){

$(".inactive_identity_list").empty();
$(".btn_activate").css("display", "none");

$.ajax({
    type : "POST",
    url : "/hoodify/get_deactivated_identities.php",
    dataType : 'json',
    success : function(res){

        console.log(res);
        for (var i = 0; i < res.length; i++) {

            var identity = res[i];
            var identity_name = res[i].identity_name;
            var identity_desc = res[i].identity_desc;
            var identity_img = res[i].identity_img;

            var list = document.createElement("div");
            
            $(list).css({

                width: "90%",
                height: "60px",
                padding: "5px",
                borderBottom: "1px solid #D8D8D8",
                display: 'flex',
                paddingBottom: '5px',
                alignItems: 'center',
                overflow:'hidden',

                }).hover(function() {
                        $(this).css("background-color", "#bad8f2");
                    }, function(){
                        if($(this).hasClass("itemActive")){
                        $(this).css("background-color", "#bad8f2");
                        }
                        else{
                        $(this).css("background-color", "white");
                        }
                    }).click(((identity) => function (e) {

                    $(".btn_activate").css("display", "flex");
                    Global_Var.userInfo.curr_identity_code = identity.identity_code;
                    console.log(Global_Var.userInfo.curr_identity_code);



                    $('.deactivated_identity_object').removeClass("itemActive").css("background-color", "white");
                    $(this).css("background-color", "#bad8f2");
                    $(this).addClass("itemActive");

                    


                })(identity)).addClass('deactivated_identity_object').appendTo(".inactive_identity_list");

                var VerticalList = $("<div>", {

                    }).css({


                 });

            $('<img>', {
            src: identity_img


            }).css({
            width: "50px",
            height: "50px",
            margin: "4.5px",
            float: "left",
            margin: "7px",
            }).appendTo(list);

            $('<p>', {
            text: identity_name,

            }).css({
            margin: "4.5px",
            fontFamily:"TmoneyRoundWindExtraBold",


            }).appendTo(VerticalList);


            VerticalList.appendTo(list);
                
        }

    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});


layer_popup($('.identity_storage'));




}


/////////////////////////////////////


$('.move_to_storage').click(function(){


$.ajax({
    type : "POST",
    url : "/hoodify/deactivate_identity.php",
    data: {
            'identity_code': Global_Var.userInfo.curr_identity_code,
        },
    success : function(res){

        console.log(res);
        if(res=='success'){
            get_main_list();
        }



    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});

$('.pop-layer').fadeOut('fast');

})



///////////////////////////////////
// 정체성 활성화 버튼

$('.btn_activate').click(function(){

$.ajax({
    type : "POST",
    url : "/hoodify/activate_identity.php",
    data: {
            'identity_code': Global_Var.userInfo.curr_identity_code,
        },
    success : function(res){

        console.log(res);
        if(res=='success'){
            get_main_list();
            storage_identities();
        }



    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});




})

//////////////////////////////////////////////////////////////////////////////////////???????????????????
//////////// 메인 리스트 불러오기 
function get_main_list(){

$('#main_list').empty();    
$.ajax({
    type : "POST",
    url : "/hoodify/get_user_identities.php",
    dataType : 'json',
    success : function(res){

        console.log(res);

        for (var i = 0; i < res.length; i++) {

                var identity = res[i];
                var identity_name = res[i].identity_name;
                var identity_desc = res[i].identity_desc;
                var identity_img = res[i].identity_img;


                var list = document.createElement("div");


                $(list).css({

                                      width: "500px",
                                      height: "60px",
                                      padding: "5px",
                                      borderBottom: "1px solid #D8D8D8",
                                      display: 'flex',
                                    //  alignItems: 'center',
                                      paddingBottom: '5px',
                                      alignItems: 'center',
                                      overflow:'hidden',

                                    }).hover(function() {
                                      $(this).css("background-color", "#bad8f2");
                                       }, function(){
                                     $(this).css("background-color", "white");
                                     }).click(((identity) => function (e) {

                                        $('.identity_storage').fadeOut('fast');
                                        console.log(identity.identity_code);
                                        $('.Clist').empty();
                                        $('.Ilist').empty();
                                        $('.Slist').empty();
                                        $('.Dlist').empty();
                                        

                                        $(".mylistT").empty();
                                        $(".mylistIMG").css("display", "none")
                                        $(".mylistC").empty();
                                        $(".mylistD").empty();
                                        $('.mylist').empty();

                                        $(".mylistT_item").empty();
                                        $(".mylistIMG_item").css("display", "none")
                                        $(".mylistC_item").empty();
                                        $('.mylist_item').empty();

                                        $(".mylistT_skill").empty();
                                        $(".mylistIMG_skill").css("display", "none")
                                        $(".mylistC_skill").empty();
                                        $('.mylist_skill').empty();

                                        $(".mylistT_defect").empty();
                                        $(".mylistIMG_defect").css("display", "none")
                                        $(".mylistC_defect").empty();
                                        $('.mylist_defect').empty();


                                        $('#addbtn_container').empty();
                                        $('#addbtn_container_item').empty();


                                        $('.identity_img_container').attr("src",identity.identity_img );
                                        $('.identity_title_container').text(identity.identity_name);
                                        $('.identity_desc_container').text("\u00a0"+"\u00a0"+identity.identity_desc);

                                        
                                        Global_Var.userInfo.curr_identity_code = identity.identity_code;


                                        // 클릭한 정체성의 태그를 불러오는 코드;

                                        
                                        $.ajax({
                                                type : "POST",
                                                url : "/hoodify/get_identity_keyword.php",
                                                data : {
                                                        'identity_code': Global_Var.userInfo.curr_identity_code,
                                                    },
                                                dataType :'json',
                                                success : function(res){

                                                    $('.keyword_container').empty();
                                                    
                                                    for (var i = 0; i < res.length; i++) {

                                                        
                                                        $('<p>',{
                                                                text: "#"+res[i].keyword_name + " ",

                                                        }).css({


                                                        }).appendTo($('.keyword_container'));

                                                    }

                                                },
                                                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                    alert("통신 실패.")
                                                }
                                            });




                                        // 클릭한 정체성의 activity 목록을 불러옴
                                        $.ajax({
                                                type : "POST",
                                                url : "/hoodify/get_identity_activity.php",
                                                data : {
                                                        'identity_code': identity.identity_code
                                                    },
                                                dataType : 'json',
                                                success : function(res){
                                                    for (var i = 0; i < res.length; i++) {
                                                        
                                                        var activity = res[i];
                                                         //console.log(activity);
                                                        var list_container = $("<div>", {
                                                            }).css({
                                                                width: "100%",
                                                                display: "inline-flex",
                                                                alignItems: "center",
                                                                borderBottom: "1px solid #D8D8D8",

                                                                }).click(((activity) => function (e) {

                                                                    //현재 창의 identity의 acitivity 
                                                                    //console.log(activity);
                                                                    $('.mylist').empty();
                                                                    $('#addbtn_container').empty();

                                                                    $('.mylistIMG').css("display", "flex").attr("src",activity.activity_img);
                                                                    $('.mylistT').text(activity.activity_name);
                                                                    $('.mylistC').text("\u00a0"+"\u00a0"+activity.activity_desc);
                                                                    $('.add_record_layer').fadeOut('fast');
                                                                    
                                                                    // 해당 activity 전역 변수 설정
                                                                    Global_Var.userInfo.curr_activity_code = activity.activity_code;

                                                                    $('.contents_item.activity').removeClass("itemActive").css("background-color", "white");
                                                                    $(this).css("background-color", "#bad8f2");
                                                                    $(this).addClass("itemActive");



                                                                    $('.popup_activity_img').attr("src",activity.activity_img);
                                                                    $('.popup_activity_title').text(activity.activity_name);
                                                                    $('.popup_activity_desc').text(activity.activity_desc);

                                                                    
                                                                    $('.popup_activity_img2').attr("src",activity.activity_img);
                                                                    $('.popup_activity_title2').text(activity.activity_name);
                                                                    $('.popup_activity_desc2').text(activity.activity_desc);


                                                                        $.ajax({
                                                                                type : "POST",
                                                                                url : "/hoodify/get_user_activity_record.php",
                                                                                data : {
                                                                                        'activity_code': activity.activity_code,
                                                                                    },
                                                                                dataType : 'json',
                                                                                success : function(res){
                                                                                   

                                                                                    for (var i = 0; i < res.length; i++) {

                                                                                        var record = res[i];
                                                                                        //console.log(res);

                                                                                        $('<p>', {
                                                                                            text: record.title,

                                                                                            }).css({
                                                                                            "padding": "12px",
                                                                                            "width": "90%",
                                                                                            "fontWeight": "bold",
                                                                                            "borderBottom": "1px solid #D8D8D8",
                                                                                        
                                                                                        }).hover(function() {
                                                                                        $(this).css("background-color", "#bad8f2");
                                                                                        }, function(){
                                                                                        $(this).css("background-color", "white");
                                                                                        }).click(((record) => function (e){
                                                                                           // console.log(record);

                                                                                            Global_Var.userInfo.curr_record_code = record.user_activity_code;
                                                                                           

                                                                                            $('.popup_activity_record_title').text(record.title);
                                                                                            $('.popup_activity_record_cont').text(record.record);
                                                                                            


                                                                                            layer_popup($('.activity_post'));




                                                                                        })(record)).appendTo($('.mylist'));


                                                                                    }



                                                                                },
                                                                                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                                                    alert("통신 실패.")
                                                                                }
                                                                            });

                                                                            
                                                                            // 추가하기 버튼 동적 생성
                                                                            
                                                                             $('<p>',{
                                                                                text: "추가하기",

                                                                            }).attr('id', 'add_record'
                                                                            ).css({
                                                                                width: "80px",
                                                                                color: "#3f5a9d",
                                                                                fontWeight: "bold",
                                                                                cursor:"pointer",
                                                                                marginTop:"20px",


                                                                            }).click(function(){

                                                                                $('.record_title').val("");
                                                                                $('.record_cont').val("");

                                                                                layer_popup($('.add_record_layer'));





                                                                            }).appendTo($('#addbtn_container'));




                                                                })(activity)).hover(function() {
                                                                        $(this).css("background-color", "#bad8f2");
                                                                    }, function(){
                                                                        if($(this).hasClass("itemActive")){
                                                                        $(this).css("background-color", "#bad8f2");
                                                                        }
                                                                        else{
                                                                        $(this).css("background-color", "white");
                                                                        }
                                                                    }).addClass("contents_item activity").appendTo($('.Clist'));


                                                        $('<img>',{
                                                            src: activity.activity_img,
                                                            }).css({
                                                            width: "50px",
                                                            height: "50px",
                                                            margin: "5px",
                                                            float: "left",

                                                         }).appendTo(list_container);        

                                                       
                                                         $('<p>', {
                                                            text: activity.activity_name,

                                                            }).css({
                                                            "margin-left": "12px",
                                                            "width": "100%",
                                                            "fontWeight": "bold",
                                                         
                                                         }).appendTo(list_container);


                                                    }


                                                },
                                                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                    alert("통신 실패.")
                                                }
                                            });


                                         



                                       
                                        // 클릭한 정체성의 item 목록을 불러옴
                                        
                                        $.ajax({
                                            type : "POST",
                                                url : "/hoodify/get_identity_item.php",
                                                data : {
                                                        'identity_code': identity.identity_code
                                                    },
                                            dataType : 'json',
                                            success : function(res){
                                                for (var i = 0; i < res.length; i++) {
                                                        
                                                        var item = res[i];
                                                      //  console.log(item);
                                                        var list_container = $("<div>", {
                                                            }).css({
                                                                width: "100%",
                                                                display: "inline-flex",
                                                                alignItems: "center",
                                                                borderBottom: "1px solid #D8D8D8",

                                                                }).click(((item) => function (e) {

                                                                    //현재 창의 identity의 item
                                                                   // console.log(item);
                                                                    $('.mylist_item').empty();
                                                                    $('#addbtn_container_item').empty();

                                                                    $('.mylistIMG_item').css("display", "flex").attr("src",item.item_img);
                                                                    $('.mylistT_item').text(item.item_name);
                                                                    $('.mylistC_item').text("\u00a0"+"\u00a0"+item.item_desc);
                                                                    $('.add_record_layer').fadeOut('fast');
                                                                    
                                                                    // 해당 item 전역 변수 설정
                                                                    Global_Var.userInfo.curr_item_code = item.item_code;

                                                                    $('.contents_item.item').removeClass("itemActive").css("background-color", "white");
                                                                    $(this).css("background-color", "#bad8f2");
                                                                    $(this).addClass("itemActive");


                                                                  // 입력 레이어
                                                                    $('.popup_activity_img').attr("src",item.item_img);
                                                                    $('.popup_activity_title').text(item.item_name);
                                                                    $('.popup_activity_desc').text(item.item_desc);

                                                                    // 개인 레코드 확인 레이어
                                                                    $('.popup_activity_img2').attr("src",item.item_img);
                                                                    $('.popup_activity_title2').text(item.item_name);
                                                                    $('.popup_activity_desc2').text(item.item_desc);


                                                                        $.ajax({
                                                                                type : "POST",
                                                                                url : "/hoodify/get_user_item_record.php",
                                                                                data : {
                                                                                        'item_code': item.item_code,
                                                                                    },
                                                                                dataType : 'json',
                                                                                success : function(res){
                                                                                   

                                                                                    for (var i = 0; i < res.length; i++) {

                                                                                        var record = res[i];
                                                                                      //  console.log(res);

                                                                                        $('<p>', {
                                                                                            text: record.title,

                                                                                            }).css({
                                                                                            "padding": "12px",
                                                                                            "width": "90%",
                                                                                            "fontWeight": "bold",
                                                                                            "borderBottom": "1px solid #D8D8D8",
                                                                                        
                                                                                        }).hover(function() {
                                                                                        $(this).css("background-color", "#bad8f2");
                                                                                        }, function(){
                                                                                        $(this).css("background-color", "white");
                                                                                        }).click(((record) => function (e){

                                                                                            


                                                                                            $('.popup_activity_record_title').text(record.title);
                                                                                            $('.popup_activity_record_cont').text(record.record);
                                                                                            
                                                                                            Global_Var.userInfo.curr_record_code = record.user_item_code;
                                                                                           


                                                                                            layer_popup($('.activity_post'));




                                                                                        })(record)).appendTo($('.mylist_item'));


                                                                                    }



                                                                                },
                                                                                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                                                    alert("통신 실패.")
                                                                                }
                                                                            });

                                                                            
                                                                            // 추가하기 버튼 동적 생성

                                                                             $('<p>',{
                                                                                text: "추가하기",

                                                                            }).attr('id', 'add_record_item'
                                                                            ).css({
                                                                                width: "80px",
                                                                                color: "#3f5a9d",
                                                                                fontWeight: "bold",
                                                                                cursor:"pointer",
                                                                                marginTop:"20px",


                                                                            }).click(function(){

                                                                                $('.record_title').val("");
                                                                                $('.record_cont').val("");

                                                                                layer_popup($('.add_record_layer'));
                                                                                // 여기는 아이템 추가해야함




                                                                            }).appendTo($('#addbtn_container_item'));




                                                                })(item)).hover(function() {
                                                                        $(this).css("background-color", "#bad8f2");
                                                                    }, function(){
                                                                        if($(this).hasClass("itemActive")){
                                                                        $(this).css("background-color", "#bad8f2");
                                                                        }
                                                                        else{
                                                                        $(this).css("background-color", "white");
                                                                        }
                                                                    }).addClass("contents_item item").appendTo($('.Ilist'));


                                                        $('<img>',{
                                                            src: item.item_img,
                                                            }).css({
                                                            width: "50px",
                                                            height: "50px",
                                                            margin: "5px",
                                                            float: "left",

                                                         }).appendTo(list_container);        

                                                       
                                                         $('<p>', {
                                                            text: item.item_name,

                                                            }).css({
                                                            "margin-left": "12px",
                                                            "width": "100%",
                                                            "fontWeight": "bold",
                                                         
                                                         }).appendTo(list_container);


                                                    }
                                      


                                            },
                                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                                alert("통신 실패.")
                                            }
                                        });
                                        

                                        // 클릭한 정체성의 skill 목록을 불러옴
                                        ///////////////////////////////////////////////////////////////////////////
                                        
                                        $.ajax({
                                            type : "POST",
                                                url : "/hoodify/get_identity_skill.php",
                                                data : {
                                                        'identity_code': identity.identity_code
                                                    },
                                            dataType : 'json',
                                            success : function(res){
                                                for (var i = 0; i < res.length; i++) {
                                                var skill = res[i];
                                              //  console.log(skill);
                                                
                                                var list_container = $("<div>", {
                                                    }).css({
                                                        width: "100%",
                                                        display: "inline-flex",
                                                        alignItems: "center",
                                                        borderBottom: "1px solid #D8D8D8",

                                                        }).click(((skill) => function (e) {

                                                            //현재 창의 identity의 skill
                                                            //console.log(skill);
                                                            $('.mylist_skill').empty();
                                                            $('#addbtn_container_skill').empty();

                                                           $('.mylistIMG_skill').css("display", "flex").attr("src",skill.skill_img);

                                                            $('.mylistT_skill').text(skill.skill_name);
                                                            $('.mylistC_skill').text("\u00a0"+"\u00a0"+skill.skill_desc);
                                                            $('.add_record_layer').fadeOut('fast');
                                                            
                                                            // 해당 skill 전역 변수 설정
                                                            Global_Var.userInfo.curr_skill_code = skill.skill_code;

                                                            $('.contents_item.skill').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");


                                                            // 입력 레이어
                                                            $('.popup_activity_img').attr("src",skill.skill_img);
                                                            $('.popup_activity_title').text(skill.skill_name);
                                                            $('.popup_activity_desc').text(skill.skill_desc);

                                                            // 개인 레코드 확인 레이어
                                                            $('.popup_activity_img2').attr("src",skill.skill_img);
                                                            $('.popup_activity_title2').text(skill.skill_name);
                                                            $('.popup_activity_desc2').text(skill.skill_desc);

                                                            //console.log(skill);
                                                            
                                                                $.ajax({
                                                                        type : "POST",
                                                                        url : "/hoodify/get_user_skill_record.php",
                                                                        data : {
                                                                                'skill_code': skill.skill_code,
                                                                            },
                                                                        dataType : 'json',
                                                                        success : function(res){
                                                                            

                                                                            for (var i = 0; i < res.length; i++) {

                                                                                var record = res[i];
                                                                                console.log(res);

                                                                                $('<p>', {
                                                                                    text: record.title,

                                                                                    }).css({
                                                                                    "padding": "12px",
                                                                                    "width": "90%",
                                                                                    "fontWeight": "bold",
                                                                                    "borderBottom": "1px solid #D8D8D8",
                                                                                
                                                                                }).hover(function() {
                                                                                $(this).css("background-color", "#bad8f2");
                                                                                }, function(){
                                                                                $(this).css("background-color", "white");
                                                                                }).click(((record) => function (e){

                                                                                           

                                                                                    $('.popup_activity_record_title').text(record.title);
                                                                                    $('.popup_activity_record_cont').text(record.record);
                                                                                    
                                                                                    Global_Var.userInfo.curr_record_code = record.user_skill_code;
                                                                                    

                                                                                    layer_popup($('.activity_post'));


                                                                                })(record)).appendTo($('.mylist_skill'));


                                                                            }



                                                                        },
                                                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                                            alert("통신 실패.")
                                                                        }
                                                                    });
                                                                    
                                                                    
                                                                    // 추가하기 버튼 동적 생성
                                                                    
                                                                        $('<p>',{
                                                                        text: "추가하기",

                                                                    }).attr('id', 'add_record_skill'
                                                                    ).css({
                                                                        width: "80px",
                                                                        color: "#3f5a9d",
                                                                        fontWeight: "bold",
                                                                        cursor:"pointer",
                                                                        marginTop:"20px",


                                                                    }).click(function(){

                                                                        $('.record_title').val("");
                                                                        $('.record_cont').val("");

                                                                        layer_popup($('.add_record_layer'));




                                                                    }).appendTo($('#addbtn_container_skill'));
                                                                    



                                                        })(skill)).hover(function() {
                                                                $(this).css("background-color", "#bad8f2");
                                                            }, function(){
                                                                if($(this).hasClass("itemActive")){
                                                                $(this).css("background-color", "#bad8f2");
                                                                }
                                                                else{
                                                                $(this).css("background-color", "white");
                                                                }
                                                            }).addClass("contents_item skill").appendTo($('.Slist'));


                                                $('<img>',{
                                                    src: skill.skill_img,
                                                    }).css({
                                                    width: "50px",
                                                    height: "50px",
                                                    margin: "5px",
                                                    float: "left",

                                                    }).appendTo(list_container);        

                                                
                                                    $('<p>', {
                                                    text: skill.skill_name,

                                                    }).css({
                                                    "margin-left": "12px",
                                                    "width": "100%",
                                                    "fontWeight": "bold",
                                                    
                                                    }).appendTo(list_container);

                                            }
                                        },
                                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                                alert("통신 실패.")
                                            }
                                        });
                                        

                                        // 클릭한 정체성의 defect 목록을 불러옴
                                        ///////////////////////////////////////////////////////////////////////////
                                        
                                        $.ajax({
                                            type : "POST",
                                                url : "/hoodify/get_identity_defect.php",
                                                data : {
                                                        'identity_code': identity.identity_code
                                                    },
                                            dataType : 'json',
                                            success : function(res){
                                                for (var i = 0; i < res.length; i++) {
                                                var defect = res[i];
                                              //  console.log(defect);
                                                
                                                var list_container = $("<div>", {
                                                    }).css({
                                                        width: "100%",
                                                        display: "inline-flex",
                                                        alignItems: "center",
                                                        borderBottom: "1px solid #D8D8D8",

                                                        }).click(((defect) => function (e) {

                                                            //현재 창의 identity의 defect
                                                            //console.log(defect);
                                                           // $('.mylist_item').empty();
                                                           // $('#addbtn_container_item').empty();

                                                           $('.mylistIMG_defect').css("display", "flex").attr("src",defect.caution_img);

                                                            $('.mylistT_defect').text(defect.caution_name);
                                                            $('.mylistC_defect').text("\u00a0"+"\u00a0"+defect.caution_desc);
                                                            $('.add_record_layer').fadeOut('fast');
                                                            
                                                            // 해당 defect 전역 변수 설정
                                                            Global_Var.userInfo.curr_defect_code = defect.caution_code;

                                                            $('.contents_item.defect').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");


                                                            // 입력 레이어
                                                           // $('.popup_activity_img').attr("src",item.item_img);
                                                           // $('.popup_activity_title').text(item.item_name);
                                                           // $('.popup_activity_desc').text(item.item_desc);

                                                            // 개인 레코드 확인 레이어
                                                           // $('.popup_activity_img2').attr("src",item.item_img);
                                                           // $('.popup_activity_title2').text(item.item_name);
                                                           // $('.popup_activity_desc2').text(item.item_desc);

                                                            /*
                                                                $.ajax({
                                                                        type : "POST",
                                                                        url : "/hoodify/get_user_item_record.php",
                                                                        data : {
                                                                                'activity_code': item.item_code,
                                                                            },
                                                                        dataType : 'json',
                                                                        success : function(res){
                                                                            

                                                                            for (var i = 0; i < res.length; i++) {

                                                                                var record = res[i];
                                                                                console.log(res);

                                                                                $('<p>', {
                                                                                    text: record.title,

                                                                                    }).css({
                                                                                    "padding": "12px",
                                                                                    "width": "90%",
                                                                                    "fontWeight": "bold",
                                                                                    "borderBottom": "1px solid #D8D8D8",
                                                                                
                                                                                }).hover(function() {
                                                                                $(this).css("background-color", "#bad8f2");
                                                                                }, function(){
                                                                                $(this).css("background-color", "white");
                                                                                }).click(((record) => function (e){

                                                                                    $('.popup_activity_record_title').text(record.title);
                                                                                    $('.popup_activity_record_cont').text(record.record);
                                                                                    


                                                                                    layer_popup($('.activity_post'));


                                                                                })(record)).appendTo($('.mylist_item'));


                                                                            }



                                                                        },
                                                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                                            alert("통신 실패.")
                                                                        }
                                                                    });
                                                                    */
                                                                    
                                                                    // 추가하기 버튼 동적 생성
                                                                    // dddddddddddddddd
                                                                    /*
                                                                        $('<p>',{
                                                                        text: "추가하기",

                                                                    }).attr('id', 'add_record_item'
                                                                    ).css({
                                                                        width: "80px",
                                                                        color: "#3f5a9d",
                                                                        fontWeight: "bold",
                                                                        cursor:"pointer",
                                                                        marginTop:"20px",


                                                                    }).click(function(){

                                                                        $('.record_title_item').val("");
                                                                        $('.record_cont_item').val("");

                                                                        layer_popup($('.add_record_layer'));
                                                                        // 여기는 아이템 추가해야함




                                                                    }).appendTo($('#addbtn_container_item'));
                                                                    */    



                                                        })(defect)).hover(function() {
                                                                $(this).css("background-color", "#bad8f2");
                                                            }, function(){
                                                                if($(this).hasClass("itemActive")){
                                                                $(this).css("background-color", "#bad8f2");
                                                                }
                                                                else{
                                                                $(this).css("background-color", "white");
                                                                }
                                                            }).addClass("contents_item defect").appendTo($('.Dlist'));


                                                $('<img>',{
                                                    src: defect.caution_img,
                                                    }).css({
                                                    width: "50px",
                                                    height: "50px",
                                                    margin: "5px",
                                                    float: "left",

                                                    }).appendTo(list_container);        

                                                
                                                    $('<p>', {
                                                    text: defect.caution_name,

                                                    }).css({
                                                    "margin-left": "12px",
                                                    "width": "100%",
                                                    "fontWeight": "bold",
                                                    
                                                    }).appendTo(list_container);

                                            }
                                        },
                                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                                alert("통신 실패.")
                                            }
                                        });

                                        layer_popup($('.pop-layer'));



                                     })(identity)).appendTo('#main_list');


                                    var VerticalList = $("<div>", {

                                    }).css({


                                    });

                                    $('<img>', {
                                       src: identity_img



                                    }).css({
                                      width: "50px",
                                      height: "50px",
                                      margin: "4.5px",
                                      float: "left",
                                      margin: "7px",
                                    }).appendTo(list);




                                    $('<p>', {
                                      text: identity_name,

                                    }).css({
                                      margin: "4.5px",
                                      fontFamily:"TmoneyRoundWindExtraBold",


                                    }).appendTo(VerticalList);




                                    VerticalList.appendTo(list);




        }





    },
    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
        alert("통신 실패.")
    }
});
}

get_main_list();

//////////////////////////////////////////////////////////////////////////////
// 레코드 추가하기 버튼


$('.btn_add_record').click(function(){

    console.log($('.record_title').val().length);
    if($('.record_title').val().length<2){

        alert("제목을 입력하세요");

    }

    else if($('.record_cont').val().length<5){
         alert("내용을 입력하세요");
    }
    else{
        
    layer_popup($('.add_check'));

    }


})

$('#btn_addCom').click(function(){

    var record_title = $('.record_title').val();
    var record_cont = $('.record_cont').val();
    var curr_identity_code = Global_Var.userInfo.curr_identity_code;
    var curr_activity_code = Global_Var.userInfo.curr_activity_code;
    var curr_item_code = Global_Var.userInfo.curr_item_code;
    var curr_skill_code = Global_Var.userInfo.curr_skill_code;
    var public_state;
    if($('.public_check').is(':checked')){
        public_state = 1;

    }else{
        public_state = 0;

    };



    console.log(record_title + record_cont + curr_identity_code + curr_activity_code);


    // 해당 레코드 db에 넣기 activity
    if($('.add_record_layer').hasClass("state_activity")){

        $.ajax({
        type : "POST",
        url : "/hoodify/add_activity_record.php",
        data : {
                'record_title': record_title,
                'record_cont' : record_cont,
                'curr_identity_code' : curr_identity_code,
                'curr_activity_code' : curr_activity_code,
                'public_state' : public_state,

            },
       // dataType : 'json',
        success : function(res){

         console.log(res);
          //입력시 activity record 리스트 갱신
         
         $('.mylist').empty();
            $.ajax({
                        type : "POST",
                        url : "/hoodify/get_user_activity_record.php",
                        data : {
                                'activity_code': Global_Var.userInfo.curr_activity_code,
                            },
                        dataType : 'json',
                        success : function(res){
                            

                            for (var i = 0; i < res.length; i++) {

                                var record = res[i];
                                $('<p>', {
                                    text: record.title,

                                    }).css({
                                    "padding": "12px",
                                    "width": "90%",
                                    "fontWeight": "bold",
                                    "borderBottom": "1px solid #D8D8D8",
                                
                                }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                $(this).css("background-color", "white");
                                }).click(((record) => function (e){

                                    $('.popup_activity_record_title').text(record.title);
                                    $('.popup_activity_record_cont').text(record.record);

                                    Global_Var.userInfo.curr_record_code = record.user_activity_code;
                                    
                                    layer_popup($('.activity_post'));



                                })(record)).appendTo($('.mylist'));


                            }



                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });


                


            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

    }
    
    else if($('.add_record_layer').hasClass("state_item")){

        $.ajax({
        type : "POST",
        url : "/hoodify/add_item_record.php",
        data : {
                'record_title': record_title,
                'record_cont' : record_cont,
                'curr_identity_code' : curr_identity_code,
                'curr_item_code' : curr_item_code,
                'public_state' : public_state,

            },
       // dataType : 'json',
        success : function(res){

         console.log(res);
         //입력시 item record 리스트 갱신
         
         $('.mylist_item').empty();
            $.ajax({
                        type : "POST",
                        url : "/hoodify/get_user_item_record.php",
                        data : {
                                'item_code': Global_Var.userInfo.curr_item_code,
                            },
                        dataType : 'json',
                        success : function(res){
                            

                            for (var i = 0; i < res.length; i++) {

                                var record = res[i];
                                console.log(record);

                                $('<p>', {
                                    text: record.title,

                                    }).css({
                                    "padding": "12px",
                                    "width": "90%",
                                    "fontWeight": "bold",
                                    "borderBottom": "1px solid #D8D8D8",
                                
                                }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                $(this).css("background-color", "white");
                                }).click(((record) => function (e){

                                    Global_Var.userInfo.curr_record_code = record.user_item_code;

                                    $('.popup_activity_record_title').text(record.title);
                                    $('.popup_activity_record_cont').text(record.record);


                                    
                                    layer_popup($('.activity_post'));



                                })(record)).appendTo($('.mylist_item'));


                            }



                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });


                


            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

    }

    else if($('.add_record_layer').hasClass("state_skill")){

            $.ajax({
            type : "POST",
            url : "/hoodify/add_skill_record.php",
            data : {
                    'record_title': record_title,
                    'record_cont' : record_cont,
                    'curr_identity_code' : curr_identity_code,
                    'curr_skill_code' : curr_skill_code,
                    'public_state' : public_state,

                },
            // dataType : 'json',
            success : function(res){

            console.log(res);
            
            $('.mylist_skill').empty();
                $.ajax({
                            type : "POST",
                            url : "/hoodify/get_user_skill_record.php",
                            data : {
                                    'skill_code': Global_Var.userInfo.curr_skill_code,
                                },
                            dataType : 'json',
                            success : function(res){
                                

                                for (var i = 0; i < res.length; i++) {

                                    var record = res[i];
                                    console.log(record);

                                    $('<p>', {
                                        text: record.title,

                                        }).css({
                                        "padding": "12px",
                                        "width": "90%",
                                        "fontWeight": "bold",
                                        "borderBottom": "1px solid #D8D8D8",
                                    
                                    }).hover(function() {
                                    $(this).css("background-color", "#bad8f2");
                                    }, function(){
                                    $(this).css("background-color", "white");
                                    }).click(((record) => function (e){

                                        Global_Var.userInfo.curr_record_code = record.user_skill_code;

                                        $('.popup_activity_record_title').text(record.title);
                                        $('.popup_activity_record_cont').text(record.record);


                                        
                                        layer_popup($('.activity_post'));



                                    })(record)).appendTo($('.mylist_skill'));


                                }



                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                alert("통신 실패.")
                            }
                        });


                    


                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

            }





    $('.add_check').fadeOut('fast');
    $('.add_record_layer').fadeOut('fast');

    // 오른쪽 레코드 리스트 갱신하기

})


/////////////////////////////////////////////////////////////////////////////////////
// record 삭제 버튼

$('.btn_delete').click(function(){

   
    
layer_popup($('.delete_check'));
});

$('#btn_deleteCom').click(function(){

var record_code = Global_Var.userInfo.curr_record_code;

if($('.activity_post').hasClass('state_activity')){
    $.ajax({
          type : "POST",
          url : "/hoodify/delete_activity_record.php",
          data : {
                  'record_code': record_code,
              },
          success : function(res){
          
            if(res=="success"){

                $('.mylist').empty();

                    $.ajax({
                                type : "POST",
                                url : "/hoodify/get_user_activity_record.php",
                                data : {
                                        'activity_code': Global_Var.userInfo.curr_activity_code,
                                    },
                                dataType : 'json',
                                success : function(res){
                                    
                                    for (var i = 0; i < res.length; i++) {

                                        
                                        var record = res[i];
                                        console.log(record);
                                        $('<p>', {
                                            text: record.title,

                                            }).css({
                                            "padding": "12px",
                                            "width": "90%",
                                            "fontWeight": "bold",
                                            "borderBottom": "1px solid #D8D8D8",
                                        
                                        }).hover(function() {
                                        $(this).css("background-color", "#bad8f2");
                                        }, function(){
                                        $(this).css("background-color", "white");
                                        }).click(((record) => function (e){

                                            console.log(record[0]);
                                            Global_Var.userInfo.curr_record_code = record.user_activity_code;

                                            $('.popup_activity_record_title').text(record.title);
                                            $('.popup_activity_record_cont').text(record.record);


                                            layer_popup($('.activity_post'));



                                        })(record)).appendTo($('.mylist'));
                                    }
                                },
                                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                    alert("통신 실패.")
                                }
                            });



                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');

            }
            else{

                console.log('fail');
            }

          },
          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
              alert("통신 실패.")
          }
          });
}
else if($('.activity_post').hasClass('state_item')){
    $.ajax({
          type : "POST",
          url : "/hoodify/delete_item_record.php",
          data : {
                  'record_code': record_code,
              },
          success : function(res){
          
            if(res=="success"){


                $('.mylist_item').empty();
                
                $.ajax({
                            type : "POST",
                            url : "/hoodify/get_user_item_record.php",
                            data : {
                                    'item_code': Global_Var.userInfo.curr_item_code,
                                },
                            dataType : 'json',
                            success : function(res){
                                
                                for (var i = 0; i < res.length; i++) {

                                    var record = res[i];
                                    $('<p>', {
                                        text: record.title,

                                        }).css({
                                        "padding": "12px",
                                        "width": "90%",
                                        "fontWeight": "bold",
                                        "borderBottom": "1px solid #D8D8D8",
                                    
                                    }).hover(function() {
                                    $(this).css("background-color", "#bad8f2");
                                    }, function(){
                                    $(this).css("background-color", "white");
                                    }).click(((record) => function (e){

                                        console.log(record.record_code);
                                        Global_Var.userInfo.curr_record_code = record.user_item_code;

                                        $('.popup_activity_record_title').text(record.title);
                                        $('.popup_activity_record_cont').text(record.record);

                                        layer_popup($('.activity_post'));



                                    })(record)).appendTo($('.mylist_item'));
                                }
                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                alert("통신 실패.")
                            }
                        });


                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');

            }
            else{

                console.log('fail');
            }

          },
          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
              alert("통신 실패.")
          }
          });
}
else if($('.activity_post').hasClass('state_skill')){

    $.ajax({
          type : "POST",
          url : "/hoodify/delete_skill_record.php",
          data : {
                  'record_code': record_code,
              },
          success : function(res){
          
            if(res=="success"){


                $('.mylist_skill').empty();
                
                $.ajax({
                            type : "POST",
                            url : "/hoodify/get_user_skill_record.php",
                            data : {
                                    'skill_code': Global_Var.userInfo.curr_skill_code,
                                },
                            dataType : 'json',
                            success : function(res){
                                
                                for (var i = 0; i < res.length; i++) {

                                    var record = res[i];
                                    $('<p>', {
                                        text: record.title,

                                        }).css({
                                        "padding": "12px",
                                        "width": "90%",
                                        "fontWeight": "bold",
                                        "borderBottom": "1px solid #D8D8D8",
                                    
                                    }).hover(function() {
                                    $(this).css("background-color", "#bad8f2");
                                    }, function(){
                                    $(this).css("background-color", "white");
                                    }).click(((record) => function (e){

                                        console.log(record.record_code);
                                        Global_Var.userInfo.curr_record_code = record.user_skill_code;

                                        $('.popup_activity_record_title').text(record.title);
                                        $('.popup_activity_record_cont').text(record.record);

                                        layer_popup($('.activity_post'));



                                    })(record)).appendTo($('.mylist_skill'));
                                }
                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                alert("통신 실패.")
                            }
                        });


                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');

            }
            else{
                console.log(res);
                console.log('fail');
            }

          },
          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
              alert("통신 실패.")
          }
          });



}




});





/////////////////////////////////////////////////////////////////////////////////////
// record 수정하기 버튼

$('.btn_modify').click(function(){
    var record_title = $('.popup_activity_record_title').text();
    var record_cont = $('.popup_activity_record_cont').text();
    console.log(record_title);
    $('.record_title_modify').val(record_title);
    $('.record_cont_modify').val(record_cont);
    
    layer_popup($('.modify_record_layer'));
});


/////////////////////////////////////////////////////////////////////////////////////
// activity record 리스트 갱신

function refresh_activity_record_list(){


$('.mylist').empty();
            $.ajax({
                        type : "POST",
                        url : "/hoodify/get_user_activity_record.php",
                        data : {
                                'activity_code': Global_Var.userInfo.curr_activity_code,
                            },
                        dataType : 'json',
                        success : function(res){
                            
                            for (var i = 0; i < res.length; i++) {

                                var record = res[i];
                                $('<p>', {
                                    text: record.title,

                                    }).css({
                                    "padding": "12px",
                                    "width": "90%",
                                    "fontWeight": "bold",
                                    "borderBottom": "1px solid #D8D8D8",
                                
                                }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                $(this).css("background-color", "white");
                                }).click(((record) => function (e){

                                    $('.popup_activity_record_title').text(record.title);
                                    $('.popup_activity_record_cont').text(record.record);

                                    layer_popup($('.activity_post'));



                                })(record)).appendTo($('.mylist'));
                            }
                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });
            

}

/////////////////////////////////////////////////////////////////////////////////////
// item record 리스트 갱신

function refresh_item_record_list(){

$('.mylist_item').empty();

$.ajax({
            type : "POST",
            url : "/hoodify/get_user_item_record.php",
            data : {
                    'item_code': Global_Var.userInfo.curr_item_code,
                },
            dataType : 'json',
            success : function(res){
                
                for (var i = 0; i < res.length; i++) {

                    var record = res[i];
                    $('<p>', {
                        text: record.title,

                        }).css({
                        "padding": "12px",
                        "width": "90%",
                        "fontWeight": "bold",
                        "borderBottom": "1px solid #D8D8D8",
                    
                    }).hover(function() {
                    $(this).css("background-color", "#bad8f2");
                    }, function(){
                    $(this).css("background-color", "white");
                    }).click(((record) => function (e){

                        $('.popup_activity_record_title').text(record.title);
                        $('.popup_activity_record_cont').text(record.record);

                        layer_popup($('.activity_post'));



                    })(record)).appendTo($('.mylist_item'));
                }
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

}

/////////////////////////////////////////////////////////////////////////////////////
// skill record 리스트 갱신

function refresh_skill_record_list(){

$('.mylist_skill').empty();

$.ajax({
            type : "POST",
            url : "/hoodify/get_user_skill_record.php",
            data : {
                    'skill_code': Global_Var.userInfo.curr_skill_code,
                },
            dataType : 'json',
            success : function(res){
                
                for (var i = 0; i < res.length; i++) {

                    var record = res[i];
                    $('<p>', {
                        text: record.title,

                        }).css({
                        "padding": "12px",
                        "width": "90%",
                        "fontWeight": "bold",
                        "borderBottom": "1px solid #D8D8D8",
                    
                    }).hover(function() {
                    $(this).css("background-color", "#bad8f2");
                    }, function(){
                    $(this).css("background-color", "white");
                    }).click(((record) => function (e){

                        $('.popup_activity_record_title').text(record.title);
                        $('.popup_activity_record_cont').text(record.record);

                        layer_popup($('.activity_post'));



                    })(record)).appendTo($('.mylist_skill'));
                }
            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

}





/////////////////////////////////////////////////////////////////////////////////////
// record 수정 완료 버튼

$('.btn_modify_com').click(function(){
   
    var record_code = Global_Var.userInfo.curr_record_code;
    var record_title = $('.record_title_modify').val();
    var record_cont = $('.record_cont_modify').val();
    var public_state;
    if($('.public_check').is(':checked')){
        public_state = 1;

    }else{
        public_state = 0;

    };

    console.log("rc= "+record_code+"  rt= "+record_title+"  rcnt= "+record_cont);

    if($('.record_title_modify').val().length<2){

    alert("제목을 입력하세요");

    }

    else if($('.record_cont_modify').val().length<5){
    alert("내용을 입력하세요");
    }
    else{

    //수정하기 
    if($('.modify_record_layer').hasClass('state_activity')){

            $.ajax({
            type : "POST",
            url : "/hoodify/modify_record_activity.php",
            data : {
                    'record_code': record_code,
                    'record_title' : record_title,
                    'record_cont' : record_cont,
                    'public_state' : public_state,
                },
            success : function(res){
            console.log(res);
            if(res=="success"){



                $('.popup_activity_record_title').text(record_title);
                $('.popup_activity_record_cont').text(record_cont);

                // 수정시 activity record 리스트 갱신하기
                
                refresh_activity_record_list();




            }

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
            });

            }
            else if($('.modify_record_layer').hasClass('state_item')){

                $.ajax({
                type : "POST",
                url : "/hoodify/modify_record_item.php",
                data : {
                        'record_code': record_code,
                        'record_title' : record_title,
                        'record_cont' : record_cont,
                        'public_state' : public_state,
                    },
                success : function(res){
                console.log(res);
                if(res=="success"){

                    $('.popup_activity_record_title').text(record_title);
                    $('.popup_activity_record_cont').text(record_cont);

                    // 수정시 item record 리스트 갱신하기
                    
                    refresh_item_record_list();
                    





                }
                else{
                    console.log('실패');
                }

                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });


            }
            else if($('.modify_record_layer').hasClass('state_skill')){

                $.ajax({
                type : "POST",
                url : "/hoodify/modify_record_skill.php",
                data : {
                        'record_code': record_code,
                        'record_title' : record_title,
                        'record_cont' : record_cont,
                        'public_state' : public_state,
                        
                    },
                success : function(res){
                console.log(res);
                if(res=="success"){

                    $('.popup_activity_record_title').text(record_title);
                    $('.popup_activity_record_cont').text(record_cont);

                    // 수정시 item record 리스트 갱신하기
                    
                    refresh_skill_record_list();
                    





                }
                else{
                    console.log('실패');
                }

                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

            }

            $('.modify_record_layer').fadeOut('fast');



    }

            


});





///////////////////////////////////////////////////////////////////////////////
function layer_popup(el){


    var $el = $(el);    //레이어의 id를 $el 변수에 저장

    var $elWidth = ~~($el.outerWidth()),
        $elHeight = ~~($el.outerHeight()),
        docWidth = $(document).width(),
        docHeight = $(document).height();



    // 화면의 중앙에 레이어를 띄운다.
    if ($elHeight < docHeight || $elWidth < docWidth) {
        $el.css({
            marginTop: -$elHeight /2,
            marginLeft: -$elWidth/2
        })
        } else {
        $el.css({top: 0, left: 0});
        }

        $el.find('.btn_layerClose').click(function(){
        $el.fadeOut("fast");



        return false;
        });


        $el.css("display","flex").hide().fadeIn("fast");

    }





















            }



            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

    })


    



</script>





