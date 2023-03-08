

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

    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("/hoodify/img/background_sky4.jpg");
    background-repeat: no-repeat; /* 배경이미지X */
    background-size: cover; /* 요소를 비율에 맞게 커버 */
    background-position: center; /* 이미지를 요소의 정가운데로 처리 */
    background-attachment: fixed;


  }



           header{ width: 100%; height: 100px; background-color: rgba( 0, 0, 0, 0.6 ); }
           footer{ width: 100%; height: 100px; background-color: rgba( 0, 0, 0, 0.6 ); }

           .hook_text_space{width: 100%; height: 800px; background-color: rgba( 0, 0, 0, 0.1 ); display: flex; justify-content: center;}
           .hook_text{position: absolute; font-size: 40px; color: white; font-family:TmoneyRoundWindExtraBold;  }
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



           .pop-layer {
             display: none;
             position: fixed;
             top: 50%;
             left: 50%;
             width: 75%;
             height: 85%;
             background-color: #fff;
             border: 3px solid black;
             z-index: 1000;
             padding: 15px;
             border-radius: 8px;

           }
           .pop-layer p.ctxt {
             color: #666;
             line-height: 25px;
           }
           .btn_r {
             width: 90%;
             height: 4%;
             border-top: 1px solid #304a8a;
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
             border: 1px solid #304a8a;
             background-color: #3f5a9d;
             font-size: 13px;
             color: #fff;
             line-height: 25px;
             text-decoration: none;
             cursor:pointer;
           }
           .generalBtn:hover {
             border: 1px solid #091940;
             background-color: #1f326a;
             color: #fff;
           }


           .identity_box{
             -ms-overflow-style:none;
             scrollbar-width:none;

             overflow-y: scroll;

             align-content: flex-start;


           }

           .identity_box::-webkit-scrollbar {
               	display:none
           }


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
             height: 200px;
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


           #space_01{

           }
           #space_01:after{

             border-top:15px solid #333333;
             border-left: 15px solid transparent;
             border-right: 0px solid transparent;
             border-bottom: 0px solid transparent;
             content:"";
             position:absolute;
             top:2px;
             left:-15px;

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



</style>

<body>
      <header></header>
       <div class="hook_text_space">

         <p class="hook_text" id="hook01">당신을 표현하는 <span style="color:rgba( 251, 104, 53);">키워드</span></p>
         <p class="hook_text" id="hook02">당신이 얻고싶은 <span style="color:rgba( 40, 102, 177);">수식어</span></p>
         <p class="hook_text" id="hook03">세상의 모든 <span style="color:rgba( 130, 197, 88);">정체성</span></p>

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

           <p class="hook_text" id="start" style="cursor:pointer;"> 내 키워드 찾기 </p>


           <div style="width:100%; height:100%; display:flex; justify-content: center;  align-items: center;" >
             <p class="selection_box" id="selection_style" style="background-color: rgba( 99, 2, 55); margin-right: 550px; margin-bottom:250px;">스타일</p>
             <p class="selection_box" id="selection_personality" style="background-color: rgba( 186, 159, 72); margin-left: 750px; margin-bottom:50px;">성격</p>
             <p class="selection_box" id="selection_state" style="background-color: rgba( 15, 61, 72); margin-left: 150px; margin-bottom:80px;">상태 </p>
             <p class="selection_box" id="selection_work" style="background-color: rgba( 86, 80, 66); margin-left: 250px; margin-top:400px;">일&직업 </p>

             <p class="selection_box" id="selection_work2" style="font-size: 22px; background-color: rgba( 30, 40, 88); margin-left:800px; margin-bottom:100px;">예술 & 문화 </p>
             <p class="selection_box" id="selection_work3" style="background-color: rgba( 25, 51, 52); margin-left: 400px; margin-bottom:150px;"> IT </p>
             <p class="selection_box" id="selection_work4" style="background-color: rgba( 15, 61, 72); margin-left: 850px; margin-top:280px;"> 서비스  </p>
             <p class="selection_box" id="selection_work5" style="background-color: rgba( 40, 50, 88); margin-left: 450px; margin-top:420px;"> ???  </p>

             <p class="selection_box2" id="selection_work6" style="margin-left: 300px; margin-top: 150px; background-color: rgba( 49, 87, 138);" > 분야는? </p>



             <p class="selection_box" id="selection_state2" style="cursor: default; background-color: rgba( 30, 40, 88); margin-left:450px; margin-bottom:180px;">경제 </p>
             <p class="selection_box" id="selection_state3" style="cursor: default;background-color: rgba( 25, 51, 52); margin-right: 400px; margin-bottom:220px;">사회 </p>
             <p class="selection_box" id="selection_state4" style="cursor: default;background-color: rgba( 15, 61, 72); margin-left: 550px; margin-top:280px;">생활 </p>
             <p class="selection_box" id="selection_state5" style="cursor: default;background-color: rgba( 40, 50, 88); margin-right: 350px; margin-top:320px;">건강  </p>



             <p class="selection_box2" id="selection_style2" style="background-color: rgba( 99, 2, 55); margin-bottom: 200px;" >외모를 꾸미는 편인가요?</p>
             <p class="selection_box3" id="selection_style3" style="background-color: rgba( 123, 100, 106); margin-right: 800px;" >있는 것들로 입음 <br><br>옷 브랜드에 관심 없음 <br><br>옷에 관심 없다는 얘기를 들음 </p>
             <p class="selection_box3" id="selection_style4" style="background-color: rgba( 123, 100, 106);" >남들만큼은 꾸미고 다님  <br><br> 엄청 신경쓰지는 않음 </p>
             <p class="selection_box3" id="selection_style5" style="background-color: rgba( 123, 100, 106); margin-left: 800px;">옷 사는 걸 좋아함 <br><br> 옷에 관심 많음 <br><br> 꾸미는 거 좋아함 </p>


             <div class='add_content' style="display: none; margin-right:1050px; margin-top: 650px;">
               <p style="width: 70px; height: 70px; border-radius:10px; border: 2px solid; font-family:TmoneyRoundWindExtraBold; font-size:40px; display: flex; align-items: center; justify-content: center; background-color:white; ">?</p>
               <p class='identity_name'> 미확인 정체성   </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_13' style="display: none; margin-right:700px; margin-top:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 너드</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_58' style="display: none; margin-right:450px; margin-top: 650px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 단벌신사</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_10' style="display: none; margin-left:500px; margin-bottom:50px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 게으른 움직임</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_31' style="display: none; margin-left:20px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 미니멀리즘</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_53' style="display: none; margin-right:750px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 평범한 옷차림</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_24' style="display: none; margin-left:300px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 힙합</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_61' style="display: none; margin-left:550px; margin-top:100px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 빈티지</p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_62' style="display: none; margin-right:250px; margin-top:100px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 신사 </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_63' style="display: none; margin-left:250px; margin-top:200px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 클래식  </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_64' style="display: none; margin-right:750px; margin-bottom:300px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 셀프 스타일리스트  </p>
             </div>

             <div class='identity_mindmap selection' id='identity_selection_25' style="display: none; margin-top:300px;">
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
             <div class='identity_mindmap selection' id='identity_selection_67' style="display: none; margin-right:750px; margin-top:350px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 분위기 메이커 </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_68' style="display: none; margin-left:550px; margin-bottom:120px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 인싸 </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_69' style="display: none; margin-right:450px; margin-top:50px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 팀플레이어 </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_70' style="display: none; margin-bottom:250px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 만담꾼 </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_71' style="display: none;  margin-right:250px; margin-top:250px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 웅크리기  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_12' style="display: none; margin-bottom:150px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'> 솔로 플레이어  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_2' style="display: none; margin-right:420px; margin-bottom:120px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  괴짜   </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_36' style="display: none; margin-right:750px; margin-top :120px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  방콕  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_72' style="display: none; margin-right:720px; margin-top :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  저기압  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_73' style="display: none; margin-right:420px; margin-bottom :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>  경청자 </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_74' style="display: none; margin-right:720px; margin-top :420px;">
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
             <div class='identity_mindmap selection' id='identity_selection_77' style="display: none; margin-right:420px; margin-bottom :420px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    예술가   </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_78' style="display: none; margin-right:820px; margin-bottom :220px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    벼락치기    </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_79' style="display: none; margin-right:520px; margin-top :220px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    영감을 찾아서     </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_80' style="display: none; margin-right:520px; margin-top :220px;">
               <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
               <p class='identity_name'>    신중한 계획자      </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_81' style="display: none; margin-right:220px; margin-top :120px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    현실 감각       </p>
              </div>
             <div class='identity_mindmap selection' id='identity_selection_82' style="display: none; margin-right:520px; margin-bottom :320px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>   사람을 잇는 다리  </p>
             </div>
             <div class='identity_mindmap selection' id='identity_selection_6' style="display: none; margin-right:520px; margin-top :320px;">
                  <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                  <p class='identity_name'>   미적 감각  </p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_39' style="display: none; margin-right:680px; margin-top :540px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'> 허약체질</p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_59' style="display: none; margin-left:950px; margin-top:420px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    문제투성이     </p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_40' style="display: none; margin-right:350px; margin-bottom :420px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>  모태솔로  </p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_42' style="display: none; margin-right:820px; margin-bottom :300px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>    백수     </p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_37' style="display: none; margin-right:720px; margin-bottom :20px;">
                <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p class='identity_name'>  취준생   </p>
              </div>

              <div class='identity_mindmap selection' id='identity_selection_32' style="display: none; margin-left:520px; margin-top :590px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    자취인       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_83' style="display: none; margin-left:270px; margin-bottom :380px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    빈털터리     </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_43' style="display: none;  margin-left:830px; margin-bottom :170px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 흙수저  </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_84' style="display: none; margin-left:720px; margin-bottom :420px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  금수저    </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_85' style="display: none; margin-right:450px; margin-top: 650px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 인자강 </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_34' style="display: none; margin-left:900px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    올빼미족      </p>
               </div>


               <div class='identity_mindmap selection' id='identity_selection_15' style="display: none; margin-right:200px; margin-top:480px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    아르바이트 마스터       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_86' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    주부      </p>
               </div>


               <div class='identity_mindmap selection' id='identity_selection_87' style="display: none; margin-right:420px; margin-top :720px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    배달기사     </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_21' style="display: none; margin-right:520px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  사무직    </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_18' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  프리랜서     </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_17' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  작가      </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_88' style="display: none; margin-right:520px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  일러스트레이터      </p>
               </div>


               <div class='identity_mindmap selection' id='identity_selection_89' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    모델       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_90' style="display: none; margin-left:250px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 콘텐츠 크리에이터  </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_56' style="display: none; margin-left:550px; margin-top:100px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'> 코드라는 벽돌 </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_14' style="display: none; margin-right:520px; margin-bottom :20px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  디지털 노마드       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_19' style="display: none; margin-right:820px; margin-bottom :300px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    설계자        </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_91' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  기획자       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_92' style="display: none; margin-left:900px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    게임 개발자       </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_93' style="display: none; margin-right:720px; margin-top :400px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>  자영업자        </p>
               </div>

               <div class='identity_mindmap selection' id='identity_selection_94' style="display: none; margin-left:900px; margin-top:680px;">
                 <img class="identity_img" src="/hoodify/img/identity/hooodify_mini.png">
                 <p class='identity_name'>    요리사       </p>
               </div>

             <p class="selection_box2" id="selection_style6" style="margin-bottom: 200px; background-color: rgba( 49, 87, 138);" >선호하는 스타일이 있나요?</p>



             <p class="selection_box" id="selection_style7" style="background-color: rgba( 107, 139, 182); margin-left: 350px; margin-top: 150px;" >  자유로움  </p>
             <p class="selection_box" id="selection_style8" style="background-color: rgba( 107, 139, 182); margin-left: 700px; margin-bottom: 150px;" > 격식  </p>


             <p class="selection_box2" id="selection_personality2" style="margin-bottom: 200px; margin-top:180px; background-color: rgba(159, 109 ,39); " > 기본 성향은?  </p>
             <p class="selection_box" id="selection_personality3" style="margin-right: 300px; margin-top:250px; background-color: rgba(	190 ,150, 94);" > 외향 </p>
             <p class="selection_box" id="selection_personality4" style="margin-left: 300px; margin-top:250px; background-color: rgba(	190 ,150, 94);" > 내향  </p>


              <p class="selection_box2" id="selection_personality5" style="margin-left: 300px; margin-top: 150px; background-color: rgba( 49, 87, 138);" > 의존적? 독립적?</p>
              <p class="selection_box" id="selection_personality6" style="margin-left: 250px;margin-top: 400px; background-color: rgba( 107, 139, 182);" > 의존 </p>
              <p class="selection_box" id="selection_personality7" style="margin-left: 750px; margin-top: 350px; background-color: rgba( 107, 139, 182);" > 독립  </p>


              <p class="selection_box2" id="selection_personality8" style="margin-left: 150px; margin-top: 50px; background-color: rgba(	85, 107, 47);" > 즉흥적? 계획적?</p>
              <p class="selection_box" id="selection_personality9" style="margin-right: 100px;margin-top: 320px; background-color: rgba(158, 164, 107);" > 즉흥 </p>
              <p class="selection_box" id="selection_personality10" style="margin-left: 550px; margin-top: 250px; background-color: rgba(158, 164, 107);" > 계획   </p>




             <p id="toback" style="display: none; margin-left:1000px; margin-bottom:500px; background-color: rgba( 22, 100, 123);"> 처음으로 </p>


          </div>



        </div>
       </div>




       <footer></footer>


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

       <div id="add_content_layer" class="pop-layer" style="width:70%; justify-content: center;">
         <div class="pop-container">
           <div style="height:20%; display:flex; align-items: center;">
             <img style="float: left; width:150px; height:150px;" src="/hoodify/img/identity/hooodify_mini.png"; >
             <div id="space_01" style="position: relative; border: 2px solid black; border-radius: 10px; padding:20px;">
             <p> 저희는 세상의 모든 정체성을 수집중입니다. <br> <br> 이곳에서 찾지 못한 당신의 정체성이 있다면 저희에게 알려주세요.</p>
           </div>

          </div>

          <div style="height:70%; display: flex;  justify-content: center;">

            <textarea id="user_cont"  placeholder="내용을 입력하세요" style=" border: 2px solid black; border-radius: 10px; font-family: TmoneyRoundWindRegular; font-size: 16px; padding: 20px; width:100%; height:100%;"></textarea>

         </div>


           <div id = "bottomDiv" style="display: flex; justify-content: center;">
             <div class="btn_r">
               <div class="btn_feedback generalBtn">추가</div>

               <div class="btn_layerClose generalBtn">닫기</div>
             </div>
           </div>

        </div>

      </div>


       <div id="show_content" class="pop-layer">
         <div class="pop-container">

           <div id="topDiv" style="display: flex;  align-items: center; justify-content: space-between; margin-bottom:30px;">
             <div>
             <img id="identity_imgtt" style="width:120px; height:120px; margin: 10px; border: 2px solid black; border-radius: 10px; float: left;"></img>
             <div style='display:flex;flex-direction: column;'>

               <h3 id="public_identity_title_box" style="padding:15px;"> 제목 </h3>
               <p id="public_identity_desc_box" style="line-height: 30px; padding:5px; width: 60%;">  내용 </p>

             </div>
           </div>
             <p class="public_identity_keyword" style=" width: 50px; float: right; font-size: 12.5px; color: gray;"> 태그 </p>

           </div>

           <div id="middleDiv" style="height:70%; display: flex; flex-direction: row; justify-content: space-between; flex-wrap: wrap;">

             <div style="display: flex; flex-direction: column; height:45%; width: 40%; margin-left:35px;">
               <h3> 활  동 </h3>
               <div class = "identity_box" id="public_activity_box"style="height:100%; border: 1px solid gray; margin:5px; border-radius: 5px;">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; height:45%; width: 40%; margin-right:35px;">
               <h3> 아 이 템 </h3>
               <div class = "identity_box" id="public_item_box"style="height:100%; border: 1px solid gray; margin:5px; border-radius: 10px;">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; height:45%; width: 40%; margin-left:35px;">
               <h3> 기  술 </h3>
               <div class = "identity_box" id="public_skill_box" style="height:100%; border: 1px solid gray; margin:5px; border-radius: 10px;">
               </div>
             </div>

             <div style="display: flex; flex-direction: column; height:45%; width: 40%; margin-right:35px;">
               <h3> 주의사항 </h3>
               <div class = "identity_box" id="public_caution_box" style="height:100%; border: 1px solid gray; margin:5px; border-radius: 10px;">
               </div>
             </div>

           </div>

           <div id = "bottomDiv" style="height:15%;">
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

$('#hook01').css("display","absolute").hide().delay(500).fadeIn("slow");
$('#hook02').css("display","absolute").hide().delay(700).fadeIn("slow");
$('#hook03').css("display","absolute").hide().delay(850).fadeIn("slow");


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
            $('#login_account').fadeOut('fast');


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
        $el.fadeOut("slow");



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
                      var Ucontents = JSON.stringify(res);
                      //console.log("퍼블릭 정체성 아이템"+Ucontents);


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


                          },
                          error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                              alert("통신 실패.")
                          }
                      });


//////////////////////////////////////

})



$('.btn_feedback').click(function(){

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








});

$('#user_cont').on('keyup', function() {
    if($(this).val().length > 1500) {
        $(this).val($(this).val().substring(0, 1500));
    }
});






////////////////////////////////////////////////////////

// 내 키워드 찾기 버튼 이벤트 //

$('#start').click(function(){

  $('#start').fadeOut("fast");
  $('#selection_style').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_state').css("display","flex").hide().delay(300).fadeIn("slow");

  $('#selection_work').css("display","flex").hide().delay(600).fadeIn("slow");



})
/////////////////////////////////////
// 스타일
$('#selection_style').click(function(){

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_style').fadeOut("fast");
  $('#selection_personality').fadeOut("fast");
  $('#selection_state').fadeOut("fast");
  $('#selection_work').fadeOut("fast");

  $('#selection_style2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_style3').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_style4').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_style5').css("display","flex").hide().delay(400).fadeIn("slow");


});


// 안 꾸미는 편 //
$('#selection_style3').click(function(){

  $('#selection_style2').fadeOut("fast");
  $('#selection_style3').fadeOut("fast");
  $('#selection_style4').fadeOut("fast");
  $('#selection_style5').fadeOut("fast");

  $('#identity_selection_13').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_58').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_10').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#identity_selection_31').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_53').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_25').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_2').css("display","flex").hide().delay(600).fadeIn("slow");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");


});

//적당히
$('#selection_style4').click(function(){

$('#selection_style2').fadeOut("fast");
$('#selection_style3').fadeOut("fast");
$('#selection_style4').fadeOut("fast");
$('#selection_style5').fadeOut("fast");


$('#identity_selection_58').css("display","flex").hide().delay(400).fadeIn("slow");
$('#identity_selection_53').css("display","flex").hide().delay(500).fadeIn("slow");

$('#selection_style6').css("display","flex").hide().delay(400).fadeIn("slow");
$('#selection_style7').css("display","flex").hide().delay(600).fadeIn("slow");
$('#selection_style8').css("display","flex").hide().delay(700).fadeIn("slow");


$('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");

})


//격식
$('#selection_style8').click(function(){


  $('#selection_style6').fadeOut("fast");
  $('#selection_style7').fadeOut("fast");
  $('#selection_style8').fadeOut("fast");
  $('#identity_selection_58').fadeOut("fast");
  $('#identity_selection_53').fadeOut("fast");
  $('#identity_selection_64').fadeOut("fast");
  $('#identity_selection_6').fadeOut("fast");

  $('#identity_selection_62').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_63').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_65').css("display","flex").hide().delay(200).fadeIn("slow");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})

//자유로움
$('#selection_style7').click(function(){


  $('#identity_selection_24').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_25').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#identity_selection_61').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_66').css("display","flex").hide().delay(500).fadeIn("slow");


  $('#selection_style6').fadeOut("fast");
  $('#selection_style7').fadeOut("fast");
  $('#selection_style8').fadeOut("fast");
  $('#identity_selection_58').fadeOut("fast");
  $('#identity_selection_53').fadeOut("fast");
  $('#identity_selection_64').fadeOut("fast");
  $('#identity_selection_6').fadeOut("fast");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})


// 꾸미는 편

$('#selection_style5').click(function(){

  $('#selection_style2').fadeOut("fast");
  $('#selection_style3').fadeOut("fast");
  $('#selection_style4').fadeOut("fast");
  $('#selection_style5').fadeOut("fast");

  $('#selection_style6').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_style7').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_style8').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_64').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_6').css("display","flex").hide().delay(200).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})


// 성격

$('#selection_personality').click(function(){

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_style').fadeOut("fast");
  $('#selection_personality').fadeOut("fast");
  $('#selection_state').fadeOut("fast");
  $('#selection_work').fadeOut("fast");

  $('#selection_personality2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality3').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality4').css("display","flex").hide().delay(200).fadeIn("slow");


})



//외향

$('#selection_personality3').click(function(){

  $('#selection_personality2').fadeOut("fast");
  $('#selection_personality3').fadeOut("fast");
  $('#selection_personality4').fadeOut("fast");

  $('#identity_selection_67').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_68').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#identity_selection_69').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_70').css("display","flex").hide().delay(450).fadeIn("slow");
  $('#identity_selection_82').css("display","flex").hide().delay(350).fadeIn("slow");


  $('#selection_personality5').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality6').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_personality7').css("display","flex").hide().delay(300).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})



//내향

$('#selection_personality4').click(function(){

  $('#selection_personality2').fadeOut("fast");
  $('#selection_personality3').fadeOut("fast");
  $('#selection_personality4').fadeOut("fast");




  $('#identity_selection_12').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_71').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_2').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_36').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_72').css("display","flex").hide().delay(100).fadeIn("slow");


  $('#selection_personality5').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_personality6').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#selection_personality7').css("display","flex").hide().delay(300).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})

//의존
$('#selection_personality6').click(function(){

  $('#selection_personality5').fadeOut("fast");
  $('#selection_personality6').fadeOut("fast");
  $('#selection_personality7').fadeOut("fast");




  $('#identity_selection_12').fadeOut("fast");
  $('#identity_selection_71').fadeOut("fast");
  $('#identity_selection_2').fadeOut("fast");
  $('#identity_selection_36').fadeOut("fast");
  $('#identity_selection_72').fadeOut("fast");


  $('#identity_selection_67').fadeOut("fast");
  $('#identity_selection_68').fadeOut("fast");
  $('#identity_selection_69').fadeOut("fast");
  $('#identity_selection_70').fadeOut("fast");
  $('#identity_selection_82').fadeOut("fast");



  $('#identity_selection_73').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_74').css("display","flex").hide().delay(100).fadeIn("slow");


  $('#selection_personality8').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#selection_personality9').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#selection_personality10').css("display","flex").hide().delay(200).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");

})



//독립
$('#selection_personality7').click(function(){

  $('#selection_personality5').fadeOut("fast");
  $('#selection_personality6').fadeOut("fast");
  $('#selection_personality7').fadeOut("fast");




  $('#identity_selection_12').fadeOut("fast");
  $('#identity_selection_71').fadeOut("fast");
  $('#identity_selection_2').fadeOut("fast");
  $('#identity_selection_36').fadeOut("fast");
  $('#identity_selection_72').fadeOut("fast");

  $('#identity_selection_67').fadeOut("fast");
  $('#identity_selection_68').fadeOut("fast");
  $('#identity_selection_69').fadeOut("fast");
  $('#identity_selection_70').fadeOut("fast");
  $('#identity_selection_82').fadeOut("fast");



  $('#identity_selection_75').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_76').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_12').css("display","flex").hide().delay(500).fadeIn("slow");


$('#selection_personality8').css("display","flex").hide().delay(100).fadeIn("slow");
$('#selection_personality9').css("display","flex").hide().delay(300).fadeIn("slow");
$('#selection_personality10').css("display","flex").hide().delay(200).fadeIn("slow");

$('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})



//즉흥
$('#selection_personality9').click(function(){


  $('#identity_selection_73').fadeOut("fast");
  $('#identity_selection_74').fadeOut("fast");
  $('#identity_selection_75').fadeOut("fast");
  $('#identity_selection_76').fadeOut("fast");
  $('#identity_selection_12').fadeOut("fast");

  $('#selection_personality8').fadeOut("fast");
  $('#selection_personality9').fadeOut("fast");
  $('#selection_personality10').fadeOut("fast");
  $('#selection_personality12').fadeOut("fast");


  $('#identity_selection_77').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_78').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_10').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_79').css("display","flex").hide().delay(200).fadeIn("slow");


  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})




//계획
$('#selection_personality10').click(function(){

  $('#identity_selection_73').fadeOut("fast");
  $('#identity_selection_74').fadeOut("fast");
  $('#identity_selection_75').fadeOut("fast");
  $('#identity_selection_76').fadeOut("fast");
  $('#identity_selection_12').fadeOut("fast");


  $('#selection_personality8').fadeOut("fast");
  $('#selection_personality9').fadeOut("fast");
  $('#selection_personality10').fadeOut("fast");
  $('#selection_personality12').fadeOut("fast");


  $('#identity_selection_80').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_81').css("display","flex").hide().delay(300).fadeIn("slow");

  // 현실감각
  // 분석가

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");
})


// 상태

$('#selection_state').click(function(){

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('#toback').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_39').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#identity_selection_59').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_40').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_42').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_37').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_32').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_83').css("display","flex").hide().delay(800).fadeIn("slow");
  $('#identity_selection_43').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#identity_selection_84').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_85').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_34').css("display","flex").hide().delay(700).fadeIn("slow");



  $('#selection_state2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_state3').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_state4').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_state5').css("display","flex").hide().delay(400).fadeIn("slow");

  $('.add_content').css("display","flex").hide().delay(200).fadeIn("slow");





})

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 일&직업


$('#selection_work').click(function(){

  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('#selection_work2').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#selection_work3').css("display","flex").hide().delay(600).fadeIn("slow");
  $('#selection_work4').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_work5').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#selection_work6').css("display","flex").hide().delay(500).fadeIn("slow");



  $('#identity_selection_15').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_86').css("display","flex").hide().delay(700).fadeIn("slow");

  $('#identity_selection_21').css("display","flex").hide().delay(300).fadeIn("slow");
  $('#identity_selection_18').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_87').css("display","flex").hide().delay(800).fadeIn("slow");





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


  $('#identity_selection_17').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_88').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_89').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_90').css("display","flex").hide().delay(500).fadeIn("slow");

})

//////////////////////////
// IT


$('#selection_work3').click(function(){


  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");


  $('#identity_selection_56').css("display","flex").hide().delay(700).fadeIn("slow");
  $('#identity_selection_14').css("display","flex").hide().delay(200).fadeIn("slow");
  $('#identity_selection_19').css("display","flex").hide().delay(500).fadeIn("slow");
  $('#identity_selection_91').css("display","flex").hide().delay(100).fadeIn("slow");
  $('#identity_selection_92').css("display","flex").hide().delay(400).fadeIn("slow");


})

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 서비스

$('#selection_work4').click(function(){


  $('.selection').fadeOut("fast");
  $('.selection_box').fadeOut("fast");
  $('.selection_box2').fadeOut("fast");
  $('.selection_box3').fadeOut("fast");

  $('.add_content').fadeOut("fast");



  $('#identity_selection_93').css("display","flex").hide().delay(400).fadeIn("slow");
  $('#identity_selection_94').css("display","flex").hide().delay(400).fadeIn("slow");


// 요리사
// 공무원





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
  $('#selection_work').css("display","flex").hide().delay(600).fadeIn("slow");
  $('.add_content').fadeOut("fast");




})








</script>
