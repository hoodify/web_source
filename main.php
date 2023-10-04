

<html>
<head>
    <meta charset="euc-kr">
    <meta https-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>후디파이. 세상의 모든 정체성</title>

    <link rel ='stylesheet' href="https://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpClientId=6arafnvdqh"></script>

    

    
    

    
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
    
    

    <script type="text/javascript" src="/hoodify/src/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

    <link rel="stylesheet" href="/hoodify/src/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    
    
    <link rel="icon" href="/hoodify/img/identity/hooodify_mini_round.png">



    
</head>
<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
    background-color: #f0f2f4;
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
  min-width: 900px;
  min-height: 750px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 9999px;
}

.indivisual_record_layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  background-color: #fff;
  border: 3px solid black;
  z-index: 1000;
  border-radius: 12px;
  min-width: 900px;
  min-height: 750px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px 9999px;
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
  background-color: #c6d0db;
  border: 3px solid black;
  z-index: 1005;
  border-radius: 12px;
  width: 460px;
  height: 200px;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px 9999px;

  transition-property: height, top;/* 어떤 css 프로퍼티를 transition할지 지정 */
    transition-duration: 0.8s, 0.8s; 
}

.modify_record_layer {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  background-color: #fff;
  border: 3px solid black;
  z-index: 1008;
  border-radius: 12px;
  width: 500px;
  height: 700px;
  
  justify-content: center;
}
  


.leftCont{

flex:4;
margin-right: 20px;
border-right: 1px solid black;
min-width: 400px;

}
.rightCont{

flex:7;
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
  width: 132px;;
  height: 132px;;
  border-radius: 35px;  
  border: 8px solid #475169;
}
.pop-conts{

height: 20%;
margin-right: 15px;


}

.bar-menu {
  position: relative;
  overflow: hidden;
  
}

#barMenu1 {
  position: relative;
  top: 10px;
  width: 100%;
}

.bar-menu .menu-body {
  position: relative;
  list-style: none;
  overflow: scroll;
  padding-inline-start: 10px;
  display: flex;
  flex-wrap: wrap;
 
}
.bar-menu .menu-body::-webkit-scrollbar {
    display:none
}

.bar-menu .menu-body .mli {
  min-width: 80px;
  height: 20px;
  padding: 10px;
  width: 14%;
  margin-left: 10px;
  margin-bottom:5px;
  line-height: 20px;
  vertical-align: middle;
  text-align:center;
  border: 2px solid #475169;
  border-radius: 10px;
  display: inline-block;
  cursor: pointer;
}

.bar-menu .menu-body .mli:hover {
  background-color: #475169;
  color: #fff;
}

.bar-menu .menu-body .mli.active {
  background-color: #475169;
  color: #fff;
}


.Clist{

display: block;
margin: 3%;
border: 1px solid gray;

}



.Ilist{
margin: 3%;
display: none;
border: 1px solid gray;
vertical-align: middle;
flex-direction: column;

}




.Slist{
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
  border-top: 1px solid #495364;
  text-align: right;
  bottom: 10px;    
  display: flex;
  position: absolute;
  flex-direction: row-reverse;
  height:30;
  margin-top:10px;
}


.category_btn{
    
    border-radius: 12px;
    margin-top:12px;
}

.generalBtn {
  height: 25px;
  padding: 0 14px 0;
  border: 1px solid #495364;
  background-color: #495364;
  font-size: 13px;
  color: #fff;
  line-height: 25px;
  margin-left:10px;
  text-decoration: none;
  cursor:pointer;
}
.generalBtn:hover {
  border: 1px solid #091940;
  background-color: #313843;
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
  width: 500px;
  height: 700px;
  z-index: 1002;
  background-color: #fff;
  border: 3px solid #3571B5;
}

.public_record_post{
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 500px;
  height: 700px;
  z-index: 1002;
  background-color: #fff;
  border: 3px solid #3571B5;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 0px 9999px;
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
             width: 300px;
             height: 120px;
             z-index: 1009;
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
             width: 300px;
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
             width: 450px;
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
             width: 300px;
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
        width: 500px;
        height: 50%;
        z-index: 1002;
        background-color: white;
        border-radius:10px;
        border: 3px solid black;
}

#profile_message_layer{
             position: fixed;
             display: none;
             width: 480px;
             height: 220px;
             z-index: 1020;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             justify-content: center;
 }

 .profile_nickname_layer{
             position: fixed;
             display: none;
             width: 350px;
             height: 170px;
             z-index: 1022;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;
             justify-content: center;
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
             width: 600px;
             height: 800px;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1009;
             border-radius: 8px;

           }

           
.search_result_identity::-webkit-scrollbar {
    display:none
}

.to_search_list{
    height: 22px;
    font-size: 12px; 
    display: flex; 
    align-items: center; 
    background-color:#495364; 
    cursor:pointer; 
    position:absolute; 
    right:0; 
    margin-right: 30px; 
    padding:5px; 
    border-radius: 8px; 
    color:white;
    
}

.to_search_list:hover {
    background-color: #313843;
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





.mylist_box{
    border-radius: 12px;
    border: 2px solid #475169;
    overflow-y: scroll; 
    height: 420px;
}
.mylist_box::-webkit-scrollbar {
    display:none
}

#others_record::-webkit-scrollbar {
    display:none
}



.LBC{
    border-radius: 12px;
    overflow: hidden;
    height: 330px;
    border: 2px solid #586167;
    overflow-y: scroll; 


}

.LBC::-webkit-scrollbar {
    display:none
}

.find_img_container input[type="file"] {
    position: absolute;
    width: 0;
    height: 0;
    padding: 0;
    overflow: hidden;
    border: 0;
}

.public_record_cont::-webkit-scrollbar {
    display:none
}

.popup_activity_record_cont::-webkit-scrollbar {
    display:none
}

.report_cont_container::-webkit-scrollbar {
    display:none
}

.mylistC_common{

    font-size:13px; 
    font-weight: bold;
    padding: 10px;  
    padding-top: 7px;
    border: 2px solid #475169;
    border-radius: 10px;
    padding-bottom: 25px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    line-height: 2;
    height:  2.5em;
    margin-left:5px;
    text-align: left;
    color:#475169;
    width:360px;
    
    text-decoration: underline gray;
    text-decoration-line: underline;
    text-underline-offset: 6px;
    word-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;


}


.mylistIMG_common{
    width:40px; 
    height:40px;  
    margin-right:10px;  
    border: 2px solid #637193;   
    border-radius: 8px;
}

.mylistT_common{
    font-size: 14px;  
    padding-right: 12px;  
    padding-left: 8px;  
     
    width: fit-content;    

}
/*
    background-color: #637193;   
    border-radius: 5px;    
    color: white;
    border: 1px solid rgb(71, 81, 105);


*/


.mylist_container{
    display: flex; 
    align-items: center; 
    height: 9%;  
}

.popup_activity_title{
    margin-bottom: 4px;
    width: fit-content;
    padding-left: 8px;
    padding-right: 8px;
    font-size: 15px;
    color: #ffffff;
    background-color: #637193;
    border-radius: 9px;
    border: 2px solid #475169;
}

/*

    border-radius: 5px;
    background-color: #637193;
    color: white;
    border: 1px solid rgb(71, 81, 105);

*/

.popup_activity_desc{
    color: #212737;
    margin: 6px;
    padding: 5px;
    font-size: 13px;
    font-weight: bold;
    line-height: 22px;
    min-height: 44px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    text-align: left;
    text-decoration: underline #98A9B4;
    text-decoration-line: underline;
    text-underline-offset: 6px;
    word-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.profile_nickname{
    font-family:TmoneyRoundWindExtraBold; font-size:15px; margin-left:25px;     padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 10px;
    padding-right: 10px;
    margin-bottom: 5px;
    background-color: #475169;
    width: fit-content;
    border-radius: 5px;
    color: white;


}

.identity_title_container{

    padding-top:3px; 
    padding-bottom:3px; 
    padding-left: 10px;  
    padding-right: 10px; 
    margin-bottom:5px; 
    background-color: #475169;  
    width: fit-content;  
    border-radius: 5px; 
    color: white;


}


.identity_desc_container{
    font-size:13px; 
    font-weight: bold;
    padding: 12px; 
    background-color: #e0e6e9;  
    border: 2px solid #475169;
  border-radius: 10px;
    color:#475169;
    padding-top: 6px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    line-height: 2;
    height: 5.6em;
    margin-left:5px;
    text-align: left;
    word-wrap: break-word;
    text-decoration: underline gray;
    text-decoration-line: underline;
    text-underline-offset: 6px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;

    cursor: pointer;

}

.popup_activity_img{
    margin:12px; 
    margin-left:25px;
    margin-top:0px;
    height:100px; 
    width:100px; 
    border-radius: 21px; 
    border: 4px solid #475169;


}

.popup_activity_desc_container{
    
    width: 90%; 
    margin-left:5px; 
    background-color:white;  
    border-Radius: 8px; 
    border: 2px solid #475169;


}

#underway{
    display:none; 
    width: 250px; 
    height:150px; 
    background-color:  white; 
    top: 50%; left: 50%;
    position: fixed;
    z-index: 1010;
    border-radius: 10px;
    border: 3px solid black;
    justify-content: center;

}

#notice{
    display:none; 
    width: 500px; 
    height:350px; 
    background-color:  white; 
    top: 50%; left: 50%;
    position: fixed;
    z-index: 1010;
    border-radius: 10px;
    border: 3px solid black;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 0px 9999px;

}

.mainIdentity{

    opacity: 1 !important;

    background-color: #98a9b4;
    border-bottom: 2px solid rgb(71, 81, 105) !important;

}



table.ui-datepicker-calendar { display:none; }


.profile_introduction{

    cursor:pointer;
    margin-left:15px;
    margin-right:15px; 
    height:120px; 
    padding-left:20px; 
    padding-right:20px; 
    padding-top:10px;  
    padding-bottom:10px;  
    border: 2px solid black; 
    border-radius: 12px;     
    word-break: break-all;
    overflow: scroll;
}
.profile_introduction::-webkit-scrollbar {
    display:none
}


.check_message_layer{
        display: none;
        justify-content: center;
        position: fixed;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 50%;
        z-index: 1002;
        background-color: white;
        border-radius:10px;
        border: 3px solid black;
}

.random_activities::-webkit-scrollbar {
    display:none
}


.daily_check_layer{
        display: none;
        justify-content: center;
        position: fixed;
        top: 50%;
        left: 50%;
        width: 550px;
        height: 600px;
        z-index: 1002;
        background-color: white;
        border-radius:10px;
        border: 3px solid black;
}

.daily_identity_list::-webkit-scrollbar {
    display:none
}

.identity_selected{
  background-color: #bad8f2;
}




</style>


<body>
    <header style="display: flex; align-items: center;  width: 100%; height: 30px; background-color: rgba( 0, 0, 0, 0.85 );  z-index: 1010;    position: relative;">
      <div style="display: flex; align-items: center;">
          <p style="color: white; margin-left:35px; letter-spacing:3px;">   H O O D I F Y </p>


      </div>
    </header>
        


        <div class = 'top_menu_container' style='display:none; justify-content: space-between;align-items: center; background-color: rgba( 47, 58, 78, 0.85); height:5%; padding:20px;'>
         <div style="display:flex; align-items: center;">
            <div class='profile' style='display: flex; align-items: center;' >
                 <img class = 'show_profile' src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px; border-radius:12px;"> 
            
                 <p class = 'nickname' style='cursor:pointer; margin-left:20px; color:whitesmoke'> 프로필 </p> 
            </div>   
                 <div class = "record_analysis"style="margin-left:50px; color:white; cursor:pointer;">
                    <p > 개인 기록 </p>
                </div>
        </div>

        



        <div id='top_menu' style='display:flex;'>
            <p class = 'identity_storage_btn' style='cursor:pointer; margin-right:20px; color:whitesmoke'>창고 </p>
            
            <p class = 'open_search_layer' style='cursor:pointer; margin-right:20px; color:whitesmoke'>검색 </p>
            
            <p class = 'logout_btn' style='cursor:pointer; margin-right:20px; color:whitesmoke'> 로그아웃 </p>
        </div>
        </div>



        <div class = 'public_main' style="align-items: center;  justify-content: center;width: 100%;  background-color: rgba( 47, 58, 78, 0.85); display:none; height: 100%; bottom: 30px;  position: absolute;">
            
                <div class = 'login_account' style="box-shadow: rgba(0, 0, 0, 0.3) 0px 0px 0px 9999px;  height: 450px; width: 400px; display:flex; align-items: center; flex-direction: column; background-color:white;">
                <div style="top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>

                <div style="width: 100%; display: flex; height:50%; margin-top:15px;  flex-direction: column; align-items: center;">
                       
             
                   <img src ="/hoodify/img/identity/hooodify_mini.png" style="width:160px; margin-top: 25px; height:160px; border-radius:20px; margin-left:15px; margin-right:15px; ">
                    <h3 style="margin-top:15px; color:rgba( 0, 0, 0, 0.85 );"> 세상의 모든 정체성.  </h3>
                    <h3 style="margin-top:5px; color:rgba( 0, 0, 0, 0.85 );">  후디파이 </h3>

                </div>

                <div>
              
                <img class = "login_with_kakao" style="cursor: pointer; margin-top: 100px; width:100%; height:50px;" src="/hoodify/img/login/kakao_login_medium_wide.png">

                </div>
                </div>

                
               

            </div>

        </div>

        <div style="width:100%;"> 
            <div>
                     </div>
            
            <div class='main_background' style="width: 100%; display:flex; flex-direction:row; margin-top:15px;">
                <div style="height:70%; width:500px; margin-left:20px; padding-right:20px; padding-bottom:400px; margin-top:10px;     border-right: 1px solid black;  ">
                <div class = "current_identity_name" style="margin-left: 10px; margin-top:15px; margin-bottom:15px; display:none; align-items: center;">
                 <h4 id ="active_num">    </h4>
                 
                 <!--
                 <div style="padding-left:10px; padding-right:10px; padding-top:3px; padding-bottom:3px; border: 2px solid #586167; background-color:white; display:flex;     margin-left: 35px; border-radius: 12px;">
                    <h4 class="state_message" style="color:#5b656c; ">당신은 현재 [</h4> 
                     <h4 id ="current_identity" style="color: #232934"></h4>
                     <h4  class="state_message" style="color:#5b656c;">] 입니다</h4>
                 </div>  
                -->
                 
                </div>
       
                    <div id='main_list' style="flex-direction: column;  overflow: hidden; border-radius: 12px;  border: 2px solid #475169; width:500px;" >
                    </div>
                </div>

                <div class = "user_btn_space" style="margin-top:25px; margin-left:25px; width: 100%;">
                    <div class = 'button_container' style="width:200px; border-radius:8px; border: 2px solid #586167; display:flex; padding:5px; background-color:#c6d0db;">
                        <img id = "daily_check_btn" title="오늘 체크 리스트" src="/hoodify/img/daily_check_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">
                        <img id = "others_record_btn" title="다른 사람들의 기록" src="/hoodify/img/others_record_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">
                        <img id = "others_location_btn" title="내 주위의 사람들" src="/hoodify/img/same_people_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">
                        <img class = "on_construction" src="/hoodify/img/all_list_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">


                    </div>

                    <div id = 'todays_activities_container' style='display:none;flex-direction: column; margin-left:30px; margin-top:25px;  border: 2px solid #475169;  width:90%; height:90%; background-color:white; border-radius:5px;'> 
                         
                    <div style="height:50px; margin:15px; margin-left:25px; display:flex; flex-direction:row;">
                        
                      <p class="show_identity_name" style="font-size:17px; background-color: #475169; width: fit-content; border-radius: 5px; color: white;  height: fit-content; padding: 3px; padding-left:6px; padding-right:6px;"></p>
                     <p class = "show_date" style="font-weight: bold; margin-left:25px;"></p> 
                       
                    </div>
                        <div class = 'todays_activities_list' style="margin:25px; display: flex; width:60%; flex-wrap: wrap;">


                        </div>

                    </div>


                    <div id = 'others_record_container' style='margin-left:50px; margin-top:15px; height: calc(100vh - 350px); display:none;flex-direction: column;'> 
                        <h3 class = 'others_record_mark' style="margin-bottom: 20px;"> 다른 사람들의 활동  </h3>
                        <div id = 'others_record' style='display: flex; flex-wrap: wrap; align-content: flex-start; overflow-y:scroll; height: 100%;'> 
                        </div>
                    </div>

                    <div id = 'others_location_container' style='display:none; margin-left:30px; margin-top:35px;  width:90%; height:90%;'> 
                         <div id="map" style="width:inherit; height:inherit; border-radius:12px; border: 3px solid #586167"></div>

                    </div>

                    



                </div>

            </div>

        </div>


        

    <div class="indivisual_record_layer" >
        <div class="pop-container" style="display: flex;  padding: 20px;  flex-direction: column; width: 100%; height: 100%; align-items: center;">
        <div class='topBar' style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>
            <div style="width: 100%; padding:20px; display:flex; flex-direction:row;     align-items: center;     background-color: rgb(76 85 102);">
                
                <img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 8px; width:45px; height:45px; margin-right:3px; margin-right:15px;"> 
                <h3 style="color: white;">내 활동 기록</h3>
                <div style="margin-left:40px;">
                <div class = 'button_container' style="width:200px; border-radius:8px;  display:flex; padding:5px; background-color:#98a9b4;">
                    <img class = "on_construction" title="월간 기록" src="/hoodify/img/daily_check_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">
                    <img class = "on_construction" title="개인 종합 기록" src="/hoodify/img/indivisual_log_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">
                    <img class = "on_construction" src="/hoodify/img/all_list_icon.png" style="height:25px; width:32px; margin-right:10px; cursor:pointer;">


                </div>
            </div>
            </div>
           
            <div class="monthly_report" style="width: 100%;">
                <div style="width: 100%; display:flex; flex-direction:row; margin-left: 15px; margin-top: 20px; "> 
                <h4> 월간 활동 기록 </h4>
                <div class="select_date" style="margin-left: 25px; margin-top: 3px;"> 

                    <input type="text" id ='testDatepicker' style="cursor: pointer; border-radius:5px; font-family: TmoneyRoundWindExtraBold; width:140px; height:27px; padding:3px; padding-left:15px;">

                </div>

                </div>

                <div class = 'report_cont_container' style="width: 100%;     height: 450px; overflow-y: scroll; margin-top:15px;"> 
                    
                    <div class= "most_activity" style="height: 120px; display:flex; margin-top:25px;    align-items: center;"></div>
                    <div class="history_list" style="height:340px; margin-top:55px;     margin-left: 15px;">  
                
                        <div>
                        
                        </div>

                    </div>
                    

                </div>
            </div>

            

            <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            </div>
        </div>
    </div>
    
  
    <div id="layer1" class="pop-layer common_layer">
      <div class="pop-container" style="display: flex;    flex-direction: column;">
      <div class='topBar' style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.85 ); display: flex; align-items: center;"> 
            <p style="color:white; font-size:7px; padding-left: 8px; color: whitesmoke;"> I D E N T I T Y </p>
        </div>

        <div class = "Dhorizontal">
          <div class = "leftCont" style="margin-top: 25px; margin-bottom: 2%; display:flex;     flex-direction: column;">
          <div style="height:22%">
                <div style="display:flex; height:100%;">
                    <img class = "identity_img_container"></img>


                    <div class="pop-conts" id = "cont" style="display:flex; flex-direction: column; width: 75%; margin-left:10px; height: inherit;">

                    <h4 class = "identity_title_container"></h4>
                    <p class = "identity_desc_container"></p>

                    </div>
                </div>

                    <div class = keyword_container style="text-align:right; margin-right:15px; color:gray; font-size:12px; display: flex; justify-content: flex-end;">  </div>
            </div>
                    
           <div style="display:flex;  flex-direction: column; height: 80%; justify-content: flex-end;">
            <div class="bar-menu" id="barMenu1">
                <div class="menu-body">
                  <div class ="mli activity active" style="display:flex; flex-direction:row; align-items: center; justify-content: center;"><img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 4px; width:15px; height:15px; margin-right:3px;"> Activity</div>
                  <div class ="mli item"  style="display:flex; flex-direction:row; align-items: center; justify-content: center;"> <img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 4px; width:15px; height:15px; margin-right:3px;"> Item</div>
                  <div class ="mli skill"  style="display:flex; flex-direction:row; align-items: center; justify-content: center;"> <img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 4px; width:15px; height:15px; margin-right:3px;"> Skill</div>
                  <div class ="mli defect"  style="display:flex; flex-direction:row; align-items: center; justify-content: center;"> <img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 4px; width:15px; height:15px; margin-right:3px;"> Defect</div>
                  <div class = "mli setting"  style="display:flex; flex-direction:row; align-items: center; justify-content: center;"> <img src="/hoodify/img/identity/hooodify_mini.png" style="border-radius: 4px; width:15px; height:15px; margin-right:3px;"> setting</div>
                </div>
              </div>
              


            <div class = "LBC Clist activity">
            </div>
            <div class = "LBC Ilist item">
            </div>

            <div class = "LBC Slist skill">

            </div>
            <div class = "LBC Dlist defect">
            </div>

            <div class = "LBC setting_cont setting">
                <div class="move_to_storage " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 창고로  </div>
                <div class="delete_identity " style="display: block; text-align: left; width: 80px; margin:15px; text-decoration: none; color: black; font-weight: bold; cursor:pointer;"> 삭제하기   </div>
            </div>

            <div class="load_all_list" style="display: flex; justify-content: flex-end;"> 
                <img src="/hoodify/img/all_list_icon.png" style="height:25px; width:32px; margin-right:20px; cursor:pointer;">

            </div>


            </div>
          </div>

         
          <div class = "rightCont">

            <div class = "RC RCplain" style="display: flex; justify-content: center; align-items: center; height: 100%;"> 
                <img src="/hoodify/img/identity/hooodify_mini_gray.png">
            </div>
            <div class = "RC RCactivity" style="display: none;">
                <div class = "mylist_container">
                    <img class = "mylistIMG mylistIMG_common">
                    <h4 class = "mylistT mylistT_common"> </h4>
                </div>
              <p class = "mylistC mylistC_common"> </p>
              
              <div id = 'addbtn_container' style="margin-bottom:15px;"></div>
                <div class = 'mylist_box'>
                 <ul class="mylist" style="height: 100%; width: 100%;">  </ul>
              </div>
            </div>


            <div class = "RC RCitem">
             <div class = "mylist_container">
                <img class = "mylistIMG_item mylistIMG_common">
                <h4 class = "mylistT_item mylistT_common"> </h4>
            </div>
              <p class = "mylistC_item mylistC_common"> </p>
              
              <div id = 'addbtn_container_item' style="margin-bottom:15px;"></div>
              <div class = 'mylist_box'>
                <ul class="mylist_item" style="height: 100%; width: 100%;"> </ul>
                </div>
            </div>


            <div class = "RC RCskill">
            <div class = "mylist_container">
                    <img class = "mylistIMG_skill mylistIMG_common">
                    <h4 class = "mylistT_skill mylistT_common"> </h4>
             </div>
              <p class = "mylistC_skill mylistC_common"> </p>
              
              <div id = 'addbtn_container_skill' style="margin-bottom:15px;"></div>
              <div class = 'mylist_box'>
                 <ul class="mylist_skill" style="height: 100%; width: 100%;"> </ul>
                 </div>
            </div>

            <div class = "RC RCdefect">
            <div class = "mylist_container">
                <img class = "mylistIMG_defect mylistIMG_common">
                <h4 class = "mylistT_defect mylistT_common"> </h4>
                </div>
              <p class = "mylistC_defect mylistC_common"> </p>
              
              <div id = 'addbtn_container_defect' style="margin-bottom:15px;"></div>
               <div class = 'mylist_box' >
                <ul class="mylist_defect" style="height: 100%; width: 100%;"> </ul>
            </div>
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
    
            <div style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> 
                <p style="color:white; font-size:7px; padding-left: 8px; color: whitesmoke;"> 새 기록</p>
            </div>
            <div style="display:flex;  padding-top:32px;  width: 100%;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="">
                <div style="display: flex; flex-direction: column; width: 90%; height: 100%;">
                    
                <div style="display: flex; justify-content: space-between; margin-right:25px; align-items: center;  margin-bottom: 5px;">
                 
                    <h5 class="popup_activity_title"> activity title</h5>
                    <p class="popup_activity_identity" style=" background-color: #475169; width: fit-content; border-radius: 5px;  color: white; font-size: 10px; padding-left: 5px; padding-right: 5px;"> here, identity </p>
             

                </div>
                <div class="popup_activity_desc_container">
                    <p class="popup_activity_desc"> activity desc </p>
</div>

                </div>

            </div>

           <div style="width:95%; height:4%; display: flex; flex-direction: row-reverse; margin-right: 40px; align-items: center; display:none;"> 
                <input type="checkbox"style="margin-left:8px;" class="public_check" name="public_check" id="public_check" checked>
                <label for="public_check" > 공개 </label>
            </div>

            <div style="flex-direction: column; width: 95%;">
                <textarea class="record_title" placeholder="제목을 입력하세요 (2자 이상)" style="display: none; width: inherit;     border: 2px solid #475169; border-radius: 8px; font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px; padding-top: 12px;"></textarea>    
                <textarea class="record_cont" placeholder="내용을 입력하세요 (10자 이상)" style="display: none; width: inherit;  border: 2px solid rgb(71, 81, 105); border-radius: 8px; font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px; height:160px; padding:8px;"></textarea>

            </div>

            <div class = "find_img_container" style="width: 90%; margin-left: 15px; display:none;">
                
                <label class="imgViewArea"  for="u_file" style="height:80px; width:80px; background-color:#6371936e;  border: 2px solid #475169;  border-radius: 8px;  cursor: pointer; display: flex;"  onerror="imgAreaError()"> 
                      <img class="imgArea find_img_area" style="height:80px; width:80px; border-radius: 8px;  border: 2px solid #586167" onerror="this.style.display='none'">
                    </img>
                 </label>
            
                <input type="file" class="find_img"  id="u_file" name="u_file" accept="image/*">
                
            </div>


           <div class="btn-r">

                <div class="btn_layerClose generalBtn">닫기</div>
                <div class="btn_add_title generalBtn" >다음</div>
                <div class="btn_add_content generalBtn" style="display: none;">다음</div>
                <div class="btn_add_img generalBtn" style="display: none;">다음</div>
                <div class="btn_add_record generalBtn" style="display: none;">추가</div>
            
           </div>

       </div>
     </div>



    <div class = "activity_post state_activity" style= "flex-direction: column;  border: 3px solid black; border-radius: 12px; align-items: center;">
    <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    
            <div style="display:flex; padding-top: 32px; width:100%; align-items: center; padding-bottom: 15px;  border-bottom: 2px solid rgb(71, 81, 105);     background-color: #e0e6e9;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png">
                <div style="display: flex; flex-direction: column; width: 90%; height: 100%; ">
                 <div style="display: flex; justify-content: space-between; margin-right:25px;">
                    <h5 class="popup_activity_title"> activity title</h5>
                    <p class="popup_activity_identity" style=" background-color: #475169; width: fit-content; border-radius: 5px;  color: white; padding-bottom:3px; padding-left: 10px; padding-right: 10px;margin-bottom:5px;"> here, identity </p>
                </div>    
                    <div class="popup_activity_desc_container">
                    <p class="popup_activity_desc"> activity desc </p>
                    </div>
                </div>

            </div>

            <div style="display: flex; flex-direction: column; width:100%;" >
            
                <h4 class="popup_activity_record_title" style="margin-left:25px; margin-right:25px;  margin-top:15px; font-size:18px; border-radius: 8px; "></h4>  

<div style="    display: flex;
    justify-content: flex-end;">
    <p class= "record_date" style="color: gray;     width: fit-content; margin-right:25px; font-size:11px;"></p>
    </div>
            <div style="padding: 15px; background-color: #E0E6E9;; margin:20px; border-Radius: 12px; border: 2px solid #475169; height: 65%; max-height: 250px; margin-top: 2px; min-height: 260px;">
                <p class="popup_activity_record_cont" style=" word-break: break-all; height:100%; overflow-y: scroll;"></p>
                </div>

            </div>

            <div style="height:15%; width:100%;">
                <a class = 'post_img' style=" display:flex; height:80px; width:80px;  margin-left:20px;">
                    <img class = 'post_img_s' style="height:80px; width:80px; display:flex; border: 2px solid #586167;  border-radius: 8px;  cursor: pointer;"/>
            
                </a>

            </div>

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
      <div class="btn_modify generalBtn">수정</div>
      <div class="btn_delete generalBtn">삭제</div>
    </div>

  </div>


  <div id="layer3" class="modify_record_layer state_activity">
  <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    
      <div class="pop-container" style="width:100%;  display: flex; flex-direction: column; align-items: center;" >

            <div style="display: flex;  width: 100%;align-items: center; padding-top:32px;">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png">
                <div style="display: flex;  flex-direction: column;  width: 90%; height: 100%;">

                <div style="display: flex; justify-content: space-between; margin-right:25px;">
                    <h5 class="popup_activity_title"> activity title</h5>
                    <p class="popup_activity_identity" style=" background-color: #475169; width: fit-content; border-radius: 5px;  color: white; padding-bottom:3px; padding-left: 10px; padding-right: 10px;margin-bottom:5px;"> here, identity </p>
             
                </div>   
                    <div  class="popup_activity_desc_container">
                    <p class="popup_activity_desc"> activity desc </p>
                </div>


                </div>

            </div>

            <div style="width:95%; height:4%; display: flex; flex-direction: row-reverse; margin-right: 40px;     align-items: center; margin-top: 8px; "> 
                <input type="checkbox"style="margin-left:8px;     margin-top: 2px;" class="public_check_modify" name="public_check_modify" id="public_check_modify" checked>
                <label for="public_check_modify" > 공개 </label>
            </div>


            <div style="display: flex; flex-direction: column; height:70%; display: flex; flex-direction: column; width: 100%;">
                <textarea class="record_title_modify" placeholder="제목을 입력하세요" style="border-radius: 8px; font-family: TmoneyRoundWindRegular; line-height:50%; margin:15px; resize:none; font-size:16px; padding: 8px;;"></textarea>    
                <textarea name ="record_cont_modify" class="record_cont_modify" placeholder="내용을 입력하세요" style="border-radius: 8px; font-family: TmoneyRoundWindRegular;  margin:15px; resize:none; font-size:16px;  padding:8px; min-height:280px;"></textarea>
                <div style="height:15%; width: 100%;">
            
                <div class = "find_img_container" style="width: 100%; margin-left: 20px;">
                
                    <label class="imgViewArea"  for="u_file_t" style="height:80px; width:80px; background-color:rgba( 0, 0, 0, 0.05 );  border-radius: 8px;  cursor: pointer; display: flex;"  onerror="imgAreaError()"> 
                        <img class="imgArea modify_img" style="height:80px; width:80px; border-radius: 8px;  border: 2px solid #586167" onerror="this.style.display='none'">
                        </img>
                    </label>
                
                    <input type="file" class="find_img"  id="u_file_t" name="u_file" accept="image/*">
                
                 </div>

                </div>
            </div>
           

           <div class="btn-r">
           <div class="btn_layerClose generalBtn">닫기</div>
           <div class="btn_modify_com generalBtn">수정</div>
            
           </div>

       </div>
     </div>






  <div class="add_check">
    <div style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> 
        <p style="color:white; font-size:7px; padding-left: 8px; color: whitesmoke;"> 확인 </p>
    </div>
           
         <div style="margin: 25px;  margin-top: 40px; width:100%;">  추가하시겠습니까? </div>
         <div class="btn-r" style="">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_addCom">확인</div>
        </div>
    </div>

    <div class="delete_check">
        <div style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> </div>
         <div style="margin: 25px;  margin-top: 40px; width:100%;">  삭제하시겠습니까? </div>
         <div class="btn-r" style="">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_deleteCom">확인</div>
        </div>
    </div>

    <div class="delete_check_identity">
        <div style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> </div>
         <div style="margin: 25px;  margin-top: 40px; width: 100%;"> 모든 관련 기록들이 삭제됩니다. 삭제하시겠습니까? </div>
         <div class="btn-r">

         <div class="btn_layerClose generalBtn">닫기</div>
         <div class="generalBtn" id="btn_deleteCom_identity">확인</div>
        </div>
    </div>

    <div class="add_identity_check">
        <div style="position:absolute; top:0; width:100%; height:23px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> </div>
         <div style="margin: 25px;  margin-top: 40px; width:100%;">  추가 하시겠습니까? </div>
         <div class="btn-r" style="">

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
        <div style="width: 100%; display:flex; margin-top:20px; margin-bottom:15px;">



            <div class = "find_img_container" style=" margin-left: 8px;">
                <label class = 'imgViewArea imgViewArea_profile' for="profile_img"  style="height:80px; width:80px; border: 3px solid black; background-color:rgba( 0, 0, 0, 0.05 );  border-radius: 15px;  cursor: pointer; display: flex;"  onerror="imgAreaError()"> 
                    <img class="imgArea profile_img_space"  style="height:80px; width:80px; border-radius: 15px;" onerror="this.style.display='none'">
                    </img>
                </label>
                <input type="file" class = "find_img_profile" id="profile_img" name="u_file" accept="image/*">
            </div>
            

         



            <div class = 'set_nickname' style="display:flex; flex-direction: row; height: 40%;  align-items: center; cursor:pointer;">
                <p class = "profile_nickname"> 프로필 이름 </p>
               
            </div>
        </div>

        <div class = "profile_details" style ="display:flex; height: 70%;  flex-direction: column;">
        <div style = "display:flex; flex-direction:row; margin-top:35px; align-items: center;" >
            <h3 style="margin-left:15px; margin-bottom:5px;">소개</h3>
             </div>
           
            <div class ="profile_introduction"> </div>
        </div>
        <div class="btn-r">
        <div class="btn_layerClose generalBtn">닫기</div>

        <div class="apply_profile_change generalBtn" style="display: none;">확인</div>


      </div>
      </div>

    </div>

    <div id ='profile_message_layer'>
    <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
      <div class = "profile_message_layer_container" style="width: 100%; padding:25px;">

      <textarea id="profile_message_text" placeholder="내용을 입력하세요" style="font-family: TmoneyRoundWindRegular;  margin-top:15px; resize:none; font-size:16px; width: 100%; height:120px; padding:8px;"></textarea>
      <div class="btn-r">

        <div class="btn_layerClose generalBtn">닫기</div>
        <div class="set_profile_message generalBtn">확인</div>
      </div>

      </div>


    </div>


    <div class ='profile_nickname_layer'>
    <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
      <div class = "profile_nickname_layer_container" style="width: 100%; padding:25px;">
        <div style="display:flex; flex-direction: row; align-items: center; margin-top:15px; ">
            <textarea id="profile_nickname_text" placeholder="닉네임을 입력하세요" style="font-family: TmoneyRoundWindRegular;  resize:none; font-size:16px; width: 100%; height:38px; padding:8px;"></textarea>
            <div class = "check_nickname generalBtn" style="width:80px;"> 중복 확인 </div>
        </div>
        <p class="check_nickname_message" style="font-size: 12px; display:none;"> 사용 가능한 아이디 표시</p>
      <div class="btn-r" style="width:88%;">

        <div class="btn_layerClose generalBtn">닫기</div>
        <div class="set_profile_nickname generalBtn" style="display:none;">확인</div>
      </div>

      </div>


    </div>






    <div class = "search_layer common_layer">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
    
        
      <div class = "search_layer_container" style="flex-direction: column; display: flex; align-items: center; padding:25px; width: inherit;">
        
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
        <div class = "search_result" style = "margin-top : 20px; overflow-y: scroll; float: left; margin-bottom: 30px;   width: 100%;"> 
    
       
    
    
    </div>

        <div class = "search_result_identity" style = "margin-top : 20px; display:none; flex-direction: column; margin-bottom: 30px; overflow-y: scroll;     width: 90%;"> 
            <div style = "display:flex;  flex-direction: row; margin-top:15px; border-Bottom:1px solid black; padding-bottom:10px; border-top:1px solid black; padding-top:10px;">
            <div style = "display:flex; flex-direction: row;">
                <img class = search_identity_img style = 'width:100px; height:100px; border-radius: 12px;  border: 2px solid #586167'>
                <div style="display: flex; flex-direction: column; margin-left:10px;" >
                    <div style="display: flex; flex-direction: row;  align-items: center; ">
                        <h4 class = "search_identity_name" style = "padding-top:3px; 
    padding-bottom:3px; 
    padding-left: 10px;  
    padding-right: 10px; 
    margin-bottom:5px; 
    background-color: #475169;  
    width: fit-content;  
    border-radius: 5px; 
    color: white;"></h4>
                        <div class = 'add_identity generalBtn' style ="margin-left:25px; border-radius: 8px;"  > 추가 </div>
                        <div class = 'locked' style="border-radius: 8px;"> 보유중 </div>
                    </div>
                        <p class = "search_identity_desc" style="width:80%; margin-top:15px; margin: 6px;  font-size: 13px; font-weight: bold; background-color: #E0E6E9; border: 2px solid #475169; border-radius: 10px; padding: 8px; line-height:2em; color:#475169;"></p>
                        
                </div>
                     <div class = "to_search_list"> 뒤로</div>
                 </div>
             </div>
             <div class = "search_data_container" style="margin: 15px; ">
                
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


    

    <div class = "public_record_post" style= "flex-direction: column;  border: 3px solid black; border-radius: 12px; align-items: center;">
    

            
            

            <div class = 'public_record_level' style="display:flex; width:100%;     height: 80px; align-items: center; background-color: rgb(40 54 80 / 85%);">
                <img class = "record_post_activity_img" src = "/hoodify/img/identity/hooodify_mini.png" style="margin:12px; height:55px; width:55px; border-radius: 9px;">
                <div style="display: flex; flex-direction: column;">
                    <h4 class="record_post_activity_title" style="margin:12px; color:white;"> activity title</h2>
                </div>

            </div>
            
            <div style="display: flex; flex-direction: column; width:100%; height: 65%;"  >
                <h4 class="public_record_title" style="margin:15px; padding:8px; margin-left: 25px; margin-bottom:5px; font-size:22px;  text-decoration:underline; text-underline-position:under;"></h4>  

                <div style= "display: flex;justify-content: flex-end;">

                    <p class="public_record_date" style="color: gray; width: fit-content;  margin-right: 25px;  font-size: 15px;"></p>
                </div>

                <p class="public_record_cont" style="word-wrap: break-word; overflow-y: scroll; margin-left:25px; margin-right:25px; margin-bottom:25px; padding: 15px; height: 75%; background-color:#E0E6E9;; border: 2px solid #586167;  border-radius: 8px;"></p>
                

            </div>
            <div style="width:100%;">


                <a class = 'post_img_p' style=" display:flex; height:80px; width:80px;  margin-left:35px;">
                    <img class = 'post_img_ps' style="height:80px; width:80px; display:flex; border: 2px solid #586167;  border-radius: 8px;  cursor: pointer;"/>
            
                </a>
            </div>




            <div style="width:100%; display: flex; justify-content:flex-end; position: absolute; bottom: 70px;">
                <p class = "public_record_nickname" style="margin-right: 25px;"></p>
            </div>




    

    <div class="btn-r">
      <div class="btn_layerClose generalBtn">닫기</div>
    </div>

        
  </div>


    <div id="underway">
    <div class='topBar' style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> 
     <p style="color:white; font-size:7px; padding-left: 8px; color: whitesmoke;"> ! N O T I C E</p>
    </div>

        <div style="width: 100%; padding:20px; display:flex; margin-top:20px;">
          <img src="/hoodify/img/identity/hooodify_mini.png" style="width:70px; height:70px; margin-right:10px;"> <p> 준비 중입니다! </p>
        </div>
        <div class="btn-r">
            <div class="generalBtn btn_layerClose">확인</div>
        </div>
    </div>

    <div id="notice">
    <div class='topBar' style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.75 ); display: flex; align-items: center;"> 
        <p style="color:white; font-size:7px; padding-left: 8px; color: whitesmoke;"> ! N O T I C E</p>
    </div>

        <div style="width: 100%; padding:25px; display:flex; margin-top:20px;">
          <img src="/hoodify/img/identity/hooodify_mini.png" style="width:70px; height:70px; margin-right:10px;">
           <p style="font-size: 15px; margin-top:5px;"> 
           
                　▶ 현재 <span style="color:cornflowerblue; font-weight:bold"> 테스트 버전</span>으로 개발 중입니다. 불안정한 기능들이 있을 수 있습니다.  <br>
                <br> 　▶ 유저 데이터는 주기적으로 초기화하고 있습니다. <br>
                <br> 　▶ 피드백이나 오류 제보는 <span style="color:cornflowerblue; font-weight:bold">hoodify.crm@gmail.com</span> 으로 보내주시면 반영하겠습니다.

            
            </p>
        </div>
        <div class="btn-r">
            <div class="generalBtn btn_layerClose">확인</div>
        </div>
    </div>


    <div class = "check_message_layer common_layer">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
        <div class = "check_message_layer_container" style="width: 100%; display: flex; justify-content: center;">
            <div style="width: 100%; display:flex; margin-top:20px; margin-bottom:15px; flex-direction: column;">

                
                <div>
                    <p class = "" style="height:30px;  margin: 20px; font-weight:bold"> 추천 활동 </p>
                
                </div>

               
                <div class = "random_activities" style="padding: 15px; padding-bottom: 0px; height: 248px;  overflow: scroll;     display: flex; flex-wrap: wrap; justify-content: center;">
                   
                </div>


                <div style="width: 100%; display:flex; justify-content: flex-end; margin-top:25px;">
                    <img class= 'refresh_random_activities'src="/hoodify/img/refresh.png" style="width:25px; height:25px; margin-right:45px; cursor:pointer;"> 
                </div>
                
            </div>
       

        <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
        </div>
      </div>

    </div>


    <div class = "daily_check_layer common_layer">
        <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 );"> </div>
        <div class = "daily_check_layer_container" style="width: 100%; display: flex; justify-content: center;">
            <div style="width: 100%; display:flex; margin-top:20px; margin-bottom:15px; flex-direction: column;">

                
                <div style="display: flex; align-items: center;  justify-content: space-between;">
                    <p class = "" style="height:30px;  margin: 20px; font-weight:bold"> 오늘의 키워드 </p>
                    <p class = 'selected_identity_count' style="margin-right:25px;"> 0 / 3</p>
                </div>

               
                <div class = "daily_identity_list" style="padding: 15px; padding-bottom: 0px; height: 405px;  overflow: scroll;     display: flex; flex-wrap: wrap; justify-content: center;">
                   
                </div>

            </div>
       

        <div class="btn-r">
            
            <div class="btn_layerClose next_contents generalBtn">닫기</div>
            <div class="btn_todays_identity generalBtn">확인</div>
        </div>
      </div>

    </div>






    <div id="desc_modal" style='display:none;'>

        <div class = 'modal_cont' style="font-family: TmoneyRoundWindRegular;"></div>
    </div>



</body>


<footer style="bottom:0; width: 100%; height: 30px; position : absolute; bottom : 0; background-color: rgba( 0, 0, 0, 0.85 );"></footer>

<script>
    Kakao.init('07f6eafd69281ab56438dbcc4a88c39e');

    
///////////////////////////////////////////////////////////////////////////////////////
// 전역 변수 설정. 현재 활성화된 정체성, 유저, activity 코드에 대한 정보를 담음
Global_Var = {}
Global_Var.userInfo = {

    'curr_identity_code' : null,
    'curr_activity_code' : null,
    'curr_item_code' : null,
    'curr_skill_code' : null,
    'curr_defect_code' : null,
    'curr_record_code' : null,
    'curr_main_identity' : null,

    'profile_check_nickname' : false,
    'profile_check_introduction' : false,
    'profile_check_img' : false,

}

///////////////////////////////////////////////////////////////////////////////////////
// datepick 한글 설정


$.datepicker.setDefaults({
        
        dateFormat: 'yy/mm',
        displayFormat: "yyyy-MM",
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년'
    });

////////////////////////////////////////////////////////////////////////////////////
// 현재 로그인된 유저가 있는지 확인
// 있다면 유저에 해당하는 정보 불러오기
// 없다면 공용 main 페이지 보이기


    $(document).ready(function(){

        $.ajax({
            type : "POST",
            url : "/hoodify/check_main_user.php",

            success : function(res){
                    if(res == "no user"){

                    console.log(res);
                    $('.top_menu_container').css({display: 'none',});
                    $('#main_list').css({display: 'none',});
                    $('.user_btn_space').css({display: 'none',});
                    $('.public_main').css({display: 'flex',});
                    $('.main_background').css({display: 'none',});
                    

                }

            // 유저 있음
            else if(res == "user on"){

                console.log(res);
                var curr_identity_code;

                $('.top_menu_container').css({display: 'flex',});
                $('#main_list').css({display: 'flex',});
                $('.public_main').css({display: 'none',});
                get_main_list();

                


                get_daily_check();

               setTimeout(
                function() {
                    layer_popup('#notice');
                },
                800);
                

              


            }


/////////////////////////////////////////////////////////////////////////////////////
//////////// todays_activities_container 불러오기

function get_daily_list(){


    
    $('.todays_activities_list').empty();
    $('#todays_activities_container').css("display","flex").hide().fadeIn('slow');
  
    var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
    $(".show_date").text($.datepicker.formatDate('yy.  mm.  dd (DD)', new Date()));
    $('.show_identity_name').text(extracted_text);


    console.log(Global_Var.userInfo.curr_main_identity);
    $.ajax({
        type : "POST",
        url : "/hoodify/get_daily_list.php",
        data : { 'identity_code' : Global_Var.userInfo.curr_main_identity},
            

        dataType : 'json',
        success : function(res){

            console.log(res);

                    for (var i = 0; i < res.length; i++) {

                        var object = res[i];
                        var object_name = object.activity_name;
                        var list_container = document.createElement("div");

                        $(list_container).css({

                            width:"95px",
                            height: "85px",
                            padding: "5px",
                            margin: '10px',
                            display: 'flex',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',
                            cursor:'poiner',
                            borderRadius: '8px', 
                            'justify-content': 'center',
                            'margin-left': '25px',
                            'margin-right': '25px',
                        

                            }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                             }, function(){
                                if($(this).hasClass("identity_selected")){
                                $(this).css("background-color", "#bad8f2");
                                }
                                else{
                                $(this).css("background-color", "white");
                                }
                           }).click(((object) => function (e) {

                            $('.add_record_layer').css({height: '200px', top: '50%'});
                                $('.record_title').css({display:'none'});
                                $('.record_cont').css({display:'none'});
                                $('.find_img_container').css({display:'none'});
                                $('.btn_add_title').css({display:'flex'});
                                $('.btn_add_content').css({display:'none'});
                                $('.btn_add_record').css({display:'none'});
                                $('.btn_add_img').css({display:'none'});

                                // 이미지 파일 input 초기화
                                var input = document.getElementById('u_file');
                                input.value = null;


                                var record_title = $('.record_title').val();
                                var record_cont = $('.record_cont').val();
                                Global_Var.userInfo.curr_identity_code = object.identity_code;
                                Global_Var.userInfo.curr_activity_code = object.activity_code;

                                // activity만 추가됨 
                                $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");


                                $('.popup_activity_img').attr("src",object.activity_img);
                                $('.popup_activity_title').text(object.activity_name);
                                $('.popup_activity_desc').text("　▶　"+ object.activity_desc);

                                $('.popup_activity_identity').text(object.identity_name);

                                $('.record_title').val("");
                                $('.record_cont').val("");
                                $('.find_img_area').attr("src","");



                                
                                layer_popup($('.add_record_layer'));
                                
                            
                            })(object)).addClass('daily_identity_active').attr('id', object.activity_code).appendTo('.todays_activities_list');


                            var VerticalList = $("<div>", {


                                    }).css({

                                        display:'flex',
                                        'flex-direction': 'column',
                                        'align-items': 'center',
                                        'width' : '100px',

                                    });

                            $('<img>', {
                                            src: object.activity_img

                                        }).css({
                                            width: "40px",
                                            height: "40px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 

                                        }).appendTo(VerticalList);

                            $('<p>', {
                                        text: object.activity_name,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        fontWeight: 'bold',


                                    }).appendTo(VerticalList);    

                                    VerticalList.appendTo(list_container);       
                    }
                   
                

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

    
    
}



            

////////////////////////////////////////////////////////////////////////////////////
/////// 추천 activity  
/*
$('.next_contents').click(function() {
   console.log('fadeout listener');
   setTimeout(
            function() {
                load_check_message();
            },
            800);
   
});
*/



        
////////////////////////////////////////////////////////////////////////////////////               
/////// 매일 1번 그날 정체성 체크하는 코드  

function get_daily_check() {

    var selected_count;


    $.ajax({
        type : "POST",
        url : "/hoodify/daily_check.php",
        data : { },
        dataType : 'json',
        success : function(res){

            console.log(res);

                    if(res == 'not first visit'){
                        console.log(res);
                    }    
                    else{
                    for (var i = 0; i < res.length; i++) {

                        var object = res[i];
                        var object_name = object.identity_name;
                        var list_container = document.createElement("div");

                        $(list_container).css({

                            width:"95px",
                            height: "85px",
                            padding: "5px",
                            margin: '10px',
                            display: 'flex',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',
                            cursor:'poiner',
                            borderRadius: '8px', 
                            'justify-content': 'center',
                        

                            }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                             }, function(){
                                if($(this).hasClass("identity_selected")){
                                $(this).css("background-color", "#bad8f2");
                                }
                                else{
                                $(this).css("background-color", "white");
                                }
                           }).click(((object) => function (e) {

                                
                            
                                selected_count = $('.identity_selected').length;
                                if($(this).hasClass('identity_selected')){

                                    
                                    $(this).removeClass('identity_selected').css("background-color", "white");
                                   


                                }
                                else{

                                    
                                   
                                    if(selected_count<3){
                                        $(this).addClass("identity_selected").css("background-color", "#bad8f2");;
                                       
                                    }
                                    

                                }

                                selected_count = $('.identity_selected').length;
                                $('.selected_identity_count').text(selected_count + " / 3");

                                console.log($(this).attr('id'));
                                


                               // $('.daily_identity_active').removeClass("itemActive").css("background-color", "white");
                               //$(this).css("background-color", "#bad8f2");
                                






                            })(object)).addClass('daily_identity_active').attr('id', object.identity_code).appendTo('.daily_identity_list');


                            var VerticalList = $("<div>", {


                                    }).css({

                                        display:'flex',
                                        'flex-direction': 'column',
                                        'align-items': 'center',
                                        'width' : '100px',

                                    });

                            $('<img>', {
                                            src: object.identity_img

                                        }).css({
                                            width: "40px",
                                            height: "40px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 

                                        }).appendTo(VerticalList);



                            $('<p>', {
                                        text: object.identity_name,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        fontWeight: 'bold',


                                    }).appendTo(VerticalList);    

                                    VerticalList.appendTo(list_container);       


                        
                    }

                    layer_popup('.daily_check_layer');
                }



            




        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });




    $('.btn_todays_identity').click(function(){

        // daily_identity_active 클래스를 가진 객체들의 id 뽑기

        var todays_identities = [];

        

        $('.identity_selected').each(function(index, item) {
            
            

            var currentElement = $(this);
            var value = currentElement.attr('id');
            todays_identities.push(value);
            

        });



        $.ajax({

            type : "POST",
            url : "/hoodify/update_daily_identities.php",

            // 선택된 정체성들의 코드값 받아 보내기
            data : { 'selected_identities' : todays_identities},
            success : function(res){


                console.log(res);
                //main리스트 새로고침
                
                $('.daily_check_layer ').fadeOut('fast');
                setTimeout(
                function() {
                    load_check_message();
                },
                800);

                get_main_list();



            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });






        console.log(todays_identities);


    })

}


////////////////////////////////////////////////////////////////////////////////////               
/////// 카카오로 시작하기 버튼 이벤트
    $('.login_with_kakao').click(function(){
        kakaoLogin();
    })


////////////////////////////////////////////////////////////////////////////////////
////// 정체성 창 카테고리 클릭 이벤트
    $(".mli").click(function(){
                    
        $('.contents_item').removeClass('itemActive').css({backgroundColor:'white',});
        $(".mli").removeClass("active");
        $(this).addClass("active");

        $(".LBC").css({
            display: "none",
        });

        $(".RC").css({
            display: "none",
        });

        // Activity 버튼
        if($(this).hasClass("activity")){

            $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");
            $('.modify_record_layer').removeClass("state_item state_skill").addClass("state_activity");
            $('.activity_post').removeClass("state_item state_skill").addClass("state_activity");

            $(".Clist").css({
            display: "block",
            });
            $(".RC").css({
            display: "none",
            });
            $(".RCplain").css({
            display: "flex",
            });


        }

        // Item 버튼
        else if($(this).hasClass("item")){

            $('.add_record_layer').removeClass("state_activity state_skill").addClass("state_item");
            $('.modify_record_layer').removeClass("state_activity state_skill").addClass("state_item");
            $('.activity_post').removeClass("state_activity state_skill").addClass("state_item");

            $(".Ilist").css({
            display: "block",
            });
            $(".RC").css({
            display: "none",
            });
            $(".RCplain").css({
            display: "flex",
            });


        }

        // Skill 버튼
        else if($(this).hasClass("skill")){


            $('.add_record_layer').removeClass("state_activity state_item").addClass("state_skill");
            $('.modify_record_layer').removeClass("state_activity state_item").addClass("state_skill");
            $('.activity_post').removeClass("state_activity state_item").addClass("state_skill");

            $(".Slist").css({
            display: "block",
            });
            $(".RC").css({
            display: "none",
            });
            $(".RCplain").css({
            display: "flex",
            });
        

        }
        
        // Defect 버튼
        else if($(this).hasClass("defect")){

            $('.add_record_layer').removeClass("state_activity state_item").addClass("state_skill");
            $('.modify_record_layer').removeClass("state_activity state_item").addClass("state_skill");
            $('.activity_post').removeClass("state_activity state_item").addClass("state_skill");

            $(".Dlist").css({
            display: "block",
            });
            $(".RC").css({
            display: "none",
            });
            $(".RCplain").css({
            display: "flex",
            });
        }

        // Setting 버튼
        else if($(this).hasClass("setting")){
            $(".setting_cont").css({
                display: "block",
                });

            $(".RC").css({
            display: "none",
            });
            $(".RCplain").css({
            display: "flex",
            });
        }


    });


////////////////////////////////////////////////////////////////////////////////////
////// 카카오로 로그인하기
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
                                  // window.location.href='https://hoodify.cafe24.com/hoodify/main.php';

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
////////////////////////////////////////////////////////////////////////////////////
////// 카카오로 로그아웃

    function kakaoLogout() {
        if (Kakao.Auth.getAccessToken()) {
        Kakao.API.request({
            // url: '/v1/user/unlink',
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



////////////////////////////////////////////////////////////////////////////////////
// 로그아웃 버튼 클릭 이벤트
$('.logout_btn').click(function(){

    document.location.href='logout.php';
    kakaoLogout();
    //googleLogout();
})


////////////////////////////////////////////////////////////////////////////////////
// topBar 클릭 이벤트 layer1
/*
$('.topBar').draggable();
$('.topBar').click(function(){

  var tt =  $('.topBar').parent().parent();
  console.log(tt);    
  


});*/
/////////////////////////////////////////////////////////////////////////////////////
// esc 버튼으로 레이어 창 닫기

$(document).keyup(function(e) {

    if ( e.keyCode == 27) {

        $('.common_layer').fadeOut('fast');

    }

});



/////////////////////////////////////////////////////////////////////////////
// 추천 활동 팝업 창 

function load_check_message(){


    $('.random_activities').empty();
    $.ajax({
                type : "POST",
                url : "/hoodify/get_random_activity.php",
                data : {
                                    
                                },
                dataType : 'json',
                success : function(res){

                    console.log(res);

                  
                    for (var i = 0; i < res.length; i++) {

                        var object = res[i];
                        var object_name = object.activity_name;
                        var list_container = document.createElement("div");

                        $(list_container).css({

                            width:"115px",
                            height: "80px",
                            padding: "5px",
                            margin: '10px',
                            display: 'flex',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',
                            cursor:'poiner',
                            borderRadius: '8px', 
                            'justify-content': 'center',
                        

                            }).hover(function() {
                            $(this).css("background-color", "#bad8f2");
                            }, function(){
                            $(this).css("background-color", "white");
                            }).click(((object) => function (e) {

                                $('.add_record_layer').css({height: '200px', top: '50%'});
                                $('.record_title').css({display:'none'});
                                $('.record_cont').css({display:'none'});
                                $('.find_img_container').css({display:'none'});
                                $('.btn_add_title').css({display:'flex'});
                                $('.btn_add_content').css({display:'none'});
                                $('.btn_add_record').css({display:'none'});
                                $('.btn_add_img').css({display:'none'});

                                // 이미지 파일 input 초기화
                                var input = document.getElementById('u_file');
                                input.value = null;


                                var record_title = $('.record_title').val();
                                var record_cont = $('.record_cont').val();
                                Global_Var.userInfo.curr_identity_code = object.identity_code;
                                Global_Var.userInfo.curr_activity_code = object.activity_code;

                                // activity만 추가됨 
                                $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");


                                $('.popup_activity_img').attr("src",object.activity_img);
                                $('.popup_activity_title').text(object.activity_name);
                                $('.popup_activity_desc').text("　▶　"+object.activity_desc);

                                $('.popup_activity_identity').text(object.identity_name);

                                $('.record_title').val("");
                                $('.record_cont').val("");
                                $('.find_img_area').attr("src","");

/*
                                if(object.activity_level == 1){

                                        $('.popup_activity_title').css({
                                    
                                        backgroundColor : '#A7A7A7',
                                    })

                                }
                                else if(object.activity_level == 2){

                                    $('.popup_activity_title').css({
                                    
                                    backgroundColor : '#3660AC',
                                })

                                }
                                else if(object.activity_level == 3){

                                    $('.popup_activity_title').css({
                                    
                                    backgroundColor : '#80509A',
                                })

                                }
                                else if(object.activity_level == 4){



                                    $('.popup_activity_title').css({
                                    
                                    backgroundColor : '#EB9C00',
                                })

                                }

*/



                                
                                layer_popup($('.add_record_layer'));



                            })(object)).addClass('check_activity').appendTo('.random_activities');


                            var VerticalList = $("<div>", {


                                    }).css({

                                        display:'flex',
                                        'flex-direction': 'column',
                                        'align-items': 'center',
                                        'width' : '100px',

                                    });

                            $('<img>', {
                                            src: object.activity_img

                                        }).css({
                                            width: "40px",
                                            height: "40px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 

                                        }).appendTo(VerticalList);



                            $('<p>', {
                                        text: object.activity_name,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        fontWeight: 'bold',


                                    }).appendTo(VerticalList);    

                                    VerticalList.appendTo(list_container);       


                        
                    }

                   // layer_popup('.check_message_layer');
                    

                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

}

////////////////////////////////////////////////////////////////////////////////////
// 추천 활동 새로고침 버튼

$('.refresh_random_activities').click(function(){


    load_check_message();


});





////////////////////////////////////////////////////////////////////////////////////
// 해당 달의 analysis record를 불러오는 코드

function load_analysis_record(month_val){

        

   
            $('.history_list').empty();
            /// 기록 수가 많은 정체성 상위 5개 데이터 불러오기
            $.ajax({
                type : "POST",
                url : "/hoodify/get_user_record_analysis.php",
                data : {
                                    'date_value': month_val,
                                },
                dataType : 'json',
                success : function(res){

                    console.log(res);

                    $('<h4>', {
                        text: "정체성 순위",

                    }).css({

                            
                            marginLeft: "8px",
                            lineHeight:"12px",
                            marginBottom: '15px',
                            width: 'fit-content',
                            'background-color': '#475169',
                            'border-radius': '5px',
                            'color': 'white',
                            padding:'8px',
                            fontSize: "13px",
                        


                    }).appendTo('.history_list'); 

                    for (var i = 0; i < res.length; i++) {

                        var object = res[i];
                        var object_name = object.identity_name;
                        var list_container = document.createElement("div");

                        $(list_container).css({

                            width:"750px",
                            height: "80px",
                            padding: "5px",
                            display: 'flex',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',

                            }).click(((object) => function (e) {

                                /*

                                    .hover(function() {
                                    $(this).css("background-color", "#bad8f2");
                                    }, function(){
                                    $(this).css("background-color", "white");
                                    })

                                */




                            })).appendTo('.history_list');


                            var VerticalList = $("<div>", {


                                    }).css({

                                        display:'flex',
                                        'flex-direction': 'column',
                                        'align-items': 'center',
                                        'width' : '100px',

                                    });

                            $('<img>', {
                                            src: object.identity_img

                                        }).css({
                                            width: "40px",
                                            height: "40px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 

                                        }).appendTo(VerticalList);



                            $('<p>', {
                                        text: object.identity_title,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",


                                    }).appendTo(VerticalList);    
                                    VerticalList.appendTo(list_container);       


                                    var barContainer = $("<div>", {
                                        

                                    }).css({
                                    
                                        display: 'flex',
                                        'flex-direction': 'row',

                                    });      

                                    var bar_width;
                                    bar_width = 20*object.count;

                                    $('<div>', {

                                    }).css({
                                        
                                        width: bar_width,
                                        height: "20px",
                                        backgroundColor: '#4c5566',


                                    }).appendTo(barContainer);  



                                    $('<p>', {
                                        text: object.count,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        marginLeft: '10px',


                                    }).appendTo(barContainer);  
                                    barContainer.appendTo(list_container);  
                        
                    }

                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });




            // 기록 수가 가장 많은 acitvity 불러오기
            $('.most_activity').empty();
            
            $.ajax({
                            type : "POST",
                            url : "/hoodify/get_most_frequent_act.php",
                            data : {
                                    'date_value': month_val,
                                },
                            dataType: 'json',
                            success : function(res){

                               console.log("개인 기록 로그");
                               console.log(res);

                               //var object = res[0];
                               

                               var list_container = document.createElement("div");

                                $(list_container).css({

                                    width:"750px",
                                    padding: "5px",
                                    display: 'flex',
                                    paddingBottom: '5px',
                                    alignItems: 'center',
                                    overflow:'hidden',
                                    marginTop: '15px',
                                }).appendTo('.most_activity');

                                


                                var VerticalList = $("<div>", {


                                    }).css({

                                        display:'flex',
                                        'flex-direction': 'column',
                                        'width' : '120px',
                                        marginLeft : '15px',
                                        'align-items': 'center',

                                    });

                                    $('<h4>', {
                                        text: "가장 많이 한 활동",

                                    }).css({
                                            
                                            fontSize: "13px",
                                            margin: "3px",
                                            lineHeight:"12px",
                                            marginTop:'20px',
                                            marginBottom:'20px',
                                            margin: "3px",
                                            width: 'fit-content',
                                            'background-color': '#475169',
                                            'border-radius': '5px',
                                            'color': 'white',
                                            padding:'8px',


                                    }).appendTo(VerticalList); 

                                    $('<p>', {
                                        text: res.identity_name,

                                    }).css({
                                        
                                        fontSize: "12px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        "font-weight": "bold",
                                        'margin-left':'10px',
                                        


                                    }).appendTo(VerticalList); 



                                    $('<img>', {
                                            src: res.activity_img

                                        }).css({
                                            width: "50px",
                                            height: "50px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 
                                            'margin-left':'10px',

                                        }).appendTo(VerticalList);



                                    $('<p>', {
                                        text: res.activity_name,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        'margin-left':'10px',


                                    }).appendTo(VerticalList);    


                                  


                                    VerticalList.appendTo(list_container);   
                                    
                                    $('<p>', {
                                        text: res.cnt + " 회",

                                    }).css({
                                        
                                        fontSize: "14px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        marginTop : '50px',
                                        "font-weight": "bold",
                                        


                                    }).appendTo(list_container); 



                                


                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                alert("통신 실패.")
                            }
                        });
                        

}




////////////////////////////////////////////////////////////////////////////////////
// record_analysis 클릭 이벤트 

$('.record_analysis').click(function(){



    
    

    
        $("#testDatepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy-mm',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
            
            var month_val = Number(month)+1;
            console.log(month_val);

            load_analysis_record(month_val);





            
            },
            beforeShow : function(input, inst) {
                if ((datestr = $(this).val()).length > 0) {
                    actDate = datestr.split('-');
                    year = actDate[0];
                    month = actDate[1]-1;
                    $(this).datepicker('option', 'defaultDate', new Date(year, month));
                    $(this).datepicker('setDate', new Date(year, month));
                }
            }
        });



            $('#testDatepicker').datepicker({
                autoclose: true,
                language: 'ko',
                maxDate: '0' ,
                
            }).datepicker("setDate",'now');
          


            var get_date_value = $('#testDatepicker').datepicker("getDate");
            var get_month = get_date_value.getMonth()+1;
            console.log('check date: '+get_month);


            
            load_analysis_record(get_month);



            

            layer_popup('.indivisual_record_layer');
        });


/////////////////////////////////////////////////////////////////////////////////////
/// 다른 사람들의 기록 

$('#others_record_btn').click(function(){

    get_public_record();

    
})



$('#daily_check_btn').click(function(){



   

        $('#others_record_container').css({'display':'none'});
        $('#others_location_container').css({'display':'none'});
        $('#todays_activities_container').css("display","flex").hide().fadeIn('slow');
    
    
    //layer_popup('#underway');


})


/////////////////////////////////////////////////////////////////////////////////////
///

$('#others_location_btn').click(function(){

    
    //layer_popup('#underway');
        setTimeout( function() {
            window.dispatchEvent(new Event('resize'));
        }, );
    
       $('#others_record_container').css({'display':'none'});
       $('#todays_activities_container').css({'display':'none'});
       

        
        $('#others_location_container').css("display","flex").hide().fadeIn('slow');
        
        getUserLocation();
    


    function success({ coords, timestamp }) {
            const latitude = coords.latitude;   // 위도
            const longitude = coords.longitude; // 경도

            var mapOptions = {
                center: new naver.maps.LatLng(37.3595704, 127.105399),
                zoom: 13
            };

            var map = new naver.maps.Map('map', mapOptions);

            map.setOptions("center", new naver.maps.LatLng(latitude, longitude));
            
            


            $.ajax({
                            type : "POST",
                            url : "/hoodify/update_location.php",
                            data : { 'latitude' : latitude,
                                     'longitude' : longitude, 
                                     'identity_code' : Global_Var.userInfo.curr_main_identity,
                                 },
                            dataType : 'json',     
                            success : function(res){

                                console.log(res);

                                // 해당 좌표, 정체성에 포함되는 모든 유저의 정보 받아오기
                                for (var i = 0; i < res.length; i++) {

                                    var object = res[i];
                                    var lat = object.latitude;
                                    var lng = object.longitude;


                                    var position = new naver.maps.LatLng(lat, lng);

                 
                                   if(object.currentuser == 'current'){

                                    console.log("map"+object.currentuser);
                                    var markerOptions_user = {
                                        position: position,
                                        map: map,
                                        
                                        
                                        icon: {
                                            url: "/hoodify/img/hoodify_marker_img_user.png",
                                            size: new naver.maps.Size(45, 65),
                                            origin: new naver.maps.Point(0, 0),
                                            anchor: new naver.maps.Point(11, 35)
                                        }
                                        

                                    };

                                    var marker_user = new naver.maps.Marker(markerOptions_user);

                                    naver.maps.Event.addListener(marker_user, "click", function(e) {
                                        layer_popup('#underway');
                                    });

                                   }

                                   else{


                                    console.log("map"+object.currentuser);
                                    var markerOptions = {
                                        position: position,
                                        map: map,
                                        
                                        icon: {
                                            url: "/hoodify/img/hoodify_marker_img.png",
                                            size: new naver.maps.Size(45, 45),
                                            origin: new naver.maps.Point(0, 0),
                                            anchor: new naver.maps.Point(11, 35)
                                        }
                                        

                                        
                                    };

                                    var marker = new naver.maps.Marker(markerOptions);

                                    naver.maps.Event.addListener(marker, "click", function(e) {
                                        layer_popup('#underway');
                                    });

                                }
                                
                                    

                                    //mark_array.push(marker);
                                
                                
                                }
                                

                                //console.log(mark_array);

                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                alert("통신 실패.")
                            }
                        });

            

        }

        function getUserLocation() {
            if (!navigator.geolocation) {
                throw "위치 정보가 지원되지 않습니다.";

                var mapOptions = {
                    center: new naver.maps.LatLng(37.3595704, 127.105399),
                    zoom: 15
                };

                var map = new naver.maps.Map('map', mapOptions);
            }
            navigator.geolocation.getCurrentPosition(success);
        }

        



})





////////////////////////////////////////////////////////////////////////////////////
// load_all_list 클릭 이벤트 

$('.load_all_list').click(function(){

    
    layer_popup('#underway');
});

$('.on_construction').click(function(){

    console.log('on construction notice');
layer_popup('#underway');
});



///////////////////////////////////////////////////////////////////////////////////////
// 카테고리 버튼 클릭 리스너  (검색 레이어)
// '음식' 카테고리를 클릭하면 '음식'이라는 카테고리에 포함된 정체성의 리스트를 불러온다.

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

                    width:"100%",
                    minWidth: "500px",
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

                        // 이미 보유하고 있는 정체성인지 확인
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
                            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                alert("통신 실패.")
                            }
                        });
                        


                        // 해당 정체성에 대한 정보 불러오기
                        $.ajax({
                            type : "POST",
                            url : "/hoodify/get_search_identity_data.php",
                            data : {'identity_code' : object.identity_code},
                            dataType : 'json',
                            success : function(res){

                                // identity의 activity, item, skill, caution 모든 data 가 합쳐진 json 파일 반환 확인
                                console.log(res);
                                
                                var activity_data = res[0];

                                // 해당 정체성의 activity 정보
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
                                            borderRadius: '8px', 
                                            border: "2px solid #586167", 

                                        }).appendTo(list);


                                        $('<p>', {
                                            text: activity_object.activity_name,

                                        }).css({
                                            margin: "4.5px",
                                            "font-weight": "bold",


                                        }).appendTo(VerticalList);

                                        $('<p>', {
                                            text: activity_object.activity_desc,

                                        }).css({
                                            fontSize: "13px",
                                            margin: "4.5px",
                                            lineHeight:"15px",


                                        }).appendTo(VerticalList);

                                        VerticalList.appendTo(list);

                                    }
                                }

                                // 해당 정체성의 item 정보
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
                                            borderRadius: '8px', 
                                            border: "2px solid #586167",
                                        }).appendTo(list);


                                        $('<p>', {
                                            text: item_object.item_name,

                                        }).css({
                                            margin: "4.5px",
                                            "font-weight": "bold",


                                        }).appendTo(VerticalList);

                                        $('<p>', {
                                            text: item_object.item_desc,

                                        }).css({
                                            fontSize: "13px",
                                            margin: "4.5px",
                                            lineHeight:"15px",


                                        }).appendTo(VerticalList);

                                        VerticalList.appendTo(list);

                                    }

                                }

                                // 해당 정체성의 skill 정보
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
                                            borderRadius: '8px', 
                                            border: "2px solid #586167",
                                        }).appendTo(list);


                                        $('<p>', {
                                            text: skill_object.skill_name,

                                        }).css({
                                            margin: "4.5px",
                                            "font-weight": "bold",


                                        }).appendTo(VerticalList);

                                        $('<p>', {
                                            text: skill_object.skill_desc,  

                                        }).css({
                                            fontSize: "13px",
                                            margin: "4.5px",
                                            lineHeight:"15px",


                                        }).appendTo(VerticalList);

                                        VerticalList.appendTo(list);

                                    }
                                }

                                // 해당 정체성의 caution 정보
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
                                            borderRadius: '8px', 
                                            border: "2px solid #586167",
                                        }).appendTo(list);


                                        $('<p>', {
                                            text: caution_object.caution_name,

                                        }).css({
                                            margin: "4.5px",
                                            "font-weight": "bold",
                                    


                                        }).appendTo(VerticalList);

                                        $('<p>', {
                                            text: caution_object.caution_desc,

                                        }).css({
                                            fontSize: "13px",
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
                    borderRadius: '8px', 
                    border: "2px solid #586167",

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


    $('#profile_message_text').on('keyup', function() {

        if($(this).val().length > 200) {
            $(this).val($(this).val().substring(0, 200));
        }
    }); 


    $('#profile_nickname_text').on('keyup', function() {

        if($(this).val().length > 12) {
            $(this).val($(this).val().substring(0, 12));
        }
    }); 

    


});


//////////////////////////////////////////////////////////////////////////////////////
///////// 세팅 > 정체성 삭제 버튼 이벤트
// 유저의 해당 정체성과 관련된 모든 기록 삭제함


$('.delete_identity').click(function(){
    layer_popup($('.delete_check_identity'));
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


/////////////////////////////////////////////////////////////////////////////////////
// 검색 버튼
// 검색 layer 띄우기

$('.open_search_layer').click(function(){
    $('.search_result').empty();
    $('.search_result_identity').css({ display : 'none',});
    $('.search_result').fadeIn('fast');
    $('.category_container').css("display","flex").hide().fadeIn("fast");
    layer_popup($('.search_layer'));
});


//////////////////////////////////////////////////////////////////////////////////////
// 엔터키로 검색하기
$('.search_text').on('keydown', function(event) {
    //console.log(event.keyCode);
    if (event.keyCode == 13) {
        event.preventDefault();
        search_identity();
    }


});

//////////////////////////////////////////////////////////////////////////////////////
///////// 검색 버튼 이벤트

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

                    width:"100%",
                    minWidth: "500px",
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
                                        borderRadius: '8px', 
                                        border: "2px solid #586167",
                                    }).appendTo(list);


                                    $('<p>', {
                                        text: activity_object.activity_name,

                                    }).css({
                                        margin: "4.5px",
                                        "font-weight": "bold",


                                    }).appendTo(VerticalList);

                                    $('<p>', {
                                        text: activity_object.activity_desc,

                                    }).css({
                                        fontSize: "13px",
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
                                        borderRadius: '8px', 
                                        border: "2px solid #586167",
                                    }).appendTo(list);


                                    $('<p>', {
                                        text: item_object.item_name,

                                    }).css({
                                        margin: "4.5px",
                                        "font-weight": "bold",


                                    }).appendTo(VerticalList);

                                    $('<p>', {
                                        text: item_object.item_desc,

                                    }).css({
                                        fontSize: "13px",
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
                                        borderRadius: '8px', 
                                        border: "2px solid #586167",
                                    }).appendTo(list);


                                    $('<p>', {
                                        text: skill_object.skill_name,

                                    }).css({
                                        margin: "4.5px",
                                        "font-weight": "bold",


                                    }).appendTo(VerticalList);

                                    $('<p>', {
                                        text: skill_object.skill_desc,  

                                    }).css({
                                        fontSize: "13px",
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
                                        borderRadius: '8px', 
                                        border: "2px solid #586167",
                                    }).appendTo(list);


                                    $('<p>', {
                                        text: caution_object.caution_name,

                                    }).css({
                                        margin: "4.5px",
                                        "font-weight": "bold",


                                    }).appendTo(VerticalList);

                                    $('<p>', {
                                        text: caution_object.caution_desc,

                                    }).css({
                                        fontSize: "13px",
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
                    borderRadius: '12px', 

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
///////// 검색결과 나온 정체성을 개인 리스트에 추가

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


})




///////////////////////////////////////////////////////////////////////////////////////
// 검색 결과에서 뒤로가기 > 정체성 리스트 다시 보이기

$('.to_search_list').click(function(){

    $('.search_result_identity').css({ display : 'none',});
    $('.search_result').fadeIn('fast');
    $('.category_container').css("display","flex").hide().fadeIn("fast");
})







/////////////////////////////////////////////////////////////////////////////////////
// 프로필 버튼
// 프로필 layer 띄우기

$('.profile').click(function(){

    Global_Var.userInfo.profile_check_nickname = false;
    Global_Var.userInfo.profile_check_introduction = false;
    Global_Var.userInfo.profile_check_img = false;

    get_profile_information();
//qqqqqqqqqqqqqqqqq

    $('.find_img_container').css("display","flex").hide().fadeIn('slow');
    $('.apply_profile_change').css({display:'none',});
    layer_popup($('.profile_layer'));


    
})


/////////////////////////////////////////////////////////////////////////////////////
// 프로필 정보 불러오기 
function get_profile_information(){
    $.ajax({
        type : "POST",
        url : "/hoodify/get_user_profile.php",
        dataType : 'json',
        success : function(res){

            
            if(res == 'nothing'){
                console.log(res);
            }
            else{
                console.log(res[0]);
                $('.show_profile').attr("src",res[0].profile_img);
                $('.profile_img_space').attr("src",res[0].profile_img);
                //$('.profile_img').text(res[0].profile_img);
                $('.profile_nickname').text(res[0].nickname);
                $('.profile_introduction').text(res[0].introduction);
                $('.nickname').text(res[0].nickname);
            }


        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ 
            alert("통신 실패.")
        }
    });
}

get_profile_information();

/////////////////////////////////////////////////////////////////////////////////////
// 프로필 상태 메시지 설정 버튼

$('.profile_introduction').click(function(){

        $('#profile_message_text').val("");
        layer_popup('#profile_message_layer');

})

$('.set_profile_message').click(function(){

    var profile_message = $('#profile_message_text').val();
    $('.profile_introduction').text(profile_message);
    console.log(profile_message);
   $('#profile_message_layer').fadeOut('fast');
   


   // 확인 버튼 활성화
   $('.apply_profile_change').css({display:'block',});
   Global_Var.userInfo.profile_check_introduction = true;


   
})



/////////////////////////////////////////////////////////////////////////////////////
// 프로필 닉네임 설정 버튼

$('.set_nickname').click(function(){
    $('#profile_nickname_text').val("");
    $('.check_nickname_message').css({display:'none',})

    $('.set_profile_nickname ').css({display:'none',});
    layer_popup('.profile_nickname_layer');

});


/////////////////////////////////////////////////////////////////////////////////////
// 닉네임 중복 확인 버튼

$('.check_nickname').click(function(){

    var nickname_text = $('#profile_nickname_text').val();
    console.log('닉네임 확인 '+nickname_text);

        
    $.ajax({
              type : "POST",
              url : "/hoodify/check_nickname.php",
              data : {
                      'nickname': nickname_text,
                  },
              success : function(res){
                $('.check_nickname_message').css({display:'block',})
                if(res=='exist'){
                    $('.check_nickname_message').text('이미 있는 닉네임입니다.');
                
                    
                }
                else if(res=='possible'){
                    $('.check_nickname_message').text('사용 가능합니다.');
                    $('.set_profile_nickname ').css({display:'block',});


                   

                }


              },
              error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                  alert("통신 실패.")
              }
        });

});



$('.set_profile_nickname ').click(function(){


     // 확인 버튼 활성화
     $('.apply_profile_change').css({display:'block',});

     Global_Var.userInfo.profile_check_nickname = true;

    var nickname_text = $('#profile_nickname_text').val();
    console.log(nickname_text);
    $('.profile_nickname').text(nickname_text);
    $('.nickname').text(nickname_text);
    $('.profile_nickname_layer').fadeOut('fast');

 



});

//프로필 내용 변경 확인

$('.apply_profile_change').click(function(){


    console.log(Global_Var.userInfo.profile_check_nickname + " " + Global_Var.userInfo.profile_check_introduction + " " + Global_Var.userInfo.profile_check_img);
    // 닉네임 업데이트
    


    if(Global_Var.userInfo.profile_check_nickname){
        console.log('여기서');
        var nickname_text = $('#profile_nickname_text').val();

        $.ajax({
                type : "POST",
                url : "/hoodify/update_nickname.php",
                data : {
                        'nickname': nickname_text,
                    },
                success : function(res){

                    if(res=='success'){

                        console.log('profile_nickname_change_check')

                    }


                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });
    }



        //프로필 상태 업데이트
        if(Global_Var.userInfo.profile_check_introduction){
            var profile_message = $('#profile_message_text').val();
                $.ajax({
                    type : "POST",
                    url : "/hoodify/modify_profile_message.php",
                    data: {
                            'profile_message': profile_message,
                    },

                    success : function(res){

                        $('.profile_introduction').text(profile_message);

                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ 
                            alert("통신 실패.")
                    }
                    });
            }


        //프로필 이미지 업데이트

        if(Global_Var.userInfo.profile_check_img){
         serverUpdateImage_profile();
        }



        $('.profile_layer').fadeOut('fast');

});



/////////////////////////////////////////////////////////////////////////////////////
// 이미지 클릭 시 이벤트

$('.find_img').on('click', function (){
			

    function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('.imgArea').css({ 'display' : 'flex' }).attr('src', e.target.result); 
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$(":input[name='u_file']").change(function() {

        let maxSize = 5 * 1024 * 1024; //* 5MB 사이즈 제한
        let fileSize = this.files[0].size; //업로드한 파일용량

        if(fileSize > maxSize){
            alert("파일첨부 사이즈는 5MB 이내로 가능합니다.");
            $(this).val(''); //업로드한 파일 제거
            return; 
        }



		if( $(":input[name='u_file']").val() == '' ) {
			$('.find_img_area').attr('src' , '');  
		}


		$('.imgViewArea').css({ 'display' : 'flex' });
		readURL(this);
	});
});



$('.find_img_profile').on('click', function (){
			

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.profile_img_space').css({ 'display' : 'flex' }).attr('src', e.target.result); 
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        
            $("#profile_img").change(function() {
                if( $("#profile_img").val() == '' ) {
                    $('.profile_img_space').attr('src' , '');  
                }
                    let maxSize = 5 * 1024 * 1024; //* 5MB 사이즈 제한
                    let fileSize = this.files[0].size; //업로드한 파일용량

                    if(fileSize > maxSize){
                        alert("파일첨부 사이즈는 5MB 이내로 가능합니다.");
                        $(this).val(''); //업로드한 파일 제거
                        return; 
                    }
        
                
                    console.log('adfadfadf');

                    
                    Global_Var.userInfo.profile_check_img = true;
                    $('.apply_profile_change').css({display:'block',});
        
                
        
        
                $('.imgViewArea_profile').css({ 'display' : 'flex' });
                readURL(this);
            });
        });
        

		

/////////////////////////////////////////////////////////////////////////////////////
// 정체성 창고 버튼
// 정체성 창고 layer 띄우기

$('.identity_storage_btn').click(function(){
    storage_identities();
});


/////////////////////////////////////////////////////////////////////////////////////
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
                borderRadius: '8px', 
                border: "2px solid #586167",

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


/////////////////////////////////////////////////////////////////////////////////////
// 정체성 리스트에서 선택 정체성을 창고로 옮기기


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
                else{
                    console.log(res);
                }



            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

        $('.pop-layer').fadeOut('fast');

})


/////////////////////////////////////////////////////////////////////////////////////
// 정체성 활성화 버튼
// 창고에서 선택된 정체성을 메인 리스트로 불러오기


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



/////////////////////////////////////////////////////////////////////////////////////
//////////// 메인 리스트 불러오기 및 새로고침

function get_main_list(){

    $('#main_list').empty();    



    $.ajax({
        type : "POST",
        url : "/hoodify/get_user_identities.php",
        dataType : 'json',
        success : function(res){

            console.log(res);

            if(res==""){
                console.log('상태 바꾸기');
                $('#active_num').text("0/3").hide().fadeIn('slow');
              //  $('.state_message').fadeOut('slow');
                $('#current_identity').fadeOut('slow');
                $('#others_record').empty();
                $('.others_record_mark').fadeOut('slow');

                //

            }
            else{

            for (var i = 0; i < res.length; i++) {

                    var identity = res[i];
                    var identity_name = res[i].identity_name;
                    var identity_desc = res[i].identity_desc;
                    var identity_img = res[i].identity_img;


                    var list = document.createElement("div");
                    console.log(identity);

                    if(i==0){
                        $(list).addClass('mainIdentity');
                                        
                       // $('.state_message').hide().fadeIn("slow");
                        $('#current_identity').text(identity_name);
                        $('.current_identity_name').css("display","flex").hide().fadeIn('slow');
    
                       // $('.others_record_mark').text("다른 '"+ identity_name + "'들의 기록").hide().fadeIn("slow");
                        Global_Var.userInfo.curr_main_identity = res[i].identity_code;
                        console.log(identity_name);

                        

                    
                
                    }
                

                    $(list).css({

                                        
                                        height: "60px",
                                        padding: "5px",
                                        borderBottom: "1px solid #D8D8D8",
                                        display: 'flex',
                                        paddingBottom: '5px',
                                        backgroundColor: '#BDC8CE',
                                        alignItems: 'center',
                                        overflow:'hidden',
                                        cursor:"pointer",
                                        opacity: "0.5",
                                        

                                        }).addClass("main_identity_item").attr('id',identity.identity_code).hover(function() {
                                            if($(this).hasClass("mainIdentity")){
                                                $(this).css("background-color", "#bad8f2");
                                            }else{
                                        $(this).css("background-color", "#bad8f2");
                                        }
                                        }, function(){
                                            if($(this).hasClass("mainIdentity")){
                                                $(this).css("background-color", "#98a9b4");
                                            }else{
                                            $(this).css("background-color", "#BDC8CE");
                                            }
                                        }).click(((identity) => function (e) {

                                            $('.mylistC_common').css({backgroundColor:'white',});
                                            console.log('이 객체의 인덱스는 ' + $(this).index());


                                            // 체크체크
                                            $(".RCactivity").css({
                                                display: "none",
                                                });
                                            $(".mli").removeClass("active");
                                            $(".activity").addClass("active");
                                            $('.add_record_layer').removeClass("state_activity state_item state_skill state_defect").addClass("state_activity");

                                            $(".Clist  ").css("display", "block");
                                            $(".Ilist ").css("display", "none");
                                            $(".Slist ").css("display", "none");
                                            $(".Dlist ").css("display", "none");
                                            $(".setting_cont").css("display", "none");

                                            $('.RC').css("display", "none");
                                            $(".RCplain").css({
                                             display: "flex",
                                            });
                                            //$('.RCactivity').css("display", "block");

                                            
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
                                            $('#addbtn_container_skill').empty();


                                            $('.identity_img_container').attr("src",identity.identity_img );
                                            $('.identity_title_container').text(identity.identity_name);
                                            $('.identity_desc_container').text("\u00a0"+"\u00a0"+identity.identity_desc);


                                            
                                            
                                            $('.identity_desc_container').click(function(){

                                                //dialog.text

                                                
                                                // desc_modal
                                                $('.modal_cont').text("\u00a0"+"\u00a0"+identity.identity_desc).css({'font-size':'14px',});
                                                $('#desc_modal').attr("title", identity.identity_name);

                                                $('#desc_modal').dialog({
                                                    modal: true, 
                                                    
                                                }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white',});
                                            })


                                            

                                            
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
                                                        
                                                            console.log(res);
                                                        for (var i = 0; i < res.length; i++) {
                                                            
                                                            var activity = res[i];
                                                            var list_container = $("<div>", {
                                                                }).css({
                                                                    width: "100%",
                                                                    display: "inline-flex",
                                                                    alignItems: "center",
                                                                    borderBottom: "1px solid #D8D8D8",
                                                                    cursor: 'pointer',

                                                                    }).click(((activity) => function (e) {

                                                                        //현재 창의 identity의 acitivity 
                                                                        //console.log(activity);

                                                                        $('.popup_activity_identity').text(activity.identity_name);
                                                                        
                                                                        $('.mylistC').css({backgroundColor:'#E0E6E9',});

                                                                        
                                                                        $('#addbtn_container').empty();
                                                                        
                                                                        $('.mylistIMG').css("display", "flex").attr("src",activity.activity_img);
                                                                        $('.mylistT').text(activity.activity_name);

/*
                                                                        if(activity.activity_level == 1){

                                                                            $('.mylistT').css({
                                                                            
                                                                                backgroundColor : '#A7A7A7',
                                                                             })

                                                                             $('.popup_activity_title').css({
                                                                            
                                                                                backgroundColor : '#A7A7A7',
                                                                            })

                                                                        }
                                                                        else if(activity.activity_level == 2){

                                                                            $('.mylistT').css({
                                                                            
                                                                                backgroundColor : '#3660AC',
                                                                            })

                                                                            $('.popup_activity_title').css({
                                                                            
                                                                            backgroundColor : '#3660AC',
                                                                        })

                                                                        }
                                                                        else if(activity.activity_level == 3){

                                                                            $('.mylistT').css({
                                                                            
                                                                                backgroundColor : '#80509A',
                                                                            })

                                                                            $('.popup_activity_title').css({
                                                                            
                                                                            backgroundColor : '#80509A',
                                                                        })

                                                                        }
                                                                        else if(activity.activity_level == 4){

                                                                            $('.mylistT').css({
                                                                            
                                                                                backgroundColor : '#EB9C00',
                                                                            })

                                                                            $('.popup_activity_title').css({
                                                                            
                                                                            backgroundColor : '#EB9C00',
                                                                        })

                                                                        }
*/


                                                                        $('.mylistC').text("\u00a0"+"\u00a0"+activity.activity_desc);
                                                                        $('.add_record_layer').fadeOut('fast');
                                                                        


                                                                        $('.RCactivity').hide().fadeIn('fast');

                                                                        $('.RCplain').hide();
                                                                        $('.RCitem').hide();
                                                                        $('.RCskill').hide();
                                                                        $('.RCdefect').hide();
                                                                

                                                                        // 해당 activity 전역 변수 설정
                                                                        Global_Var.userInfo.curr_activity_code = activity.activity_code;

                                                                        $('.contents_item.activity').removeClass("itemActive").css("background-color", "white");
                                                                        $(this).css("background-color", "#bad8f2");
                                                                        $(this).addClass("itemActive");



                                                                        $('.popup_activity_img').attr("src",activity.activity_img);
                                                                        $('.popup_activity_title').text(activity.activity_name);
                                                                        $('.popup_activity_desc').text("　▶　"+activity.activity_desc);

                                                                        

                                                                        refresh_activity_record_list();


                                                                        /*

                                                                        <div class="selection_box" id="selection_personality3" style="margin-right: 400px; background-color: #5e86be;">
                                                                            <p>외향</p>
                                                                            <div class="selection_box_anm">
                                                                                 <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
                                                                            </div>
                                                                        </div> 


                                                                        */
                                                                                
                                                                                // 추가하기 버튼 동적 생성
                                                                                
                                                                                $('<p>',{
                                                                                    text: "내 기록 추가하기",

                                                                                }).attr('id', 'add_record'
                                                                                ).css({
                                                                                    width: "120px",
                                                                                    color: "#3f5a9d",
                                                                                    fontWeight: "bold",
                                                                                    cursor:"pointer",
                                                                                    marginTop:"20px",


                                                                                }).click(function(){

                                                                                    $('.add_record_layer').css({height: '200px', top: '50%'});
                                                                                    $('.record_title').css({display:'none'});
                                                                                    $('.record_cont').css({display:'none'});
                                                                                    $('.find_img_container').css({display:'none'});
                                                                                    $('.btn_add_title').css({display:'flex'});
                                                                                    $('.btn_add_content').css({display:'none'});
                                                                                    $('.btn_add_record').css({display:'none'});
                                                                                    $('.btn_add_img').css({display:'none'});
                                                                                    
                                                                                    // 이미지 파일 input 초기화
                                                                                    var input = document.getElementById('u_file');
                                                                                    input.value = null;

                                                                                    $('.record_title').val("");
                                                                                    $('.record_cont').val("");
                                                                                    $('.find_img_area').attr("src","");
                                                                                    
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


                                                            var activity_img_container = $('<img>',{
                                                                src: activity.activity_img,
                                                                }).css({
                                                                width: "45px",
                                                                height: "45px",
                                                                margin: "5px",
                                                                float: "left",
                                                                borderRadius: '12px',   
                                                                border: "2px solid #475169",                                                            
                                                                

                                                            }).appendTo(list_container);   






                                                        
                                                            var content_name = $('<p>', {
                                                                text: activity.activity_name,

                                                                }).css({
                                                                "margin-left": "5px",
                                                                'font-size': '14px',
                                                                'font-weight': 'bold',
                                                                'padding-right': '12px',
                                                                'padding-left': '12px',
                                                                
                                                            
                                                            }).appendTo(list_container);

                                                            /*
                                                                'background-color': '#637193',
                                                                'width': 'fit-content',
                                                                'border-radius': '5px',
                                                                'color': 'white',
                                                                'border': "1px solid #475169",
                                                                
                                                            
                                                            */


/*
                                                            if(activity.activity_level == 1){

                                                            content_name.css({
                                                                
                                                            backgroundColor : '#A7A7A7',
                                                            })

                                                            }
                                                            else if(activity.activity_level == 2){

                                                                content_name.css({
                                                                    
                                                            backgroundColor : '3660AC',
                                                            })

                                                            }
                                                            else if(activity.activity_level == 3){

                                                                content_name.css({
                                                                
                                                            backgroundColor : '#80509A',
                                                            })

                                                            }
                                                            else if(activity.activity_level == 4){

                                                                content_name.css({
                                                                
                                                            backgroundColor : '#EB9C00',
                                                            })

                                                            }
                                                            




                                                            var activity_level = activity.activity_level;


                                                            if(activity_level == 1){
                                                                $('.content_level').css({

                                                                })
                                                                
                                                            }
                                                            else if(activity_level ==2){
                                                                $('.content_level').css({
                                                                    backgroundColor : '#87A4D9',
                                                                })
                                                                
                                                            }
                                                            else if(activity_level == 3){
                                                                $('.content_level').css({
                                                                    backgroundColor : '#A279B9',
                                                                })
                                                                
                                                            }
                                                            else if(activity_level == 4 ){
                                                                $('.content_level').css({
                                                                    backgroundColor : '#FB8005',
                                                                })
                                                                
                                                            }
*/


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
                                                                    cursor: 'pointer',

                                                                    }).click(((item) => function (e) {

                                                                        //현재 창의 identity의 item
                                                                    // console.log(item);
                                                                    //$('.popup_activity_title').css({'background-color': '#637193',});    

                                                                        $('.popup_activity_identity').text(item.identity_name);
                                                                        $('.mylistC_item').css({backgroundColor:'#E0E6E9',});

                                                                        $('#addbtn_container_item').empty();

                                                                        $('.mylistIMG_item').css("display", "flex").attr("src",item.item_img);
                                                                        $('.mylistT_item').text(item.item_name);
                                                                        $('.mylistC_item').text("\u00a0"+"\u00a0"+item.item_desc);
                                                                        $('.add_record_layer').fadeOut('fast');

                                                                        $('.RCitem').hide().fadeIn('fast');

                                                                        $('.RCplain').hide();
                                                                        $('.RCactivity').hide();
                                                                        $('.RCskill').hide();
                                                                        $('.RCdefect').hide();
                                                                        
                                                                        // 해당 item 전역 변수 설정
                                                                        Global_Var.userInfo.curr_item_code = item.item_code;

                                                                        $('.contents_item.item').removeClass("itemActive").css("background-color", "white");
                                                                        $(this).css("background-color", "#bad8f2");
                                                                        $(this).addClass("itemActive");


                                                                    // 입력 레이어
                                                                        $('.popup_activity_img').attr("src",item.item_img);
                                                                        $('.popup_activity_title').text(item.item_name);
                                                                        $('.popup_activity_desc').text("　▶　"+item.item_desc);

                                                                        // 개인 레코드 확인 레이어



                                                                        refresh_item_record_list();

                                                                                
                                                                                // 추가하기 버튼 동적 생성

                                                                                $('<p>',{
                                                                                    text: "내 기록 추가하기",

                                                                                }).attr('id', 'add_record_item'
                                                                                ).css({
                                                                                    width: "120px",
                                                                                    color: "#3f5a9d",
                                                                                    fontWeight: "bold",
                                                                                    cursor:"pointer",
                                                                                    marginTop:"20px",


                                                                                }).click(function(){

                                                                                    $('.add_record_layer').css({height: '200px', top: '50%'});
                                                                                    $('.record_title').css({display:'none'});
                                                                                    $('.record_cont').css({display:'none'});
                                                                                    $('.find_img_container').css({display:'none'});
                                                                                    $('.btn_add_title').css({display:'flex'});
                                                                                    $('.btn_add_content').css({display:'none'});
                                                                                    $('.btn_add_record').css({display:'none'});
                                                                                    $('.btn_add_img').css({display:'none'});

                                                                                    
                                                                                    // 이미지 파일 input 초기화
                                                                                    var input = document.getElementById('u_file');
                                                                                    input.value = null;


                                                                                    $('.record_title').val("");
                                                                                    $('.record_cont').val("");
                                                                                    $('.find_img_area').attr("src","");

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
                                                                width: "45px",
                                                                height: "45px",
                                                                margin: "5px",
                                                                float: "left",
                                                                borderRadius: '12px',   
                                                                border: "2px solid #475169",    
                                                                

                                                            }).appendTo(list_container);        

                                                        
                                                            $('<p>', {
                                                                text: item.item_name,

                                                                }).css({
                                                                    "margin-left": "5px",
                                                                'font-size': '14px',
                                                                'font-weight': 'bold',
                                                                'padding-right': '12px',
                                                                'padding-left': '12px',
                                                            
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
                                                            
                                                            cursor: 'pointer',

                                                            }).click(((skill) => function (e) {

                                                                //현재 창의 identity의 skill
                                                                //console.log(skill);
                                                                $('.mylistC_skill').css({backgroundColor:'#E0E6E9',});
                                                                $('#addbtn_container_skill').empty();

                                                            $('.mylistIMG_skill').css("display", "flex").attr("src",skill.skill_img);

                                                                $('.mylistT_skill').text(skill.skill_name);
                                                                $('.mylistC_skill').text("\u00a0"+"\u00a0"+skill.skill_desc);
                                                                $('.add_record_layer').fadeOut('fast');


                                                                $('.RCskill').hide().fadeIn('fast');

                                                                $('.RCplain').hide();
                                                                $('.RCactivity').hide();
                                                                $('.RCitem').hide();
                                                                $('.RCdefect').hide();
                                                                
                                                                // 해당 skill 전역 변수 설정
                                                                Global_Var.userInfo.curr_skill_code = skill.skill_code;

                                                                $('.contents_item.skill').removeClass("itemActive").css("background-color", "white");
                                                                $(this).css("background-color", "#bad8f2");
                                                                $(this).addClass("itemActive");


                                                                // 입력 레이어
                                                                $('.popup_activity_img').attr("src",skill.skill_img);
                                                                $('.popup_activity_title').text(skill.skill_name);
                                                                $('.popup_activity_desc').text("　▶　"+skill.skill_desc);


                                                                //console.log(skill);

                                                                refresh_skill_record_list();

                                                                        
                                                                        // 추가하기 버튼 동적 생성
                                                                        /*
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
                                                                            $('.imgArea').attr("src","");

                                                                            layer_popup($('.add_record_layer'));




                                                                        }).appendTo($('#addbtn_container_skill'));
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
                                                            width: "45px",
                                                            height: "45px",
                                                            margin: "5px",
                                                            float: "left",
                                                            borderRadius: '12px',   
                                                            border: "2px solid #475169",     

                                                        }).appendTo(list_container);        

                                                    
                                                        $('<p>', {
                                                        text: skill.skill_name,

                                                        }).css({
                                                            "margin-left": "5px",
                                                                'font-size': '14px',
                                                                'font-weight': 'bold',
                                                                'padding-right': '12px',
                                                                'padding-left': '12px',
                                                        
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
                                                            cursor: 'pointer',

                                                            }).click(((defect) => function (e) {

                                                                //현재 창의 identity의 defect
                                                                //console.log(defect);
                                                            // $('.mylist_item').empty();
                                                            // $('#addbtn_container_item').empty();
                                                            $('.mylistC_defect').css({backgroundColor:'#E0E6E9',});
                                                            $('.mylistIMG_defect').css("display", "flex").attr("src",defect.caution_img);

                                                                $('.mylistT_defect').text(defect.caution_name);
                                                                $('.mylistC_defect').text("\u00a0"+"\u00a0"+defect.caution_desc);
                                                                $('.add_record_layer').fadeOut('fast');
                                                                
                                                                $('.RCdefect').hide().fadeIn('fast');

                                                                $('.RCplain').hide();
                                                                $('.RCitem').hide();
                                                                $('.RCskill').hide();
                                                                $('.RCactivity').hide();


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
                                                            width: "45px",
                                                            height: "45px",
                                                            margin: "5px",
                                                            float: "left",
                                                            borderRadius: '12px',   
                                                            border: "2px solid #475169",       

                                                        }).appendTo(list_container);        

                                                    
                                                        $('<p>', {
                                                        text: defect.caution_name,

                                                        }).css({
                                                            "margin-left": "5px",
                                                                'font-size': '14px',
                                                                'font-weight': 'bold',
                                                                'padding-right': '12px',
                                                                'padding-left': '12px',
                                                        
                                                        }).appendTo(list_container);

                                                }
                                            },
                                                error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                                    alert("통신 실패.")
                                                }
                                            });

                                            layer_popup($('.pop-layer'));



                                        })(identity)).appendTo('#main_list').hide().fadeIn('slow');


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
                                        borderRadius: '12px',  
                                        border: "2px solid #475169",
                                        
                                        }).appendTo(list);




                                        $('<p>', {
                                        text: identity_name,

                                        }).css({
                                        margin: "4.5px",
                                        fontFamily:"TmoneyRoundWindExtraBold",


                                        }).appendTo(VerticalList);




                                        VerticalList.appendTo(list);




            
            
                                    }


         $('#active_num').text($('#main_list').children().length + " / " + 3).hide().fadeIn('slow');
        $('.mainIdentity').css({
            backgroundColor : '#98a9b4',
            opacity: "1.0",
    
        });


        get_daily_list();
       // $('.state_message').fadeIn('slow');
        $('#current_identity').fadeIn('slow');
        }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });


 

}







/////////////////////////////////////////////////////////////////////////////////////
//////////// 다른 사람들의 기록 불러오기 및 새로고침

function get_public_record(){

    $('#others_location_container').css({'display':'none'});
    $('#todays_activities_container').css({'display':'none'});


        $('#others_record').empty();
        var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
        $('.others_record_mark').fadeIn("slow");
        $('#others_record_container').css({'display':'flex'});

        $.ajax({
                            type : "POST",
                            url : "/hoodify/get_public_report.php",
                            dataType : 'json',
                            data: { 'identity_code' : Global_Var.userInfo.curr_main_identity,},
                            success : function(res){

                            for (var i = 0; i < res.length; i++) {

                                
                                var record = res[i];

                                var record_activity = res[i].activity_name;
                                var record_activity_img = res[i].activity_img;

                                var record_name = res[i].title;
                                var record_cont = res[i].record;
                                var nickname = res[i].nickname;
                                var record_date = res[i].date;

                                var record_cont_line = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');



                            

                                
                                // record 카드 만들기
                                var others_record = document.createElement("div");

                                $(others_record).css({

                                        width: "350px",
                                        height: "215px",
                                        border: "2.5px solid #586167",
                                        flexDirection: 'column',
                                        paddingBottom: '5px',
                                        overflow:'hidden',
                                        margin: '10px',
                                        position: 'relative',
                                        borderRadius: '8px',
                                        backgroundColor: '#c6d0db',
                                        cursor:"pointer",
                                        

                                        }).hover(function() {
                                        $(this).css("background-color", "#bad8f2");
                                        }, function(){
                                        $(this).css("background-color", "#c6d0db");
                                            
                                        }).click(((record) => function (e) { 
                    
                                            console.log(record);
                                            $('.record_post_activity_img').attr('src', record.activity_img);
                                            $('.record_post_activity_title').text(record.activity_name);
                                            $('.public_record_title').text(record.title);
                                            $('.public_record_date').text(record.date);

                                            
                                            var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                                            $('.public_record_cont').html(applyBr);

                                            $('.public_record_nickname').text("by  "+record.nickname);


    /*
                                            if(record.activity_level == 1){

                                            $('.public_record_level').css({

                                            backgroundColor : '#A7A7A7',
                                            })

                                            }
                                            else if(record.activity_level == 2){

                                                $('.public_record_level').css({

                                            backgroundColor : '#3660AC',
                                            })

                                            }
                                            else if(record.activity_level == 3){

                                                $('.public_record_level').css({

                                            backgroundColor : '#80509A',
                                            })

                                            }
                                            else if(record.activity_level == 4){

                                                $('.public_record_level').css({

                                            backgroundColor : '#EB9C00',
                                            })

                                            }
                                            //public_record_level
                                        */


                                            $.ajax({
                                                        type : "POST",
                                                        url : "/hoodify/get_record_img.php",
                                                        data : {
                                                                'user_contents_code': record.user_activity_code,
                                                                'category' : 'activity'
                                                            },
                                                        dataType : 'json',
                                                        success : function(res){
                                                            
                                                            console.log(res);
                                                            if(res.length>0){

                                                            $('.post_img_p').css({display: 'flex',});
                                                            $('.post_img_ps').css({display: 'flex',});    
                                                            $('.post_img_p').attr("href",res[0].file_path);
                                                            $('.post_img_ps').attr("src",res[0].file_path);

                                                            //$('.imgArea').attr("src",res[0].file_path);
                                                            

                                                            $(".post_img_p").fancybox({

                                                            });

                                                            //$('.modify_img').css({display: 'flex',});



                                                            

                                                        }
                                                        
                                                        else{
                                                            $('.post_img_p').css({display: 'none',});
                                                            $('.post_img_ps').css({display: 'none',});
                                                            //$('.modify_img').attr("src", ''); 
                                                            $('.post_img_ps').attr('src', '');

                                                        }
                                                        



                                                        },
                                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                            alert("통신 실패.")
                                                        }
                                                    });


                                            layer_popup($('.public_record_post'));

                                    

                                        })(record)).appendTo('#main_list');

                                        
                                        /*
                                        $('<div>',{

                                        }).css({
                                            position:'absolute',
                                            width: '100%',
                                            height: '8px', 
                                            backgroundColor: "rgb(33 34 34 / 85%)",
                                            

                                        }).appendTo(others_record);
                                        */
                                        var top_container = document.createElement("div");

                                        $(top_container).css({
                                        display: 'flex',
                                        flexDirection: 'row',
                                        alignItems: 'center',
                                        backgroundColor: "rgb(40 54 80 / 85%)",
                                        
                                        })

    /*
                                        if(record.activity_level == 1){

                                            $(top_container).css({

                                            backgroundColor : '#A7A7A7',
                                            })

                                            }
                                            else if(record.activity_level == 2){

                                                $(top_container).css({

                                            backgroundColor : '#3660AC',
                                            })

                                            }
                                            else if(record.activity_level == 3){

                                                $(top_container).css({

                                            backgroundColor : '#80509A',
                                            })

                                            }
                                            else if(record.activity_level == 4){

                                                $(top_container).css({

                                            backgroundColor : '#EB9C00',
                                            })

                                            }

                                        */


                                        $('<img>',{
                                            src: record_activity_img,

                                            }).css({
                                            width: "30px",
                                            height: "30px",
                                            margin: "5px",
                                            float: "left",
                                            borderRadius: '8px',  

                                            }).appendTo(top_container);        

                                                        
                                        $('<p>', {
                                            text: record_activity,

                                            }).css({
                                            "margin-left": "12px",
                                            "font-size" : "16px",
                                            "color" : "white",
                                        
                                        }).appendTo(top_container);
                                        $(top_container).appendTo(others_record);

                                        $('<p>', {
                                            text: record_name,

                                            }).css({
                                            "font-size" : "14px",
                                            "margin-left": "12px",
                                            "margin-top": "5px",
                                            "fontWeight": "bold",
                                            "color" : "#586167",
                                        
                                        }).appendTo(others_record);


                                        var date_container = document.createElement("div");

                                        
                                        $(date_container).css({
                                        display: 'flex',
                                        justifyContent: 'flex-end',
                                        
                                        }).appendTo(others_record);


                                        $('<p>', {
                                            text: record_date,

                                            }).css({
                                            "font-size" : "9px",
                                            "color" : "#586167",
                                            'marginRight' : '15px',
                                            'height' : '15px',
                                        
                                        }).appendTo(date_container);




                                        $('<p>', {
                                            html: "\u00a0\u00a0" + record_cont_line,

                                            }).css({
                                            "font-size" : "12px",
                                            "margin": "12px",
                                            "fontWeight": "bold",
                                            "color" : "#586167",
                                            "word-wrap" : "break-word",
                                            "height" : "60px",
                                            "overflow": "hidden",
                                            "backgroundColor": "#f0f2f4",
                                            "padding":"5px",
                                            "border": "1.5px solid #586167",
                                            "border-radius": "8px",
                                            overflow: 'hidden',
                                            textOverflow: 'ellipsis',
                                            whiteSpace: 'normal',
                                            textAlign: 'left',
                                            wordWrap: 'break-word',
                                            display: '-webkit-box',
                                            '-webkit-line-clamp': '2',
                                            '-webkit-box-orient': 'vertical',

                                            
                                        
                                        }).appendTo(others_record);


                                        $('<p>', {
                                            text: "by  " + nickname,

                                            }).css({
                                            "font-size" : "11px",
                                            "margin-left": "12px",
                                            "text-align" : 'right',
                                            "color" : '#a0a0a0',
                                            "position" : 'absolute',
                                            "bottom" : '5px',
                                            "right" : '15px',
                                        
                                        }).appendTo(others_record);


                                        $(others_record).css("display","flex").hide().fadeIn('slow');
                                        $(others_record).appendTo('#others_record');
                                        


                            }


                            },
                            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                alert("통신 실패.")
                            }
                        });


    

    


}









/////////////////////////////////////////////////////////////////////////////////////
//////////// 메인 리스트 순서 드래그 앤 드롭 이벤트

$('#main_list').sortable({
    
    item: $('.main_identity_item'),
    update: function(event, ui){

        $('#others_record').empty();
       // $('.others_record_mark').text("");

        $('#others_record_container').css({'display':'none'});
        $('#others_location_container').css({'display':'none'});
    
      var seq_array = [];

      var first_identity = $('#main_list').children().eq(0).attr('id');
      seq_array.push(first_identity);
      var second_identity = $('#main_list').children().eq(1).attr('id');
      seq_array.push(second_identity);
      var third_identity = $('#main_list').children().eq(2).attr('id');
      seq_array.push(third_identity);
      var fourth_identity = $('#main_list').children().eq(3).attr('id');
      seq_array.push(fourth_identity);
      var fifth_identity = $('#main_list').children().eq(4).attr('id');
      seq_array.push(fifth_identity);
      var sixth_identity = $('#main_list').children().eq(5).attr('id');
      seq_array.push(sixth_identity);
      var seventh_identity = $('#main_list').children().eq(6).attr('id');
      seq_array.push(seventh_identity);
      
    

      $('#main_list').children().removeClass('mainIdentity').css("background-color", "#BDC8CE");
      $('#main_list').children().eq(0).addClass('mainIdentity').css("background-color", "#98a9b4");

      var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
     // $('.state_message').hide().fadeIn("slow");
      $('#current_identity').text(extracted_text).hide().fadeIn("slow");
//      $('.others_record_mark').text("다른 '"+ extracted_text + "'들의 기록").hide().fadeIn("slow");
      
      $.ajax({
        type : "POST",
        url : "/hoodify/update_identity_seq.php",
        data: {
                'identity_code_array': seq_array,
             },
        success : function(res){

            get_daily_list();
          console.log(res);


        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });


    $('#active_num').hide().fadeIn('slow');

    Global_Var.userInfo.curr_main_identity = first_identity;
    console.log(Global_Var.userInfo.curr_main_identity);

    

    }

}).disableSelection();
//



//////////////////////////////////////////////////////////////////////////////
// 레코드 추가하기 버튼 

$('.btn_add_title').click(function(){

        
//qqqqqqqqqqqqqqqqqqqqqqqq 


        setTimeout(
            function() {
                $('.record_title').css({display: 'flex'}).hide().fadeIn('fast');
            },
            500);
        
        $('.add_record_layer').css({height: '260px',});
        $('.add_record_layer').css({top: '48%'});
        $('.btn_add_title').css({display:'none'});
        $('.btn_add_content').css({display:'flex'});

        //

        $('.btn_add_content').click(function(){

            if($('.record_title').val().length<2){
        
                alert("제목을 입력하세요 (2자 이상)");
            }

            else{

                
                $('.btn_add_content').css({display:'none'});
                $('.btn_add_img').css({display:'flex'});
                setTimeout(
                    function() {
                        $('.record_cont').css({display: 'flex'}).hide().fadeIn('fast');
                    },
                    500);
                
                
                $('.add_record_layer').css({height: '450px',});
                $('.add_record_layer').css({top: '35%'});

            }


        });

    
        $('.btn_add_img').click(function(){

            if($('.record_cont').val().length<10){
                alert("내용을 입력하세요(10자 이상)");
            }

            else{
//qqqqqqqqqqqqqqqqqq
                $('.find_img_container').css("display","flex").hide().fadeIn('slow');
                $('.btn_add_record').css({display:'flex'});
                $('.btn_add_img').css({display: 'none'});

                $('.add_record_layer').css({height: '550px',});
                $('.add_record_layer').css({top: '30%'});


                
            }


        })


        $('.btn_add_record').click(function(){

            layer_popup($('.add_check'));


        })



    

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

            var file = document.getElementById("u_file");
          //서버에 이미지 보내기
            if(file.files.length == 0 ){
                console.log("no files selected");
            }else{
                serverUploadImage(res, 'activity');

            }
            


          refresh_activity_record_list();
            console.log('pk test '+ res);

                


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
         
         var file = document.getElementById("u_file");
          //서버에 이미지 보내기
            if(file.files.length == 0 ){
                console.log("no files selected");
            }else{
                serverUploadImage(res, 'item');

            }


         refresh_item_record_list();


                


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

            var file = document.getElementById("u_file");
          //서버에 이미지 보내기
            if(file.files.length == 0 ){
                console.log("no files selected");
            }else{
                serverUploadImage(res, 'skill');

            }
            
            refresh_skill_record_list();


                    


                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

            }





    $('.add_check').fadeOut('fast');
    $('.add_record_layer').fadeOut('fast');

    //서버에 이미지 보내기
    //serverUploadImage();




})


//////////////////////////////////////////////////////////////////////////////////////
// 이미지 서버에 보내기
function serverUploadImage(user_contents_code, category){

        console.log("");
        console.log("[serverUploadImage] : [start]");
        console.log("");

        // [전송시 필요한 url 및 데이터 정의 실시]
        var url = "/hoodify/upload_file.php";
        var inputIdx = "1";

        // [전송 데이터 체크 실시]
        console.log("");
        console.log("[serverUploadImage] : [request]");
        console.log("[url] : " + url);
        console.log("[method] : " + "post body form data");
        console.log("[idx] : " + inputIdx); // 추가 form data에 key 값 삽입
        console.log("[user_contents_code] : " + user_contents_code);
        console.log(document.getElementById("u_file").files[0]); // body쪽 input file 태그 데이터 확인
        console.log("");


        // [input file 태그에 지정된 파일 얻어오기]
        var formData = new FormData(); // FormData 객체 생성
        formData.append("idx", inputIdx); // 추가 파라미터 삽입
        formData.append("user_contents_code", user_contents_code);
        formData.append("category", category);
        formData.append("file", document.getElementById("u_file").files[0]); // 실제 input file 데이터 삽입


        console.log(user_contents_code);


        // [ajax : post body form data 형식으로 요청 실시]
        $.ajax({
            /* 요청 시작 부분 */
            url: url, //주소
            data: formData, //전송 데이터
            type: "POST", //전송 타입
            async: true, //비동기 여부
            enctype: "multipart/form-data", //form data 설정
            processData: false, //프로세스 데이터 설정 : false 값을 해야 form data로 인식합니다
            contentType: false, //헤더의 Content-Type을 설정 : false 값을 해야 form data로 인식합니다
            

            /* 응답 확인 부분 */
            success: function(response) {
            console.log("");
            console.log("[serverUploadImage] : [response] : " + response);
            console.log("");
            },

            /* 에러 확인 부분 */
            error: function(xhr) {
            console.log("");
            console.log("[serverUploadImage] : [error] : " + xhr);
            console.log("");
            },

            /* 완료 확인 부분 */
            complete:function(data,textStatus) {
            console.log("");
            console.log("[serverUploadImage] : [complete] : " + textStatus);
            console.log("");
            }
        });
 };





 //////////////////////////////////////////////////////////////////////////////////////
// 이미지 서버 업데이트
function serverUpdateImage(user_contents_code, category){

      console.log("");
      console.log("[serverUploadImage] : [start]");
      console.log("");

      // [전송시 필요한 url 및 데이터 정의 실시]
      var url = "/hoodify/update_file.php";
      var inputIdx = "1";

      // [전송 데이터 체크 실시]
      console.log("");
      console.log("[serverUploadImage] : [request]");
      console.log("[url] : " + url);
      console.log("[method] : " + "post body form data");
      console.log("[idx] : " + inputIdx); // 추가 form data에 key 값 삽입
      console.log("[user_contents_code] : " + user_contents_code);
      console.log(document.getElementById("u_file_t").files[0]); // body쪽 input file 태그 데이터 확인
      console.log("");


      // [input file 태그에 지정된 파일 얻어오기]
      var formData = new FormData(); // FormData 객체 생성
      formData.append("idx", inputIdx); // 추가 파라미터 삽입
      formData.append("user_contents_code", user_contents_code);
      formData.append("category", category);
      formData.append("file", document.getElementById("u_file_t").files[0]); // 실제 input file 데이터 삽입


      console.log(user_contents_code);


      // [ajax : post body form data 형식으로 요청 실시]
      $.ajax({
        /* 요청 시작 부분 */
        url: url, //주소
        data: formData, //전송 데이터
        type: "POST", //전송 타입
        async: true, //비동기 여부
        enctype: "multipart/form-data", //form data 설정
        processData: false, //프로세스 데이터 설정 : false 값을 해야 form data로 인식합니다
        contentType: false, //헤더의 Content-Type을 설정 : false 값을 해야 form data로 인식합니다
        

        /* 응답 확인 부분 */
        success: function(response) {
          console.log("");
          console.log("[serverUploadImage] : [response] : " + response);
          console.log("");

          $('.post_img').attr('href', response);

        },

        /* 에러 확인 부분 */
        error: function(xhr) {
          console.log("");
          console.log("[serverUploadImage] : [error] : " + xhr);
          console.log("");
        },

        /* 완료 확인 부분 */
        complete:function(data,textStatus) {
          console.log("");
          console.log("[serverUploadImage] : [complete] : " + textStatus);
          console.log("");
        }
      });
      
    };




 //////////////////////////////////////////////////////////////////////////////////////
// 프로필 이미지 업데이트
function serverUpdateImage_profile(){

      console.log("");
      console.log("[serverUploadImage] : [start]");
      console.log("");

      // [전송시 필요한 url 및 데이터 정의 실시]
      var url = "/hoodify/update_profile_img.php";
      var inputIdx = "1";

      // [전송 데이터 체크 실시]
      console.log("");
      console.log("[serverUploadImage] : [request]");
      console.log("[url] : " + url);
      console.log("[method] : " + "post body form data");
      console.log("[idx] : " + inputIdx); // 추가 form data에 key 값 삽입
      console.log(document.getElementById("profile_img").files[0]); // body쪽 input file 태그 데이터 확인
      console.log("");


      // [input file 태그에 지정된 파일 얻어오기]
      var formData = new FormData(); // FormData 객체 생성
      formData.append("idx", inputIdx); // 추가 파라미터 삽입
      formData.append("file", document.getElementById("profile_img").files[0]); // 실제 input file 데이터 삽입




      // [ajax : post body form data 형식으로 요청 실시]
      $.ajax({
        /* 요청 시작 부분 */
        url: url, //주소
        data: formData, //전송 데이터
        type: "POST", //전송 타입
        async: true, //비동기 여부
        enctype: "multipart/form-data", //form data 설정
        processData: false, //프로세스 데이터 설정 : false 값을 해야 form data로 인식합니다
        contentType: false, //헤더의 Content-Type을 설정 : false 값을 해야 form data로 인식합니다
        

        /* 응답 확인 부분 */
        success: function(response) {
          console.log("");
          console.log("[serverUploadImage] : [response] : " + response);
          console.log("");

         
          $('.show_profile').attr("src",response);

         // $('.post_img').attr('href', response);

        },

        /* 에러 확인 부분 */
        error: function(xhr) {
          console.log("");
          console.log("[serverUploadImage] : [error] : " + xhr);
          console.log("");
        },

        /* 완료 확인 부분 */
        complete:function(data,textStatus) {
          console.log("");
          console.log("[serverUploadImage] : [complete] : " + textStatus);
          console.log("");
        }
      });
      
    };





      


/////////////////////////////////////////////////////////////////////////////////////
// record 삭제 버튼

    $('.btn_delete').click(function(){
        
        layer_popup($('.delete_check'));
    });
    $('#btn_deleteCom').click(function(){

        var record_code = Global_Var.userInfo.curr_record_code;
        console.log(record_code);

        if($('.activity_post').hasClass('state_activity')){
            $.ajax({
                type : "POST",
                url : "/hoodify/delete_activity_record.php",
                data : {
                        'record_code': record_code,
                    },
                success : function(res){
                
                    
                        console.log(res);
                        refresh_activity_record_list();


                        $('.activity_post').fadeOut('fast');
                        $('.delete_check').fadeOut('fast');

                

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


                        refresh_item_record_list();


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


                        refresh_skill_record_list();


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
// activity record 리스트 불러오기 및 새로고침

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

                                var record_list = $("<div>", {
                                }).css({

                                    display: "flex",
                                    alignItems: "center",
                                    borderBottom: "1px solid #D8D8D8",
                                    cursor:'pointer',
                                    
                                    

                                }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                $(this).css("background-color", "white");
                                }).click(((record) => function (e){

                                    $('.popup_activity_record_title').text(record.title);
                                    $('.record_date').text(record.date);
                                    
                                    var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                                    $('.popup_activity_record_cont').html(applyBr);

                                    
                                    console.log(record);
                                    Global_Var.userInfo.curr_record_code = record.user_activity_code;


                                    $.ajax({
                                        type : "POST",
                                        url : "/hoodify/get_record_img.php",
                                        data : {
                                                'user_contents_code': record.user_activity_code,
                                                'category' : 'activity',
                                            },
                                        dataType : 'json',
                                        success : function(res){
                                            
                                            console.log(res);
                                            if(res.length>0){

                                            $('.post_img').css({display: 'flex',});
                                            $('.post_img_s').css({display: 'flex',});    
                                            $('.post_img').attr("href",res[0].file_path);
                                            $('.post_img_s').attr("src",res[0].file_path);

                                            $('.imgArea').attr("src",res[0].file_path);
                                            

                                            $(".post_img").fancybox({

                                            });

                                            $('.modify_img').css({display: 'flex',});



                                            

                                        }
                                        
                                        else{
                                            $('.post_img').css({display: 'none',});
                                            $('.post_img_s').css({display: 'none',});
                                            $('.modify_img').attr("src", ''); 
                                            $('.post_img_s').attr('src', '');

                                        }
                                           



                                        },
                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                            alert("통신 실패.")
                                        }
                                    });



                                    
                                    layer_popup($('.activity_post'));
                                    


                                })(record)).appendTo($('.mylist'));

                                    $('<img>', {
                                        src: '/hoodify/img/identity/hooodify_mini.png'

                                    }).css({
                                        width: "30px",
                                        height: "30px",
                                        margin: "4.5px",
                                        marginLeft: "10px",
                                        float: "left",
                                        "border-radius": "8px",
                                        "border": "1px solid #475169"
                                    }).appendTo(record_list);

                                    $('<p>', {
                                        text: record.title,

                                        }).css({
                                        "padding": "12px",
                                        "width": "90%",
                                        "fontWeight": "bold",
                                        "color" : '#495364',
                                        "overflow": "hidden",
                                        "text-overflow": "ellipsis",
                                        "white-space": "nowrap",
                                        "max-width": "170px",
                                    
                                    }).appendTo(record_list);
                           

                                    $('<p>', {
                                        text: record.date,

                                        }).css({
                                        "padding": "12px",
                                        "right": "20",
                                        'font-size': '11px',
                                        "color" : '#495364',
                                        "overflow": "hidden",
                                        "text-overflow": "ellipsis",
                                        "white-space": "nowrap",
                                        "max-width": "170px",
                                        'margin-left': 'auto',
                                    
                                    }).appendTo(record_list);
                           
                           
                           
                                };







                            if(($(".mylist").has("div").length == 0)){

                                console.log($(".mylist").has("div").length);
                                $('<img>', {
                                        src: '/hoodify/img/identity/hooodify_mini_gray.png'

                                    }).css({
                                        width: "80px",
                                        height: "80px",
                                        position: "relative",
                                        left: "50%",
                                        marginLeft: "-40px",
                                        top: "50%",
                                        marginTop: "-40px",

                                    }).appendTo($('.mylist'));

                            }



                        },
                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                            alert("통신 실패.")
                        }
                    });
            

}

/////////////////////////////////////////////////////////////////////////////////////
// item record  리스트 불러오기 및 새로고침

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

                    var record_list = $("<div>", {
                    }).css({

                        display: "flex",
                        alignItems: "center",
                        borderBottom: "1px solid #D8D8D8",
                        cursor:'pointer',

                    }).hover(function() {
                    $(this).css("background-color", "#bad8f2");
                    }, function(){
                    $(this).css("background-color", "white");
                    }).click(((record) => function (e){

                        $('.popup_activity_record_title').text(record.title);
                        var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                        $('.popup_activity_record_cont').html(applyBr);


                        

                        Global_Var.userInfo.curr_record_code = record.user_item_code;

                         $.ajax({
                                        type : "POST",
                                        url : "/hoodify/get_record_img.php",
                                        data : {
                                                'user_contents_code': record.user_item_code,
                                                'category' : 'item',
                                            },
                                        dataType : 'json',
                                        success : function(res){
                                            
                                            console.log(res);
                                            if(res.length>0){

                                            $('.post_img').css({display: 'flex',});
                                            $('.post_img_s').css({display: 'flex',});    
                                            $('.post_img').attr("href",res[0].file_path);
                                            $('.post_img_s').attr("src",res[0].file_path);

                                            $('.imgArea').attr("src",res[0].file_path);
                                            

                                            $(".post_img").fancybox({

                                            });

                                            $('.modify_img').css({display: 'flex',});



                                            

                                        }
                                        
                                        else{
                                            $('.post_img').css({display: 'none',});
                                            $('.post_img_s').css({display: 'none',});
                                            $('.modify_img').attr("src", ''); 
                                            $('.post_img_s').attr('src', '');

                                        }
                                           



                                        },
                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                            alert("통신 실패.")
                                        }
                                    });
                        
                        layer_popup($('.activity_post'));


                    })(record)).appendTo($('.mylist_item'));

                        $('<img>', {
                            src: '/hoodify/img/identity/hooodify_mini.png'

                        }).css({
                            width: "30px",
                            height: "30px",
                            margin: "4.5px",
                            marginLeft: "10px",
                            float: "left",
                            "border-radius": "8px",
                            "border": "1px solid #475169"
                        }).appendTo(record_list);

                        $('<p>', {
                            text: record.title,

                            }).css({
                                    "padding": "12px",
                                    "width": "90%",
                                    "fontWeight": "bold",
                                    "color" : '#495364',
                                    "overflow": "hidden",
                                    "text-overflow": "ellipsis",
                                    "white-space": "nowrap",
                                    "max-width": "170px",
                        
                        }).appendTo(record_list);
                }


                if(($(".mylist_item").has("div").length === 0)){

                    console.log('empty');
                    $('<img>', {
                            src: '/hoodify/img/identity/hooodify_mini_gray.png'

                        }).css({
                            width: "80px",
                            height: "80px",
                            position: "relative",
                            left: "50%",
                            marginLeft: "-40px",
                            top: "50%",
                            marginTop: "-40px",
                        }).appendTo($('.mylist_item'));

                }

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

}

/////////////////////////////////////////////////////////////////////////////////////
// skill record  리스트 불러오기 및 새로고침

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

                    var record_list = $("<div>", {
                    }).css({

                        display: "flex",
                        alignItems: "center",
                        borderBottom: "1px solid #D8D8D8",
                        cursor:'pointer',

                        

                    }).hover(function() {
                    $(this).css("background-color", "#bad8f2");
                    }, function(){
                    $(this).css("background-color", "white");
                    }).click(((record) => function (e){

                        $('.popup_activity_record_title').text(record.title);
                        var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                        $('.popup_activity_record_cont').html(applyBr);

                        Global_Var.userInfo.curr_record_code = record.user_skill_code;


                        $.ajax({
                                        type : "POST",
                                        url : "/hoodify/get_record_img.php",
                                        data : {
                                                'user_contents_code': record.user_skill_code,
                                                'category' : 'skill',
                                            },
                                        dataType : 'json',
                                        success : function(res){
                                            
                                            console.log(res);
                                            if(res.length>0){

                                            $('.post_img').css({display: 'flex',});
                                            $('.post_img_s').css({display: 'flex',});    
                                            $('.post_img').attr("href",res[0].file_path);
                                            $('.post_img_s').attr("src",res[0].file_path);

                                            $('.imgArea').attr("src",res[0].file_path);
                                            

                                            $(".post_img").fancybox({

                                            });

                                            $('.modify_img').css({display: 'flex',});



                                            

                                        }
                                        
                                        else{
                                            $('.post_img').css({display: 'none',});
                                            $('.post_img_s').css({display: 'none',});
                                            $('.modify_img').attr("src", ''); 
                                            $('.post_img_s').attr('src', '');

                                        }
                                           



                                        },
                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                            alert("통신 실패.")
                                        }
                                    });
                        
                        layer_popup($('.activity_post'));


                    })(record)).appendTo($('.mylist_skill'));;

                        $('<img>', {
                            src: '/hoodify/img/identity/hooodify_mini_gray.png'

                        }).css({
                            width: "25px",
                            height: "25px",
                            margin: "4.5px",
                            float: "left",
                            margin: "7px",
                        }).appendTo(record_list);

                        $('<p>', {
                            text: record.title,

                            }).css({
                            "padding": "12px",
                            "width": "90%",
                            "fontWeight": "bold",
                        
                        }).appendTo(record_list);
                }

                 if(($(".mylist_skill").has("div").length === 0)){

                    console.log('empty');
                    $('<img>', {
                            src: '/hoodify/img/identity/hooodify_mini_gray.png'

                        }).css({
                            width: "80px",
                            height: "80px",
                            position: "relative",
                            left: "50%",
                            marginLeft: "-40px",
                            top: "50%",
                            marginTop: "-40px",
                        }).appendTo($('.mylist_skill'));

                    }


            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

}



/////////////////////////////////////////////////////////////////////////////////////
// record 수정하기 버튼

$('.btn_modify').click(function(){

    $('.find_img_container').css({'display':'flex'});

    var record_title = $('.popup_activity_record_title').text();
    var record_cont = $('.popup_activity_record_cont').html();
    
    console.log("내용 "+record_cont);
    $('.record_title_modify').val(record_title);
    
    var applyBr_m = record_cont.replace(/\<br>/g, '&#10;');
    var applyBr_m2 = record_cont.replaceAll("<br>", "\r\n");


    $('.record_cont_modify').val(applyBr_m2);
    
    $('.record_cont_modify').html(applyBr_m);


    // 해당 포스팅의 이미지 존재 여부 확인
    
    var post_img = $('.post_img_s').attr('src');
    console.log('수정'+post_img);
    $('.modify_img').attr('src', post_img); 
    console.log($('.modify_img').attr('src'));
    


    
    layer_popup($('.modify_record_layer'));
});


/////////////////////////////////////////////////////////////////////////////////////
// record 수정 완료 버튼

$('.btn_modify_com').click(function(){
   
    var record_code = Global_Var.userInfo.curr_record_code;
    var record_title = $('.record_title_modify').val();
    var record_cont = $('.record_cont_modify').val();
    var record_cont_line = record_cont.replace(/(?:\r\n|\r|\n)/g, '<br />');


    
    var public_state;
    if($('.public_check_modify').is(':checked')){
        public_state = 1;

    }else{
        public_state = 0;

    };

    
    // 내용 입력 확인
    if($('.record_title_modify').val().length<2){

        alert("제목을 입력하세요 (2자 이상)");

    }

    else if($('.record_cont_modify').val().length<5){
        alert("내용을 입력하세요(10자 이상)");
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
                    'record_cont' : record_cont_line,
                    'public_state' : public_state,
                },
            success : function(res){
            console.log(res);
            
                $('.popup_activity_record_title').text(record_title);
                $('.popup_activity_record_cont').html(record_cont_line);


                var file = document.getElementById("u_file_t");
                 //서버에 이미지 보내기
                if(file.files.length == 0 ){
                    console.log("no files selected");
                }else{

                    serverUpdateImage(record_code, 'activity');

                    var apply_img = $('.modify_img').attr('src');
                    console.log('tt'+apply_img);
                    $('.post_img_s').attr('src', apply_img);
                    

                    $('.post_img_s').css("display","flex");
                    $('.post_img').css("display","flex");

                }
                
                // 수정시 activity record 리스트 갱신하기
                
                refresh_activity_record_list();
                

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
                    var file = document.getElementById("u_file_t");
                 //서버에 이미지 보내기
                  if(file.files.length == 0 ){
                    console.log("no files selected");
                    }else{

                    serverUpdateImage(record_code, 'item');

                    var apply_img = $('.modify_img').attr('src');
                    console.log('tt'+apply_img);
                    $('.post_img_s').attr('src', apply_img);
                    

                    $('.post_img_s').css("display","flex");
                    $('.post_img').css("display","flex");
                    
                }

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

                    var file = document.getElementById("u_file_t");
                 //서버에 이미지 보내기
                  if(file.files.length == 0 ){
                    console.log("no files selected");
                    }else{

                    serverUpdateImage(record_code, 'skill');

                    var apply_img = $('.modify_img').attr('src');
                    console.log('tt'+apply_img);
                    $('.post_img_s').attr('src', apply_img);
                    

                    $('.post_img_s').css("display","flex");
                    $('.post_img').css("display","flex");


                }
                    
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


        ////////
        // user on 일때 코드 닫는 괄호

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

    })



///////////////////////////////////////////////////////////////////////////////
// 레이어 띄우기(공통)
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





