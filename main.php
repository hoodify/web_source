

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
}


header{ width: 100%; height: 33px; background-color: rgba( 0, 0, 0, 0.6 ); }
footer{ width: 100%; height: 100px; background-color: rgba( 0, 0, 0, 0.6 ); }

</style>


<body>
    <header></header>
        
        <div id='profile' style='display:flex; justify-content: space-between;align-items: center; background-color:gray; height:5%; padding:20px;'>
            공간  '정체성 창고 버튼'    '정체성 탐험 버튼'

        
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
</body>


<script>

    var curr_identity_code;


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
                                         }).appendTo('#main_list');


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

    




</script>





