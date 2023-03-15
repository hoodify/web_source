

<html>
<head>
    <meta charset="euc-kr">
    <title>후디파이</title>
    <script src="/test/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>

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


header{ width: 100%; height: 33px; background-color: rgba( 0, 0, 0, 0.6 ); }
footer{ width: 100%; height: 100px; background-color: rgba( 0, 0, 0, 0.6 ); }

.pop-layer .pop-container {
  width: 100%;
  height: 100%;
}


.pop-layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 1100px;
  height: 750px;
  background-color: #fff;
  border: 2px solid black;
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
  width: 550px;
  height: 800px;
  background-color: #fff;
  border: 2px solid black;
  z-index: 1000;
  border-radius: 12px;
}

.modify_record_layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 550px;
  height: 800px;
  background-color: #fff;
  border: 2px solid black;
  z-index: 1008;
  border-radius: 12px;
}



.leftCont{

flex:7;
margin-right: 20px;
border-right: 1px solid black;

}
.rightCont{

flex:3;


}

.Dhorizontal{
 display: flex;
 width: 96%;
 height: 92%;
 margin: 2% 2% 0 2%;

}

.identity_img_container{
  float: left;
  width: 100px;
  height: 100px;
}
.pop-conts{

height: 25%;
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
  width: 85px;
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
height: 66%;
margin: 3%;
border: 1px solid gray;

}



.Ilist{
height: 66%;
margin: 3%;
display: none;
border: 1px solid gray;
vertical-align: middle;
flex-direction: column;

}




.Slist{
height: 66%;
margin: 3%;
display: none;
border: 1px solid gray;
}

.etc_cont{
height: 66%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
}


.setting_cont{
height: 66%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
}

.btn-r {
  width: 96%;
  height: 5%;
  border-top: 1px solid #304a8a;
  text-align: right;
  position: absolute;
  margin-left: 2%;
  margin-right: 2%;
  bottom: 0;    
  display: flex;
  flex-direction: row-reverse;
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

.itemActive{
  background-color: #bad8f2;
}

.activity_post{
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 550px;
  height: 800px;
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
 }


</style>


<body>
    <header></header>
        
        <div id='profile' style='display:flex; justify-content: space-between;align-items: center; background-color:gray; height:5%; padding:20px;'>

        <p></p>
        
        <div id='top_menu' style='display:flex;'>
            <p style='margin-right:20px;'>창고 </p>
            <p style='margin-right:20px;'>검색 </p>
        </div>
    </div>

        <div style="width:100%;"> 
            <div id='main_list' style='height:70%; margin:20px;'>
                

            </div>
        </div>
    
    <footer></footer>
    <div id="layer1" class="pop-layer">
      <div class="pop-container">


        <div class = "Dhorizontal">
          <div class = "leftCont">
            <img class = "identity_img_container"></img>


            <div class="pop-conts" id = "cont">

              <h4 class = "identity_title_container"></h4>
              <p class = "identity_desc_container"></p>

              <div class="bar-menu" id="barMenu1">
                <ul class="menu-body">
                  <li class ="mli activity active">Activity</li>
                  <li class ="mli item">Item</li>
                  <li class ="mli skill">Skill</li>
                  <li class = "mli setting">setting</li>
                </ul>
              </div>


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

            <div class = "LBC etc_cont etc">
            </div>


            <div class = "LBC setting_cont setting">
                <div class="move_store " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 창고로 ▶  </div>

                <div class="delete_identity " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 삭제 ▶   </div>

            </div>

          </div>
          <div class = "rightCont">
            <div class = "RC RCactivity">
              <h3 class = "mylistT"> </h3>
              <p class = "mylistC" style='margin-bottom:15px;'> </p>
              <hr/>
              <ul class="mylist"> </ul>
              <div id = 'addbtn_container'></div>
            </div>

            <div class = "RC RCitem">
              <h3 class = "mylistT_item"> </h3>
              <p class = "mylistC_item" style='margin-bottom:15px;'> </p>
              <hr/>
              <ul class="mylist_item"> </ul>
              <div id = 'addbtn_container_item'></div>

            </div>
            <div class = "RC RCskill">
                <h3 class = "mylistT_skill"> </h3>
              <p class = "mylistC_skill" style='margin-bottom:15px;'> </p>
              <hr/>
              <ul class="mylist_skill"> </ul>
              <div id = 'addbtn_container_skill'></div>



            </div>

          </div>

        </div>

        <div class="btn-r">
          <div class="btn_layerClose generalBtn">닫기</div>
        </div>

      </div>
    </div>


    <div id="layer1" class="add_record_layer state_activity">
      <div class="pop-container" style="width:100%">

            <div style="display:flex;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:150px; width:150px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc" style="margin:12px;"> activity desc </p>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; height:70%">
                <textarea class="record_title" placeholder="제목을 입력하세요" style="font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px;;"></textarea>    
                <textarea class="record_cont" placeholder="내용을 입력하세요" style="font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px; height:80%; padding:8px;"></textarea>

            </div>


           <div class="btn-r">
           <div class="btn_layerClose generalBtn">닫기</div>
           <div class="btn_add_record generalBtn">추가</div>
            
           </div>

       </div>
     </div>



    <div class = "activity_post state_activity" style= "flex-direction: column;  border: 2px solid black; border-radius: 12px;">
        

            <div style="display:flex;">
                <img class = "popup_activity_img2" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:150px; width:150px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title2" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc2" style="margin:12px;"> activity desc </p>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; height:75%">
                <h4 class="popup_activity_record_title" style="margin:25px;"></h4>  

                <p class="popup_activity_record_cont" style="margin:25px;">tt</p>
                

            </div>

    

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
      <div class="btn_modify generalBtn">수정</div>
      <div class="btn_delete generalBtn">삭제</div>
    </div>

  </div>


  <div id="layer1" class="modify_record_layer state_activity">
      <div class="pop-container" style="width:100%">

            <div style="display:flex;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:150px; width:150px;">
                <div style="display: flex; flex-direction: column; ">
                    <h4 class="popup_activity_title" style="margin:12px;"> activity title</h4>
                    <p class="popup_activity_desc" style="margin:12px;"> activity desc </p>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; height:70%">
                <textarea class="record_title_modify" placeholder="제목을 입력하세요" style="font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px;;"></textarea>    
                <textarea class="record_cont_modify" placeholder="내용을 입력하세요" style="font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px; height:80%; padding:8px;"></textarea>

            </div>


           <div class="btn-r">
           <div class="btn_layerClose generalBtn">닫기</div>
           <div class="btn_modify_com generalBtn">수정</div>
            
           </div>

       </div>
     </div>






  <div class="add_check">
         <div style="margin-top:5%; margin-left:5%;">  추가하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_addCom">확인</div>
        </div>
    </div>

    <div class="delete_check">
         <div style="margin-top:5%; margin-left:5%;">  삭제하시겠습니까? </div>
         <div class="btn-r" style="margin-bottom: 25px;">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_deleteCom">확인</div>
        </div>
    </div>


</body>


<script>

    var curr_identity_code;

    /////////////////////////////////////////////////////////////////////////////////////////////////
   



    /////////////////////////////////////////////////////////////////////////////////////////////////
  

    $(".RCitem").css({
          display: "none",
        });
    $(".RCskill").css({
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


          else if($(this).hasClass("setting")){
          $(".setting_cont").css({
              display: "block",
            });

          }
        })

////////////////////////////////////////////////////////////////////////////////////

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





    /////////////////////////////////////////////////////////////////////////////////////////////////
    // 유저 정보를 바탕으로 해당 유저의 정체성 리스트 불러오기
    // 유저 정보는 세션을 통해 받기
    // join sql
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

        'curr_record_code' : null,


    }
    
    
   
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


                                            console.log(identity.identity_code);
                                            $('.Clist').empty();
                                            $('.Ilist').empty();
                                            $('.Slist').empty();
                                            
                                            $(".mylistT").empty();
                                            $(".mylistC").empty();
                                            $('.mylist').empty();

                                            $(".mylistT_item").empty();
                                            $(".mylistC_item").empty();
                                            $('.mylist_item').empty();

                                            $(".mylistT_skill").empty();
                                            $(".mylistC_skill").empty();
                                            $('.mylist_skill').empty();


                                            $('#addbtn_container').empty();
                                            $('#addbtn_container_item').empty();


                                            $('.identity_img_container').attr("src",identity.identity_img );
                                            $('.identity_title_container').text(identity.identity_name);
                                            $('.identity_desc_container').text("\u00a0"+"\u00a0"+identity.identity_desc);

                                            
                                            Global_Var.userInfo.curr_identity_code = identity.identity_code;


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
                                                             console.log(activity);
                                                            var list_container = $("<div>", {
                                                                }).css({
                                                                    width: "100%",
                                                                    display: "inline-flex",
                                                                    alignItems: "center",
                                                                    borderBottom: "1px solid #D8D8D8",

                                                                    }).click(((activity) => function (e) {

                                                                        //현재 창의 identity의 acitivity 
                                                                        console.log(activity);
                                                                        $('.mylist').empty();
                                                                        $('#addbtn_container').empty();

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
                                                                                                console.log(record);

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
                                                            console.log(item);
                                                            var list_container = $("<div>", {
                                                                }).css({
                                                                    width: "100%",
                                                                    display: "inline-flex",
                                                                    alignItems: "center",
                                                                    borderBottom: "1px solid #D8D8D8",

                                                                    }).click(((item) => function (e) {

                                                                        //현재 창의 identity의 item
                                                                        console.log(item);
                                                                        $('.mylist_item').empty();
                                                                        $('#addbtn_container_item').empty();

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
                                                    console.log(skill);
                                                    
                                                    var list_container = $("<div>", {
                                                        }).css({
                                                            width: "100%",
                                                            display: "inline-flex",
                                                            alignItems: "center",
                                                            borderBottom: "1px solid #D8D8D8",

                                                            }).click(((skill) => function (e) {

                                                                //현재 창의 identity의 skill
                                                                console.log(skill);
                                                               // $('.mylist_item').empty();
                                                               // $('#addbtn_container_item').empty();

                                                                $('.mylistT_skill').text(skill.skill_name);
                                                                $('.mylistC_skill').text("\u00a0"+"\u00a0"+skill.skill_desc);
                                                                $('.add_record_layer').fadeOut('fast');
                                                                
                                                                // 해당 skill 전역 변수 설정
                                                                Global_Var.userInfo.curr_skill_code = skill.skill_code;

                                                                $('.contents_item.skill').removeClass("itemActive").css("background-color", "white");
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


    //////////////////////////////////////////////////////////////////////////////
    // 레코드 추가하기 버튼


    $('.btn_add_record').click(function(){

        // wwwwwwwwwwwwwwwww // 
        // 글자 수 체크 해서 
        // 제목을 입력하세요
        // 내용을 입려하세요 popup

        layer_popup('.add_check');

    })

    $('#btn_addCom').click(function(){

        var record_title = $('.record_title').val();
        var record_cont = $('.record_cont').val();
        var curr_identity_code = Global_Var.userInfo.curr_identity_code;
        var curr_activity_code = Global_Var.userInfo.curr_activity_code;
        var curr_item_code = Global_Var.userInfo.curr_item_code;



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

       
        
layer_popup('.delete_check');
});

$('#btn_deleteCom').click(function(){

    var record_code = Global_Var.userInfo.curr_record_code;

    if($('.activity_post').hasClass('state_activity')){
        // activity record 삭제 php
        console.log('activity');
    }
    else if($('.activity_post').hasClass('state_item')){
        console.log('item');
    }
    else if($('.activity_post').hasClass('state_skill')){

            // 남겨두기
    }

    $('.activity_post').fadeOut('fast');
    $('.delete_check').fadeOut('fast');
    

});





/////////////////////////////////////////////////////////////////////////////////////
// record 수정하기 버튼

    $('.btn_modify').click(function(){
        var record_title = $('.popup_activity_record_title').text();
        var record_cont = $('.popup_activity_record_cont').text();
        console.log(record_title);
        $('.record_title_modify').val(record_title);
        $('.record_cont_modify').val(record_cont);
        
        layer_popup('.modify_record_layer');
    });


/////////////////////////////////////////////////////////////////////////////////////
// record 수정 완료 버튼

    $('.btn_modify_com').click(function(){
       
        var record_code = Global_Var.userInfo.curr_record_code;
        var record_title = $('.record_title_modify').val();
        var record_cont = $('.record_cont_modify').val();

        console.log("rc= "+record_code+"  rt= "+record_title+"  rcnt= "+record_cont);

        //수정하기 
        if($('.modify_record_layer').hasClass('state_activity')){

            $.ajax({
            type : "POST",
            url : "/hoodify/modify_record_activity.php",
            data : {
                    'record_code': record_code,
                    'record_title' : record_title,
                    'record_cont' : record_cont,
                },
            success : function(res){
              console.log(res);
              if(res=="success"){



                $('.popup_activity_record_title').text(record_title);
                $('.popup_activity_record_cont').text(record_title);

                // 수정시 activity record 리스트 갱신하기
                
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
                    },
                success : function(res){
                console.log(res);
                if(res=="success"){

                    $('.popup_activity_record_title').text(record_title);
                    $('.popup_activity_record_cont').text(record_title);

                    // 수정시 item record 리스트 갱신하기
                    
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

            // 남겨두기
        }
        
        $('.modify_record_layer').fadeOut('fast');


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




</script>





