

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


header{ width: 100%; height: 33px; background-color: rgba( 0, 0, 0, 0.6 ); }
footer{ width: 100%; height: 100px; background-color: rgba( 0, 0, 0, 0.6 ); }

</style>


<body>
    <header></header>
        
        <div id='profile' style='background-color:gray; height:5%; padding:20px;'>
            공간  '정체성 창고 버튼'    '정체성 탐험 버튼'

        </div>

        <div style="width:100%;"> 
            <div id='main_list' style='height:70%; margin:20px;'>
                메인 리스트를 어떻게 꾸밀까?? <br>
             
                계정 정보를 바탕으로 모든 정체성 리스트 불러오기 <br>

                우선 임의의 유저 정보를 만들 필요가 있음
                : 유저 <-> 정체성
                : 유저 <-> activity

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

    
    /*
   
    $.ajax({
        type : "POST",
        url : "/hoodify/get_user_identities.php",
        dataType : 'json',
        success : function(res){

            // 유저가 가지고 있는 정체성 리스트가 있는 json 파일
            > for 루프로 리스트 만들기
            // 리스트 순서는 어떻게 기억돼야 하나?
            // 관계 테이블에 우선순위라는 attribut가 있다면?



        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

    */




</script>





