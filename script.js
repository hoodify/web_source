
Kakao.init('07f6eafd69281ab56438dbcc4a88c39e');

window.onload=function() {
    
///////////////////////////////////////////////////////////////////////////////////////
// 전역 변수 설정. 현재 활성화된 정체성, 유저, activity 코드에 대한 정보를 담음
Global_Var = {}
Global_Var.userInfo = {

    'curr_identity_code' : null,
    'curr_activity_code' : null,
    'curr_item_code' : null,
    'curr_skill_code' : null,
    'curr_defect_code' : null,
    'curr_support_code' : null,
    'curr_record_code' : null,
    'curr_main_identity' : null,

    'profile_check_nickname' : false,
    'profile_check_introduction' : false,
    'profile_check_img' : false,

    

}


///////////////////////////////////////////////////////////////////////////////////////
// 주소 설정. 테스트(로컬) 또는 운영
var address_type = 'http://127.0.0.1/hoodify/main.html';
//var address_type = 'https://hoodify.cafe24.com/hoodify/main.html';


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


///////////////////////////////////////////////////////////////////////////////////////
// color 코드 array

//var color_box = ['#630237', '#ba9f48', '#2c3974', '#114724', '#003458', '#0f3d48', '#3a1e38', '#825042'];

var color_box = ['#a9d4f4', '#7bc1b2', '#fed081', '#f96c6c', '#3571b5', '#7cc0d3'];



///////////////////////////////////////////////////////////////////////////////////////
// 화면 크기가 조정될 때 display된 layer들의 크기를 조정

var delay = 300;
var timer = null;

$(window).on('resize', function(){
	clearTimeout(timer);
	timer = setTimeout(function(){


        // 'common_layer'클래스 중 display된 것들 크기 재조정

        $('.common_layer').each(function(i, obj){
           
           var display_val = $(this).css('display');
           console.log(display_val);
          
           if(display_val != 'none'){

            var $el = $(this);  
            var $elWidth = ~~($el.outerWidth()),
                $elHeight = ~~($el.outerHeight()),
                docWidth = $(document).width(),
                docHeight = $(document).height();

            if ($elHeight < docHeight || $elWidth < docWidth) {
                $el.css({
                    marginTop: -$elHeight /2,
                    marginLeft: -$elWidth/2
                })
                } else {
                $el.css({top: 0, left: 0});

            }
            $(this).css({top: '50%'});


           }

       });



	}, delay);

    //

});

///////////////////////////////////////////////////////////////////////////////////////
// 모달 배경 클릭 시 닫기

$(document).mouseup(function (e){
	if($(".ui-dialog").has(e.target).length === 0){
		//$(".ui-dialog").css({'display':'none'})
       // $('.ui-widget-overlay').remove();
       //$(".ui-dialog").hide();
       //
       $(".ui-dialog-titlebar-close").trigger("click");
	}
});

///////////////////////////////////////////////////////////////////////////////////////
// category -> identity 목록 불러오기
/*
$('#selection_personality').click(function(){

    console.log("selection_personality");
    load_selected_keywords('성향');

});

function load_selected_keywords(category){

    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_identity_category.php",
        data: { 'category_text' : category,},
        dataType : 'json',
        success : function(res){

        console.log(res);

        /// 카테고리에 따른 정체성 목록 불러오기 (각 항목에 대한 클릭 이벤트)
        $('.bucket').empty();
        for (var i = 0; i < res.length; i++) {

            var object = res[i];
            var object_name = object.identity_name;
            var list_container = document.createElement("div");

            $(list_container).css({

                    width: 'fit-content',
                    padding: "5px",
                    display: 'flex',
                    paddingBottom: '5px',
                    alignItems: 'center',
                    overflow:'hidden',
                    cursor:'pointer',
                    'margin-right': '15px',
                    'boder-radius' : '8px',

                    }).hover(function() {
                    $(this).css("background-color", "#bad8f2");
                    }, function(){
                    $(this).css("background-color", "white");
                    }).click(((object) => function (e) {

                        $('.show_keywords_container').css({ display : 'none',});

                        $('.search_identity_img').attr("src",object.identity_img);
                        $('.search_identity_name').text(object.identity_name);
                        $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                        $('.search_activity_list').empty();
                        $('.search_item_list').empty();
                        $('.search_skill_list').empty();
                        $('.search_defect_list').empty();

                        Global_Var.userInfo.curr_identity_code = object.identity_code;

                        


                    })(object)).appendTo('.bucket');
            

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
*/
///////////////////////////////////////////////////////////////////////////////////////
// category -> identity 목록 불러오기
    


function get_identities_from_category(category_text){

    $.ajax({
            type : "POST",
            url : "/hoodify/src/identity_info/get_identity_category.php",
            data: { 'category_text' : category_text,},
            dataType : 'json',
            success : function(res){

            console.log(res);

            $('.to_search_list').css("display","flex").hide().fadeIn('slow');
            /// 카테고리에 따른 정체성 목록 불러오기 (각 항목에 대한 클릭 이벤트)
            $('.search_result').empty();
            for (var i = 0; i < res.length; i++) {

                var object = res[i];
                var object_name = object.identity_name;
                var list_container = document.createElement("div");

                $(list_container).css({

                        height: "60px",
                        width:"320px",
                        padding: "5px",
                        borderBottom: "1px solid #D8D8D8",
                        display: 'flex',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',
                        cursor:'pointer',
                        'margin-right':'15px',

                        }).hover(function() {
                        $(this).css("background-color", "#bad8f2");
                        }, function(){
                        $(this).css("background-color", "white");
                        }).click(((object) => function (e) {

                            $('.show_keywords_container').css({ display : 'none',});

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
                                url : "/hoodify/src/identity_info/check_possession.php",
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
                            get_identity_search_data(object.identity_code);

                          


                        })(object)).appendTo('.search_result');
                

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
}

/////////////////////////////////////////////////////////////////////////////////////
/// todays_activities_container 불러오기
/// main_identity에 해당하는 acitity 불러와 표시

function get_daily_list(){

    if($('#todays_activities_container').css("display")=='flex'){
        $('#todays_activities_container').css("display","none")
    }
    else{
        $('.todays_activities_list').empty();
        $('#todays_activities_container').css("display","flex").hide().fadeIn('slow');

        // main_identity 이름 뽑기
        var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();

        $(".show_date").text($.datepicker.formatDate('yy.  mm.  dd (DD)', new Date()));
        $('.show_identity_name').text(extracted_text);
        


        $.ajax({
            type : "POST",
            url : "/hoodify/src/user/get_daily_list.php",
            data : { 'identity_code' : Global_Var.userInfo.curr_main_identity},
            dataType : 'json',
            success : function(res){

                for (var i = 0; i < res.length; i++) {

                    var object = res[i];
                    var object_name = object.activity_name;
                    var list_container = document.createElement("div");

                    $(list_container).css({

                        width:"80px",
                        height: "85px",
                        padding: "5px",
                        margin: '10px',
                        display: 'flex',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',
                        cursor:'pointer',
                        borderRadius: '8px', 
                        'justify-content': 'center',
                        'margin-left': '30px',
                        'margin-right': '30px',
                        'box-shadow': 'gray 4px 4px 5px 3px',
                        'background-color': '#313843d6',
                        'border': '2px solid white',

                        }).hover(function() {
                            $(this).css("background-color", "#bad8f2");
                            }, function(){
                                if($(this).hasClass("identity_selected")){
                                $(this).css("background-color", "#bad8f2");
                                }
                                else{
                                $(this).css("background-color", "#313843d6");
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

                            // 추가하기 레이어 초기화
                            var record_title = $('.record_title').val();
                            var record_cont = $('.record_cont').val();
                            
                            Global_Var.userInfo.curr_identity_code = object.identity_code;
                            Global_Var.userInfo.curr_activity_code = object.activity_code;

                            // activity만 추가할 수 있음
                            $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");


                            $('.popup_activity_img').attr("src",object.activity_img);
                            $('.popup_activity_title').text(object.activity_name);
                            $('.popup_activity_desc').text("　▶　"+ object.activity_desc);

                            $('.popup_activity_desc_container').click(function(){

                                $('.modal_cont').text("\u00a0"+"\u00a0"+object.activity_desc);
                                $('#desc_modal').attr("title", object.activity_name);
                                $('.ui-dialog-title').text(object.activity_name);

                                $('#desc_modal').dialog({
                                    modal: true, 
                                }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});
                                $('.ui-dialog').css({'z-index':'2000',});

                              

                            });

                            
                            $('.popup_activity_identity').text(object.identity_name);

                            $('.record_title').val("");
                            $('.record_cont').val("");
                            $('.find_img_area').attr("src","");

                            layer_popup($('.add_record_layer'));
                        
                        })(object)).addClass('daily_identity_active').attr('id', object.activity_code).appendTo('.todays_activities_list');


                        var VerticalList = $("<div>", {}).css({ 'display':'flex', 'flex-direction': 'column', 'align-items': 'center', 'width' : '100px', });

                        $('<img>', {
                                        src: object.activity_img

                                    }).css({
                                        width: "40px",
                                        height: "40px",
                                        margin: "4.5px",
                                        float: "left",
                                        margin: "7px",
                                        borderRadius: '8px', 
                                        'margin-top': '0px',
                                        border: "2px solid #586167", 

                                    }).appendTo(VerticalList);

                        $('<p>', {
                                    text: object.activity_name,

                                }).css({
                                    
                                    fontSize: "11px",
                                    margin: "3px",
                                    lineHeight:"12px",
                                    fontWeight: 'bold',
                                    color:'white',

                                }).appendTo(VerticalList);    

                                VerticalList.appendTo(list_container);       
                }
                    
                    

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });
    }
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
/////// 매일 1번 그날 정체성 키워드를 고르는 기능  

function get_daily_check() {

    var selected_count;

    $.ajax({
        type : "POST",
        url : "/hoodify/src/user/daily_check.php",
        data : { },
        dataType : 'json',
        success : function(res){

            if(res == 'not first visit'){

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

                                if(selected_count<7){
                                    $(this).addClass("identity_selected").css("background-color", "#bad8f2");;
                                
                                }
                                
                            }

                            selected_count = $('.identity_selected').length;
                            $('.selected_identity_count').text(selected_count + " / 7");


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


                   
    /////// 그날의 정체성 키워드 확정하기

    $('.btn_todays_identity').click(function(){

        var todays_identities = [];

        $('.identity_selected').each(function(index, item) {
            
            var currentElement = $(this);
            var value = currentElement.attr('id');
            todays_identities.push(value);
            

        });


        $.ajax({

            type : "POST",
            url : "/hoodify/src/user/update_daily_identities.php",

            // 선택된 정체성들의 코드값 받아 보내기
            data : { 'selected_identities' : todays_identities},
            success : function(res){
                
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

    })

}





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

        $('.add_record_layer').removeClass("state_item state_skill state_defect state_support").addClass("state_activity");
        $('.modify_record_layer').removeClass("state_item state_skill state_defect state_support").addClass("state_activity");
        $('.activity_post').removeClass("state_item state_skill state_defect state_support").addClass("state_activity");

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

        $('.add_record_layer').removeClass("state_activity state_skill state_defect state_support").addClass("state_item");
        $('.modify_record_layer').removeClass("state_activity state_skill state_defect state_support").addClass("state_item");
        $('.activity_post').removeClass("state_activity state_skill state_defect state_support").addClass("state_item");

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

        $('.add_record_layer').removeClass("state_activity state_item state_defect state_support").addClass("state_skill");
        $('.modify_record_layer').removeClass("state_activity state_item state_defect state_support").addClass("state_skill");
        $('.activity_post').removeClass("state_activity state_item state_defect state_support").addClass("state_skill");

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

        $('.add_record_layer').removeClass("state_activity state_item state_skill state_support").addClass("state_defect");
        $('.modify_record_layer').removeClass("state_activity state_item state_skill state_support").addClass("state_defect");
        $('.activity_post').removeClass("state_activity state_item state_skill state_support").addClass("state_defect");

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

    else if($(this).hasClass("support")){

        $('.add_record_layer').removeClass("state_activity state_item state_skill state_defect").addClass("state_support");
        $('.modify_record_layer').removeClass("state_activity state_item state_skill state_defect").addClass("state_support");
        $('.activity_post').removeClass("state_activity state_item state_skill state_defect").addClass("state_support");


        $(".SPTlist").css({
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
/////// 인기 정체성 클릭 이벤트

$('.popular_identity').click(function(){


    $('.hook_identity_space').css({display:'none'});
    $('.search_result_identity').css({display:'none'});
    $('.to_search_list').css("display","flex").hide().fadeIn('slow');


    var get_id_str = $(this).attr('id');
    var get_id = get_id_str.replace(/[^0-9]/g,''); 

    get_identity_search_data(get_id);

    Global_Var.userInfo.curr_identity_code = get_id;

    // 이미 보유하고 있는 정체성인지 확인
    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/check_possession.php",
        data : { 'identity_code' : get_id},
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

});




////////////////////////////////////////////////////////////////////////////////////               
/////// 테스트 계정으로 시작하기 버튼 이벤트

$('.test_btn_container').click(function(){

    
    $.ajax({
            type : "POST",
            url : "/hoodify/src/user/test_start.php",
            data : {
                   
                },
            dataType : 'json',  
            success : function(res){
            
                console.log('테스트 유저');
                console.log(res);
                window.location.href=address_type;

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });



})

////////////////////////////////////////////////////////////////////////////////////               
/////// 카카오로 시작하기 버튼 이벤트
$('.login_with_kakao').click(function(){
    kakaoLogin();
})



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
            url : "/hoodify/src/user/start_with_kakao.php",
            data : {
                    'user_code': response.id,
                },
            success : function(res){
            
                console.log("체크"+res);
                $('.login_account').fadeOut('fast');

                window.location.href=address_type;

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
/// 카카오로 로그아웃

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
/// 로그아웃 버튼 클릭 이벤트
    $('.logout_btn').click(function(){

    document.location.href='../hoodify/src/user/logout.php';
    kakaoLogout();
    //googleLogout();
})



////////////////////////////////////////////////////////////////////////////////////
/// esc 버튼으로 레이어 창 닫기

$(document).keyup(function(e) {

    if ( e.keyCode == 27) {

        // common_layer 클래스 가진 것들 중 

       // var z_index = $('.common_layer').css('z-index');
       // console.log(z_index);
       var index_array = [];
        $('.common_layer').each(function(i, obj){
           
            var display_val = $(this).css('display');
           
            if(display_val != 'none'){
                var this_index = $(this).css('z-index');
                index_array.push(this_index);
            }

        });

        var max_val = Math.max.apply(Math,index_array);
        console.log(max_val);

        $('.common_layer').each(function(i, obj){
           
           var zindex_val = $(this).css('z-index');
           var display_val = $(this).css('display');
          
           if(display_val != 'none' && zindex_val==max_val){
               $(this).fadeOut('fast');
           }

       });


        console.log(index_array);

     

       // $('.common_layer').fadeOut('fast');

    }

});






/////////////////////////////////////////////////////////////////////////////
// 공지 이후에 메시지 띄우기
// main identity와 관련된 정보


$('.open_report').click(function(){

    //WIP

    if( $('.main_list').is(':empty') ) {

        
        setTimeout(
            function() {
                layer_popup($('.search_layer'));
            }
        , 800);


    }



    /*
    setTimeout(

        function() {
        
                $.ajax({
                    type : "POST",
                    url : "/hoodify/src/data_analysis/get_identity_user_data.php",
                    data : { 
                        
                            'identity_code' : Global_Var.userInfo.curr_main_identity,
                        },
                    dataType : 'json',     
                    success : function(res){

                        console.log('그날의 기록');
                        console.log(res);
                        if(res[1].length === 0){

                            if(res[0][0].identity_name != null){

                                $('.notice_message').html("새로운 하루가 시작되었습니다. "
                                + '<br>'+'"'+'<span style="color: #517ee7; font-family: TmoneyRoundWindExtraBold">'
                                +res[0][0].identity_name +'</span>'+'"(으)로서 첫 기록을 남겨보세요.');
                            }

                            else{

                                $('.notice_message').html("새로운 하루가 시작되었습니다. "
                                + '<br>'+'<span style="color: #517ee7; font-family: TmoneyRoundWindExtraBold">'
                                    +'자신의 키워드'+'</span>'+'를 찾고 기록을 남겨보세요.');
                                
                            }

                            
                                

                                    
                        }
                        else{
                            var data = res[1][0];
                            var activity_name = data.activity_name;
                            var activity_count = data.cnt;
                            var identity_name = data.identity_name;

                            var total_num = res[0][0].total_user_num;
                            

                            var notice_text = "▶ 현재 "+total_num+" 명의 '" + "span1"+identity_name + "span2" + "'(이)가 활동중입니다." 
                                                + "\n\n ▶ 이 사람들은 오늘 총 " + "span1"+ activity_count + "span2" + '회의 ' +  "'" + "span1"+activity_name +  "span2" + "'" +"을(를) 완료했습니다.";
                            var notice_text_line = notice_text.replace(/(?:\r\n|\r|\n)/g, '<br/>');
                            var notice_text_line2 = notice_text_line.replace(/span1/g, '<span style="color: #517ee7; font-family: TmoneyRoundWindExtraBold">');
                            var notice_text_line3 = notice_text_line2.replace(/span2/g, '</span>');

                            $('.notice_message').html(notice_text_line3); 
                        }


                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown){ 
                        alert("통신 실패.")
                    }
                });

           // layer_popup('.daily_report')
        
        },
        500);
*/
});



/////////////////////////////////////////////////////////////////////////////
/// 정체성 상징 이미지 테스트

function symbol_layout(){

    var symbol_title = '책이라는 문';
    var symbol_desc = "　▶ 시간과 공간의 제약에 갇힌 우리는 어느새 삶의 관성에 떠밀려가고 있습니다."+
                        "<br><br>" + "　하지만 여기 일상 너머의 것을 보고 느낄 수 있게 해주는 문이 있습니다."+
                        "<br><br>" + "　많은 사람들이 무심코 지나쳐가지만 누군가는 그 너머에 대한 호기심을 갖기도 하고 그곳에 있는 것들을 취하려는 열망으로 가득찬 사람이 있습니다. " +
                        "<br><br>" + "　이것들이 문으로 보인다면 당신에게는 이 키워드가 어울릴 것입니다. '책이라는 문'"

    $('.symbol_title').text(symbol_title);
    $('.symbol_desc').html(symbol_desc);

    layer_popup($('.symbol_img_layer'));
}



/////////////////////////////////////////////////////////////////////////////
// 추천 활동 팝업 창 

function load_check_message(){

    $('.random_activities').empty();
    $.ajax({
            type : "POST",
            url : "/hoodify/src/user/get_random_activity.php",
            data : {},
            dataType : 'json',
            success : function(res){
            
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


                            $('.popup_activity_desc_container').click(function(){

                            $('.modal_cont').text("\u00a0"+"\u00a0"+object.activity_desc);
                            $('#desc_modal').attr("title", object.activity_name);
                            $('.ui-dialog-title').text(object.activity_name);

                            $('#desc_modal').dialog({
                                modal: true, 
                            }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});
                            $('.ui-dialog').css({'z-index':'2000',});

                            });



                            $('.popup_activity_identity').text(object.identity_name);

                            $('.record_title').val("");
                            $('.record_cont').val("");
                            $('.find_img_area').attr("src","");

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

                    layer_popup('.check_message_layer');
                    
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

}

////////////////////////////////////////////////////////////////////////////////////
/// 추천 활동 새로고침 버튼

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
       url : "/hoodify/src/data_analysis/get_user_record_analysis.php",
       data : {
                   'date_value': month_val,
               },
       dataType : 'json',
       success : function(res){

            console.log('정체성 순위 값');
            console.log(res);

            if(res != null){

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
                        'box-shadow': 'gray 2px 2px 3px 1px',

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

                                var graph_bar = $('<div>', {

                                }).css({
                                    
                                    width: bar_width,
                                    height: "20px",
                                    backgroundColor: '#4c5566',
                                    'animation': 'bar_graph 1s linear 1',

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
            }

            else{
                console.log('아직 아무 기록 없음');
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
           url : "/hoodify/src/data_analysis/get_most_frequent_act.php",
           data : {
                   'date_value': month_val,
               },
           dataType: 'json',
           success : function(res){

                console.log('가장 많이 한 활동');
                console.log(res);
                if(res != false){

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
                                'box-shadow': 'gray 2px 2px 3px 1px',
                                
                        }).appendTo(VerticalList); 

                        $('<p>', {
                            text: res.identity_name,

                        }).css({
                            
                                fontSize: "13px",
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
                                
                                fontSize: "13px",
                                margin: "3px",
                                lineHeight:"12px",
                                'margin-left':'10px',
                                "font-weight": "bold",
                                


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
                    }
                    else{
                        console.log("아직 아무 기록 없음");
                    }

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
/// 월간 기록 메인 페이지

$('.open_monthly_report_btn').click(function(){

    $('.subscription_layout').css({'display':'none'});
    $('.monthly_report').css("display","flex").hide().fadeIn('slow');

});       


/////////////////////////////////////////////////////////////////////////////////////
/// 구독 레이아웃 열기 버튼

$('.open_sub_btn').click(function(){

    $('.subscription_layout').css("display","flex").hide().fadeIn('slow');
    $('.monthly_report').css({'display':'none'});

});



/////////////////////////////////////////////////////////////////////////////////////
/// 다른 사람들의 기록 

$('#others_record_btn').click(function(){

    last_id = 999;

    get_public_record();

});


/////////////////////////////////////////////////////////////////////////////////////
//////////// 다른 사람들의 기록 불러오기

var last_id = 999;

function get_public_record(direction){


    $('#others_location_container').css({'display':'none'});
    $('#todays_activities_container').css({'display':'none'});
    $('#daily_log_container').css({'display':'none'});


        $('#others_record').empty();
        var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
        $('.activity_current_identity').text(extracted_text);
        $('.others_record_mark').fadeIn("slow");
        $('#others_record_container').css({'display':'flex'});

        $.ajax({

            type : "POST",
            url : "/hoodify/src/record_CRUD/get_public_report.php",
            dataType : 'json',
            data: { 
                'identity_code' : Global_Var.userInfo.curr_main_identity,
                'last_id':last_id,
                'direction':direction,
            },
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

                last_id = record.user_activity_code;
            
                
                // record 카드 만들기
                var others_record = document.createElement("div");

                $(others_record).css({

                        width: "350px",
                        height: "215px",
                        border: "2.5px solid #1c2227",
                        flexDirection: 'column',
                        paddingBottom: '5px',
                        overflow:'hidden',
                        margin: '10px',
                        position: 'relative',
                        borderRadius: '8px',
                        backgroundColor: '#c6d0db',
                        cursor:"pointer",
                        'box-shadow': 'gray 5px 5px 4px 1px',
                        

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
                            $('.popup_activity_identity').text(record.identity_name);
                            
                            $.ajax({

                                    type : "POST",
                                    url : "/hoodify/src/record_CRUD/get_record_img.php",
                                    data : {
                                            'user_contents_code': record.user_activity_code,
                                            'category' : 'activity',
                                        },
                                    dataType : 'json',
                                    success : function(res){
                                        
                                        console.log(res);
                                        if(res.length>0){

                                        $('.post_img_p').css({display: 'flex',});
                                        $('.post_img_ps').css({display: 'flex',});    
                                        $('.post_img_p').attr("href",res[0].file_path);
                                        $('.post_img_ps').attr("src",res[0].file_path);

                                        $(".post_img_p").fancybox({

                                        });

                                    }
                                    
                                    else{
                                        $('.post_img_p').css({display: 'none',});
                                        $('.post_img_ps').css({display: 'none',});
                                        $('.post_img_ps').attr('src', '');

                                    }
                                    
                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                        alert("통신 실패.")
                                    }
                                });


                            layer_popup($('.public_record_post'));

                        })(record)).appendTo('.main_list');

                        
                        var top_container = document.createElement("div");

                        $(top_container).css({
                        display: 'flex',
                        flexDirection: 'row',
                        alignItems: 'center',
                        backgroundColor: "rgb(40 54 80 / 85%)",
                        'border-bottom': '1px solid black',
                        
                        })


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
                            'font-family':'TmoneyRoundWindExtraBold',
                        
                        }).appendTo(top_container);
                        $(top_container).appendTo(others_record);

                        $('<p>', {
                            text: record_name,

                            }).css({
                            "font-size" : "14px",
                            "margin-left": "12px",
                            "margin-top": "5px",
                            'font-family': 'TmoneyRoundWindExtraBold',
                            "color" : "#192731",
                        
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
                            "font-size" : "20px",
                            "margin": "12px",
                            'font-family': 'SDMiSaeng',
                            "color" : "#586167",
                            "word-wrap" : "break-word",
                            "height" : "60px",
                            "overflow": "hidden",
                            "backgroundColor": "#f9fcff",
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
/// 우측 main 레이아웃 보이기

$('#random_question_btn').click(function(){

    get_random_question();
   // layer_popup('.get_random_question_layer');

   // 보이기 
   
   $('#others_record_container').css({'display':'none'});
   $('#others_location_container').css({'display':'none'});
   $('#todays_activities_container').css({'display':'none'});
   $('#daily_log_container').css({'display':'flex'});

   


});

$('.reload_btn').click(function(){

    get_random_question();
    
})



function get_random_question(){

    $.ajax({
        type : "POST",
        url : "/hoodify/src/user/get_random_question.php",
        dataType : 'json',    
        success : function(res){

            console.log('랜덤 질문 뽑기');
            console.log(res);
            if(res=='empty'){

                console.log('데이터가 없음');
                $('.no_data').text('데이터를 추가중입니다.')
            }

            else{
                var category_text = res[0].category_name;
                console.log("activity category");
                console.log(category_text);

                $('#random_question_text').text("");
                $('#random_question_category').text("");
                $('.reload_btn_container').css({'display':'none',});


                var txt;

                if(category_text == "사람"){
                    
                    txt = '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">' +"　다른 사람" +'</span>' +"들은 삶을 채워주는 흥미로운 콘텐츠입니다. 오늘 누구를 만났나요? 그 사람과 어떤 얘기를 나누고 무엇을 했는지 생각해봅시다.";

                }
                else if(category_text == "새로운 시도"){
                    txt ="　때로 우리는 일상을 벗어난 " + '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">' +"새로운 시도"  +'</span>'+ "를 하기도 합니다. 오늘 했던 새로운 시도가 있었다면 적어봅시다.";
                }
                else if(category_text == "루틴"){
                    txt ="　우리 삶은 대부분 " + '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+ "반복되는 일상" +'</span>'+ "으로 이루어져 있습니다. 평소와 다를 것이 없는 하루인가요? 되풀이되는 내 하루를 기록으로 남겨봅시다.";
                }
                else if(category_text == "사건사고"){
                txt = "　때로는 살면서 예상치 못한 "+ '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"사건 사고"+'</span>'+"가 생기기도 합니다. 오늘 있었던 특별한 사건을 기록해봅시다.";
                }
                else if(category_text == "야외"){
                txt = "　오늘 "+ '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"집 밖" +'</span>'+"을 나간 적이 있었나요? 나갔다면 무엇을 했는지 적어봅시다.";
                }
                else if(category_text == "실내"){
                txt = "　오늘 "+ '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"방 안" +'</span>'+"에 머무르면서 했던 활동에 대해 생각해봅시다.";
                }
                else if(category_text == "창작"){
                txt = '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"　새로운 것" +'</span>'+"을 만들어내는 일만큼 보람찬 것이 있을까요? 오늘 만들어낸 것이 있다면 생각해봅시다. 짧은 글부터 그림 또는 음악이 될 수도 있습니다.";
                }
                else if(category_text == "감상"){
                txt = "　오늘 "+'<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"즐겼던 콘텐츠"+'</span>'+"에 대해 생각해봅시다. 영상이나 음악 또는 글이 될 수도 있습니다.";
                }
                else if(category_text == "소비"){
                    txt = "　우리는 한 사람의 "+'<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"소비"+'</span>'+ "목록으로 그 사람을 어느정도 추측할 수 있습니다. 소비는 우리는 표현하는 수단이기도 합니다. 오늘 특별한 지출이 있었다면 기록해봅시다.";
                }
                else if(category_text == "식사"){
                txt = "　무엇을 먹었는지가 그 사람의 하루를 설명해주기도 합니다. "+'<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"오늘 먹은 것"+'</span>'+"은 무엇이었나요?";
                }
                else if(category_text == "구비"){
                txt = '<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"　생활에 필요"+'</span>'+"하거나 "+'<span style="color: cornflowerblue; font-weight: bold;">'+"마음에 드는 것"+'</span>'+"들을 구해 채워놓습니다.";
                }
                else if(category_text == "휴식"){
                txt = "　빈둥거리며 몸과 마음을 "+'<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"재충전"+'</span>'+"하는 시간이 필요할 때가 있습니다";
                }
                else if(category_text == '일'){
                txt = "　삶은 "+'<span style="color: cornflowerblue; font-family:TmoneyRoundWindExtraBold;">'+"자기 일"+'</span>'+"을 찾아 수행해나가는 과정입니다. 오늘 했던  내 일은 무엇인가요?";
                }
                else if(category_text == '정리'){
                txt = "　때로는 덜어내고 정리하면서 삶을 더 활기차게 만듭니다. 오늘 정리한 것들이 있다면 적어봅시다.";
                }
                else if(category_text == '공부'){
                txt = "　새로운 것들에 대해 조사하고 공부합니다.";
                }
                else if(category_text == '기록'){
                txt = "　생각이나 느낌을 기록으로 남깁니다. 글로 적어내면서 생각이 정리되고 명확해집니다";
                }
                else if(category_text == '이벤트'){
                txt = "　시험이나 발표. 고백과 이별 등 평소와는 다른 중요한 이벤트가 생기는 날이 있습니다.";
                }
            



                
                setTimeout(
                    function() {
                       // $('.reload_btn_container').hide().fadeIn('slow');
                    }
                , 2400);
                
            
                setTimeout(
                    function() {
                        $('#random_question_category').text(category_text+" log").hide().fadeIn('slow');
                    }
                , 300);

                setTimeout(
                    function() {
                        $('#random_question_text').html(txt).hide().fadeIn('slow');
                    }
                , 500);


                $('.random_question_activity').empty();


                setTimeout(
                    function() {
                    

                        for (var i = 0; i < res.length; i++) {

                        var object = res[i];
                        var object_name = object.activity_name;
                        var list_container = document.createElement("div");

                        $(list_container).css({

                            width:"80px",
                            height: "85px",
                            padding: "5px",
                            margin: '10px',
                            display: 'flex',
                            paddingBottom: '5px',
                            alignItems: 'center',
                            overflow:'hidden',
                            cursor:'pointer',
                            borderRadius: '8px', 
                            'justify-content': 'center',
                            'margin-left': '30px',
                            'margin-right': '30px',
                            'box-shadow': 'gray 4px 4px 5px 3px',
                            'background-color': '#313843d6',
                            'border': '2px solid white',

                            }).hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                    if($(this).hasClass("identity_selected")){
                                    $(this).css("background-color", "#bad8f2");
                                    }
                                    else{
                                    $(this).css("background-color", "#313843d6");
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

                                // 추가하기 레이어 초기화
                                var record_title = $('.record_title').val();
                                var record_cont = $('.record_cont').val();
                                
                                Global_Var.userInfo.curr_identity_code = object.identity_code;
                                Global_Var.userInfo.curr_activity_code = object.activity_code;

                                // activity만 추가할 수 있음
                                $('.add_record_layer').removeClass("state_item state_skill").addClass("state_activity");


                                $('.popup_activity_img').attr("src",object.activity_img);
                                $('.popup_activity_title').text(object.activity_name);
                                $('.popup_activity_desc').text("　▶　"+ object.activity_desc);

                                $('.popup_activity_desc_container').click(function(){

                                    $('.modal_cont').text("\u00a0"+"\u00a0"+object.activity_desc);
                                    $('#desc_modal').attr("title", object.activity_name);
                                    $('.ui-dialog-title').text(object.activity_name);

                                    $('#desc_modal').dialog({
                                        modal: true, 
                                    }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});
                                    $('.ui-dialog').css({'z-index':'2000',});

                                });

                                
                                $('.popup_activity_identity').text(object.identity_name);

                                $('.record_title').val("");
                                $('.record_cont').val("");
                                $('.find_img_area').attr("src","");

                                layer_popup($('.add_record_layer'));
                            
                            })(object)).addClass('').attr('id', object.activity_code).appendTo('.random_question_activity').hide().fadeIn('slow');


                            var VerticalList = $("<div>", {}).css({ 'display':'flex', 'flex-direction': 'column', 'align-items': 'center', 'width' : '100px', });

                            $('<img>', {
                                            src: object.activity_img

                                        }).css({
                                            width: "40px",
                                            height: "40px",
                                            margin: "4.5px",
                                            float: "left",
                                            margin: "7px",
                                            borderRadius: '8px', 
                                            'margin-top': '0px',
                                            border: "2px solid #586167", 

                                        }).appendTo(VerticalList);

                            $('<p>', {
                                        text: object.activity_name,

                                    }).css({
                                        
                                        fontSize: "11px",
                                        margin: "3px",
                                        lineHeight:"12px",
                                        fontWeight: 'bold',
                                        color:'white',

                                    }).appendTo(VerticalList);    

                                    VerticalList.appendTo(list_container);    

                }





                    },
                1800);
            }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ 
            alert("통신 실패.")
        }
    });





}



/////////////////////////////////////////////////////////////////////////////////////
/// 우측 main 레이아웃 보이기

$('#daily_check_btn').click(function(){

    get_daily_list();
    $('#others_record_container').css({'display':'none'});
    $('#others_location_container').css({'display':'none'});
    $('#daily_log_container').css({'display':'none'});

})



/////////////////////////////////////////////////////////////////////////////////////
/// 다른 사람들의 위치 레이어 보이기

$('#others_location_btn').click(function(){

    setTimeout( function() {
        window.dispatchEvent(new Event('resize'));
    }, );

   $('#others_record_container').css({'display':'none'});
   $('#todays_activities_container').css({'display':'none'});
   
   $('#daily_log_container').css({'display':'none'});
   var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
   $('.map_current_identity').text(extracted_text);

    
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
                url : "/hoodify/src/user/update_location.php",
                data : { 'latitude' : latitude,
                         'longitude' : longitude, 
                         'identity_code' : Global_Var.userInfo.curr_main_identity,
                        },
                dataType : 'json',     
                success : function(res){

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
                                layer_popup('.underway');
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
                                layer_popup('.underway');
                            });

                        }
                    
                    }
                    
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ 
                    alert("통신 실패.")
                }
            });

    }

    
    /// 다른 사람들의 위치 레이어 보이기

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

    layer_popup('.underway');
});

////////////////////////////////////////////////////////////////////////////////////
// 준비중입니다  WIP

$('.on_construction').click(function(){

    
 
    Kakao.Auth.authorize({
        redirectUri: address_type,
        scope: 'friends',
      });



  

    layer_popup('.underway');
    //layer_popup('.vote_friend');
    

});

$('.mbti_btn').click(function(){

    var mbti = $(this).attr('class').split(' ')[0];

    $('.to_search_list').css("display","flex").hide().fadeIn('slow');

    console.log('mbti');
    console.log(mbti);

    $('.category_sentence').css("display","flex").hide().fadeIn('fast');

    
    $('.list_category').text(mbti);
    $('.list_category').css({ color : "#f18461",});

    var identity_array = [];

    if(mbti=="ISTJ"){

        identity_array = [12,80,81,71,36,16,13,109];
        get_identity_list(identity_array);

    }
    else if (mbti=="ISFJ"){
        
        identity_array = [10,12,135,80,71,73,74];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="INFJ"){
        
        identity_array = [71,77,79,8,74,80,6];
        get_identity_list(identity_array);

    }
    else if (mbti=="INTJ"){

        identity_array = [12,81,77,8,2,76,79,77,80];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ISTP"){
        
        identity_array = [10,12,142,78,76,81,36,13,71,11];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ISFP"){
        
        identity_array = [10,36,11,77,2,71,9];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="INFP"){
        
        identity_array = [74,73,36,77,8,71,72,79];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="INTP"){
        
        identity_array = [12,79,8,10,2,1,76];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ESTP"){
        
        identity_array = [81,97,9,67,3];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ESFP"){
        
        identity_array = [67,69,68,6,77,64];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ENFP"){
        
        identity_array = [11,10,82,68,78,67];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ENTP"){
        
        identity_array = [12,76,96,2,9,16];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ESTJ"){
        
        identity_array = [81,80,16,109,96];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ESFJ"){
        
        identity_array = [80,74,69,67];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ENFJ"){
        
        identity_array = [80,82,69];
        get_identity_list(identity_array);
        
    }
    else if (mbti=="ENTJ"){
        
        identity_array = [96,76,81];
        get_identity_list(identity_array);
        
    }



});

function get_identity_list(identity_code_array){


    $('.hook_identity_space').css({ display : 'none',});
    $('.search_result_identity').css({ display : 'none',});
    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result').css("display","flex").hide().fadeIn('fast');

    $('.category_container').css("display","flex").hide().fadeIn('fast');


   
    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_identity_list.php",
        data : {
                'identity_code_array' : identity_code_array,
            },
        dataType : 'json',  
        success : function(res){

            console.log('identity_list_mbti');
            console.log(res);


            $('.search_result').empty();
            for (var i = 0; i < res.length; i++) {

                var object = res[i][0];
                var object_name = object.identity_name;
                var list_container = document.createElement("div");

                $(list_container).css({

                        height: "60px",
                        width:"320px",
                        padding: "5px",
                        borderBottom: "1px solid #D8D8D8",
                        display: 'flex',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',
                        cursor:'pointer',
                        'margin-right':'15px',

                        }).hover(function() {
                        $(this).css("background-color", "#bad8f2");
                        }, function(){
                        $(this).css("background-color", "white");
                        }).click(((object) => function (e) {

                            $('.show_keywords_container').css({ display : 'none',});

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
                                url : "/hoodify/src/identity_info/check_possession.php",
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
                            get_identity_search_data(object.identity_code);

                          


                        })(object)).appendTo('.search_result');
                

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



}


////////////////////////////////////////////////////////////////////////////////////
// 검색한 정체성 정보

function get_identity_search_data(identity_code){

    $('.search_result_identity').css("display","flex").hide().fadeIn('fast');

    $('.search_result').css({ display : 'none',});
    $('.category_container').css({ display : 'none',});
    $('.show_keywords_container').css({ display : 'none',});
    $('.category_sentence').css({ display : 'none',});


    

    $('.search_activity_list').empty();
    $('.search_item_list').empty();
    $('.search_skill_list').empty();
    $('.search_defect_list').empty();



    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_search_identity_data.php",
        data : {'identity_code' : identity_code},
        dataType : 'json',
        success : function(res){


            console.log('확인중');
            console.log(res);

            var identity_data = res[5][0];
            $('.search_identity_img').attr("src",identity_data.identity_img);
            $('.search_identity_name').text(identity_data.identity_name);
            $('.search_identity_desc').text("\u00a0"+"\u00a0"+identity_data.identity_desc);


            
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


            // 해당 정체성의 support 정보
            var support_data = res[4];
            $('.search_support_list').empty();
            if(support_data.length === 0){

                
                console.log("공백 확인");
                $('<p>', {
                    text: "(비어있음)",

                }).css({
                    fontSize: "12px",
                    marginLeft:"4.5px",
                    margin: "4.5px",
                    color: 'gray',
                    marginTop:"15px",


                }).appendTo('.search_support_list');


            }
            else{
                for (var i = 0; i < support_data.length; i++) {
                    
                    var support_object = support_data[i];
                    var list = document.createElement("div");

                    $(list).css({

                    
                        height: "70px",
                        borderBottom: "1px solid #D8D8D8",
                        display: 'flex',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',

                    }).appendTo('.search_support_list');

                    var VerticalList = $("<div>", {
                    }).css({

                    });

                    $('<img>', {
                        src: support_object.support_img

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
                        text: support_object.support_name,

                    }).css({
                        margin: "4.5px",
                        "font-weight": "bold",
                


                    }).appendTo(VerticalList);
/*
                    $('<p>', {
                        text: support_object.support_desc,

                    }).css({
                        fontSize: "13px",
                        margin: "4.5px",
                        lineHeight:"15px",


                    }).appendTo(VerticalList);
*/
                    VerticalList.appendTo(list);

                }
            }


        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

}



///////////////////////////////////////////////////////////////////////////////////////
// 카테고리 버튼 클릭 리스너  (검색 레이어)
// '음식' 카테고리를 클릭하면 '음식'이라는 카테고리에 포함된 정체성의 리스트를 불러온다.

$('.category_btn').click(function(){

    $('.search_result').empty();
    $('.search_result').css({ display : 'none',});
    $('.hook_identity_space').css({ display : 'none',});
    $('.category_sentence').css("display","flex").hide().fadeIn('fast');

    

    var category_text = $(this).children("span").text();
    var category_text_color = $(this).children("span").css("color");
    console.log(category_text_color);

    $('.list_category').text(category_text);
    $('.list_category').css({ color : category_text_color,});

    console.log(category_text);

    get_identities_from_category(category_text);





///////////////////////////////////////////////////////////////////////////////////////
/*
// 카테고리 텍스트로부터 키워드 나타내기

    $('.search_result').empty();
    $('.search_result').css({ display : 'none',});

    var category_text = $(this).text();
    console.log(category_text);
    $('.show_keyword_space').empty();
    
    var index_num = 9999;
    function randomNum(min, max){
        var randNum = Math.random()*(max-min+1) + min;
        return randNum;
    }

    function get_random_color() {
        return color_box[Math.floor(Math.random() * color_box.length)];
    }



    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_keywords_from_category.php",
        data: { 'category_text' : category_text,},
        dataType : 'json',
        success : function(res){

        for (var i = 0; i < res.length; i++) {

            var keyword = res[i];
            var keyword_name = keyword.keyword_name;

            var divsize_width = 70;
            var divsize_height = 30;

            var ran_val = Math.random();
            var ran_val2 = Math.floor(ran_val*1000);            

            var posx = randomNum(5,$('.show_keywords_container').width()*0.8- divsize_width);
            var posy = randomNum(5,$('.show_keywords_container').height()*0.75*0.8 - divsize_height);

            var random_color = get_random_color();
            

            var keyword_container = document.createElement("div");
            $(keyword_container).css({

                'position':'absolute',
                'left':posx+'px',
                'top':posy+'px',
                'border' : '1px solid white', 
                'background-color' : random_color,
            
            }).text(keyword_name).addClass("generalBtn keyword_btn")
            .hover(((random_color) => function(e) {

                    index_num = index_num +1;
                    $(this).css({
                        "z-index": index_num,
                        'background-color': '#313843',
                        'color': '#fff',
                        
                    });

                })(random_color), ((random_color) => function(e){

                    $(this).css({
                        'background-color': random_color,
                    });

                })(random_color)).click(((keyword) => function (e) {


                    $('.search_result_identity').css({ display : 'none',});
                    $('.show_keywords_container').css({ display : 'none',});
                    $('.search_result').css("display","block").hide().fadeIn('fast');

                    var keyword_text = $(this).text();

                    $.ajax({

                        type : "POST",
                        url : "/hoodify/src/identity_info/get_identities_from_keyword.php",
                        data: { 'keyword_text' : keyword_text,},
                        dataType : 'json',
                        success : function(res){

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
                                    

                                    $('.show_keywords_container').css({ display : 'none',});

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
                                        url : "/hoodify/src/identity_info/check_possession.php",
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
                                    get_identity_search_data(object.identity_code);


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

                    
                })(keyword)).hide().delay(ran_val2+700).fadeIn(500).appendTo('.show_keyword_space');

        }

        $('.search_result_identity').css({ display : 'none',});
        $('.search_result').css({ display : 'none',});
        $('.show_keywords_container').css("display","block").hide().fadeIn('fast');

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });


*/
///////////////////////////////////////////////////////////////////////////////////////

    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result_identity').css({ display : 'none',});
    $('.search_result').css("display","flex").hide().fadeIn('fast');



})






////////////////////////////////////////////////////////////////////////////////////
// record 기록 시 최대 글자수 제한

    // 특수문자 정규식 변수(공백 미포함)
    var replaceChar = /[~!@\#$%^&*\()\-=+_'\;<>\/.\`:\"\\,\[\]?|{}]/gi;

    // 완성형 아닌 한글 정규식
    var replaceNotFullKorean = /[ㄱ-ㅎㅏ-ㅣ]/gi;

$(document).ready(function() {

    
    $('.record_title').on('keyup', function() {

        if($(this).val().length > 40) {
            $(this).val($(this).val().substring(0, 40));
        }

    });

    $('.record_cont').on('keyup', function() {

        if($(this).val().length > 1500) {
            $(this).val($(this).val().substring(0, 1500));
        }

    });

    $('.record_cont_modify').on('keyup', function() {

        if($(this).val().length > 1500) {
            $(this).val($(this).val().substring(0, 1500));
        }

    });
        

    $('.profile_message_text').on('keyup', function() {

        if($(this).val().length > 200) {
            $(this).val($(this).val().substring(0, 200));
        }

    }); 



    // 닉네임 입력 제한
    
    $('.profile_nickname_text').on('keyup', function() {


        if($(this).val().length > 10) {
            $(this).val($(this).val().substring(0, 10));
        }

        $(this).val($(this).val().replace(replaceChar, ""));
        $(this).val($(this).val().replace(/ /g, ''));

        
    }).on("focusout", function() {
        var x = $(this).val();
        if (x.length > 0) {
            if (x.match(replaceChar) || x.match(replaceNotFullKorean)) {
                x = x.replace(replaceChar, "").replace(replaceNotFullKorean, "");
            }
            $(this).val(x);
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
        url : "/hoodify/src/identity_info/delete_identity.php",
        data : {
            'identity_code': Global_Var.userInfo.curr_identity_code,  
        },
        success : function(res){
            if(res == 'success'){
                
                get_main_list();

                $('.delete_check_identity').fadeOut('fast');
                $('.main_layer').fadeOut('fast');
                console.log(res);
            }
            else{
                console.log(res);
            }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ 
            alert("통신 실패.")
        }
    });


});

/////////////////////////////////////////////////////////////////////////////////////
// 메시지 카드 
// 

$('.message_test').click(function(){

    $(".RC").css({
        display: "none",
    });

    $(".RCmessage").css("display","flex").hide().fadeIn("fast");


    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_message_data.php",
        data : {
            'identity_code' : Global_Var.userInfo.curr_identity_code, 
        },
        dataType : 'json',
        success : function(res){

            console.log('메시지');
            console.log(res);
           $('.mylist_message').empty();

            for (var i = 0; i < res.length; i++) {
                
                var object = res[i];

                var list_container = document.createElement("div");

                $(list_container).css({

                        display: "flex",
                        alignItems: "center",
                    // borderRight: "1px solid #D8D8D8",
                    // borderBottom: "1px solid #D8D8D8",
                        cursor:'pointer',
                        width:'95px',
                        height:'100px',
                        flexDirection:'column',
                        'padding-top':'15px',
                        'border-radius' : '11px',

                        }).hover(function() {
                        $(this).css("background-color", "#bad8f2");
                        }, function(){
                        $(this).css("background-color", "white");
                        }).click(((object) => function (e) {

                            console.log(object);

                            $('.message_identity').text(object.identity_name);
                            $('.message_cont').text(object.message);
                            $('.message_from').text("from '"+object.nickname+"'");
                            
                            

                            layer_popup($('.message_card_layer'));
                           

                        })(object)).appendTo(".mylist_message ");

                
                $('<img>',{

                    src: "/hoodify/img/identity/hooodify_mini.png",
                }).css({
                    width: "45px",
                    height: "45px",
                    margin: "4.5px",
                    'margin-bottom':'0px',
                    float: "left",
                    "border-radius": "10px",
                    "border": "2px solid #475169"

                }).appendTo(list_container);        

            
                $('<p>', {
                    text:"from '"+object.nickname +"'",

                }).css({
                    'max-width':'75px',
                    "font-family": "TmoneyRoundWindExtraBold",
                    'font-size':'13px',
                    "color" : '#47525f',
                    "overflow": "hidden",
                    "text-overflow": "ellipsis",
                    "white-space": "nowrap",
                
                }).appendTo(list_container);

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
    
    $('.hook_identity_space').css("display","flex").hide().fadeIn("fast");
    $('.search_result_identity').css({ display : 'none',});
    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result').css({ display : 'none',});
    $('.category_sentence').css({ display : 'none',});
    
    

   // $('.').fadeIn('fast');
    $('.category_container').css("display","flex").hide().fadeIn("fast");



    $('.to_search_list').css("display","none");
    layer_popup($('.search_layer'));
});


$('.popular_keyword_btn').click(function(){

    var display_val = $('.popular_identity_list').css('display');

    if(display_val == 'none'){
        
        $('.popular_identity_list').css({height: 'fit-content'});
        

        $('.popular_identity_list').css("display","flex").hide().fadeIn('slow');
    


       
    }
    else{
        $('.popular_identity_list').css("display","none");
    }

});

$('.find_mbti_btn').click(function(){


    var display_val = $('.mbti_identity_list').css('display');

    if(display_val == 'none'){
        $('.mbti_identity_list').css("display","flex").hide().fadeIn("fast");
        //$('.search_layer_container').scrollTop($('.search_layer_container')[0].scrollHeight);
        var heightval = $('.search_layer_container')[0].scrollHeight;
        $('.search_layer_container').animate({
            scrollTop: heightval
          }, 2000);
    }
    else{
        $('.mbti_identity_list').css("display","none");
    }

    
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
    
    $('.hook_identity_space').css({ display : 'none',});
    $('.search_result_identity').css({ display : 'none',});
    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result').css("display","flex").hide().fadeIn('fast');
    
    $('.category_container').css("display","flex").hide().fadeIn('fast');

    var search_text = $('.search_text').text();
    console.log(search_text);

    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_search_data.php",
        data : {
            'search_text' : search_text,
        },
        dataType : 'json',
        success : function(res){

            $('.search_result').empty();

            for (var i = 0; i < res.length; i++) {
                
                var object = res[i];
                var object_name = object.identity_name;

                var list_container = document.createElement("div");

                $(list_container).css({

                        minWidth: "500px",
                        height: "60px",
                        padding: "5px",
                        borderBottom: "1px solid #D8D8D8",
                        display: 'flex',
                        paddingBottom: '5px',
                        alignItems: 'center',
                        overflow:'hidden',
                        cursor:'pointer',

                        }).hover(function() {
                        $(this).css("background-color", "#bad8f2");
                        }, function(){
                        $(this).css("background-color", "white");
                        }).click(((object) => function (e) {

                            console.log(object);

                            $('.search_identity_img').attr("src",object.identity_img);
                            $('.search_identity_name').text(object.identity_name);
                            $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                            $('.search_activity_list').empty();
                            $('.search_item_list').empty();
                            $('.search_skill_list').empty();
                            $('.search_defect_list').empty();
                            $('.search_support_list').empty();

                            Global_Var.userInfo.curr_identity_code = object.identity_code;

                            $.ajax({
                                type : "POST",
                                url : "/hoodify/src/identity_info/check_possession.php",
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
                            

                            get_identity_search_data(object.identity_code);



                           


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
            url : "/hoodify/src/identity_info/add_identity.php",
            data:{ 
                'identity_code' : Global_Var.userInfo.curr_identity_code,
            },
            success : function(res){

                console.log('세션 체크');
                console.log(res);
                if(res.match('success')){

                    $('.add_identity').css({ display : 'none',});
                    $('.locked').css({ display : 'block',});
                    get_main_list();


                }
                else if(res.match('no_session')){
                    console.log('세션 없음');
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

    $('.add_identity_check').fadeOut('fast');


})




///////////////////////////////////////////////////////////////////////////////////////
// 검색 결과에서 뒤로가기 > 정체성 리스트 다시 보이기

$('.to_search_list').click(function(){
    

    $('.show_keywords_container').css({ display : 'none',});
    $('.to_search_list').fadeOut('fast');
    $('.category_sentence').css({ display : 'none',});

    $('.search_result_identity').css({ display : 'none',});
    $('.search_result').css({ display : 'none',});
    $('.category_container').css("display","flex").hide().fadeIn("fast");
    $('.hook_identity_space').css("display","flex").hide().fadeIn("fast");
    
})





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// 프로필 관련 ////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////
// 프로필 버튼
// 프로필 layer 띄우기

$('.profile').click(function(){

    Global_Var.userInfo.profile_check_nickname = false;
    Global_Var.userInfo.profile_check_introduction = false;
    Global_Var.userInfo.profile_check_img = false;

    get_profile_information();

    $('.find_img_container').css("display","flex").hide().fadeIn('slow');
    $('.apply_profile_change').css({display:'none',});
    layer_popup($('.profile_layer'));

})


/////////////////////////////////////////////////////////////////////////////////////
// 프로필 정보 불러오기 
function get_profile_information(){

    $.ajax({
        type : "POST",
        url : "/hoodify/src/user/get_user_profile.php",
        dataType : 'json',
        success : function(res){

            console.log('프로필 정보');
            console.log(res);
            if(res == 'nothing'){
                console.log(res);
            }
            else{
                console.log('프로필 정보2')
                console.log(res[0]);
                console.log(res[1]);
                $('.show_profile').attr("src",res[0][0].profile_img);
                $('.profile_img_space').css({'display':'flex',}).attr("src",res[0][0].profile_img);

                
                //$('.profile_img').text(res[0].profile_img);
                $('.profile_nickname').text(res[0][0].nickname);
                $('.profile_introduction').text(res[0][0].introduction);
                $('.nickname').text(res[0][0].nickname);

                $('.current_identities').text(res[1]);

            }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ 
            alert("통신 실패.")
        }
    });

}



/////////////////////////////////////////////////////////////////////////////////////
// 프로필 상태 메시지 설정 버튼

$('.profile_introduction').click(function(){

    $('.profile_message_text').val("");
    layer_popup('.profile_message_layer');

})

$('.set_profile_message').click(function(){

    var profile_message = $('.profile_message_text').val();
    $('.profile_introduction').text(profile_message);
    console.log(profile_message);
    $('.profile_message_layer').fadeOut('fast');



    // 확인 버튼 활성화
    $('.apply_profile_change').css({display:'block',});
    Global_Var.userInfo.profile_check_introduction = true;

})



/////////////////////////////////////////////////////////////////////////////////////
// 프로필 닉네임 설정 버튼

$('.set_nickname').click(function(){

    $('.profile_nickname_text').val("");
    $('.check_nickname_message').css({display:'none',})

    $('.set_profile_nickname ').css({display:'none',});
    layer_popup('.profile_nickname_layer');

});


/////////////////////////////////////////////////////////////////////////////////////
// 닉네임 중복 확인 버튼

$('.check_nickname').click(function(){


    var nickname_text = $('.profile_nickname_text').val();
    console.log('닉네임 확인 '+nickname_text);

    if(nickname_text.length < 2){
        console.log("닉네임 최소 길이");
        
        $('.check_nickname_message').text('2글자 이상 입력해주세요.');
        $('.check_nickname_message').css({display:'block',})
    }

    else{
        
        // 유저 테이블 닉네임 값 중복 체크
        $.ajax({
                type : "POST",
                url : "/hoodify/src/user/check_nickname.php",
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

    }

});




$('.set_profile_nickname ').click(function(){

    // 프로필 변경 확인 버튼 활성화
    $('.apply_profile_change').css({display:'block',});

    Global_Var.userInfo.profile_check_nickname = true;

    var nickname_text = $('.profile_nickname_text').val();
    console.log(nickname_text);
    $('.profile_nickname').text(nickname_text);
    $('.profile_nickname_layer').fadeOut('fast');


});



/////////////////////////////////////////////////////////////////////////////////////
// 프로필 변경 내용 적용

$('.apply_profile_change').click(function(){


    // 닉네임 업데이트
    if(Global_Var.userInfo.profile_check_nickname){
        
        var nickname_text = $('.profile_nickname_text').val();

          $.ajax({
                type : "POST",
                url : "/hoodify/src/user/update_nickname.php",
                data : {
                        'nickname': nickname_text,
                    },
                success : function(res){

                    if(res=='success'){

                        $('.nickname').text(nickname_text);
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

        var profile_message = $('.profile_message_text').val();

            $.ajax({
                type : "POST",
                url : "/hoodify/src/user/modify_profile_message.php",
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
        console.log('프로필 이미지 업데이트');
        serverUpdateImage_profile();
    
    }

    $('.profile_layer').fadeOut('fast');


});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// 프로필 관련 ////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// 이미지 관련 ////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////
// 이미지 서버 업로드

function serverUploadImage(user_contents_code, category){

    console.log("");
    console.log("[serverUploadImage] : [start]");
    console.log("");

    // [전송시 필요한 url 및 데이터 정의 실시]
    var url = "/hoodify/src/record_CRUD/upload_file.php";
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
    var url = "/hoodify/src/record_CRUD/update_file.php";
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
    var url = "/hoodify/src/user/update_profile_img.php";
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

        get_profile_information()
        //$('.show_profile').attr("src",response);

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
// 이미지 클릭 시 이벤트

$('.find_img').on('click', function (){
			
    console.log('이미지 찾기');


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
            
            // $(this).val(''); //업로드한 파일 제거
            return; 
        }
/*
        if( $(":input[name='u_file']").val() == '' ) {
            console.log('없음');
            console.log($(":input[name='u_file']").val());

            $('.find_img_area').attr('src' , '');  
        }


        else{
            console.log('있긴 함');
            console.log($(":input[name='u_file']").val());
            $('.imgViewArea').css({ 'display' : 'flex' });
            readURL(this);
        }
*/

        console.log('있긴 함');
        console.log($(":input[name='u_file']").val());
        $('.imgViewArea').css({ 'display' : 'flex' });
        readURL(this);


    });


});
        

/////////////////////////////////////////////////////////////////////////////////////
// 프로필 이미지 클릭 시 이벤트
        
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
                // $(this).val(''); //업로드한 파일 제거
                return; 
            }

    
            
            Global_Var.userInfo.profile_check_img = true;
            $('.apply_profile_change').css({display:'block',});



        $('.imgViewArea_profile').css({ 'display' : 'flex' });
        readURL(this);
    });
    
});
                


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////// 이미지 관련 ////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////
// 친구 목록 버튼

$('.friends_btn').click(function(){

    get_friends_list();


    

    var urlParams = new URL(location.href).searchParams;
    var kakaoCode = urlParams.get('code');
    console.log(kakaoCode);

    $.ajax({
        type : "POST"
        , url : 'https://kauth.kakao.com/oauth/token'
        , data : {
            grant_type : 'authorization_code',
            client_id : '8444a64814544f881a494effad0d2c62',
            redirect_uri : address_type,
            code : kakaoCode
        }
        , contentType:'application/x-www-form-urlencoded;charset=utf-8'
        , dataType: null
        , success : function(response) {
            Kakao.Auth.setAccessToken(response.access_token);
            
            Kakao.API.request({
                url: '/v1/api/talk/friends',
              })
                .then(function(response) {
                  console.log(response);
                })
                .catch(function(error) {
                  console.log(error);
                  
                });

        }
        ,error : function(jqXHR, error) {
    
        }
    });
    Kakao.API.request({
        url: '/v1/api/talk/friends',
      })
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
          
        });


    
   






        
        

});


$('.to_friends_list').click(function(){


    $('.friend_from').text("");
    $('.to_friends_list').css({'display':'none'});
    $('.friends_list').css("display","flex").hide().fadeIn('slow');

});
/////////////////////////////////////////////////////////////////////////////////////
// 친구 리스트 불러오기

function get_friends_list(){

    $(".friends_list").empty();
    $('.friend_message').css({'display':'none'});

    $('.to_friends_list').css({'display':'none'});


    $('.friends_list').css({'display':'none'});
    $('.vote_friend').css("display","flex").hide().fadeIn('slow');
    
   //$('.friends_list').css("display","flex").hide().fadeIn('slow');
  
    
    
    $.ajax({
        type : "POST",
        url : "/hoodify/src/user/get_friends_data.php",
        dataType : 'json',
        success : function(res){

            console.log(res);
            if(res.length!=0){

                console.log('WIP');
                for (var i = 0; i < res.length; i++) {

                    var friend = res[i];

                    var list = document.createElement("div");
                    
                    $(list).css({

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
                            }).click(((friend) => function (e) {
                        
                                
                                console.log(friend.user_code);
                                
                                $('.to_friends_list').css({'display':'flex'});

                                $('.friend_from').text("from "+friend.nickname);
                                


                                $('.friends_list').css({'display':'none'});
                                $('.friend_message').css("display","flex").hide().fadeIn('slow');


                                // 여기서 해당 친구가 보낸 message 리스트를 보여줌
                                
                                
                        
                        })(friend)).appendTo(".friends_list");


                    var VerticalList = $("<div>", { }).css({   });


                    $('<img>', {

                            src: friend.profile_img,

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

                        text: friend.nickname,

                        }).css({
                        margin: "4.5px",
                        fontFamily:"TmoneyRoundWindExtraBold",


                    }).appendTo(VerticalList);


                    VerticalList.appendTo(list);
                        
                }

            }
            else{
                console.log('WIP2');
                $('.friends_list').css({'display':'none'});
                $('.vote_friend').css("display","flex").hide().fadeIn('slow');
            }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

    layer_popup($('.friends_layout'));

}



		

/////////////////////////////////////////////////////////////////////////////////////
// 정체성 창고 버튼

$('.identity_storage_btn').click(function(){
    storage_identities();
});


/////////////////////////////////////////////////////////////////////////////////////
// 창고 리스트 불러오기

function storage_identities(){

    $(".inactive_identity_list").empty();
    $(".btn_activate").css("display", "none");
    $('.btn_activate').attr('disabled', false);
    
    $(".btn_activate").css("background-color", "#495364");
    $(".btn_activate").css("border", "1px solid #495364");
    $(".btn_activate").hover(function() {
                            $(this).css({"border": "1px solid #091940",
                                        "background-color": "#313843",
                                        "color": "#fff",})
                        }, function(){
                            $(this).css("background-color", "#495364");
                        })


    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_deactivated_identities.php",
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
                       
                            if($('.main_list').children().length ==7 ){
                                
                                $('.btn_activate').attr('disabled', true);
                                $(".btn_activate").css("background-color", "gray");
                                $(".btn_activate").css("border", "1px solid gray");
                                
                                $(".btn_activate").css("display", "flex");
                                $(".btn_activate").hover(function() {
                                    $(this).css({
                                        "background-color": "gray",
                                        "border": "1px solid gray"
                                    })
                                }, function(){
                                    $(this).css({
                                    "background-color": "gray",
                                    "border": "1px solid gray"
                                    })
                                })


                            } 
                            
                            else {

                                $(".btn_activate").css("display", "flex");
                                Global_Var.userInfo.curr_identity_code = identity.identity_code;
                                console.log(Global_Var.userInfo.curr_identity_code);

                                $('.deactivated_identity_object').removeClass("itemActive").css("background-color", "white");
                                $(this).css("background-color", "#bad8f2");
                                $(this).addClass("itemActive");

                            }
                       
                        })(identity)).addClass('deactivated_identity_object').appendTo(".inactive_identity_list");


                var VerticalList = $("<div>", { }).css({   });


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
        url : "/hoodify/src/identity_info/deactivate_identity.php",
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

    $('.main_layer').fadeOut('fast');

})


/////////////////////////////////////////////////////////////////////////////////////
// 정체성 활성화 버튼
// 창고에서 선택된 정체성을 메인 리스트로 불러오기


$('.btn_activate').click(function(){

    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/activate_identity.php",
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


$('.main_list').empty();    
$('#others_record_container').css({'display':'none'});
$('#others_location_container').css({'display':'none'});


    $.ajax({
        type : "POST",
        url : "/hoodify/src/identity_info/get_user_identities.php",
        dataType : 'json',
        success : function(res){

            console.log(res);

            if(res==""){
                console.log('상태 바꾸기');
                $('#active_num').text("0/7").hide().fadeIn('slow');
                $('#current_identity').fadeOut('slow');
                $('#others_record').empty();
                $('.others_record_mark').fadeOut('slow');
                $('.main_background').css({'display':'none'});

                setTimeout(function(){

                    $('.no_identity').css("display","flex").hide().fadeIn('slow');
            
                }, 1500);

                // WIP
                // hook 팝업 띄우기


               


            }
            else{
                $('.main_background').css({'display':'flex'});
                $('.no_identity').css({'display':'none'});

                for (var i = 0; i < res.length; i++) {

                    var identity = res[i];
                    var identity_name = res[i].identity_name;
                    var identity_desc = res[i].identity_desc;
                    var identity_img = res[i].identity_img;


                    var list = document.createElement("div");
                    console.log(identity);

                    // 첫 키워드를 main 키워드로 설정
                    if(i==0){
                        $(list).addClass('mainIdentity');
                                        
                        $('#current_identity').text(identity_name);
                        $('.current_identity_name').css("display","flex").hide().fadeIn('slow');
                       

                        Global_Var.userInfo.curr_main_identity = res[i].identity_code;

                
                        console.log('main identity');
                        console.log(Global_Var.userInfo.curr_main_identity);
                
                    }
                

                    $(list).css({

                                height: "60px",
                                padding: "5px",
                                borderBottom: "1px solid #D8D8D8",
                                display: 'flex',
                                paddingBottom: '5px',
                                backgroundColor: '#bdc8ce52',
                                alignItems: 'center',
                                overflow:'hidden',
                                cursor:"pointer",
                                opacity: "0.8",
                                

                            }).addClass("main_identity_item").attr('id',identity.identity_code).hover(function() {
                                if($(this).hasClass("mainIdentity")){
                                    $(this).css({"background-color": "#bad8f2", 'color':'#475169'});
                                }else{
                                    $(this).css({"background-color": "#bad8f2", 'color':'black'});
                                }
                            }, function(){
                                if($(this).hasClass("mainIdentity")){
                                    $(this).css({"background-color": "#475169", 'color':'white'});
                                }else{
                                    $(this).css({"background-color": "#bdc8ce52",  'color':'black'});
                                }
                            }).click(((identity) => function (e) {

                                console.log('이 객체의 인덱스는 ' + $(this).index());

                                
                                $(".RCactivity").css({
                                    display: "none",
                                    });
                                $(".mli").removeClass("active");
                                $(".mli.activity").addClass("active");
                                $('.add_record_layer').removeClass("state_activity state_item state_skill state_defect").addClass("state_activity");

                                $(".Clist  ").css("display", "block");
                                $(".Ilist ").css("display", "none");
                                $(".Slist ").css("display", "none");
                                $(".Dlist ").css("display", "none");
                                $(".SPTlist ").css("display", "none");
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
                                $('.SPTlist').empty();
                                

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

                                    $('.modal_cont').text("\u00a0"+"\u00a0"+identity.identity_desc);
                                    $('#desc_modal').attr("title", identity.identity_name);
                                    $('.ui-dialog-title').text(identity.identity_name);

                                    $('#desc_modal').dialog({
                                        modal: true, 
                                        
                                    }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white', 'z-index': '2000',});

                                    $('.ui-dialog').css({'z-index':'2000',});

                                })

                                
                                Global_Var.userInfo.curr_identity_code = identity.identity_code;


                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/src/identity_info/get_identity_info.php",
                                    data : {
                                            'identity_code': Global_Var.userInfo.curr_identity_code,
                                        },
                                    dataType :'json',
                                    success : function(res){

                                        console.log('테스트 테스트');
                                        console.log(res);

                                        var keyword_array = res[0];

                                        $('.keyword_container').empty();
                                            
                                            for (var i = 0; i < keyword_array.length; i++) {

                                                
                                                $('<p>',{
                                                        text: "#"+keyword_array[i].keyword_name + " ",

                                                }).css({


                                                }).appendTo($('.keyword_container'));

                                            }


                                        var activity_array = res[1];

                                        for (var i = 0; i < activity_array.length; i++) {
                                                
                                                var activity = activity_array[i];
                                                var list_container = $("<div>", {
                                                    }).attr('id', activity.activity_code
                                                    ).css({

                                                        width: "360px",
                                                        display: "inline-flex",
                                                        alignItems: "center",
                                                        borderBottom: "1px solid #D8D8D8",
                                                        cursor: 'pointer',
                                                        'padding':'10px',
                                                        'background-color': 'white',
                                                        
                                                    }).click(((activity) => function (e) {

                                                            $('.popup_activity_identity').text(activity.identity_name);
                                                            
                                                            $('#addbtn_container').empty();
                                                            
                                                            $('.mylistIMG').css("display", "flex").attr("src",activity.activity_img);
                                                            $('.mylistT').text(activity.activity_name);


                                                            $('.mylistC').text("\u00a0"+"\u00a0"+activity.activity_desc);

                                                                $('.mylistC').click(function(){

                                                                    $('.modal_cont').text("\u00a0"+"\u00a0"+activity.activity_desc);
                                                                    $('#desc_modal').attr("title", activity.activity_name);
                                                                    $('.ui-dialog-title').text(activity.activity_name);

                                                                    $('#desc_modal').dialog({
                                                                        modal: true, 
                                                                        
                                                                    }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});
                                                                
                                                                    $('.ui-dialog').css({'z-index':'2000',});
                                                                    
                                                                });


                                                            $('.add_record_layer').fadeOut('fast');                                                            
                                                            $('.RCactivity').hide().fadeIn('fast');

                                                            $('.RCplain').hide();
                                                            $('.RCitem').hide();
                                                            $('.RCskill').hide();
                                                            $('.RCdefect').hide();
                                                            $('.RCsupport').hide();
                                                    

                                                            // 해당 activity 전역 변수 설정
                                                            Global_Var.userInfo.curr_activity_code = activity.activity_code;

                                                            $('.contents_item.activity').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");

                                                            $('.popup_activity_img').attr("src",activity.activity_img);
                                                            $('.popup_activity_title').text(activity.activity_name);
                                                            $('.popup_activity_desc').text("　▶　"+activity.activity_desc);
                                                            $('.popup_activity_desc_container').click(function(){
                                                                

                                                                $('.modal_cont').text("\u00a0"+"\u00a0"+activity.activity_desc);
                                                                $('#desc_modal').attr("title", activity.activity_name);
                                                                $('.ui-dialog-title').text(activity.activity_name);

                                                                $('#desc_modal').dialog({
                                                                    modal: true, 
                                                                }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});
                                                                $('.ui-dialog').css({'z-index':'2000',});

                                                            });

                                                            
                                                            refresh_activity_record_list();

                                                                
                                                                $('<p>',{
                                                                    text: "기록 추가",

                                                                }).attr('id', 'add_record'
                                                                ).css({
                                                                    width: "140px",
                                                                    color: "#313843",
                                                                    fontWeight: "bold",
                                                                    cursor:"pointer",
                                                                    'font-size': '30px',
                                                                    'margin-left': '10px',
                                                                    'font-family':'SDMiSaeng',
                                                                   


                                                                }).hover(function() {
                                                                    $(this).css("color", "#4674e7");
                                                                    }, function(){
                                                                    $(this).css("color", "#313843");
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



                                                
                                                var contents_container = $("<div>",{

                                                }).css({

                                                    'display':'flex',
                                                    'flex-direction':'row',
                                                    'align-items': 'center',
                                                   // 'background-color': '#525861',
                                                    // 58709e // 7abaac // d64e5c // #c98990 // cd757e //#cd7575 / 9eb5d7 //d79e9e
                                                    borderRadius: '10px',  
                                                    'padding-right':'15px',
                                                  //  'border': '2px solid white',
                                                  //  'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);


                                                var activity_img_container = $('<img>',{
                                                    src: activity.activity_img,
                                                    }).css({
                                                    width: "40px",
                                                    height: "40px",
                                                    marginLeft: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",                                                            
                                                    

                                                }).appendTo(contents_container);   


                                                var content_name = $('<p>', {
                                                    text: activity.activity_name,

                                                    }).css({
                                                    "margin-left": "5px",
                                                    'font-size': '15px',
                                                    'font-family': 'TmoneyRoundWindExtraBold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                   // 'color':'white',
                                                    
                                                
                                                }).appendTo(contents_container);

                                            }


                                        var item_array = res[2];

                                        for (var i = 0; i < item_array.length; i++) {
                                                
                                                var item = item_array[i];
                                                var list_container = $("<div>", {
                                                        }).css({

                                                            width: "100%",
                                                            display: "inline-flex",
                                                            alignItems: "center",
                                                            borderBottom: "1px solid #D8D8D8",
                                                            cursor: 'pointer',
                                                            'padding':'10px',
                                                            'background-color': 'white',

                                                        }).click(((item) => function (e) {

                                                            $('.popup_activity_identity').text(item.identity_name);

                                                            $('#addbtn_container_item').empty();

                                                            $('.mylistIMG_item').css("display", "flex").attr("src",item.item_img);
                                                            $('.mylistT_item').text(item.item_name);
                                                            $('.mylistC_item').text("\u00a0"+"\u00a0"+item.item_desc);


                                                            $('.mylistC_item').click(function(){

                                                                $('.modal_cont').text("\u00a0"+"\u00a0"+item.item_desc);
                                                                $('#desc_modal').attr("title", item.item_name);
                                                                $('.ui-dialog-title').text(item.item_name);

                                                                $('#desc_modal').dialog({
                                                                    modal: true, 
                                                                    
                                                                }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});

                                                                $('.ui-dialog').css({'z-index':'2000',});

                                                            });


                                                            $('.add_record_layer').fadeOut('fast');

                                                            $('.RCitem').hide().fadeIn('fast');

                                                            $('.RCplain').hide();
                                                            $('.RCactivity').hide();
                                                            $('.RCskill').hide();
                                                            $('.RCdefect').hide();
                                                            $('.RCsupport').hide();
                                                            
                                                            Global_Var.userInfo.curr_item_code = item.item_code;

                                                            $('.contents_item.item').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");


                                                            $('.popup_activity_img').attr("src",item.item_img);
                                                            $('.popup_activity_title').text(item.item_name);
                                                            $('.popup_activity_desc').text("　▶　"+item.item_desc);


                                                            refresh_item_record_list();

                                                                    
                                                                $('<p>',{
                                                                    text: "+",

                                                                }).attr('id', 'add_record_item'
                                                                ).css({
                                                                    width: "120px",
                                                                    color: "#313843",
                                                                    fontWeight: "bold",
                                                                    cursor:"pointer",
                                                                    'font-size': '45px',
                                                                    'margin-left': '10px',


                                                                }).hover(function() {
                                                                    $(this).css("color", "#4674e7");
                                                                    }, function(){
                                                                    $(this).css("color", "#313843");
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


                                                var contents_container = $("<div>",{

                                                }).css({

                                                    'display':'flex',
                                                    'flex-direction':'row',
                                                    'align-items': 'center',
                                                   // 'background-color': '#313843d6',
                                                    borderRadius: '10px',  
                                                    'padding-right':'15px',
                                                   // 'border': '2px solid white',
                                                   // 'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);

                                                $('<img>',{
                                                    src: item.item_img,
                                                    }).css({
                                                    width: "40px",
                                                    height: "40px",
                                                    marginLeft: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",    
                                                    

                                                }).appendTo(contents_container);        

                                            
                                                $('<p>', {
                                                    text: item.item_name,

                                                    }).css({
                                                        "margin-left": "5px",
                                                    'font-size': '15px',
                                                    'font-family': 'TmoneyRoundWindExtraBold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                   // 'color':'white',
                                                
                                                }).appendTo(contents_container);


                                            }
                            

                                        var skill_array = res[3];
                                        
                                        for (var i = 0; i < skill_array.length; i++) {

                                            var skill = skill_array[i];
                                            
                                            var list_container = $("<div>", {

                                                }).css({
                                                    width: "100%",
                                                    display: "inline-flex",
                                                    alignItems: "center",
                                                    borderBottom: "1px solid #D8D8D8",
                                                    cursor: 'pointer',
                                                    'padding':'10px',
                                                    'background-color': 'white',

                                                    }).click(((skill) => function (e) {

                                                        $('#addbtn_container_skill').empty();

                                                        $('.mylistIMG_skill').css("display", "flex").attr("src",skill.skill_img);

                                                        $('.mylistT_skill').text(skill.skill_name);
                                                        $('.mylistC_skill').text("\u00a0"+"\u00a0"+skill.skill_desc);

                                                            $('.mylistC_skill').click(function(){

                                                            $('.modal_cont').text("\u00a0"+"\u00a0"+skill.skill_desc);
                                                            $('#desc_modal').attr("title", skill.skill_name);
                                                            $('.ui-dialog-title').text(skill.skill_name);

                                                            $('#desc_modal').dialog({
                                                                    modal: true, 
                                                                    
                                                                }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});


                                                            $('.ui-dialog').css({'z-index':'2000',});

                                                        });


                                                        $('.add_record_layer').fadeOut('fast');

                                                        $('.RCskill').hide().fadeIn('fast');

                                                        $('.RCplain').hide();
                                                        $('.RCactivity').hide();
                                                        $('.RCitem').hide();
                                                        $('.RCdefect').hide();
                                                        $('.RCsupport').hide();
                                                        
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


                                            var contents_container = $("<div>",{

                                                    }).css({

                                                        'display':'flex',
                                                        'flex-direction':'row',
                                                        'align-items': 'center',
                                                      //  'background-color': '#313843d6',
                                                        borderRadius: '10px',  
                                                        'padding-right':'15px',
                                                      //  'border': '2px solid white',
                                                      //  'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                    }).appendTo(list_container);


                                            $('<img>',{
                                                    src: skill.skill_img,
                                                }).css({
                                                    width: "40px",
                                                    height: "40px",
                                                    marginLeft: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",     

                                                }).appendTo(contents_container);        

                                            
                                            $('<p>', {
                                                text: skill.skill_name,

                                            }).css({
                                                "margin-left": "5px",
                                                    'font-size': '15px',
                                                    'font-family': 'TmoneyRoundWindExtraBold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                 //   color:'white',
                                            
                                            }).appendTo(contents_container);

                                        }
                                  
                                        var defect_array = res[4];

                                        for (var i = 0; i < defect_array.length; i++) {

                                            var defect = defect_array[i];
                                        
                                            var list_container = $("<div>", {

                                                }).css({
                                                    width: "100%",
                                                    display: "inline-flex",
                                                    alignItems: "center",
                                                    borderBottom: "1px solid #D8D8D8",
                                                    cursor: 'pointer',
                                                    'padding':'10px',
                                                    'background-color': 'white',

                                                    }).click(((defect) => function (e) {

                                                        $('.mylistIMG_defect').css("display", "flex").attr("src",defect.caution_img);

                                                        $('.mylistT_defect').text(defect.caution_name);
                                                        $('.mylistC_defect').text("\u00a0"+"\u00a0"+defect.caution_desc);

                                                        $('.mylistC_defect').click(function(){

                                                            $('.modal_cont').text("\u00a0"+"\u00a0"+defect.caution_desc);
                                                            $('#desc_modal').attr("title", defect.caution_name);
                                                            $('.ui-dialog-title').text(defect.caution_name);

                                                            $('#desc_modal').dialog({
                                                                modal: true, 
                                                                
                                                            }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});

                                                            $('.ui-dialog').css({'z-index':'2000',});

                                                        });

                                                        $('.add_record_layer').fadeOut('fast');
                                                        
                                                        $('.RCdefect').hide().fadeIn('fast');

                                                        $('.RCplain').hide();
                                                        $('.RCitem').hide();
                                                        $('.RCskill').hide();
                                                        $('.RCactivity').hide();
                                                        $('.RCsupport').hide();


                                                        // 해당 defect 전역 변수 설정
                                                        Global_Var.userInfo.curr_defect_code = defect.caution_code;

                                                        $('.contents_item.defect').removeClass("itemActive").css("background-color", "white");
                                                        $(this).css("background-color", "#bad8f2");
                                                        $(this).addClass("itemActive");


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


                                            var contents_container = $("<div>",{

                                                }).css({

                                                    'display':'flex',
                                                    'flex-direction':'row',
                                                    'align-items': 'center',
                                                 //   'background-color': '#313843d6',
                                                    borderRadius: '10px',  
                                                    'padding-right':'15px',
                                                 //   'border': '2px solid white',
                                                  //  'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);


                                            $('<img>',{
                                                    src: defect.caution_img,
                                                }).css({
                                                    width: "40px",
                                                    height: "40px",
                                                    marginLeft: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",       

                                                }).appendTo(contents_container);        

                                            
                                            $('<p>', {
                                                text: defect.caution_name,

                                            }).css({
                                                "margin-left": "5px",
                                                    'font-size': '15px',
                                                    'font-family': 'TmoneyRoundWindExtraBold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                               //     color:'white', 
                                            
                                            }).appendTo(contents_container);

                                        }
                                   




                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                        alert("통신 실패.")
                                    }
                                });







                                // 여기에서 support 정보 불러오기  

                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/src/identity_info/get_identity_support.php",
                                    data: {
                                            'identity_code': Global_Var.userInfo.curr_identity_code,
                                            },
                                    dataType: 'json',
                                    success : function(res){
                        
                                        console.log("support 데이터 테스트");
                                        console.log(res);


                                        for (var i = 0; i < res.length; i++) {
                                                
                                                var support = res[i];
                                                var list_container = $("<div>", {
                                                    }).css({

                                                        width: "100%",
                                                        display: "inline-flex",
                                                        alignItems: "center",
                                                        borderBottom: "1px solid #D8D8D8",
                                                        cursor: 'pointer',
                                                        'padding':'10px',
                                                        'background-color': 'white',
                                                        
                                                    }).click(((support) => function (e) {

                                                        $('.mylistIMG_support').css("display", "flex").attr("src",support.support_img);

                                                        $('.mylistT_support').text(support.support_name);
                                                        $('.mylistC_support').text("\u00a0"+"\u00a0"+support.support_name);

                                                        $('.mylistC_support').click(function(){

                                                            $('.modal_cont').text("\u00a0"+"\u00a0"+support.support_name);
                                                            $('#desc_modal').attr("title", support.support_name);
                                                            $('.ui-dialog-title').text(support.support_name);

                                                            $('#desc_modal').dialog({
                                                                modal: true, 
                                                                
                                                            }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white'});

                                                            $('.ui-dialog').css({'z-index':'2000',});

                                                        });

                                                        $('.add_record_layer').fadeOut('fast');
                                                        
                                                        $('.RCsupport').hide().fadeIn('fast');

                                                        $('.RCplain').hide();
                                                        $('.RCitem').hide();
                                                        $('.RCskill').hide();
                                                        $('.RCactivity').hide();
                                                        $('.RCdefect').hide();


                                                        // 해당 defect 전역 변수 설정
                                                        Global_Var.userInfo.curr_support_code = support.support_code;

                                                        $('.contents_item.support').removeClass("itemActive").css("background-color", "white");
                                                        $(this).css("background-color", "#bad8f2");
                                                        $(this).addClass("itemActive");





                                                    })(support)).hover(function() {
                                                                    $(this).css("background-color", "#bad8f2");
                                                                }, function(){
                                                                if($(this).hasClass("itemActive")){
                                                                    $(this).css("background-color", "#bad8f2");
                                                                }
                                                                else{
                                                                    $(this).css("background-color", "white");
                                                                }
                                                            }).addClass("contents_item support").appendTo($('.SPTlist'));



                                                
                                                var contents_container = $("<div>",{

                                                }).css({

                                                    'display':'flex',
                                                    'flex-direction':'row',
                                                    'align-items': 'center',
                                                    // 58709e // 7abaac // d64e5c // #c98990 // cd757e //#cd7575 / 9eb5d7 //d79e9e
                                                    borderRadius: '10px',  
                                                    'padding-right':'15px',

                                                }).appendTo(list_container);


                                                var support_img_container = $('<img>',{
                                                    src: support.support_img,
                                                    }).css({
                                                    width: "40px",
                                                    height: "40px",
                                                    marginLeft: "5px",
                                                    float: "left",
                                                    borderRadius: '10px',   
                                                    border: "2px solid #10141c",                                                            
                                                    

                                                }).appendTo(contents_container);   


                                                var content_name = $('<p>', {
                                                    text: support.support_name,

                                                    }).css({
                                                    'font-size': '15px',
                                                    'font-family': 'TmoneyRoundWindExtraBold',
                                                    'padding-right': '8px',
                                                    'padding-left': '8px',
                                                    'margin-left': '5px',
                                                    
                                                
                                                }).appendTo(contents_container);

                                            }




                        
                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                        alert("통신 실패.")
                                    }
                                });









                                layer_popup($('.main_layer'));



                            })(identity)).appendTo('.main_list').hide().fadeIn('slow');


                    var VerticalList = $("<div>", {    }).css({  });

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


                $('#active_num').text($('.main_list').children().length + " / " + 7).hide().fadeIn('slow');
                $('.mainIdentity').css({
                    backgroundColor : '#475169',
                    opacity: "1.0",
                    color: 'white',

                });


                //get_daily_list();
                $('#current_identity').fadeIn('slow');
            }

        },
        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
            alert("통신 실패.")
        }
    });

}





$('.forward_btn').click(function(){

    get_public_record('forward');

});


$('.backward_btn').click(function(){

    get_public_record('backward');

});


/////////////////////////////////////////////////////////////////////////////////////
//////////// 메인 리스트 순서 드래그 앤 드롭 이벤트

$('.main_list').sortable({

    item: $('.main_identity_item'),
    update: function(event, ui){

    $('#others_record').empty();

    $('#todays_activities_container').css({'display':'none'});
    
    $('#daily_log_container').css({'display':'none'});
    $('#others_record_container').css({'display':'none'});
    $('#others_location_container').css({'display':'none'});

    var seq_array = [];

    var first_identity = $('.main_list').children().eq(0).attr('id');
    seq_array.push(first_identity);
    var second_identity = $('.main_list').children().eq(1).attr('id');
    seq_array.push(second_identity);
    var third_identity = $('.main_list').children().eq(2).attr('id');
    seq_array.push(third_identity);
    var fourth_identity = $('.main_list').children().eq(3).attr('id');
    seq_array.push(fourth_identity);
    var fifth_identity = $('.main_list').children().eq(4).attr('id');
    seq_array.push(fifth_identity);
    var sixth_identity = $('.main_list').children().eq(5).attr('id');
    seq_array.push(sixth_identity);
    var seventh_identity = $('.main_list').children().eq(6).attr('id');
    seq_array.push(seventh_identity);


    $('.main_list').children().css("color", "black");
    $('.main_list').children().removeClass('mainIdentity').css("background-color", "#bdc8ce52");
    $('.main_list').children().eq(0).addClass('mainIdentity').css({"background-color": "#475169", "color":'white'});

    var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
    $('#current_identity').text(extracted_text).hide().fadeIn("slow");

        $.ajax({
            type : "POST",
            url : "/hoodify/src/identity_info/update_identity_seq.php",
            data: {
                    'identity_code_array': seq_array,
                    },
            success : function(res){

                //get_daily_list();
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


/////////////////////////////////////////////////////////////////////////////////////
//////////// activity 리스트 순서 드래그 앤 드롭 이벤트

$('.Clist').sortable({

    item: $('.contents_item'),
    update: function(event, ui){

/////
    var seq_array = [];

    var first_identity = $('.Clist').children().eq(0).attr('id');
    seq_array.push(first_identity);
    var second_identity = $('.Clist').children().eq(1).attr('id');
    seq_array.push(second_identity);
    var third_identity = $('.Clist').children().eq(2).attr('id');
    seq_array.push(third_identity);
    var fourth_identity = $('.Clist').children().eq(3).attr('id');
    seq_array.push(fourth_identity);
    var fifth_identity = $('.Clist').children().eq(4).attr('id');
    seq_array.push(fifth_identity);
    var sixth_identity = $('.Clist').children().eq(5).attr('id');
    seq_array.push(sixth_identity);
    var seventh_identity = $('.Clist').children().eq(6).attr('id');
    seq_array.push(seventh_identity);


//    $('.main_list').children().css("color", "black");
  //  $('.main_list').children().removeClass('mainIdentity').css("background-color", "#bdc8ce52");
    //$('.main_list').children().eq(0).addClass('mainIdentity').css({"background-color": "#475169", "color":'white'});

    var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
    $('#current_identity').text(extracted_text).hide().fadeIn("slow");

        $.ajax({
            type : "POST",
            url : "/hoodify/src/identity_info/update_activity_seq.php",
            data: {
                    'activity_code_array': seq_array,
                    },
            success : function(res){

                console.log(res);

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                alert("통신 실패.")
            }
        });

    }


}).disableSelection();



//////////////////////////////////////////////////////////////////////////////
// 레코드 추가. 다음 입력 공간 나타내기

$('.btn_add_title').click(function(){

    setTimeout(
        function() {
            $('.record_title').css({display: 'flex'}).hide().fadeIn('fast');
        },
    500);

    $('.add_record_layer').css({height: '260px',});
    $('.add_record_layer').css({top: '48%'});
    $('.btn_add_title').css({display:'none'});
    $('.btn_add_content').css({display:'flex'});


    $('.btn_add_content').click(function(){

        if($('.record_title').val().length<2){

            alert("제목을 입력하세요 (2자 이상)");
          //  console.log('count');

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

            setTimeout(
                function() {
                    $('.find_img_container').css({display: 'flex'}).hide().fadeIn('fast');
                },
            500);

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


//////////////////////////////////////////////////////////////////////////////
// 레코드 추가 확인. 서버에 업로드


$('#btn_addCom').click(function(){

    var record_title = $('.record_title').val();
    var record_cont = $('.record_cont').val();
    var curr_identity_code = Global_Var.userInfo.curr_identity_code;
    var curr_activity_code = Global_Var.userInfo.curr_activity_code;
    var curr_item_code = Global_Var.userInfo.curr_item_code;
    var curr_skill_code = Global_Var.userInfo.curr_skill_code;

    console.log("레코드 확인");
    console.log(record_cont);


    var public_state;
    if($('.public_check').is(':checked')){
        public_state = 1;

    }else{
        public_state = 0;
    };



    // 해당 레코드 db에 넣기 activity
    if($('.add_record_layer').hasClass("state_activity")){

        $.ajax({
            type : "POST",
            url : "/hoodify/src/record_CRUD/add_activity_record.php",
            data : {
                    'record_title': record_title,
                    'record_cont' : record_cont,
                    'curr_identity_code' : curr_identity_code,
                    'curr_activity_code' : curr_activity_code,
                    'public_state' : public_state,

                },
            success : function(res){

                //서버에 이미지 보내기
                var file = document.getElementById("u_file");
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
            url : "/hoodify/src/record_CRUD/add_item_record.php",
            data : {
                    'record_title': record_title,
                    'record_cont' : record_cont,
                    'curr_identity_code' : curr_identity_code,
                    'curr_item_code' : curr_item_code,
                    'public_state' : public_state,

                },
            success : function(res){

                //서버에 이미지 보내기
                var file = document.getElementById("u_file");
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
            url : "/hoodify/src/record_CRUD/add_skill_record.php",
            data : {
                    'record_title': record_title,
                    'record_cont' : record_cont,
                    'curr_identity_code' : curr_identity_code,
                    'curr_skill_code' : curr_skill_code,
                    'public_state' : public_state,

                },
            success : function(res){

                console.log(res);

                //서버에 이미지 보내기
                var file = document.getElementById("u_file");
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


})


      


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
            url : "/hoodify/src/record_CRUD/delete_activity_record.php",
            data : {
                    'record_code': record_code,
                },
            success : function(res){
            
                console.log(res);
                refresh_activity_record_list();

                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                alert("통신 실패.")
            }
        });

    }

    else if($('.activity_post').hasClass('state_item')){

        $.ajax({
            type : "POST",
            url : "/hoodify/src/record_CRUD/delete_item_record.php",
            data : {
                    'record_code': record_code,
                },
            success : function(res){
            
                refresh_item_record_list();

                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');
                

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ 
                alert("통신 실패.")
            }
        });
    }

    else if($('.activity_post').hasClass('state_skill')){

        $.ajax({
            type : "POST",
            url : "/hoodify/src/record_CRUD/delete_skill_record.php",
            data : {
                    'record_code': record_code,
                },
            success : function(res){
            
                refresh_skill_record_list();

                $('.activity_post').fadeOut('fast');
                $('.delete_check').fadeOut('fast');

            },
            error : function(XMLHttpRequest, textStatus, errorThrown){ 
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
                    url : "/hoodify/src/record_CRUD/get_user_activity_record.php",
                    data : {
                            'activity_code': Global_Var.userInfo.curr_activity_code,
                        },
                    dataType : 'json',
                    success : function(res){
                        

                       

                        for (var i = 0; i < res.length; i++) {

                            
                            var record = res[i]; 
                            // #a7afc2

                            var record_list = $("<div>", {
                            }).addClass('each_record').css({

                                display: "flex",
                                alignItems: "center",
                               // borderRight: "1px solid #D8D8D8",
                               // borderBottom: "1px solid #D8D8D8",
                                cursor:'pointer',
                                width:'95px',
                                height:'105px',
                                flexDirection:'column',
                                'padding-top':'5px',
                                'border-radius' : '8px',
                                'border': '2px solid black',
                                'margin':'15px',
                                'background-color':'#637193',
                                'box-shadow': '#9b9b9b 2px 2px 2px 1px',
                                
                                

                            }).hover(function() {
                            $(this).css("background-color", "#bad8f2");
                            }, function(){
                            $(this).css("background-color", "#637193");
                            }).click(((record) => function (e){

                                $('.popup_activity_record_title').text(record.title);
                                $('.record_date').text(record.date);
                                
                                var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                                console.log('이게 실행되면');
                                applyBr.replaceAll("(?i)<script", "&lt;script");
                                
                                $('.popup_activity_record_cont').html(applyBr);

                                
                                console.log(record);
                                Global_Var.userInfo.curr_record_code = record.user_activity_code;


                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/src/record_CRUD/get_record_img.php",
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
                                    width: "50px",
                                    height: "50px",
                                    margin: "4.5px",
                                    'margin-bottom':'0px',
                                    float: "left",
                                    "border-radius": "10px",
                                    "border": "2px solid #3b3b3b"
                                }).appendTo(record_list);

                                $('<p>', {
                                    text: record.title,

                                    }).css({
                                    'width':'65px',
                                    "font-family": "TmoneyRoundWindExtraBold",
                                    'font-size':'12px',
                                    "color" : 'black',
                                    "overflow": "hidden",
                                    "text-overflow": "ellipsis",
                                    "white-space": "nowrap",
                                    'border-radius': '6px',
                                    'background-color': 'white',
                                    'padding-left': '7px',
                                    'padding-right': '7px',
                                    'margin-top': '8px',
                                    'border': '1px solid black',
                                    'line-height': '200%',

                                
                                }).appendTo(record_list);
                       
/*
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
                       */




                                
                              
                       
                       
                            };
                            $(".each_record:even").css("background-color", "#a7afc2").hover(function() {
                                $(this).css("background-color", "#bad8f2");
                                }, function(){
                                $(this).css("background-color", "#a7afc2");
                                });


                            // 해당 activity의 count 표시하기
                            var total_count = $('.mylist').children('div').length;
                            $('.count_activity').text("소장 기록: " + total_count);




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
        url : "/hoodify/src/record_CRUD/get_user_item_record.php",
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
                   // borderRight: "1px solid #D8D8D8",
                   // borderBottom: "1px solid #D8D8D8",
                    cursor:'pointer',
                    width:'95px',
                    height:'105px',
                    flexDirection:'column',
                    'padding-top':'5px',
                    'border-radius':'11px',
                    'border': '2px solid black',
                    'margin':'15px',
                    'background-color':'#637193',
                    
                    'box-shadow': '#9b9b9b 2px 2px 2px 1px',

                }).addClass('each_record').hover(function() {
                $(this).css("background-color", "#bad8f2");
                }, function(){
                $(this).css("background-color", "#637193");
                }).click(((record) => function (e){

                    $('.popup_activity_record_title').text(record.title);
                    var applyBr = record.record.replace(/(?:\r\n|\r|\n)/g, '<br />');
                    $('.popup_activity_record_cont').html(applyBr);


                    

                    Global_Var.userInfo.curr_record_code = record.user_item_code;

                     $.ajax({
                                    type : "POST",
                                    url : "/hoodify/src/record_CRUD/get_record_img.php",
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
                        width: "50px",
                        height: "50px",
                        margin: "4.5px",
                        float: "left",
                        "border-radius": "10px",
                        "border": "2px solid #3b3b3b",
                    }).appendTo(record_list);

                    $('<p>', {
                        text: record.title,

                        }).css({
                            'width':'65px',
                            "font-family": "TmoneyRoundWindExtraBold",
                            'font-size':'12px',
                            "color" : '#313843',
                            "overflow": "hidden",
                            "text-overflow": "ellipsis",
                            "white-space": "nowrap",
                            'border-radius': '6px',
                            'background-color': 'white',
                            'padding-left': '7px',
                            'padding-right': '7px',
                            'margin-top': '8px',
                            'border': '1px solid black',
                            'line-height': '200%',
                    
                    }).appendTo(record_list);
            }

            $(".each_record:even").css("background-color", "#a7afc2").hover(function() {
                $(this).css("background-color", "#bad8f2");
                }, function(){
                $(this).css("background-color", "#a7afc2");
                });

            // 해당 item의 count 표시하기
            var total_count = $('.mylist_item').children('div').length;
            $('.count_item').text("소장 기록: " + total_count);

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
        url : "/hoodify/src/record_CRUD/get_user_skill_record.php",
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
                                    url : "/hoodify/src/record_CRUD/get_record_img.php",
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
                        width: "45px",
                        height: "45px",
                        margin: "4.5px",
                        float: "left",
                        margin: "7px",
                    }).appendTo(record_list);

                    $('<p>', {
                        text: record.title,

                        }).css({
                            'max-width':'70px',
                                    "fontWeight": "bold",
                                    'font-size':'11px',
                                    "color" : '#47525f',
                                    "overflow": "hidden",
                                    "text-overflow": "ellipsis",
                                    "white-space": "nowrap",
                    
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

    else if($('.record_cont_modify').val().length<10){

        alert("내용을 입력하세요(10자 이상)");

    }

    else{

        if($('.modify_record_layer').hasClass('state_activity')){

            $.ajax({
                type : "POST",
                url : "/hoodify/src/record_CRUD/modify_record_activity.php",
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
            url : "/hoodify/src/record_CRUD/modify_record_item.php",
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
                    $('.popup_activity_record_cont').html(record_cont_line);

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
                url : "/hoodify/src/record_CRUD/modify_record_skill.php",
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



////////////////////////////////////////////////////////////////////////////////////
/// 모바일 vs 웹 환경 확인

function Mobile(){
	return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
	
    // 모바일일 경우
    if (Mobile()){
     
        console.log("모바일 테스트");
        console.log(Mobile());
        $('.main_background_container0').css({'display':'none',});
        layer_popup('.mobile_notice');

    } 
    // 모바일 외
    else 
    {
        $(document).ready(function(){

            
            $.ajax({
                type : "POST",
                url : "/hoodify/src/user/check_main_user.php",

                success : function(res){

                    // 로그인된 유저가 없음
                    if(res == "no user"){

                        $('.top_menu_container').css({display: 'none',});
                        $('.main_list').css({display: 'none',});
                        $('.user_btn_space').css({display: 'none',});
                        $('.public_main').css({display: 'flex',});
                        $('.main_background').css({display: 'none',});
                        $('.main_background_container0').css({'display':'block',});
                    
                    }

                    // 유저 있음
                    else if(res == "user on"){

                        var curr_identity_code;

                        $('.top_menu_container').css({display: 'flex',});
                        $('.main_list').css({display: 'flex',});
                        $('.public_main').css({display: 'none',});

                        // 유저 정체성 리스트 불러오기
                        get_main_list();

                        // 프로필 정보 불러오기
                        get_profile_information();


                        $('.main_background_container0').css({'display':'block',});
                        // 일일 체크 창 띄우기
                        // get_daily_check();

                        // 공지 띄우기
                        setTimeout(
                            function() {
                                layer_popup('.notice');
                            },
                        800);
                        

                    }

                },
                error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                    alert("통신 실패.")
                }
            });

        })

    }








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

}

