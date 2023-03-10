

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
  border: 3px solid #3571B5;
  z-index: 1000;
}

.pop-layer p.ctxt {
  color: #666;
  line-height: 25px;
}

.leftCont{

flex:7;
margin-right: 20px;
border-right: 1px solid #304a8a;

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
border: 1px solid #93b0bc;

}



.Ilist{
height: 66%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
vertical-align: middle;
flex-direction: column;

}




.Slist{
height: 66%;
margin: 3%;
display: none;
border: 1px solid #93b0bc;
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
  width: 1100px;
  height: 750px;
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
              <p class = "mylistC" style='margin-bottom:15px; border-Bottom: 1px solid #D8D8D8;'> </p>

              <ul class="mylist"> </ul>
              <div class="addbtn"  style="width: 80px; text-decoration-line : none; color: #3f5a9d; font-weight: bold; cursor:pointer; margin-top:20px;"> 추가하기 </div>
            </div>
            <div class = "RC RCitem">

              <img class = "itemImgFrame"></img>
              <h3 class = "itemTitleFrame"></h3>
              <p class = "itemTagFrame"></p>
              <p class = "itemDescFrame"></p>



            </div>
            <div class = "RC RCskill">
            </div>

          </div>

        </div>

        <div class="btn-r">
          <div class="btn_layerClose generalBtn">닫기</div>
        </div>

      </div>
    </div>


    <div class = "activity_post">
        

        <h2 class = "activity_title"> </h2>
        <p class = "activity_desc">- </p>

   
    <h3 class = 'activity_post_title'> </h3>
    <p class = 'activity_post_cont'> </p>
    

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
      <div class="btn-modify generalBtn">수정</div>
      <div class="btn-delete generalBtn">삭제</div>
    </div>

  </div>


</body>


<script>

    var curr_identity_code;



    /////////////////////////////////////////////////////////////////////////////////////////////////

    $(".RC").css({
          display: "block",
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

          }

          else if($(this).hasClass("item")){

            $(".Ilist").css({
              display: "flex",
            });
            $(".RCitem").css({
              display: "block",
            });

          }

          else if($(this).hasClass("skill")){
          $(".Slist").css({
              display: "block",
            });
          $(".RCskill").css({
              display: "block",
            });
          }


          else if($(this).hasClass("setting")){
          $(".setting_cont").css({
              display: "block",
            });

          }
        })

    /////////////////////////////////////////////////////////////////////////////////////////////////
    // 유저 정보를 바탕으로 해당 유저의 정체성 리스트 불러오기
    // 유저 정보는 세션을 통해 받기
    // join sql
    // 활성화된 정체성인지 확인 > db에 attribute 추가해야함

    
    
   
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

                                            $('.identity_img_container').attr("src",identity.identity_img );
                                            $('.identity_title_container').text(identity.identity_name);
                                            $('.identity_desc_container').text("\u00a0"+"\u00a0"+identity.identity_desc);


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

                                                                    //  borderBottom: "2px solid #93b0bc",

                                                                    }).click(((activity) => function (e) {

                                                                        //클릭한 활동 이벤트
                                                                        // 
                                                                        console.log(activity);
                                                                        $('.mylist').empty();

                                                                        $('.mylistT').text(activity.activity_name);
                                                                        $('.mylistC').text("\u00a0"+"\u00a0"+activity.activity_desc);
                                                                        

                                                                        $('.contents_item').removeClass("itemActive").css("background-color", "white");
                                                                        $(this).css("background-color", "#bad8f2");
                                                                        $(this).addClass("itemActive");

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

                                                                                                layer_popup($('.activity_post'));



                                                                                            })(record)).appendTo($('.mylist'));


                                                                                        }



                                                                                    },
                                                                                    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                                                        alert("통신 실패.")
                                                                                    }
                                                                                });






                                                                    })(activity)).hover(function() {
                                                                            $(this).css("background-color", "#bad8f2");
                                                                        }, function(){
                                                                            if($(this).hasClass("itemActive")){
                                                                            $(this).css("background-color", "#bad8f2");
                                                                            }
                                                                            else{
                                                                            $(this).css("background-color", "white");
                                                                            }
                                                                        }).addClass("contents_item").appendTo($('.Clist'));


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





