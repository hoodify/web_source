

<html>
<head>
    <meta charset="euc-kr">
    <title>후디파이. 세상의 모든 정체성</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>

    <link rel="icon" href="/hoodify/img/identity/hooodify_mini_round.png">

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

    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("/hoodify/img/background_sky4.jpg");
    background-repeat: no-repeat; /* 배경이미지X */
    background-size: cover; /* 요소를 비율에 맞게 커버 */
    background-position: center; /* 이미지를 요소의 정가운데로 처리 */
    background-attachment: fixed;


  }



           header{ width: 100%; height: 80px; background-color: rgba( 0, 0, 0, 0.6 ); }
           footer{ width: 100%; height: 80px; background-color: rgba( 0, 0, 0, 0.6 ); }

           .hook_text_space{width: 100%; height: 900px; background-color: rgba( 0, 0, 0, 0.1 ); display: flex; justify-content: center;}

           .hook_text{
            position: absolute; 
            font-size: 40px; 
            color: white; 
            font-family:TmoneyRoundWindExtraBold; 
            transition: color 0.2s ease-out 100ms;

           }

           .hook_text2{
            position: absolute; 
            font-size: 40px; 
            color: white; 
            font-family:TmoneyRoundWindExtraBold; 
            transition: color 0.2s ease-out 100ms;

           }
           .hook_text2:hover{
            color: rgba( 51, 88, 154); 

           }


           #hook01{display: none; margin-right: 750px; margin-top: 200px;}
           #hook02{display: none; margin-left: 550px; margin-top: 380px;}
           #hook03{display: none; margin-right: 500px; margin-top: 600px;}



           #hook04{margin-bottom: 700px;}

           #identities_container_space{height: 650px; display: flex; align-items: center; justify-content: center; background-color: rgba( 0, 0, 0, 0.4 );}
           #identities_inner_space{width: 60%; height: 550px; display: flex; justify-content: flex-start; flex-wrap: wrap; align-content: flex-start; overflow: hidden;}

           #exmaple_people_container_space{height: 1000px; display: flex; justify-content: center; align-items: center; background-color: rgba( 0, 0, 0, 0.2 );}
           #exmaple_people_inner_space{height: 900px; width: 100%; display: flex; align-items: center; flex-wrap: wrap; justify-content: center; overflow: hidden;}


           #find_identities_container_space{height: 900px; display: flex; justify-content: center; align-items: center; background-color: rgba( 0, 0, 0, 0.4 );}
           #find_identities_inner_space{height: 700px; width: 100%; display: flex; align-items: center; justify-content: center;}


           .content_space{padding-left: 200px; padding-right: 200px;}



           .identity{cursor: pointer; width: 95px; height: 95px; display: flex; flex-direction: column; align-items: center; margin: 8px;}
           .identity_mindmap{cursor: pointer; width: 115px; height: 120px; display: flex; flex-direction: column; align-items: center; margin: 5px; position: absolute;}


           .identity_img{width: 70px; height: 70px; border-radius:10px; border: 2px solid;}
           .identity_name{color: white; font-size: 12px; font-family:TmoneyRoundWindRegular; margin-top: 7px;}

           .add_content{cursor: pointer; width: 115px; height: 120px; display: flex; flex-direction: column; align-items: center; margin: 5px; position: absolute;}





           .space_between{height: 150px; background-color: rgba( 0, 0, 0, 0.2 );}


           .example_person{height: 100%; width: 100%; display: flex; align-items: center; justify-content: center;}
           .profile_img_container{width: 230px; height: 310px; background-color: white; display: flex; justify-content: center; padding-top: 10px;}
           .example_person_img{width: 210px; height: 280px;}



           .popup_identity{width: 200px; height: 200px; padding: 5px; flex-direction: column; background-color:  rgba( 33, 33, 33); border-radius: 5px; border: 2px solid gray; position: absolute; display: none;}
           #popup_identity_img{}
           #popup_identity_text{}

          .popup_add_content{ width: 200px; height: 50px; padding: 5px;flex-direction: column; background-color:  rgba( 33, 33, 33); border-radius: 5px; border: 2px solid gray; position: absolute; display: none;}


           .btn{
             display:block;
             margin:15px auto;
             text-align:center;
             cursor: pointer;
           }
           .btn:hover{
           }



           .active{
             display: flex;
           }

           #public_identity_desc_box::-webkit-scrollbar {


               	display:none
           }


           .pop-layer2 {
             display: none;
             position: fixed;
             top: 50%;
             left: 50%;
            width: 25%;
            min-width: 500px;
             height: 75%;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1000;
             border-radius: 8px;

           }

           .pop-layer {
             display: none;
             position: fixed;
             top: 50%;
             left: 50%;
             width: 38%;
             height: 85%;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1000;
             border-radius: 8px;

           }
           .pop-layer p.ctxt {
             color: #666;
             line-height: 25px;
           }
           .btn_r {
             width: 95%;
             height: 4%;
             border-top: 1px solid #495364;;
             text-align: right;
             position: absolute;
             margin-left: 2%;
             margin-right: 2%;
             margin-bottom: 10px;
             bottom: 0;
           }




           .generalBtn {
             display: inline-block;
             height: 25px;
             padding: 0 14px 0;
             border: 1px solid #495364;
             background-color: #495364;
             font-size: 13px;
             color: #fff;
             line-height: 25px;
             text-decoration: none;
             cursor:pointer;
           }
           .generalBtn:hover {
             border: 1px solid #091940;
             background-color: #313843;
             color: #fff;
           }

           /*
           .identity_box{
             -ms-overflow-style:none;
             scrollbar-width:none;

             overflow-y: scroll;

             align-content: flex-start;


           }

           .identity_box::-webkit-scrollbar {
               	display:none
           }
           */

           .selection_box{
             cursor: pointer;
             width: 150px;
             border-radius: 9px;
             height: 70px;
             display: none;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-color: gray;
             margin: 10px;
             font-size: 25px;
             color: #fff;
             position: absolute;
           }

           .selection_box_anm{
             cursor: pointer;
             
             border-radius: 9px;
             height: 100%;
             width: 100%;
             opacity: 0;
             transition: 0.5s ease;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-color: white;
             margin: 10px;
             font-size: 25px;
             color: #fff;
             position: absolute;
             display: flex;
           }



           .selection_box2{
             width: 350px;
             border-radius: 9px;
             height: 70px;
             display: none;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-color: gray;
             margin: 10px;
             font-size: 25px;
             color: #fff;
             position: absolute;

           }

           .selection_box3{
             cursor: pointer;
             width: 180px;
             border-radius: 9px;
             height: 120px;
             display: none;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-color: gray;
             margin: 10px;
             font-size: 17px;
             color: #fff;
             position: absolute;
             padding: 30px;
             margin-top: 250px;
             text-align: center;

           }


           #toback{
             cursor: pointer;
             width: 110px;
             border-radius: 9px;
             height: 40px;
             display: none;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             background-color: gray;
             margin: 10px;
             font-size: 18px;
             color: #fff;
             position: absolute;
           }

           #start_account{
             cursor: pointer;
             width: 80px;
             border-radius: 9px;
             height: 40px;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             margin: 10px;
             font-size: 15px;
             background-color: rgba( 11, 68, 104);


           }

           #middleDiv::-webkit-scrollbar {
               	display:none
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
           }

           .side_menu{
             position: absolute;
             margin-top: 50px;
             right:50%; margin-right:-48%;
             height:550px;
             width: 120px;
             border-radius:10px;
             display: flex;
             background-color: rgba( 0, 0, 0, 0.6 );
             font-family: 'TmoneyRoundWindRegular';
             color:white;
             flex-direction: column;
             align-items: center;
             justify-content: space-between;

           }

           .temp_list::-webkit-scrollbar {
                 display:none
           }


           #login_account{
             position: fixed;
             display: none;
             width: 600px;
             height: 500px;
             z-index: 1003;
             top: 50%;
             left: 50%;
             background-color: white;
             border-radius:10px;
             border: 3px solid black;

           }

           .search_layer {
             display: none;
             position: fixed;
             top: 50%;
             left: 50%;
             width: 75%;
             height: 85%;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1009;
             padding: 15px;
             border-radius: 8px;

           }

           .selection_box:hover .selection_box_anm{

            opacity: 1;
           }

          





</style>

<body>
      <header style="display: flex; align-items: center;">
      <div style="display: flex; align-items: center;">
          <!-- <img src ="/hoodify/img/hoodify_CRM.png" style="margin-left:25px; width:50px; height:50px; border-radius:40px; "> -->
          <p style="color: white; margin-left:45px; letter-spacing:3px;">   H O O D I F Y </p>


      </div>


      </header>
       <div class="hook_text_space">

         <p class="hook_text" id="hook01">당신을 표현하는 <span style="color:rgba( 220,80,20);">키워드</span></p>

         <div class='identity_hook' id='identity_hook_01' style="position:absolute; display:none; margin-right:160px; margin-top:150px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  올빼미족   </p>
         </div>

         <div class='identity_hook' id='identity_hook_02' style="position:absolute; display:none; margin-right:500px; margin-top:80px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  자취인   </p>
         </div>

         <div class='identity_hook' id='identity_hook_03' style="position:absolute; display:none; margin-right:300px; margin-top:280px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  게임 플레이어   </p>
         </div>

         <div class='identity_hook' id='identity_hook_04' style="position:absolute; display:none; margin-right:600px; margin-top:320px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  게으른 움직임   </p>
         </div>



         <p class="hook_text" id="hook02">당신이 얻고싶은 <span style="color:rgba( 20, 82, 200);">수식어</span></p>


          <div class='identity_hook' id='identity_hook_05' style="position:absolute; display:none; margin-left:1160px; margin-top:350px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                  <p class='identity_name' style="font-size: 10px;">  작가   </p>
          </div>

          <div class='identity_hook' id='identity_hook_06' style="position:absolute; display:none; margin-left:700px; margin-top:230px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                  <p class='identity_name' style="font-size: 10px;">  디지털 노마드   </p>
          </div>

          <div class='identity_hook' id='identity_hook_07' style="position:absolute; display:none; margin-left:900px; margin-top:480px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                  <p class='identity_name' style="font-size: 10px;">  모험가의 심장   </p>
          </div>

          <div class='identity_hook' id='identity_hook_08' style="position:absolute; display:none; margin-left:600px; margin-top:520px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                  <p class='identity_name' style="font-size: 10px;">  전문가   </p>
          </div>


         <p class="hook_text" id="hook03">세상의 모든 <span style="color:rgba( 80,220,20)">정체성</span></p>


         <div class='identity_hook' id='identity_hook_09' style="position:absolute; display:none; margin-right:240px; margin-top:500px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  흙수저   </p>
         </div>

         <div class='identity_hook' id='identity_hook_10' style="position:absolute; display:none; margin-right:10px; margin-top:580px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  산책가   </p>
         </div>

         <div class='identity_hook' id='identity_hook_11' style="position:absolute; display:none; margin-right:100px; margin-top:700px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  커피 한 잔  </p>
         </div>

         <div class='identity_hook' id='identity_hook_12' style="position:absolute; display:none; margin-right:370px; margin-top:720px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  백수   </p>
         </div>


         <div class='identity_hook' id='identity_hook_13' style="position:absolute; display:none; margin-right:1050px; margin-top:350px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  무계획   </p>
         </div>
         <div class='identity_hook' id='identity_hook_14' style="position:absolute; display:none; margin-left:370px; margin-top:220px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  프리랜서   </p>
         </div>
         <div class='identity_hook' id='identity_hook_15' style="position:absolute; display:none; margin-right:870px; margin-top:80px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  괴짜   </p>
         </div>
         <div class='identity_hook' id='identity_hook_16' style="position:absolute; display:none; margin-right:870px; margin-top:730px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  모태솔로  </p>
         </div>

         <div class='identity_hook' id='identity_hook_17' style="position:absolute; display:none; margin-left:10px; margin-top:200px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  미니멀리즘   </p>
         </div>
         <div class='identity_hook' id='identity_hook_18' style="position:absolute; display:none; margin-right:670px; margin-top:490px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  솔로 플레이어   </p>
         </div>
         <div class='identity_hook' id='identity_hook_19' style="position:absolute; display:none; margin-right:970px; margin-top:520px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  너드   </p>
         </div>
         <div class='identity_hook' id='identity_hook_20' style="position:absolute; display:none; margin-right:1270px; margin-top:50px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  유머감각   </p>
         </div>


         <div class='identity_hook' id='identity_hook_21' style="position:absolute; display:none; margin-left:1170px; margin-top:50px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  사무직   </p>
         </div>
         <div class='identity_hook' id='identity_hook_22' style="position:absolute; display:none; margin-left:870px; margin-top:100px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  캠핑족   </p>
         </div>
         <div class='identity_hook' id='identity_hook_23' style="position:absolute; display:none; margin-left:270px; margin-top:500px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  뚜벅이   </p>
         </div>
         <div class='identity_hook' id='identity_hook_24' style="position:absolute; display:none; margin-right:1270px; margin-top:680px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  알뜰살뜰   </p>
         </div>


         <div class='identity_hook' id='identity_hook_25' style="position:absolute; display:none; margin-left:1170px; margin-top:550px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  미적감각   </p>
         </div>
         <div class='identity_hook' id='identity_hook_26' style="position:absolute; display:none; margin-left:200px; margin-top:70px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  불운   </p>
         </div>
         <div class='identity_hook' id='identity_hook_27' style="position:absolute; display:none; margin-left:470px; margin-top:670px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  설계자   </p>
         </div>
         <div class='identity_hook' id='identity_hook_28' style="position:absolute; display:none; margin-left:1270px; margin-top:680px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  백수   </p>
         </div>

         <div class='identity_hook' id='identity_hook_29' style="position:absolute; display:none; margin-left:830px; margin-top:650px;  opacity: 0.5; display:flex; flex-direction: column;  align-items: center;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png" style="width:50px; height:50px;">
                <p class='identity_name' style="font-size: 10px;">  사색하는 철학자   </p>
         </div>



       </div>


       <div id="identities_container_space">
       <div class= "content_space" id="identities_inner_space">
         <div class='identity' id='identity_14'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 디지털노마드</p>
         </div>
         <div class='identity' id='identity_2'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini2.png">
           <p class='identity_name'> 괴짜</p>
         </div>
         <div class='identity' id='identity_31'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 미니멀리즘</p>
         </div>
         <div class='identity' id='identity_37'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 취준생</p>
         </div>
         <div class='identity' id='identity_34'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 올빼미족</p>
         </div>
         <div class='identity' id='identity_39'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 허약체질</p>
         </div>
         <div class='identity' id='identity_40'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 모태솔로</p>
         </div>
         <div class='identity' id='identity_1'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 잡학다식</p>
         </div>
         <div class='identity' id='identity_33'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 집사</p>
         </div>
         <div class='identity' id='identity_30'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 샐러드광</p>
         </div>
         <div class='identity' id='identity_15'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 아르바이트 마스터 </p>
         </div>
         <div class='identity' id='identity_32'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 자취인</p>
         </div>
         <div class='identity' id='identity_12'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 솔로 플레이어</p>
         </div>
         <div class='identity' id='identity_13'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 너드</p>
         </div>
         <div class='identity' id='identity_11'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 무계획</p>
         </div>
         <div class='identity' id='identity_3'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 유머감각</p>
         </div>
         <div class='identity' id='identity_7'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 겜잘알</p>
         </div>
         <div class='identity' id='identity_5'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 협상의 달인</p>
         </div>
         <div class='identity' id='identity_21'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 사무직</p>
         </div>
         <div class='identity' id='identity_28'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 민트 선호</p>
         </div>
         <div class='identity' id='identity_35'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 알뜰살뜰</p>
         </div>
         <div class='identity' id='identity_36'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 방콕</p>
         </div>
         <div class='identity' id='identity_18'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 프리랜서</p>
         </div>
         <div class='identity' id='identity_17'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 작가</p>
         </div>
         <div class='identity' id='identity_45'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 인방 시청자</p>
         </div>
         <div class='identity' id='identity_50'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 수집가</p>
         </div>
         <div class='identity' id='identity_26'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 치즈 추가</p>
         </div>
         <div class='identity' id='identity_44'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> DIY족</p>
         </div>
         <div class='identity' id='identity_24'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 힙합</p>
         </div>
         <div class='identity' id='identity_43'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 흙수저</p>
         </div>
         <div class='identity' id='identity_47'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 캠핑족</p>
         </div>
         <div class='identity' id='identity_38'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 뚜벅이</p>
         </div>
         <div class='identity' id='identity_23'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 커피 한 잔</p>
         </div>
         <div class='identity' id='identity_19'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 설계자</p>
         </div>
         <div class='identity' id='identity_10'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 게으른 움직임</p>
         </div>
         <div class='identity' id='identity_4'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 손재주</p>
         </div>
         <div class='identity' id='identity_9'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 모험가의 심장</p>
         </div>
         <div class='identity' id='identity_6'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 미적 감각</p>
         </div>
         <div class='identity' id='identity_41'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 불운</p>
         </div>
         <div class='identity' id='identity_25'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 후드 매니아</p>
         </div>
         <div class='identity' id='identity_42'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 백수</p>
         </div>
         <div class='identity' id='identity_48'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 산책가</p>
         </div>
         <div class='identity' id='identity_29'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 치킨 학살자</p>
         </div>
         <div class='identity' id='identity_16'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 전문가</p>
         </div>
         <div class='identity' id='identity_8'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 세상을 보는 눈</p>
         </div>
         <div class='identity' id='identity_27'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 매콤하게</p>
         </div>
         <div class='identity' id='identity_46'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 여행가</p>
         </div>
         <div class='identity' id='identity_49'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 사진 한 장</p>
         </div>
         <div class='identity' id='identity_20'>
           <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p class='identity_name'> 사색하는 철학자</p>
         </div>
         <div style="display: flex; align-items: center; justify-content: center; margin:20px;">
           <p style="color:white" >●&nbsp;&nbsp;&nbsp;●&nbsp;&nbsp;&nbsp;●</p>
         </div>

       </div>


       </div>

       <div class="space_between"></div>

       <div id="exmaple_people_container_space">

          <p class="hook_text" id="hook04"> 다양한 사람들</span></p>

         <button class="btn" id="left_slide" style="color:white; margin-Left:300px; font-size: 25px; border:0px; background-color: rgba( 0, 0, 0, 0);"><</button>

       <div class= "content_space" id="exmaple_people_inner_space">

         <div class="example_person active" id="example_person_1">
           <div class='profile_img_container'>
             <img class='example_person_img' src="/hoodify/img/example_person/example01.png">
           </div>
           <div class='identity_mindmap' id='identity_14'style="margin-right:850px; margin-bottom:450px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 디지털노마드</p>
           </div>
           <div class='identity_mindmap' id='identity_19' style="margin-left:800px; margin-bottom:600px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 설계자</p>
           </div>
           <div class='identity_mindmap' id='identity_13' style="margin-right:550px; margin-bottom:0px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 너드</p>
           </div>
           <div class='identity_mindmap' id='identity_56' style="margin-left:550px; margin-bottom:100px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 코드라는 벽돌</p>
           </div>
           <div class='identity_mindmap' id='identity_60' style="margin-right:850px; margin-top:600px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 게임 플레이어</p>
           </div>
           <div class='identity_mindmap' id='identity_55' style="margin-right: 50px; margin-top:560px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 스타트업</p>
           </div>
           <div class='identity_mindmap' id='identity_59' style="margin-left:650px; margin-top:450px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 문제투성이</p>
           </div>
         </div>

         <div class="example_person" id="example_person_2" style="display:none">
           <div class='profile_img_container'>
             <img class='example_person_img' src="/hoodify/img/example_person/example02.png">
           </div>
           <div class='identity_mindmap' id='identity_54'style="margin-right:550px; margin-bottom:350px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 유목민</p>
           </div>
           <div class='identity_mindmap' id='identity_53' style="margin-left:500px; margin-bottom:400px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 평범한 옷차림</p>
           </div>
           <div class='identity_mindmap' id='identity_34' style="margin-right:900px; margin-top:150px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 올빼미족</p>
           </div>
           <div class='identity_mindmap' id='identity_51' style="margin-left:850px; margin-bottom:250px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 매력적인 목소리</p>
           </div>
           <div class='identity_mindmap' id='identity_17' style="margin-right:600px; margin-top:600px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 작가</p>
           </div>
           <div class='identity_mindmap' id='identity_12' style="margin-left:150px; margin-top:700px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 솔로 플레이어</p>
           </div>
           <div class='identity_mindmap' id='identity_39' style="margin-left:750px; margin-top:300px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 허약체질</p>
           </div>

         </div>

         <div class="example_person" id="example_person_3" style="display:none">
           <div class='profile_img_container'>
             <img class='example_person_img' src="/hoodify/img/example_person/example03.png">
           </div>
           <div class='identity_mindmap' id='identity_3'style="margin-right:750px; margin-bottom:400px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 유머감각</p>
           </div>
           <div class='identity_mindmap' id='identity_57' style="margin-left:550px; margin-bottom:500px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 농부</p>
           </div>
           <div class='identity_mindmap' id='identity_2' style="margin-right:550px; margin-top:250px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 괴짜</p>
           </div>
           <div class='identity_mindmap' id='identity_10' style="margin-left:500px; margin-bottom:50px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 게으른 움직임</p>
           </div>
           <div class='identity_mindmap' id='identity_52' style="margin-right:1000px; margin-top:600px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'>끝없는 방황</p>
           </div>
           <div class='identity_mindmap' id='identity_58' style="margin-top:700px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 단벌신사</p>
           </div>
           <div class='identity_mindmap' id='identity_20' style="margin-left:650px; margin-top:450px;">
             <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
             <p class='identity_name'> 사색하는 철학자</p>
           </div>


         </div>


       </div>

         <button  class="btn" id="right_slide" style="color:white; margin-right:300px; font-size: 25px; border:0px; background-color: rgba( 0, 0, 0, 0);">></button>

       </div>

       <div id='find_identities_container_space'>
         <div class= "content_space" id="find_identities_inner_space">

           <p class="hook_text2" id="start" style="cursor:pointer;"> 내 키워드 찾기 </p>


           <div style="width:100%; height:100%; display:flex; justify-content: center;  align-items: center;" >

           <div class="selection_box" id="selection_style" style="background-color: rgba( 99, 2, 55); margin-right: 700px; margin-bottom:450px;">
             <p>스타일</p>
              <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


           <div  class="selection_box" id="selection_personality" style="background-color: rgba( 186, 159, 72); margin-left: 700px; margin-bottom:450px;">
             <p>성격</p>
              <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


           <div class="selection_box" id="selection_personality_mbti" style="width: 120px; height: 50px; font-size: 15px; background-color: rgba( 116, 100, 44); margin-left: 900px; margin-bottom:650px;">
             <p>MBTI로 찾기</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

            <div class="selection_box" id="selection_favorite" style="background-color: #114724; margin-right: 100px; margin-top:550px;">
             <p>취향</p>
              <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


            <div class="selection_box" id="selection_interest" style="background-color: #003458; margin-left: 1100px; margin-top:50px;">
             <p >관심사</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             


             <div class="selection_box mbti" id="mbti_infp" style="background-color: #2E8268; margin-right: 1000px; margin-bottom:350px;">
             <p >INFP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_infj" style="background-color: #2E8268; margin-right: 500px; margin-bottom:650px;">
             <p >INFJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             
             <div class="selection_box mbti" id="mbti_intp" style="background-color: #2E8268; margin-right: 950px; margin-bottom:550px;">
             <p >INTP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_intj" style="background-color: #2E8268; margin-right: 550px; margin-bottom:450px">
             <p >INTJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div class="selection_box mbti" id="mbti_isfp" style="background-color: #773954;  margin-right: 1000px; margin-top:350px;">
             <p >ISFP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_isfj" style="background-color: #773954; margin-right: 500px; margin-top:650px;">
             <p >ISFJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             
             <div class="selection_box mbti" id="mbti_istp" style="background-color: #773954; margin-right: 950px; margin-top:550px;">
             <p >ISTP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_istj" style="background-color: #773954; margin-right: 550px; margin-top:450px;">
             <p >ISTJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             
             

             <div class="selection_box mbti" id="mbti_enfp" style="background-color: #2D6083;  margin-left: 1000px; margin-bottom:350px;">
             <p >ENFP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_entp" style="background-color: #2D6083; margin-left: 500px; margin-bottom:650px;">
             <p >ENTP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             
             <div class="selection_box mbti" id="mbti_enfj" style="background-color: #2D6083; margin-left: 950px; margin-bottom:550px;">
             <p >ENFJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_entj" style="background-color: #2D6083; margin-left: 550px; margin-bottom:450px;">
             <p >ENTJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div class="selection_box mbti" id="mbti_estp" style="background-color: #DEA900; margin-left: 1000px; margin-top:350px;">
             <p >ESTP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_esfp" style="background-color: #DEA900;  margin-left: 500px; margin-top:650px;">
             <p >ESFP</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
             
             <div class="selection_box mbti" id="mbti_estj" style="background-color: #DEA900; margin-left: 950px; margin-top:550px;">
             <p >ESTJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box mbti" id="mbti_esfj" style="background-color: #DEA900; margin-left: 550px; margin-top:450px;">
             <p >ESFJ</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
                
            
             

           <div class="selection_box" id="selection_state" style="background-color: rgba( 15, 61, 72); margin-right: 200px; margin-bottom:120px;">
             <p>생활 </p>

             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box" id="selection_work" style="background-color: #3a1e38; margin-left: 450px; margin-top:230px;">
             <p>일&직업 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 



             <div  class="selection_box" id="selection_values" style="background-color: rgba( 130, 80, 66); margin-right: 800px; margin-top:250px;">
             <p>이상향 </p>

             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 



             <div  class="selection_box" id="selection_work2" style="font-size: 22px; background-color: #114724; margin-right:880px; margin-bottom:100px;">
             <p>예술 & 문화 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div  class="selection_box" id="selection_work3" style="background-color: #0a1f40;margin-left: 20px; margin-bottom:350px;">
             <p> IT </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div  class="selection_box" id="selection_work4" style="background-color: #400a1f; margin-left: 850px; margin-top:280px;">
             <p> 서비스 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div  class="selection_box" id="selection_work5" style="background-color: rgba( 186, 159, 72); margin-left: 350px; margin-top:670px;">
             <p> 농업ㆍ어업 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             




             <p class="selection_box" id="selection_state2" style="cursor:default; background-color: #2f5374; margin-left:550px; margin-bottom:100px;">경제 </p>
             <p class="selection_box" id="selection_state3" style="cursor:default; background-color: #192c3e; margin-right: 400px; margin-bottom:320px;">사회 </p>
             <p class="selection_box" id="selection_state5" style="cursor:default; background-color: rgba( 40, 70, 98); margin-right: 50px; margin-top:370px;">건강  </p>



             <p class="selection_box2" id="selection_style2" style="background-color: rgba( 99, 2, 55); margin-bottom: 200px;" >외모를 꾸미는 편인가요?</p>


             <div class="selection_box" id="selection_style3" style="background-color: rgba( 123, 100, 106); flex-direction: column;
             justify-content: center;
             align-items: center; margin-right: 800px;  width: 250px; height:170px; margin-top: 250px; font-size:17px; 
             text-align: center;">
             <p >있는 것들로 입음 <br><br>옷 브랜드에 관심 없음 <br><br>옷에 관심 없다는 얘기를 들음 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 
           
             <div class="selection_box" id="selection_style4" style="background-color: rgba( 123, 100, 106); flex-direction: column;
             justify-content: center;
             align-items: center; width: 250px; height:170px; margin-top: 250px; font-size:17px; 
             text-align: center;">
             <p >남들만큼은 꾸미고 다님  <br><br> 엄청 신경쓰지는 않음 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box" id="selection_style5" style="background-color: rgba( 123, 100, 106); flex-direction: column;
             justify-content: center;
             align-items: center; margin-left: 800px;  width: 250px; height:170px; margin-top: 250px; font-size:17px; 
             text-align: center;">
             <p >옷 사는 걸 좋아함 <br><br> 옷에 관심 많음 <br><br> 꾸미는 거 좋아함 </p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             
                


             <div class='add_content' style="display: none; margin-right:1050px; margin-top: 650px;">
               <p style="width: 70px; height: 70px; border-radius:10px; border: 2px solid; font-family:TmoneyRoundWindExtraBold; font-size:40px; display: flex; align-items: center; justify-content: center; background-color:white; ">?</p>
               <p class='identity_name'> 미확인 정체성   </p>
             </div>

             <div class='identity_mindmap selection mbti_i' id='identity_selection_13' style="display: none; margin-left:700px; margin-top:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 너드</p>
             </div>

             <div class='identity_mindmap selection id_favorite' id='identity_selection_58' style="display: none; margin-right:450px; margin-top: 650px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 단벌신사</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_10' style="display: none; margin-left:500px; margin-bottom:50px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 게으른 움직임</p>
             </div>

             <div class='identity_mindmap selection id_values' id='identity_selection_31' style="display: none; margin-left:20px; margin-bottom:450px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 미니멀리즘</p>
             </div>

             <div class='identity_mindmap selection id_values' id='identity_selection_54' style="display: none; margin-left:420px; margin-bottom:100px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 유목민</p>
             </div>

             <div class='identity_mindmap selection id_favorite' id='identity_selection_53' style="display: none; margin-right:750px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 평범한 옷차림</p>
             </div>

             <div class='identity_mindmap selection id_values' id='identity_selection_24' style="display: none; margin-left:300px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 힙합</p>
             </div>

             <div class='identity_mindmap selection id_favorite' id='identity_selection_61' style="display: none; margin-left:550px; margin-top:100px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 빈티지</p>
             </div>

             <div class='identity_mindmap selection id_values' id='identity_selection_62' style="display: none; margin-right:250px; margin-top:100px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 신사 </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_63' style="display: none; margin-left:250px; margin-top:200px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 클래식  </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_64' style="display: none; margin-right:750px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 패션피플  </p>
             </div>

             <div class='identity_mindmap selection id_favorite' id='identity_selection_25' style="display: none; margin-top:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 후드 매니아</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_65' style="display: none; margin-right:650px; margin-bottom:200px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 비즈니스 캐주얼</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_66' style="display: none; margin-right:750px; margin-bottom:350px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 오버핏 </p>
             </div>
             <div class='identity_mindmap selection mbti_e' id='identity_selection_67' style="display: none; margin-right:750px; margin-top:350px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 분위기 메이커 </p>
             </div>
             <div class='identity_mindmap selection mbti_e' id='identity_selection_68' style="display: none; margin-left:750px; margin-top:370px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 인싸 </p>
             </div>
             <div class='identity_mindmap selection mbti_e id_favorite' id='identity_selection_69' style="display: none; margin-right:450px; margin-top:150px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 팀플레이어 </p>
             </div>
             <div class='identity_mindmap selection mbti_e' id='identity_selection_70' style="display: none; margin-bottom:250px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 만담꾼 </p>
             </div>
             <div class='identity_mindmap selection mbti_i' id='identity_selection_71' style="display: none;  margin-right:250px; margin-top:250px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 웅크리기  </p>
             </div>

             <div class='identity_mindmap selection mbti_i' id='identity_selection_110' style="display: none;  margin-left:200px; margin-top:650px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 겁쟁이  </p>
             </div>

             <div class='identity_mindmap selection mbti_i id_favorite' id='identity_selection_12' style="display: none; margin-bottom:150px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 솔로 플레이어  </p>
             </div>
             <div class='identity_mindmap selection mbti_n' id='identity_selection_2' style="display: none; margin-right:320px; margin-bottom:110px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  괴짜   </p>
             </div>

             <div class='identity_mindmap selection mbti_n' id='identity_selection_8' style="display: none; margin-left:720px; margin-bottom:220px;">
              <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
              <p class='identity_name'> 세상을 보는 눈</p>
            </div>


             <div class='identity_mindmap selection mbti_i' id='identity_selection_36' style="display: none; margin-right:1000px; margin-top :120px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  방콕  </p>
             </div>
             <div class='identity_mindmap selection mbti_i' id='identity_selection_72' style="display: none; margin-right:800px; margin-top :520px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  저기압  </p>
             </div>
             <div class='identity_mindmap selection mbti_f' id='identity_selection_73' style="display: none; margin-left:570px; margin-bottom :490px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  경청자 </p>
             </div>
             <div class='identity_mindmap selection mbti_f' id='identity_selection_74' style="display: none; margin-left:880px; margin-top :510px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  서포터  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_75' style="display: none; margin-right:720px; margin-top :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  철면피   </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_76' style="display: none; margin-right:420px; margin-bottom :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>   홀로서기  </p>
             </div>
             <div class='identity_mindmap selection mbti_n' id='identity_selection_77' style="display: none; margin-right:480px; margin-bottom :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    예술가   </p>
             </div>
             <div class='identity_mindmap selection mbti_p' id='identity_selection_78' style="display: none; margin-right:1020px; margin-bottom :560px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    벼락치기    </p>
             </div>

             <div class='identity_mindmap selection mbti_p' id='identity_selection_11' style="display: none; margin-right:720px; margin-bottom :120px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    무계획    </p>
             </div>

             <div class='identity_mindmap selection mbti_n' id='identity_selection_79' style="display: none; margin-right:520px; margin-top :720px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    영감을 찾아서     </p>
             </div>
             <div class='identity_mindmap selection mbti_j' id='identity_selection_80' style="display: none; margin-right:920px; margin-bottom :520px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    신중한 계획자      </p>
             </div>

             <div class='identity_mindmap selection mbti_j' id='identity_selection_113' style="display: none; margin-right:420px; margin-top :470px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    남다른 생산성      </p>
             </div>


             <div class='identity_mindmap selection mbti_s mbti_t' id='identity_selection_81' style="display: none; margin-left:320px; margin-top :120px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    현실 감각       </p>
              </div>
             <div class='identity_mindmap selection mbti_e' id='identity_selection_82' style="display: none; margin-right:50px; margin-top :320px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>   사람을 잇는 다리  </p>
             </div>


             
             <div class='identity_mindmap selection' id='identity_selection_6' style="display: none; margin-right:520px; margin-top :320px;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                  <p class='identity_name'>   미적 감각  </p>
              </div>

              <div class='identity_mindmap selection life health' id='identity_selection_39' style="display: none; margin-right:480px; margin-top :480px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'> 허약체질</p>
              </div>

              <div class='identity_mindmap selection life status' id='identity_selection_59' style="display: none; margin-right:380px; margin-bottom:10px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    문제투성이     </p>
              </div>

              <div class='identity_mindmap selection mbti_i life status' id='identity_selection_40' style="display: none; margin-right:300px; margin-bottom :550px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>  모태솔로  </p>
              </div>

              <div class='identity_mindmap selection life status' id='identity_selection_42' style="display: none; margin-right:820px; margin-bottom :300px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    백수     </p>
              </div>

              <div class='identity_mindmap selection life status' id='identity_selection_37' style="display: none; margin-right:720px; margin-bottom :20px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>  취준생   </p>
              </div>

              <div class='identity_mindmap selection life status' id='identity_selection_32' style="display: none; margin-right:520px; margin-bottom :590px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    자취인       </p>
               </div>

               <div class='identity_mindmap selection life finance' id='identity_selection_83' style="display: none; margin-left:270px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    빈털터리     </p>
               </div>

               <div class='identity_mindmap selection life finance' id='identity_selection_43' style="display: none;  margin-left:890px; margin-bottom :120px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 흙수저  </p>
               </div>

               <div class='identity_mindmap selection life finance' id='identity_selection_84' style="display: none; margin-left:720px; margin-bottom :370px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  금수저    </p>
               </div>

               <div class='identity_mindmap selection life health' id='identity_selection_85' style="display: none; margin-right:250px; margin-top: 650px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 인자강 </p>
               </div>

               <div class='identity_mindmap selection life health' id='identity_selection_34' style="display: none; margin-left:50px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    올빼미족      </p>
               </div>


               <div class='identity_mindmap selection work' id='identity_selection_15' style="display: none; margin-left:200px; margin-top:400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    아르바이트 마스터       </p>
               </div>

               <div class='identity_mindmap selection work' id='identity_selection_86' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    주부      </p>
               </div>


               <div class='identity_mindmap selection work' id='identity_selection_87' style="display: none; margin-right:420px; margin-top :720px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    배달기사     </p>
               </div>

               <div class='identity_mindmap selection work' id='identity_selection_21' style="display: none; margin-right:470px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  사무직    </p>
               </div>

               <div class='identity_mindmap selection id_values work' id='identity_selection_18' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  프리랜서     </p>
               </div>

               <div class='identity_mindmap selection work_art' id='identity_selection_17' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  작가      </p>
               </div>

               <div class='identity_mindmap selection work_art' id='identity_selection_88' style="display: none; margin-right:520px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  일러스트레이터      </p>
               </div>


               <div class='identity_mindmap selection work_art' id='identity_selection_89' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    모델       </p>
               </div>

               <div class='identity_mindmap selection work_art' id='identity_selection_90' style="display: none; margin-left:250px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 콘텐츠 크리에이터  </p>
               </div>

               <div class='identity_mindmap selection work_IT' id='identity_selection_56' style="display: none; margin-left:550px; margin-top:100px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 코드라는 벽돌 </p>
               </div>

               <div class='identity_mindmap selection id_values work_IT' id='identity_selection_14' style="display: none; margin-right:520px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  디지털 노마드       </p>
               </div>

               <div class='identity_mindmap selection work_IT' id='identity_selection_19' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    설계자        </p>
               </div>

               <div class='identity_mindmap selection work_IT' id='identity_selection_91' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  기획자       </p>
               </div>

               <div class='identity_mindmap selection work_IT' id='identity_selection_92' style="display: none; margin-left:900px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    게임 개발자       </p>
               </div>

               <div class='identity_mindmap selection work_service' id='identity_selection_93' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  자영업자        </p>
               </div>

               <div class='identity_mindmap selection work_service' id='identity_selection_94' style="display: none; margin-left:900px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    요리사       </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_9' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    모험가의 심장      </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_3' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    유머감각      </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_95' style="display: none; margin-left:550px; margin-top:230px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 인플루언서  </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_96' style="display: none; margin-right:120px; margin-top :500px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  자수성가       </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_97' style="display: none; margin-left:520px; margin-top :720px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  욜로족       </p>
               </div>

               <div class='identity_mindmap selection id_values' id='identity_selection_107' style="display: none; margin-right:420px; margin-bottom :650px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  친환경 인간       </p>
               </div>

                <div class='identity_mindmap selection id_values' id='identity_selection_130' style="display: none; margin-left:820px; margin-bottom :120px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  낭만을 찾아서       </p>
               </div>



               <div class='identity_mindmap selection id_favorite' id='identity_selection_3' style="display: none; margin-right:820px; margin-bottom :60px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    커피 한 잔      </p>
               </div>

               <div class='identity_mindmap selection id_favorite' id='identity_selection_95' style="display: none; margin-left:800px; margin-top:230px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 치즈 추가  </p>
               </div>

               <div class='identity_mindmap selection id_favorite' id='identity_selection_96' style="display: none; margin-right:120px; margin-top :550px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  매콤하게       </p>
               </div>

               <div class='identity_mindmap selection id_favorite' id='identity_selection_97' style="display: none; margin-left:520px; margin-top :720px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  민트 선호       </p>
               </div>

               <div class='identity_mindmap selection id_favorite' id='identity_selection_107' style="display: none; margin-right:420px; margin-bottom :650px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  치킨 학살자      </p>
               </div>

                <div class='identity_mindmap selection id_favorite' id='identity_selection_130' style="display: none; margin-left:820px; margin-bottom :120px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  샐러드광       </p>
               </div>

               <div class='identity_mindmap selection id_favorite' id='identity_selection_9' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    고기 매니아      </p>
               </div>



               <div class='identity_mindmap selection id_interest' id='identity_selection_60' style="display: none; margin-right:820px; margin-bottom :60px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    게임 플레이어      </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_45' style="display: none; margin-left:800px; margin-top:230px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 인방 시청자  </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_46' style="display: none; margin-right:120px; margin-top :550px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  여행가       </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_47' style="display: none; margin-left:520px; margin-top :720px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  캠핑족       </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_48' style="display: none; margin-right:420px; margin-bottom :650px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  산책가      </p>
               </div>

                <div class='identity_mindmap selection id_interest' id='identity_selection_49' style="display: none; margin-left:620px; margin-bottom :420px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  사진 한 장       </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_50' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    수집가      </p>
               </div>



               <div class='identity_mindmap selection id_interest' id='identity_selection_105' style="display: none; margin-right:620px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    열렬한 팬      </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_112' style="display: none; margin-left:450px; margin-top:130px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 호캉스  </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_114' style="display: none; margin-right:120px; margin-top :100px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  음악 감상자       </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_118' style="display: none; margin-left:920px; margin-top :620px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  책이라는 문       </p>
               </div>

               <div class='identity_mindmap selection id_interest' id='identity_selection_119' style="display: none; margin-right:120px; margin-bottom :450px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  낚시꾼       </p>
               </div>

                <div class='identity_mindmap selection id_interest' id='identity_selection_122' style="display: none; margin-left:820px; margin-bottom :120px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  식도락가      </p>
               </div>



            

            <div class="selection_box " id="selection_style7" style="background-color: 	#b6966b; margin-left: 350px; margin-top: 150px;">
             <p >자유로움</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div class="selection_box " id="selection_style8" style="background-color: rgba( 107, 139, 182); margin-left: 700px; margin-bottom: 150px;">
             <p >격식</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

          

             <div class="selection_box" id="selection_personality3" style="margin-right: 400px; background-color: #5e86be;">
             <p>외향</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box" id="selection_personality4" style="margin-left: 400px; background-color: #be965e;">
             <p>내향</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div class="selection_box" id="selection_personality6" style="margin-left: 300px; margin-top: 100px; background-color: #6b8bb6;">
             <p>의존</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box" id="selection_personality7" style="margin-left: 750px; margin-bottom: 350px; background-color: #b6966b;">
             <p>독립</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             <div class="selection_box" id="selection_personality9" style="margin-right: 100px;margin-bottom: 520px; background-color:#9ea46b;">
             <p>즉흥</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 

             <div class="selection_box" id="selection_personality10" style="margin-left: 550px; margin-top: 250px; background-color:#716ba4;">
             <p>계획</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:50px; width:50px; border-radius:10px;">
              </div>
             </div> 


             




             <div class="selection_box" id="toback"  style="display: none; margin-left:1200px; margin-bottom:700px; background-color: rgba( 22, 100, 123);">
             <p>처음으로</p>
             <div class="selection_box_anm">
               <img class = "selection_box_img" src="/hoodify/img/identity/hooodify_mini.png" style="height:25px; width:25px; border-radius:10px;">
              </div>
             </div> 



          </div>



        </div>
       </div>



       <div class="popup_identity">
         <div style='display: flex; height: 40%; width: 100%;'>
           <img class='identity_img' id='popup_identity_img'>
           <p class='identity_name' id='popup_identity_text' style="margin-Left:10px; margin-top: 10px; font-family:TmoneyRoundWindRegular; font-Size:15px;"></p>
         </div>
         <div style="height: 50%; width: 100%;  overflow: hidden;">
           <p class='identity_desc' id='popup_identity_desc'  style="font-size: 14px; line-height:25px; color:white; margin:5px; "  > 정체성 설명 </p>
         </div>
       </div>

       <div class="popup_add_content">

           <p style="font-size: 14px; color:white; margin:5px;"  > 새로운 정체성 콘텐츠를 추가합니다  </p>

       </div>

       <div id="add_content_layer" class="pop-layer2" style=" justify-content: center;">
       <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>

         <div class="pop-container" style="margin:25px;">
         
           <div style="display:flex; align-items: center; margin-bottom: 25px; margin-top:20px;">
             <img style="float: left; width:130px; height:130px;" src="/hoodify/img/identity/hooodify_mini.png"; >
             <div style="position: relative; border: 2px solid black; border-radius: 10px; padding:15px; height:60%">
             <img src="/hoodify/img/background_bubble.png" style="width:150px; height: 150px; position:absolute; display:none;">
             <p> 이곳에서 찾지 못한 정체성이 있다면 알려주세요!</p>
             
           </div>

          </div>

          <div style="height:70%; display: flex;  justify-content: center; width: 100%;">

            <textarea id="user_cont"  placeholder="내용을 입력하세요" style=" border: 2px solid black; border-radius: 10px; font-family: TmoneyRoundWindRegular; font-size: 16px; padding: 20px; width:100%; height:90%; resize: none;"></textarea>

         </div>


           <div id = "bottomDiv" style="display: flex; justify-content: center; height:10%;">
             <div class="btn_r">
               <div class="btn_feedback generalBtn">보내기</div>

               <div class="btn_layerClose generalBtn">닫기</div>
             </div>
           </div>

        </div>

      </div>


       <div id="show_content" class="pop-layer">
       <div style="position:absolute; top:0; width:100%; height:20px; background-color:rgba( 0, 0, 0, 0.85 ); "> </div>

        
         <div class="pop-container" style="margin:15px;">
           <div id="topDiv" style="display: flex; flex-direction: column; height:25%; padding-bottom:5px; margin-bottom:30px; border-Bottom: 1px solid black; padding-top:10px;">
             <div style="height:90%">
             <img id="identity_imgtt" style="width:120px; height:120px; margin: 10px; border: 2px solid black; border-radius: 10px; float: left;"></img>
             <div style='display:flex;flex-direction: column; height: inherit;'>

               <h3 id="public_identity_title_box" style="padding:15px;"> 제목 </h3>
               <p id="public_identity_desc_box" style="line-height: 25px; padding:5px; width: 90%; font-size:15px; overflow-y: scroll; ">  내용 </p>

             </div>
           </div>
             <p class="public_identity_keyword" style="height:10%; font-size: 12.5px; color: gray; text-align:right; margin-right:15px; color:gray; font-size:12px; display: flex; justify-content: flex-end;">  </p>

           </div>

           <div id="middleDiv" style="height:60%; display: flex; flex-direction: column;  overflow-y: scroll; align-items: center;" >

             <div style="display: flex; flex-direction: column;  width: 95%; margin-bottom:25px; ">
               <h3> Activity </h3>
               <div class = "identity_box" id="public_activity_box"style="height:100%; ">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; width: 95%; margin-bottom:25px;">
               <h3> Item </h3>
               <div class = "identity_box" id="public_item_box"style="height:100%;">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; width: 95%; margin-bottom:25px;">
               <h3> Skill </h3>
               <div class = "identity_box" id="public_skill_box" style="height:100%; ">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; width: 95%;  margin-bottom:25px;">
               <h3> Caution </h3>
               <div class = "identity_box" id="public_caution_box" style="height:100%; ">
               </div>
             </div>

           </div>

           <div id = "bottomDiv" style="height:10%; display: flex; justify-content: center;">
             <div class="btn_r">

               <div class="locked">보유중 </div>
               <div class="btn_addIdentity generalBtn">추가</div>

               <div class="btn_layerClose generalBtn">닫기</div>
             </div>
           </div>



         </div>
       </div>

       <div class="add_check">
         <div style="margin-top:5%; margin-left:5%;">  추가하시겠습니까? </div>
         <div class="btn_r" style="margin-bottom: 25px;">

         <div class="generalBtn" id="btn_addCom">확인</div>
         <div class="btn_layerClose generalBtn">닫기</div>
        </div>
       </div>

       <div class="side_menu">
         <p style="margin-bottom: 20px; margin-top: 20px;"> 내 리스트</p>
         <div class = "temp_list" style = "height: 100%; overflow-y: scroll;">

         </div>

         <p id='start_account' > 시작하기 </p>

       </div>

       <div id = login_account>
         <div style="margin: 20px; width: 100%; display:flex; justify-content: center; align-items: center;">
           <img id = "login_with_kakao" style="cursor: pointer; margin-top: 200px; width:320px; height:50px;" src="/hoodify/img/login/kakao_login_medium_wide.png">
         </div>
         <div class="btn_r" style="margin-bottom: 25px;">
         <div class="btn_layerClose generalBtn">닫기</div>
        </div>

      </div>






</body>

<footer style="display: flex; align-items: center;" >

  <div style="display: flex; align-items: center;">
    <!-- <img src ="/hoodify/img/hoodify_CRM.png" style="margin-left:25px; width:50px; height:50px; border-radius:40px; "> -->
    <p style="color: white; margin-left:25px; margin-right:25px; letter-spacing:3px;"> 문의: hoodify.CRM@gmail.com </p>


 </div>

</footer>




<script>

  Kakao.init('07f6eafd69281ab56438dbcc4a88c39e');
  console.log(Kakao.isInitialized());


var test_pool;
var cur_identity_code;
var cur_identity_title;
var cur_identity_desc;
var cur_identity_img;


$.ajax({
        type : "POST",
        url : "/hoodify/get_test_ideneity.php",
        dataType : 'json',
        success : function(res){

          test_pool=res;




        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$('#hook01').css("display","absolute").hide().delay(700).fadeIn("slow");
$('#identity_hook_01').css("display","absolute").hide().delay(1500).fadeIn("slow");
$('#identity_hook_02').css("display","absolute").hide().delay(1700).fadeIn("slow");
$('#identity_hook_03').css("display","absolute").hide().delay(1900).fadeIn("slow");
$('#identity_hook_04').css("display","absolute").hide().delay(2100).fadeIn("slow");



$('#hook02').css("display","absolute").hide().delay(3200).fadeIn("slow");
$('#identity_hook_05').css("display","absolute").hide().delay(4100).fadeIn("slow");
$('#identity_hook_06').css("display","absolute").hide().delay(4300).fadeIn("slow");
$('#identity_hook_07').css("display","absolute").hide().delay(4500).fadeIn("slow");
$('#identity_hook_08').css("display","absolute").hide().delay(4600).fadeIn("slow");



$('#hook03').css("display","absolute").hide().delay(6000).fadeIn("slow");
$('#identity_hook_09').css("display","absolute").hide().delay(7100).fadeIn("slow");
$('#identity_hook_10').css("display","absolute").hide().delay(7300).fadeIn("slow");
$('#identity_hook_11').css("display","absolute").hide().delay(7500).fadeIn("slow");
$('#identity_hook_12').css("display","absolute").hide().delay(7600).fadeIn("slow");



$('#identity_hook_13').css("display","absolute").hide().delay(9000).fadeIn("slow");
$('#identity_hook_14').css("display","absolute").hide().delay(9200).fadeIn("slow");
$('#identity_hook_15').css("display","absolute").hide().delay(9300).fadeIn("slow");
$('#identity_hook_16').css("display","absolute").hide().delay(9400).fadeIn("slow");
$('#identity_hook_17').css("display","absolute").hide().delay(9500).fadeIn("slow");
$('#identity_hook_18').css("display","absolute").hide().delay(9600).fadeIn("slow");
$('#identity_hook_19').css("display","absolute").hide().delay(9100).fadeIn("slow");
$('#identity_hook_20').css("display","absolute").hide().delay(9200).fadeIn("slow");
$('#identity_hook_21').css("display","absolute").hide().delay(9300).fadeIn("slow");
$('#identity_hook_22').css("display","absolute").hide().delay(9400).fadeIn("slow");
$('#identity_hook_23').css("display","absolute").hide().delay(9600).fadeIn("slow");
$('#identity_hook_24').css("display","absolute").hide().delay(9500).fadeIn("slow");
$('#identity_hook_25').css("display","absolute").hide().delay(9600).fadeIn("slow");
$('#identity_hook_26').css("display","absolute").hide().delay(9200).fadeIn("slow");
$('#identity_hook_27').css("display","absolute").hide().delay(9100).fadeIn("slow");
$('#identity_hook_28').css("display","absolute").hide().delay(9800).fadeIn("slow");
$('#identity_hook_29').css("display","absolute").hide().delay(9600).fadeIn("slow");




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 쿠키 설정
var setCookie = function(name, value, exp) {
    var date = new Date();
    date.setTime(date.getTime() + exp*24*60*60*1000);
    document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
};
// 쿠키 가져오기
var getCookie = function(name) {
    var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return value? value[2] : null;
};
// 쿠키 삭제
var deleteCookie = function(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1999 00:00:10 GMT; domain=127.0.0.1;path=/;';
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 시작하기 버튼 클릭 이벤트

$('#start_account').click(function(){

  layer_popup('#login_account');




})

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//// 카카오로 로그인하기


$('#login_with_kakao').click(function(){
  kakaoLogin();
})


//login
function kakaoLogin() {
    Kakao.Auth.login({
      success: function (response) {
        console.log(response);

        Kakao.API.request({
          url: '/v2/user/me',
          success: function (response) {

            
            console.log(response);
            var identity_cookie=getCookie('id_code');
            console.log(identity_cookie);

              $.ajax({
              type : "POST",
              url : "/hoodify/start_with_kakao.php",
              data : {
                      'user_code': response.id,
                      'identity_cookie': identity_cookie,
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


        	  




            
            $('#login_account').fadeOut('fast');

            // 유저 없다면 만들기
            // 유저 있다면 해당 유저로 세션 등록
            // main.php에서는 세션(유저 아이디) 확인 후 해당 세션 정보 불러오기
            // 여기에 개인 리스트 UI 띄우기
            // 가져온 값들로 표시하기
            // 쿠키값 가져와서 표시해야 함


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

//
//카카오로그아웃
// 로그아웃 할 때는 가입 계정에 상관없이 모든 플랫폼의 logout 코드를 한 번에 처리하기?


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






////////////////////////////////////////////////////
console.log(get_cookie_identity_array);

function cookie_identity(array){

  for (var i = 0; i < array.length; i++) {

    var each_id = array[i];
    console.log(each_id);

    $.ajax({
            type : "POST",
            url : "/hoodify/get_identity_content.php",
            data : {
                    'identity_code': each_id,
                },
            dataType : 'json',
            success : function(res){
              console.log(res);
              var cur_identity_title = res[0].identity_name;
              var cur_identity_desc = res[0].identity_desc;
              var cur_identity_img = res[0].identity_img;
              var cur_identity_code = res[0].identity_code;

              var temp_identity = $('<div>',{

              }).addClass('identity').attr('id', "side_identity"+cur_identity_code);

              var test2 = $("<img>",{

                src: cur_identity_img,

              }).addClass('identity_img').appendTo(temp_identity);


              var test = $("<p>",{
                text: cur_identity_title,


              }).addClass('identity_name').appendTo(temp_identity);


              temp_identity.css({ marginBottom:'20px'}).appendTo($('.temp_list')).hide().delay(200).fadeIn("slow");;



            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });



  }

}


//deleteCookie('id_code');
//setCookie('id_code');

if(getCookie('id_code')!=null){

var get_cookie_identity = getCookie('id_code');
var get_cookie_identity_array = get_cookie_identity.split(',');
cookie_identity(get_cookie_identity_array);

}



/////////////////////////////////////////////////////


$('.btn_addIdentity').click(function(){

  layer_popup('.add_check');


})

$('#btn_addCom').click(function(){

  $('.add_check').fadeOut('fast');
  $('#show_content').fadeOut('fast');
  if(getCookie('id_code')!=null){
    var saved_identity_code = getCookie('id_code');
    var add_identity_code = saved_identity_code + "," + cur_identity_code;
    setCookie('id_code', add_identity_code, 1);
  }
  else{
    setCookie('id_code', cur_identity_code, 1);

  }


  var temp_identity = $('<div>',{

  }).addClass('identity').attr('id', "side_identity"+cur_identity_code);

  var test2 = $("<img>",{

    src: cur_identity_img,

  }).addClass('identity_img').appendTo(temp_identity);


  var test = $("<p>",{
    text: cur_identity_title,


  }).addClass('identity_name').appendTo(temp_identity);


  temp_identity.css({ marginBottom:'20px'}).appendTo($('.temp_list')).hide().delay(200).fadeIn("slow");;

})

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 const str_set = /[^0-9]/g;

 $("#left_slide").click(function(){
       var get_id = $('.active').attr('id');
       var get_id_num = get_id.replace(str_set,"");
       var num_to_int = parseInt(get_id_num);
       var int_before = num_to_int -1;
       console.log(int_before);

       if(int_before > 0){
         $('.active').removeClass('active').css({display:"none"});
         $('#example_person_'+int_before).addClass('active').fadeIn("slow");
       }
       else{
         $('.active').removeClass('active').css({display:"none"});
         $('#example_person_'+3).addClass('active').fadeIn("slow");
       }



 });

 $("#right_slide").click(function(){
       var get_id = $('.active').attr('id');
       var get_id_num = get_id.replace(str_set,"");
       var num_to_int = parseInt(get_id_num);
       var int_next = num_to_int +1;

       console.log(int_next);

       if(int_next < 4){
         $('.active').removeClass('active').css({display:"none"});
         $('#example_person_'+int_next).addClass('active').fadeIn("slow");;
       }

       else{
         $('.active').removeClass('active').css({display:"none"});
         $('#example_person_'+ 1).addClass('active').fadeIn("slow");
       }


 });


 ////////////////////////////////////////////////////////////////////////////////////

 $('.identity, .identity_mindmap').mouseenter(function(e){
     var divTop = e.pageY;
     var divLeft = e.pageX;

   $('.popup_identity').css({
     display:"flex",
     top: divTop,
     left: divLeft

   });



   var get_img = $(this).children("img").attr("src");
   var get_text = $(this).children("p").text();

   $('#popup_identity_img').attr("src",get_img);
   $('#popup_identity_text').text(get_text);

   var get_code = $(this).attr('id');
   var get_code_num = get_code.replace(str_set,"");



   var find_identity = test_pool.filter(v=>v.identity_code == get_code_num);
   var find_identity_desc = find_identity[0].identity_desc;

   $('#popup_identity_desc').text("\u00a0"+find_identity_desc);

   console.log(get_code_num);

 })
 .mouseleave(function(e){

   $('.popup_identity').css({display:"none"});

 });
////////////////////////////////////////////////////////////////////////////////

$('.add_content').mouseenter(function(e){

  var divTop = e.pageY;
  var divLeft = e.pageX;


  $('.popup_add_content').css({
    display:"flex",
    top: divTop,
    left: divLeft

  });

})
.mouseleave(function(e){

  $('.popup_add_content').css({display:"none"});

})
.click(function(){

  $('#user_cont').val('');
  layer_popup(add_content_layer);


})

///////////////////////////////////////////////////////////////////////////////
// 사이드 메뉴

$(window).scroll(function(){
var scrollTop = $(document).scrollTop();
if (scrollTop < 180) {
 scrollTop = 180;
}
$(".side_menu").stop();
$(".side_menu").animate( { "top" : scrollTop }, 1000);
});





////////////////////////////////////////////////////////////////////////////////

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
////////////////////////////////////////////////////////////////////////////////


$(document).on('click', ".identity, .identity_mindmap", function(){

  var get_code = $(this).attr('id');
  var get_code_num = get_code.replace(str_set,"");
  cur_identity_code = get_code_num;

  if(getCookie('id_code')!=null){
  var check_cookie = getCookie('id_code');
  console.log(check_cookie);
  var identity_arr = check_cookie.split(',');

  if(identity_arr.includes(cur_identity_code)){
    $('.locked').css({
      display: 'inline-block',

    });
    $('.btn_addIdentity').css({
      display: 'none',

    });

  }

  else{
    $('.locked').css({
      display: 'none',

    });

    $('.btn_addIdentity').css({
      display: 'inline-block',

    });

  }
  }

  $.ajax({
          type : "POST",
          url : "/hoodify/get_identity_content.php",
          data : {
                  'identity_code': get_code_num
              },
          dataType : 'json',
          success : function(res){
              var Ucontents = JSON.stringify(res);
              //console.log("퍼블릭 정체성 콘텐츠"+Ucontents);
              //console.log(res[0].identity_img);

              cur_identity_title = res[0].identity_name;
              cur_identity_desc = res[0].identity_desc;
              cur_identity_img = res[0].identity_img;

              $("#identity_imgtt").attr("src",res[0].identity_img );
              $("#public_identity_title_box").text(res[0].identity_name );
              $("#public_identity_desc_box").text("\u00a0"+"\u00a0"+res[0].identity_desc );


              layer_popup($('#show_content'));


          },
          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
              alert("통신 실패.")
          }
      });


      $.ajax({
              type : "POST",
              url : "/hoodify/get_identity_activity.php",
              data : {
                      'identity_code': get_code_num
                  },
              dataType : 'json',
              success : function(res){
                  var Ucontents = JSON.stringify(res);
                  //console.log("퍼블릭 정체성 액티비티"+Ucontents);

                // 여기에 반환 값이 없으면

                if(res.length === 0){
                          
                          $('#public_activity_box').empty();
                           console.log("공백 확인");
                           $('<p>', {
                             text: "(비어있음)",
 
                           }).css({
                             fontSize: "12px",
                             marginLeft:"4.5px",
                             margin: "4.5px",
                             color: 'gray',
                             marginTop:"15px",
 
 
                           }).appendTo('#public_activity_box');
 
                           //appendTo('#public_item_box');
 
                     }else{

                  $('#public_activity_box').empty();

                  for (var i = 0; i < res.length; i++) {

                  var public_activity = res[i];
                  var public_activity_name = res[i].activity_name;
                  var public_activity_desc = res[i].activity_desc;
                  var public_activity_img = res[i].activity_img;


                  var list = document.createElement("div");

                  $(list).css({

                  //  width: "500px",
                    height: "70px",
                  //  marginTop: "20px",
                    borderBottom: "1px solid #D8D8D8",
                    display: 'flex',
                  //  alignItems: 'center',
                    paddingBottom: '5px',
                    alignItems: 'center',
                    overflow:'hidden',

                  }).appendTo('#public_activity_box');


                  var VerticalList = $("<div>", {

                  }).css({


                  });

                  $('<img>', {
                     src: public_activity_img

                  }).css({
                    width: "30px",
                    height: "30px",
                    margin: "4.5px",
                    float: "left",
                    margin: "7px",
                  }).appendTo(list);


                  $('<p>', {
                    text: public_activity_name,

                  }).css({
                    margin: "4.5px",


                  }).appendTo(VerticalList);

                  $('<p>', {
                    text: public_activity_desc,

                  }).css({
                    fontSize: "12px",
                    marginLeft:"4.5px",
                    margin: "4.5px",


                  }).appendTo(VerticalList);



                  VerticalList.appendTo(list);

                }

              }


              },
              error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                  alert("통신 실패.")
              }
          });


          $.ajax({
                  type : "POST",
                  url : "/hoodify/get_identity_item.php",
                  data : {
                          'identity_code': get_code_num
                      },
                  dataType : 'json',
                  success : function(res){
                      console.log('확인');
                      var Ucontents = JSON.stringify(res);
                      //console.log("퍼블릭 정체성 아이템"+Ucontents);
                      
                      if(res.length === 0){
                          
                         $('#public_item_box').empty();
                          console.log("공백 확인");
                          $('<p>', {
                            text: "(비어있음)",

                          }).css({
                            fontSize: "12px",
                            marginLeft:"4.5px",
                            margin: "4.5px",
                            color: 'gray',
                            marginTop:"15px",


                          }).appendTo('#public_item_box');

                          //appendTo('#public_item_box');

                    }
                    else{
                      $('#public_item_box').empty();

                      for (var i = 0; i < res.length; i++) {

                      var public_item = res[i];
                      var public_item_name = res[i].item_name;
                      var public_item_desc = res[i].item_desc;
                      var public_item_img = res[i].item_img;


                      var list = document.createElement("div");

                      $(list).css({

                      //  width: "500px",
                        height: "70px",
                      //  marginTop: "20px",
                        borderBottom: "1px solid #D8D8D8",
                        display: 'flex',
                      //  alignItems: 'center',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',

                      }).appendTo('#public_item_box');


                      var VerticalList = $("<div>", {

                      }).css({


                      });

                      $('<img>', {
                        src: public_item_img

                      }).css({
                        width: "30px",
                        height: "30px",
                        margin: "4.5px",
                        float: "left",
                        margin: "7px",
                      }).appendTo(list);


                      $('<p>', {
                        text: public_item_name,

                      }).css({
                        margin: "4.5px",


                      }).appendTo(VerticalList);

                      $('<p>', {
                        text: public_item_desc,

                      }).css({
                        fontSize: "12px",
                        marginLeft:"4.5px",
                        margin: "4.5px",


                      }).appendTo(VerticalList);



                      VerticalList.appendTo(list);

                      }


                    }


                     



                  },
                  error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                      alert("통신 실패.")
                  }
              });


              $.ajax({
                      type : "POST",
                      url : "/hoodify/get_identity_skill.php",
                      data : {
                              'identity_code': get_code_num
                          },
                      dataType : 'json',
                      success : function(res){
                          var Ucontents = JSON.stringify(res);
                          //console.log("퍼블릭 정체성 스킬"+Ucontents);



                          if(res.length === 0){
                          
                            $('#public_skill_box').empty();
                           console.log("공백 확인");
                           $('<p>', {
                             text: "(비어있음)",
 
                           }).css({
                             fontSize: "12px",
                             marginLeft:"4.5px",
                             margin: "4.5px",
                             color: 'gray',
                             marginTop:"15px",
 
 
                           }).appendTo('#public_skill_box');
 
                           //appendTo('#public_item_box');
 
                     }else{

                          $('#public_skill_box').empty();

                          for (var i = 0; i < res.length; i++) {

                          var public_skill = res[i];
                          var public_skill_name = res[i].skill_name;
                          var public_skill_desc = res[i].skill_desc;
                          var public_skill_img = res[i].skill_img;


                          var list = document.createElement("div");

                          $(list).css({

                          //  width: "500px",
                            height: "70px",
                          //  marginTop: "20px",
                            borderBottom: "1px solid #D8D8D8",
                            display: 'flex',
                          //  alignItems: 'center',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',

                          }).appendTo('#public_skill_box');


                          var VerticalList = $("<div>", {

                          }).css({


                          });

                          $('<img>', {
                             src: public_skill_img

                          }).css({
                            width: "30px",
                            height: "30px",
                            margin: "4.5px",
                            float: "left",
                            margin: "7px",
                          }).appendTo(list);


                          $('<p>', {
                            text: public_skill_name,

                          }).css({
                            margin: "4.5px",


                          }).appendTo(VerticalList);

                          $('<p>', {
                            text: public_skill_desc,

                          }).css({
                            fontSize: "12px",
                            marginLeft:"4.5px",
                            margin: "4.5px",


                          }).appendTo(VerticalList);



                          VerticalList.appendTo(list);

                        }

                      }


                      },
                      error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                          alert("통신 실패.")
                      }
                  });

                  $.ajax({
                          type : "POST",
                          url : "/hoodify/get_identity_caution.php",
                          data : {
                                  'identity_code': get_code_num
                              },
                          dataType : 'json',
                          success : function(res){
                              var Ucontents = JSON.stringify(res);
                              //console.log("퍼블릭 정체성 주의"+Ucontents);


                              if(res.length === 0){
                          
                                  $('#public_caution_box').empty();
                                console.log("공백 확인");
                                $('<p>', {
                                  text: "(비어있음)",

                                }).css({
                                  fontSize: "12px",
                                  marginLeft:"4.5px",
                                  margin: "4.5px",
                                  color: 'gray',
                                  marginTop:"15px",


                                }).appendTo('#public_caution_box');

                                //appendTo('#public_item_box');

                          }else{

                              $('#public_caution_box').empty();

                              for (var i = 0; i < res.length; i++) {

                              var public_caution = res[i];
                              var public_caution_name = res[i].caution_name;
                              var public_caution_desc = res[i].caution_desc;
                              var public_caution_img = res[i].caution_img;


                              var list = document.createElement("div");

                              $(list).css({

                              //  width: "500px",
                                height: "70px",
                              //  marginTop: "20px",
                                borderBottom: "1px solid #D8D8D8",
                                display: 'flex',
                              //  alignItems: 'center',
                                paddingBottom: '5px',
                                alignItems: 'center',
                                overflow:'hidden',

                              }).appendTo('#public_caution_box');


                              var VerticalList = $("<div>", {

                              }).css({


                              });

                              $('<img>', {
                                 src: public_caution_img

                              }).css({
                                width: "30px",
                                height: "30px",
                                margin: "4.5px",
                                float: "left",
                                margin: "7px",
                              }).appendTo(list);


                              $('<p>', {
                                text: public_caution_name,

                              }).css({
                                margin: "4.5px",


                              }).appendTo(VerticalList);

                              $('<p>', {
                                text: public_caution_desc,

                              }).css({
                                fontSize: "12px",
                                marginLeft:"4.5px",
                                margin: "4.5px",


                              }).appendTo(VerticalList);



                              VerticalList.appendTo(list);

                            }

                          }
                          },
                          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                              alert("통신 실패.")
                          }
                      });

                      $.ajax({
                                                    type : "POST",
                                                    url : "/hoodify/get_identity_keyword.php",
                                                    data : {
                                                            'identity_code': get_code_num,
                                                        },
                                                    dataType :'json',
                                                    success : function(res){

                                                        $('.public_identity_keyword').empty();
                                                        
                                                        for (var i = 0; i < res.length; i++) {

                                                            
                                                            $('<p>',{
                                                                    text: "#"+res[i].keyword_name + " ",

                                                            }).css({

                                                               paddingBottom : '5px',
                                                            }).appendTo($('.public_identity_keyword'));

                                                        }

                                                    },
                                                    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                                        alert("통신 실패.")
                                                    }
                                                });
//////////////////////////////////////

})



$('.btn_feedback').click(function(){

 if($('#user_cont').val().length < 11){

   alert('10자 이상 입력해주세요!');
 }  
 else{
 var get_feedback =  $('#user_cont').val();

$.ajax({
        type : "POST",
        url : "/hoodify/get_user_feedback.php",
        data : {
                'feedback_cont': get_feedback
            },
        success : function(res){
            console.log(res);
            if($.trim(res)=='success'){

              $('#add_content_layer').fadeOut('fast');

            }

            else{


            }





        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });





  }


});

$('#user_cont').on('keyup', function() {
    if($(this).val().length > 1500) {
        $(this).val($(this).val().substring(0, 1500));
    }
});



////////////////////////////////////////////////////////
// 특정 클래스 정체성 fadeIn 애니메이션

function display_animation(id_code){

$('.'+id_code).each(function(index, item){
  var ran_val = Math.random();
  var ran_val2 = Math.floor(ran_val*1000);
  $(this).css("display","flex").hide().delay(ran_val2+500).fadeIn("slow");
  console.log(ran_val2);

})

}



////////////////////////////////////////////////////////

// 내 키워드 찾기 버튼 이벤트 //

$('#start').click(function(){

  $('#start').fadeOut("fast");
  $('#selection_style').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality').css("display","flex").hide().delay(500).fadeIn("slow");
  
  $('#selection_personality_mbti').css("display","flex").hide().delay(800).fadeIn("slow");
  $('#selection_state').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_favorite').css("display","flex").hide().delay(1100).fadeIn("slow");
  $('#selection_interest').css("display","flex").hide().delay(900).fadeIn("slow");

  $('#selection_work').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_values').css("display","flex").hide().delay(800).fadeIn("slow");



})
/////////////////////////////////////
// 스타일
$('#selection_style').click(function(){

  
  
  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");

  $('#selection_style2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_style3').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_style4').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_style5').css("display","flex").hide().delay(400).fadeIn("slow");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");


});


// 안 꾸미는 편 //
$('#selection_style3').click(function(){

  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('#identity_selection_13').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_58').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_10').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_31').css("display","flex").hide().delay(1000).fadeIn("slow");
  $('#identity_selection_53').css("display","flex").hide().delay(1700).fadeIn("slow");
  $('#identity_selection_25').css("display","flex").hide().delay(1500).fadeIn("slow");
  $('#identity_selection_2').css("display","flex").hide().delay(2000).fadeIn("slow");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");


});

//적당히
$('#selection_style4').click(function(){

  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");


$('#identity_selection_58').css("display","flex").hide().delay(400).fadeIn("slow");
$('#identity_selection_53').css("display","flex").hide().delay(500).fadeIn("slow");

$('#selection_style6').css("display","flex").hide().delay(400).fadeIn("slow");
$('#selection_style7').css("display","flex").hide().delay(600).fadeIn("slow");
$('#selection_style8').css("display","flex").hide().delay(700).fadeIn("slow");


$('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})


//격식
$('#selection_style8').click(function(){

  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  


  $('#identity_selection_62').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_63').css("display","flex").hide().delay(1000).fadeIn("slow");
  $('#identity_selection_65').css("display","flex").hide().delay(500).fadeIn("slow");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})

//자유로움
$('#selection_style7').click(function(){


  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");


  $('#identity_selection_24').css("display","flex").hide().delay(900).fadeIn("slow");
  $('#identity_selection_25').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_61').css("display","flex").hide().delay(1200).fadeIn("slow");
  $('#identity_selection_66').css("display","flex").hide().delay(1500).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})


// 꾸미는 편

$('#selection_style5').click(function(){

  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");


  $('#selection_style6').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_style7').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_style8').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_64').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_6').css("display","flex").hide().delay(200).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})


// 취향

$('#selection_favorite').click(function(){

  $('.selection_box').fadeOut("fast");

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

$('.add_content').css("display","flex").hide().delay(700).fadeIn("slow");

display_animation("id_favorite");

})




// 관심사

$('#selection_interest').click(function(){

  $('.selection_box').fadeOut("fast");

$('.selection').fadeOut("fast");
$('.selection_box').fadeOut("fast");
$('.selection_box2').fadeOut("fast");
$('.selection_box3').fadeOut("fast");

$('.add_content').fadeOut("fast");


$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

$('.add_content').css("display","flex").hide().delay(700).fadeIn("slow");


display_animation("id_interest");


})






// 성격

$('#selection_personality').click(function(){

 

  $('.identity_mindmap').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  


  $('#selection_personality2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality3').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_personality4').css("display","flex").hide().delay(700).fadeIn("slow");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
})

//mbti로 찾기
$('#selection_personality_mbti').click(function(){


$('.selection_box').fadeOut("fast");

display_animation("mbti");
$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");



})


$('#mbti_infp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_n");
  display_animation("mbti_f");
  display_animation("mbti_p");
  
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});

$('#mbti_infj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_n");
  display_animation("mbti_f");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});

$('#mbti_intp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_n");
  display_animation("mbti_t");
  display_animation("mbti_p");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});

$('#mbti_intj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_n");
  display_animation("mbti_t");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});



$('#mbti_enfp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_n");
  display_animation("mbti_f");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});

$('#mbti_enfj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_n");
  display_animation("mbti_f");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});

$('#mbti_entp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_n");
  display_animation("mbti_t");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");


});

$('#mbti_entj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_n");
  display_animation("mbti_t");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});




$('#mbti_isfp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_s");
  display_animation("mbti_f");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});

$('#mbti_isfj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_s");
  display_animation("mbti_f");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

});


$('#mbti_istp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_s");
  display_animation("mbti_t");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});


$('#mbti_istj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_i");
  display_animation("mbti_s");
  display_animation("mbti_t");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});


$('#mbti_estp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_s");
  display_animation("mbti_t");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});

$('#mbti_esfp').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_s");
  display_animation("mbti_f");
  display_animation("mbti_p");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});

$('#mbti_estj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_s");
  display_animation("mbti_t");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});

$('#mbti_esfj').click(function(){
  $('.selection_box').fadeOut("fast");

  display_animation("mbti_e");
  display_animation("mbti_s");
  display_animation("mbti_f");
  display_animation("mbti_j");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
});


















//외향

$('#selection_personality3').click(function(){


  $('.selection_box').fadeOut("fast");
  
  $('#identity_selection_67').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_68').css("display","flex").hide().delay(800).fadeIn("slow");
  $('#identity_selection_69').css("display","flex").hide().delay(1000).fadeIn("slow");
  $('#identity_selection_70').css("display","flex").hide().delay(1450).fadeIn("slow");
  $('#identity_selection_82').css("display","flex").hide().delay(1350).fadeIn("slow");


  $('#selection_personality5').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality6').css("display","flex").hide().delay(1500).fadeIn("slow");
  $('#selection_personality7').css("display","flex").hide().delay(1800).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})



//내향

$('#selection_personality4').click(function(){
  $('.selection_box').fadeOut("fast");

  $('#identity_selection_40').css("display","flex").hide().delay(900).fadeIn("slow");
  $('#identity_selection_12').css("display","flex").hide().delay(1500).fadeIn("slow");
  $('#identity_selection_71').css("display","flex").hide().delay(2000).fadeIn("slow");
  $('#identity_selection_2').css("display","flex").hide().delay(1800).fadeIn("slow");
  $('#identity_selection_36').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_72').css("display","flex").hide().delay(1100).fadeIn("slow");


  $('#selection_personality5').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality6').css("display","flex").hide().delay(1500).fadeIn("slow");
  $('#selection_personality7').css("display","flex").hide().delay(1800).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})

//의존
$('#selection_personality6').click(function(){



  $('.selection_box').fadeOut("fast");
  $('.selection').fadeOut("fast");


  $('#identity_selection_73').css("display","flex").hide().delay(800).fadeIn("slow");
  $('#identity_selection_74').css("display","flex").hide().delay(1200).fadeIn("slow");


  $('#selection_personality8').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#selection_personality9').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_personality10').css("display","flex").hide().delay(200).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})



//독립
$('#selection_personality7').click(function(){


  
  $('.selection_box').fadeOut("fast");
  $('.selection').fadeOut("fast");



  $('#identity_selection_75').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_76').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_12').css("display","flex").hide().delay(500).fadeIn("slow");


$('#selection_personality8').css("display","flex").hide().delay(100).fadeIn("slow");
$('#selection_personality9').css("display","flex").hide().delay(300).fadeIn("slow");
$('#selection_personality10').css("display","flex").hide().delay(200).fadeIn("slow");

$('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})



//즉흥
$('#selection_personality9').click(function(){

  
  $('.selection_box').fadeOut("fast");

  $('.selection').fadeOut("fast");

  $('#identity_selection_77').css("display","flex").hide().delay(1100).fadeIn("slow");
  $('#identity_selection_78').css("display","flex").hide().delay(1200).fadeIn("slow");
  $('#identity_selection_10').css("display","flex").hide().delay(800).fadeIn("slow");
  $('#identity_selection_79').css("display","flex").hide().delay(500).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
})




//계획
$('#selection_personality10').click(function(){

  
  $('.selection_box').fadeOut("fast");

 $('.selection').fadeOut("fast");


  $('#identity_selection_80').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_81').css("display","flex").hide().delay(300).fadeIn("slow");

  // 현실감각
  // 분석가

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
})


// 생활

$('#selection_state').click(function(){

  
  $('.selection_box').fadeOut("fast");

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");




  display_animation("life");

  $('#selection_state2').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#selection_state3').css("display","flex").hide().delay(900).fadeIn("slow");
  $('#selection_state5').css("display","flex").hide().delay(1100).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");




})




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 일&직업


$('#selection_work').click(function(){

  
  $('.selection_box').fadeOut("fast");

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('#selection_work2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_work3').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_work4').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_work5').css("display","flex").hide().delay(400).fadeIn("slow");
 

  display_animation('work');



  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");




});

//////////////////////////
// 예술 & 문화

$('#selection_work2').click(function(){

  
  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


  display_animation('work_art');


  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");

})

//////////////////////////
// IT


$('#selection_work3').click(function(){

  
  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


  display_animation('work_IT');

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");


})

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 서비스

$('#selection_work4').click(function(){


  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


  display_animation('work_service');

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");


// 요리사
// 공무원





})
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 이상향


$('#selection_values').click(function(){

  
  $('.selection_box').fadeOut("fast");

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


$('#toback').css("display","flex").hide().delay(200).fadeIn("slow");




  display_animation("id_values");
  
$('.add_content').css("display","flex").hide().delay(700).fadeIn("slow");



  /*
$('#selection_personality2').css("display","flex").hide().delay(200).fadeIn("slow");
$('#selection_personality3').css("display","flex").hide().delay(200).fadeIn("slow");
$('#selection_personality4').css("display","flex").hide().delay(200).fadeIn("slow");
*/

})





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 처음으로 버튼

$('#toback').click(function(){

  $('#start').fadeOut("fast");
  $('#toback').fadeOut("fast");

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('#selection_style').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_state').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_favorite').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_interest').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#selection_work').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_values').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_personality_mbti').css("display","flex").hide().delay(1200).fadeIn("slow");
  $('.add_content').fadeOut("fast");




})








</script>
