
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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

    <link rel="stylesheet" href="/hoodify/css/style.css" type="text/css">


    
</head>


<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style></style>


<body>
    <header>
      <div>
          <p> H O O D I F Y </p>
      </div>
    </header>
        


    <div class = 'top_menu_container'>
        <div>
            <div class='profile'>
                <img class = 'show_profile' src="/hoodify/img/identity/hooodify_mini.png"> 
                <p class = 'nickname'> 프로필 </p> 
            </div>   

            <div class = "record_analysis">
                <p > 개인 기록 </p>
            </div>
        </div>

        <div id='top_menu' style='display:flex;'>
            <p class = 'identity_storage_btn top_menu_btn'>창고 </p>
            <p class = 'open_search_layer top_menu_btn'>검색 </p>
            <p class = 'logout_btn top_menu_btn'> 로그아웃 </p>
        </div>

    </div>



    <div class = 'public_main'>
        
        <div class = 'login_account' >
           
            <div class='top_bar' style="position: relative;"> 
                <p class = 'top_word'> Login </p>
            </div>

            <div class="login_container">
                <img src ="/hoodify/img/identity/hooodify_mini.png">
                <h3 style="margin-top:15px; color:rgba( 0, 0, 0, 0.85 );"> 세상의 모든 정체성.  </h3>
                <h3 style="margin-top:5px; color:rgba( 0, 0, 0, 0.85 );">  후디파이 </h3>
            </div>

            <div>
                <img class = "login_with_kakao" src="/hoodify/img/login/kakao_login_medium_wide.png">
            </div>

        </div>

    </div>



    <div style="height: 75%;"> 
        <div class = "no_identity"> 
            <p> <span class = 'open_search_layer'>검색</span>을 통해 자신의 키워드를 찾아보세요 </p>
        </div>
        
        <div class='main_background'>
            
            <div class ='main_background_container1'>
                <div class = "current_identity_name">
                    <h4 id ="active_num">   </h4>
                </div>
        
                <div class="main_list_container">
                    <div class='main_list'>
                    </div>
                </div>
            </div>

            <div class = "user_btn_space">
                
                <div class = 'button_container'>
                    <img id = "daily_check_btn" class ="menu_button2" title="오늘 체크 리스트" src="/hoodify/img/daily_check_icon.png">
                    <img id = "others_record_btn" class ="menu_button2" title="다른 사람들의 기록" src="/hoodify/img/others_record_icon.png">
                    <img id = "others_location_btn"class ="menu_button2" title="내 주위의 사람들" src="/hoodify/img/same_people_icon.png">
                    <img class = "on_construction menu_button2" src="/hoodify/img/all_list_icon.png">
                </div>

                <div id = 'todays_activities_container'> 
                        
                    <div class='todays_cont_info'>
                        <p class="show_identity_name"></p>
                        <p class = "show_date"></p> 
                    </div>

                    <div class = 'todays_activities_list'>
                    </div>

                </div>

                <div id = 'others_record_container'> 
                    <div class = 'others_record_container2'>
                        <h3 class = 'others_record_mark'> 다른 사람들의 활동 </h3>

                        <div class = 'paging_btn'>
                            <div class = 'backward_btn arrow_btn'> ◀</div>
                            <div class = 'forward_btn arrow_btn'> ▶ </div>
                        </div>
                    </div>

                    <div id = 'others_record'> 
                    </div>
                </div>

                <div id = 'others_location_container'> 
                    <h3 style="margin-bottom: 20px;"> 내 주위의 사람들 </h3>
                    <div id="map"></div>
                </div>

            </div>

        </div>

    </div>




    <div class="indivisual_record_layer" >
        <div class="indivisual_record_layer_container">
        
            <div class='top_bar'> 
                <p class='top_word'> Report </p>
            </div>
            
            <div class="indivisual_record_layer_top">
                
                <img class='indivisual_record_img' src="/hoodify/img/identity/hooodify_mini.png"> 
                <h3 style="color: white;">내 활동 기록</h3>

                <div style="margin-left:40px;">
                    <div class = 'button_container'>
                        <img class = "open_monthly_report_btn menu_button2" title="월간 기록" src="/hoodify/img/daily_check_icon.png" >
                        <img class = "on_construction menu_button2"  title="개인 종합 기록" src="/hoodify/img/indivisual_log_icon.png">
                        <img class = "on_construction menu_button2"   src="/hoodify/img/all_list_icon.png">
                        <img class = "open_sub_btn menu_button2"   title="구독" src="/hoodify/img/subscription.png">
                    </div>
                </div>
            </div>
           
            <div class="monthly_report">
                <div class="monthly_report_container"> 
                    <h4> 월간 활동 기록 </h4>
                    <div class="select_date"> 
                        <input type="text" id ='testDatepicker'>
                    </div>

                </div>

                <div class = 'report_cont_container'> 
                    <div class= "most_activity">
                    </div>
                    <div class="history_list">  
                    </div>
                </div>
            </div>

            <div class="subscription_layout">
                <div class="subscription_layout_container"> 
                    <h4> 구독 서비스 (기획중)</h4>
                </div>

                <div class = 'report_cont_container'> 
                    <div class= "space_01">
                        <p>자신과 어울리는 키워드와 관련된 <span style="color:cornflowerblue; font-weight:bold"> 더 다양하고 구체적인 선택지 </span> 를 얻을 수 있습니다. <br><br>
                        자신과 같은 키워드를 가진<span style="color:cornflowerblue; font-weight:bold"> 다른 사람에 대한 정보 </span>를 얻을 수 있습니다.</p>
                    </div>

                    <div class="space_02">  
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



    
  
    <div  class="main_layer common_layer">
      <div class="main_layer_container">
        <div class='top_bar'> 
            <p class = 'top_word'> I D E N T I T Y </p>
        </div>

        <div class = "Dhorizontal">

            <div class= "Dhorizontal_container">

                <div class = "leftCont">

                    <div style="height:200px;">

                        <div class="leftCont_container1">
                            <img class = "identity_img_container"></img>

                            <div class="pop_conts">
                                <h4 class = "identity_title_container"></h4>
                                <p class = "identity_desc_container"></p>
                            </div>
                        </div>

                        <div class = keyword_container>  
                        </div>

                    </div>
                            
                    <div class="bar_menu">
                        <div class="menu-body">
                            <div class ="mli activity active"><img class=mli_img src="/hoodify/img/identity/hooodify_mini.png"> Activity</div>
                            <div class ="mli item"> <img class=mli_img src="/hoodify/img/identity/hooodify_mini.png"> Item</div>
                            <div class ="mli skill"> <img class=mli_img src="/hoodify/img/identity/hooodify_mini.png"> Skill</div>
                            <div class ="mli defect"> <img class=mli_img src="/hoodify/img/identity/hooodify_mini.png"> Defect</div>
                            <div class = "mli setting"> <img class=mli_img src="/hoodify/img/identity/hooodify_mini.png"> setting</div>
                        </div>
                    </div>
                    

                    <div class = "LBC Clist activity"></div>
                    <div class = "LBC Ilist item"></div>
                    <div class = "LBC Slist skill"></div>
                    <div class = "LBC Dlist defect"></div>

                    <div class = "LBC setting_cont setting">
                        <div class="move_to_storage"> 창고로  </div>
                        <div class="delete_identity"> 삭제하기   </div>
                    </div>

                    <div class="load_all_list"> 
                        <img src="/hoodify/img/all_list_icon.png">
                    </div>
                    
                </div>

                <div class = "rightCont">

                    <div class = "RC RCplain"> 
                        <img src="/hoodify/img/identity/hooodify_mini_gray.png">
                    </div>

                    <div class = "RC RCactivity">
                        <div class = 'right_content_container'>
                            <div class = "mylist_container">
                                <img class = "mylistIMG mylistIMG_common">
                                <h4 class = "mylistT mylistT_common"> </h4>
                            </div>
                            <p class = "mylistC mylistC_common"> </p>
                        </div>
                        <div class="mylist_container2">
                            <div id = 'addbtn_container' >
                            </div>
                            <p class = "count_activity count_text">  </p>
                        </div>

                        <div class = 'mylist_box' >
                            <ul class="mylist list_container_common">  </ul>
                        </div>
                    </div>


                    <div class = "RC RCitem">
                        <div class = 'right_content_container'>
                            <div class = "mylist_container">
                                <img class = "mylistIMG_item mylistIMG_common">
                                <h4 class = "mylistT_item mylistT_common"> </h4>
                            </div>
                            <p class = "mylistC_item mylistC_common"> </p>
                        </div>
                        
                        
                        <div class="mylist_container2">
                            <div id = 'addbtn_container_item'>
                            </div>
                            <p class = "count_item count_text">  </p>
                        </div>

                        <div class = 'mylist_box'>
                            <ul class="mylist_item list_container_common"> </ul>
                        </div>
                    </div>


                    <div class = "RC RCskill">
                        <div class = 'right_content_container'>
                            <div class = "mylist_container">
                                    <img class = "mylistIMG_skill mylistIMG_common">
                                    <h4 class = "mylistT_skill mylistT_common"> </h4>
                            </div>
                            <p class = "mylistC_skill mylistC_common"> </p>
                        </div>

                        <div id = 'addbtn_container_skill' style="margin-bottom:15px;">
                        </div>

                        <div class = 'mylist_box'>
                            <ul class="mylist_skill list_container_common"> </ul>
                        </div>
                    </div>


                    <div class = "RC RCdefect">
                        <div  class = 'right_content_container'>
                            <div class = "mylist_container">
                                <img class = "mylistIMG_defect mylistIMG_common">
                                <h4 class = "mylistT_defect mylistT_common"> </h4>
                            </div>
                            <p class = "mylistC_defect mylistC_common"> </p>
                        </div>

                        <div id = 'addbtn_container_defect' style="margin-bottom:15px;">
                        </div>

                        <div class = 'mylist_box'>
                            <ul class="mylist_defect list_container_common"> </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="btn-r">
                <div class="btn_layerClose generalBtn">닫기</div>
            </div>

        </div>

      </div>

    </div>

   

    <div class="add_record_layer state_activity">

      <div class="add_record_layer_container">
    
            <div class="top_bar"> 
                <p class = 'top_word'> 새 기록</p>
            </div>

            <div class = "add_record_layer_container2">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png"  style="width: 110px; height:110px;">
                <div class = "add_record_layer_container3">
                        
                    <div class = "add_record_layer_container4">
                        <h5 class="popup_activity_title"> activity title</h5>
                        <p class="popup_activity_identity" style="margin-top:0px; margin-right: 0px;"> here, identity </p>
                    </div>

                    <div class="popup_activity_desc_container">
                        <p class="popup_activity_desc"> activity desc </p>
                    </div>

                </div>
            </div>

            <div class= "add_record_layer_container5"> 
                <input type="checkbox"style="margin-left:8px;" class="public_check" name="public_check" id="public_check" checked>
                <label for="public_check" > 공개 </label>
            </div>

            <div class= "add_record_layer_container6">
                <textarea class="record_title" placeholder="제목을 입력하세요 (2자 이상)" name="record_title"></textarea>    
                <textarea class="record_cont" placeholder="내용을 입력하세요 (10자 이상)" name="record_cont"></textarea>
            </div>

            <div class = "find_img_container">
                
                <label class="imgViewArea"  for="u_file" onerror="imgAreaError()"> 
                    <img class="imgArea find_img_area" onerror="this.style.display='none'"> </img>
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



    <div class = "activity_post state_activity">
        
        <div class='top_bar'> 
            <p class = 'top_word'> 기 록 </p>
        </div>

        <div class="activity_post_container">

            <div class="activity_post_container2">
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png">
                <div class="activity_post_container3">
                    <div class="activity_post_container4">
                        <h5 class="popup_activity_title"> activity title</h5>
                    </div>    
                </div>
            </div>

            <p class="popup_activity_identity"> here, identity </p>

        </div>

        <div class="activity_post_container5" >
            
            <div class="record_date_container">
                <p class= "record_date"></p>
            </div>

            <h4 class="popup_activity_record_title"></h4>  

            <div class="activity_post_container6">
                <p class="popup_activity_record_cont"></p>
            </div>

        </div>

        <div class= "activity_post_container7">
            <a class = 'post_img'>
                <img class = 'post_img_s'>
            </a>
        </div>

        <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="btn_modify generalBtn">수정</div>
            <div class="btn_delete generalBtn">삭제</div>
        </div>

    </div>



    <div class="modify_record_layer state_activity">
        
        <div class='top_bar'> 
            <p class = 'top_word'> 기 록 </p>
        </div> 

        <div class="modify_record_layer_container">

            <div class="modify_record_layer_container2">
                
                <img class = "popup_activity_img" src = "/hoodify/img/identity/hooodify_mini.png">
                
                <div class="modify_record_layer_container3">

                    <div class="popup_activity_title_container" >
                        <h5 class="popup_activity_title"> activity title</h5>
                    </div>   

                    <div  class="popup_activity_desc_container" style="display: none;">
                        <p class="popup_activity_desc"> activity desc </p>
                    </div>

                </div>

            </div>
            
            <p class="popup_activity_identity"> here, identity </p>

        </div>

        <div class="modify_record_layer_container4"> 
            <input type="checkbox" class="public_check_modify" name="public_check_modify" id="public_check_modify" checked>
            <label for="public_check_modify" > 공개 </label>
        </div>


        <div class="modify_record_layer_container5">
            <textarea class="record_title_modify" placeholder="제목을 입력하세요" name="record_title_modify"></textarea>    
            <textarea name ="record_cont_modify" class="record_cont_modify" placeholder="내용을 입력하세요" name="record_cont_modify"></textarea>
            
            <div style="height:15%; width: 100%; display: flex; flex-direction: row-reverse;">
        
                <div class = "find_img_container" style="justify-content: flex-end;">
                
                    <label class="imgViewArea modify_img_layout"  for="u_file_t"   onerror="imgAreaError()"> 
                        <img class="imgArea modify_img"  onerror="this.style.display='none'">
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


    <div class="add_check">

        <div class='top_bar'> 
            <p class = 'top_word'> 확 인 </p>
        </div>
           
        <div class="check_container">  기록을 추가하시겠습니까? 
        </div>

         <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="generalBtn" id="btn_addCom">확인</div>
        </div>

    </div>


    <div class="delete_check">

        <div class='top_bar'>
            <p class = 'top_word'> 확 인 </p>
        </div>

        <div class="check_container">  삭제하시겠습니까? 
        </div>

         <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="generalBtn" id="btn_deleteCom">확인</div>
        </div>

    </div>


    <div class="delete_check_identity">

        <div class='top_bar'>
            <p class = 'top_word'> 확 인 </p>
        </div>

        <div class="check_container"> 모든 관련 기록들이 삭제됩니다. 삭제하시겠습니까?
        </div>

         <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="generalBtn" id="btn_deleteCom_identity">확인</div>
        </div>

    </div>


    <div class="add_identity_check">

        <div class='top_bar'>
            <p class = 'top_word'> 확 인 </p>
        </div>
        
        <div class="check_container">  추가 하시겠습니까? 
        </div>
        
         <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="generalBtn" id="add_identity_checkCom">확인</div>
        </div>

    </div>



    <div class = "identity_storage">

        <div class='top_bar'> 
            <p class = 'top_word'> 창 고 </p>
        </div>

        <div class = "inactive_identity_list_container">
            <div class= "identity_storage_container">
                <img class="identity_storage_img" src="/hoodify/img/identity/hooodify_mini.png">
                <p style="font-family:TmoneyRoundWindExtraBold; font-size:20px; margin-left:25px;"> 창 고. </p> <h6 style="margin-left: 15px; margin-top:6px"> 비활성 정체성</h6>
            </div>

            <div class = "inactive_identity_list" style ="height: 80%; overflow-y: scroll;"> </div>
        </div>

        <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
            <div class="btn_activate generalBtn">활성화</div>
        </div>

    </div>



    <div class = "profile_layer">

        <div class='top_bar'> 
            <p class = 'top_word'> 프로필 </p>
        </div>

        <div class = "profile_layer_container">
            
            <div class="profile_layer_container2">
                <div class = "find_img_container" style=" margin-left: 8px; width:fit-content;">
                    <label class = 'imgViewArea imgViewArea_profile' for="profile_img" onerror="imgAreaError()"> 
                        <img class="imgArea profile_img_space" onerror="this.style.display='none'"> </img>
                    </label>
                    <input type="file" class = "find_img_profile" id="profile_img" name="u_file" accept="image/*">
                </div>
                
                <div class = 'set_nickname'>
                    <p class = "profile_nickname"> 프로필 이름 </p>
                </div>
            </div>

            <div class = "profile_details">
                <div  class = 'current_identities'> </div>
                
                <div style = "display:flex; flex-direction:row; margin-top:15px; align-items: center;" >
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



    <div class ='profile_message_layer'>
        <div class='top_bar'> 
            <p class = 'top_word'> 프로필 </p>
        </div>

        <div class = "profile_message_layer_container">
            <textarea class="profile_message_text" placeholder="내용을 입력하세요" name="profile_message_text"></textarea>
            
            <div class="btn-r">
                <div class="btn_layerClose generalBtn">닫기</div>
                <div class="set_profile_message generalBtn">확인</div>
            </div>
        </div>
    </div>


    <div class ='profile_nickname_layer'>

        <div class='top_bar'> 
            <p class = 'top_word'> 닉네임 정하기 </p>
        </div>

        <div class = "profile_nickname_layer_container">
            <div class="profile_nickname_layer_container2">
                <textarea class="profile_nickname_text" placeholder="닉네임을 입력하세요" name="profile_nickname_text"></textarea>
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

        <div class='top_bar'> 
            <p class = 'top_word'> 검 색 </p>
        </div>
    
        
        <div class = "search_layer_container">
        
            <div class = 'search_layer_container2'>
                <div class="search_text" tabindex="0" contenteditable="true">
                </div>
                <img class="search_btn" src="/hoodify/img/identity/hooodify_mini.png">
            </div>
       
            <div class = "category_container">
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

            <div class = "search_result" > 
            </div>

            <div class = "show_keywords_container">
                <div class = "show_keyword_space">        
                </div>
            </div>

            <div class = "search_result_identity"> 
                <div class = "search_result_identity_container">
                    <div class = "search_result_identity_container2">

                        <img class = search_identity_img>

                        <div class = "search_result_identity_container3">

                            <div class = "search_result_identity_container4">
                                <h4 class = "search_identity_name"></h4>
                                <div class = 'add_identity generalBtn' > 추가 </div>
                                <div class = 'locked'> 보유중 </div>
                            </div>

                            <p class = "search_identity_desc"></p>      
                        </div>

                        <div class = "to_search_list"> 뒤로</div>

                    </div>
                </div>

                <div class = "search_data_container">

                    <div>
                        <p class="search_category_title"> Activity </p>
                        <div class = "search_activity_list"></div>
                    </div>

                    <div>
                        <p class="search_category_title"> Item </p>
                        <div class = "search_item_list"></div>
                    </div>

                    <div>
                        <p class="search_category_title"> Skill </p>
                        <div class = "search_skill_list"></div>
                    </div>

                    <div>
                        <p class="search_category_title"> Defect </p>
                        <div class = "search_defect_list"></div>
                    </div>

                </div>

            </div>


            <div class="btn-r">
                <div class="btn_layerClose generalBtn">닫기</div>
            </div>

        </div>

    </div>


    

    <div class = "public_record_post">
    
        <div class='top_bar'> 
            <p class = 'top_word'> 기 록 </p>
        </div>

        <div class="public_record_post_container">
            <div class = 'public_record_level'>
                <img class = "record_post_activity_img" src = "/hoodify/img/identity/hooodify_mini.png">
                <div class="public_record_post_container2">
                    <h4 class="record_post_activity_title"> activity title</h2>
                </div>
            </div>

            <p class="popup_activity_identity"> here, identity </p>
        </div>
            
        <div class="public_record_post_container3">

            <div class="public_record_post_container4">
                <p class="public_record_date"></p>
            </div>

            <h4 class="public_record_title"></h4>  

            <div class="public_record_post_container5">
                 <p class="public_record_cont"></p>
            </div>

        </div>

        <div class="public_record_img_container" >
            <a class = 'post_img_p' >
                <img class = 'post_img_ps'>
            </a>
        </div>

        <div class="public_record_post_container6">
            <p class = "public_record_nickname"></p>
        </div>

        <div class="btn-r">
            <div class="btn_layerClose generalBtn">닫기</div>
        </div>

    </div>


    <div class="underway common_layer">
        <div class='top_bar'> 
            <p class = 'top_word'> 공 지</p>
        </div>

        <div class="underway_container">
            <img class="underway_text_container" src="/hoodify/img/identity/hooodify_mini.png"> <p> 준비 중입니다! </p>
        </div>

        <div class="btn-r">
            <div class="generalBtn  btn_layerClose">확인</div>
        </div>
    </div>


    <div class="daily_report">
        <div class='top_bar'> 
            <p class = 'top_word'> Report</p>
        </div>

        <div class="daily_report_container">
          <img class="daily_report_img" src="/hoodify/img/identity/hooodify_mini.png">
          <p class = 'notice_message'></p>
        </div>

        <div class="btn-r">
            <div class="generalBtn btn_layerClose">확인</div>
        </div>
    </div>



    
    <div class="symbol_img_layer">

        <div style="display: flex; flex-direction:row; width: 100%; height: 100%;">
            <div class="symbol_img" style="  width: 700px;"> 
                <img src="/hoodify/img/symbol/test.jpg" style="width: 100%; border: 20px solid #121111;" >
            </div>

            <div class="symbol_cont" style="margin-left: 40px; width:300px; display:flex; flex-direction:column;     background-color: rgb(223 213 203);"> 
                <p class="symbol_title" style="margin:15px; font-size:26px; font-weight:bold; color:#692a15;">Here, desc on Identity</p>
                <p class="symbol_desc" style="margin:15px; font-size:14px;     height: 400px;  overflow: hidden; font-style:italic; ">Here, desc on Identity</p>
            </div>
        </div>

        <div class="btn-r" style="right: 25px; border:0px;">
            <div class="generalBtn btn_layerClose">확인</div>
        </div>

    </div>



    <div class="mobile_notice">
        <div class='top_bar'> 
            <p class = 'top_word'> 공 지</p>
        </div>

        <div style="width: 100%; padding:20px; display:flex; margin-top:20px;">
            <img src="/hoodify/img/identity/hooodify_mini.png" style="width:70px; height:70px; margin-right:10px;">
             <p> 모바일 환경에서는 구현되지 않았습니다. PC에서 접속해주시길 바랍니다.</p>
        </div>

        <div class="btn-r">
            <div class="generalBtn btn_layerClose">확인</div>
        </div>
    </div>


    <div class="notice common_layer">

        <div class='top_bar'> 
            <p class = 'top_word'> 공 지</p>
        </div>

        <div class="notice_container">
          <img class="notice_img" src="/hoodify/img/identity/hooodify_mini.png">
           <p style="font-size: 15px; margin-top:5px;"> 
                　▶ 현재 <span style="color:cornflowerblue; font-weight:bold"> 테스트 버전</span>으로 개발 중입니다. 불안정한 기능들이 있습니다.  <br>
                <br> 　▶ 유저 데이터는 주기적으로 <span style="color:cornflowerblue; font-weight:bold">초기화</span> 하고 있습니다. 작성한 기록들이 사라질 수 있습니다.<br>
                <br> 　▶ 모든 정체성과 하위 콘텐츠들은 계속해서 <span style="color:cornflowerblue; font-weight:bold">업데이트</span>하고 있습니다. <br>
                <br> 　▶ 추가하고싶은 내용이나 피드백, 오류 제보는 <span style="color:cornflowerblue; font-weight:bold">hoodify.crm@gmail.com</span> 으로 보내주시면 반영하겠습니다.
            </p>
        </div>

        <div class="btn-r">
            <div class="generalBtn btn_layerClose open_report">확인</div>
        </div>

    </div>


    <div class = "check_message_layer common_layer">

        <div class='top_bar'> 
            <p class = 'top_word'> 확 인 </p>
        </div>

        <div class = "check_message_layer_container">
            <div class= "check_message_layer_container2">
                <div>
                    <p class = "" style="height:30px;  margin: 20px; font-weight:bold"> 추천 활동 </p>
                </div>

                <div class = "random_activities">
                </div>

                <div class= 'refresh_random_activities_container'>
                    <img class= 'refresh_random_activities'src="/hoodify/img/refresh.png"> 
                </div>
            </div>
       
            <div class="btn-r">
                <div class="btn_layerClose generalBtn">닫기</div>
            </div>
        </div>

    </div>


    <div class = "daily_check_layer common_layer">

        <div class='top_bar'> 
            <p class = 'top_word'> 일 일 체 크 </p>
        </div>

        <div class = "daily_check_layer_container">
            <div class = "daily_check_layer_container2">
                <div class= "daily_check_layer_container3">
                    <p class = "todays_keyword"> 오늘의 키워드 </p>
                    <p class = 'selected_identity_count' style="margin-right:25px;"> 0 / 7</p>
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
        <div class = 'modal_cont' style="font-family: TmoneyRoundWindRegular;" ></div>
    </div>


</body>


<footer></footer>

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
// 주소 설정. 테스트(로컬) 또는 운영

var address_type = 'http://127.0.0.1/hoodify/main.php';
// var address_type = 'https://hoodify.cafe24.com/hoodify/main.php';


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
// category -> identity 목록 불러오기
    
function get_identities_from_category(category_text){

    $.ajax({
            type : "POST",
            url : "/hoodify/identity_info/get_identity_category.php",
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
                                url : "/hoodify/identity_info/check_possession.php",
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
            url : "/hoodify/user/get_daily_list.php",
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

                                $('.modal_cont').text("\u00a0"+"\u00a0"+object.activity_desc).css({'font-size':'14px',});
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
        url : "/hoodify/user/daily_check.php",
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
            url : "/hoodify/user/update_daily_identities.php",

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

        $('.add_record_layer').removeClass("state_activity state_item").addClass("state_defect");
        $('.modify_record_layer').removeClass("state_activity state_item").addClass("state_defect");
        $('.activity_post').removeClass("state_activity state_item").addClass("state_defect");

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
            url : "/hoodify/user/start_with_kakao.php",
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

    document.location.href='../hoodify/user/logout.php';
    kakaoLogout();
    //googleLogout();
})



////////////////////////////////////////////////////////////////////////////////////
/// esc 버튼으로 레이어 창 닫기

$(document).keyup(function(e) {

    if ( e.keyCode == 27) {

        $('.common_layer').fadeOut('fast');

    }

});






/////////////////////////////////////////////////////////////////////////////
// 공지 이후에 메시지 띄우기
// main identity와 관련된 정보


$('.open_report').click(function(){

    setTimeout(

        function() {
        
                $.ajax({
                    type : "POST",
                    url : "/hoodify/data_analysis/get_identity_user_data.php",
                    data : { 
                        
                            'identity_code' : Global_Var.userInfo.curr_main_identity,
                        },
                    dataType : 'json',     
                    success : function(res){

                        if(res[1].length === 0){

                            console.log('nothing');
                            $('.notice_message').html("새로운 하루가 시작되었습니다. "
                            + '<br>'+'"'+'<span style="color: cornflowerblue; font-weight: bold;">'
                            +res[0][0].identity_name +'</span>'+'"(으)로서 첫 기록을 남겨보세요.');
                                
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
                            var notice_text_line2 = notice_text_line.replace(/span1/g, '<span style="color: cornflowerblue; font-weight: bold;">');
                            var notice_text_line3 = notice_text_line2.replace(/span2/g, '</span>');

                            $('.notice_message').html(notice_text_line3); 
                        }


                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown){ 
                        alert("통신 실패.")
                    }
                });

            layer_popup('.daily_report')
        
        },
        500);

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
            url : "/hoodify/user/get_random_activity.php",
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

                            $('.modal_cont').text("\u00a0"+"\u00a0"+object.activity_desc).css({'font-size':'14px',});
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
       url : "/hoodify/data_analysis/get_user_record_analysis.php",
       data : {
                   'date_value': month_val,
               },
       dataType : 'json',
       success : function(res){

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

       },
       error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
           alert("통신 실패.")
       }
   });




   // 기록 수가 가장 많은 acitvity 불러오기
   $('.most_activity').empty();
   
   $.ajax({
           type : "POST",
           url : "/hoodify/data_analysis/get_most_frequent_act.php",
           data : {
                   'date_value': month_val,
               },
           dataType: 'json',
           success : function(res){

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


        $('#others_record').empty();
        var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
        $('.others_record_mark').fadeIn("slow");
        $('#others_record_container').css({'display':'flex'});

        $.ajax({

            type : "POST",
            url : "/hoodify/record_CRUD/get_public_report.php",
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
                        border: "2.5px solid #586167",
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
                                    url : "/hoodify/record_CRUD/get_record_img.php",
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
/// 우측 main 레이아웃 보이기

$('#daily_check_btn').click(function(){

    get_daily_list();
    $('#others_record_container').css({'display':'none'});
    $('#others_location_container').css({'display':'none'});

})



/////////////////////////////////////////////////////////////////////////////////////
/// 다른 사람들의 위치 레이어 보이기

$('#others_location_btn').click(function(){

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
                url : "/hoodify/user/update_location.php",
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
// 준비중입니다 

$('.on_construction').click(function(){

    layer_popup('.underway');

});


////////////////////////////////////////////////////////////////////////////////////
// 준비중입니다 창 띄우기

function get_identity_search_data(identity_code){

    $.ajax({
        type : "POST",
        url : "/hoodify/identity_info/get_search_identity_data.php",
        data : {'identity_code' : identity_code},
        dataType : 'json',
        success : function(res){

            
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

}



///////////////////////////////////////////////////////////////////////////////////////
// 카테고리 버튼 클릭 리스너  (검색 레이어)
// '음식' 카테고리를 클릭하면 '음식'이라는 카테고리에 포함된 정체성의 리스트를 불러온다.

$('.category_btn').click(function(){

    $('.search_result').empty();
    $('.search_result').css({ display : 'none',});

    var category_text = $(this).text();
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
        url : "/hoodify/identity_info/get_keywords_from_category.php",
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
                        url : "/hoodify/identity_info/get_identities_from_keyword.php",
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
                                        url : "/hoodify/identity_info/check_possession.php",
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
    $('.search_result').css("display","block").hide().fadeIn('fast');



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

        if($(this).val().length > 500) {
            $(this).val($(this).val().substring(0, 500));
        }

    });

    $('.record_cont_modify').on('keyup', function() {

        if($(this).val().length > 500) {
            $(this).val($(this).val().substring(0, 500));
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
        url : "/hoodify/identity_info/delete_identity.php",
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
// 검색 버튼
// 검색 layer 띄우기

$('.open_search_layer').click(function(){
    $('.search_result').empty();
    $('.search_result_identity').css({ display : 'none',});
    
    $('.show_keywords_container').css({ display : 'none',});
    

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
    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result').css("display","block").hide().fadeIn('fast');
    
    $('.category_container').css("display","flex").hide().fadeIn('fast');

    var search_text = $('.search_text').text();
    console.log(search_text);

    $.ajax({
        type : "POST",
        url : "/hoodify/identity_info/get_search_data.php",
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
                                url : "/hoodify/identity_info/check_possession.php",
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


                            $('.search_identity_img').attr("src",object.identity_img);
                            $('.search_identity_name').text(object.identity_name);
                            $('.search_identity_desc').text("\u00a0"+"\u00a0"+object.identity_desc);

                            $('.search_result_identity').css("display","flex").hide().fadeIn('fast');

                            $('.search_result').css({ display : 'none',});
                            $('.category_container').css({ display : 'none',});
                            $('.show_keywords_container').css({ display : 'none',});


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
            url : "/hoodify/identity_info/add_identity.php",
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
    
    $('.show_keywords_container').css({ display : 'none',});
    $('.search_result_identity').css({ display : 'none',});
    $('.search_result').fadeIn('fast');
    $('.category_container').css("display","flex").hide().fadeIn("fast");
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
        url : "/hoodify/user/get_user_profile.php",
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
                url : "/hoodify/user/check_nickname.php",
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
    $('.nickname').text(nickname_text);
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
                url : "/hoodify/user/update_nickname.php",
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

        var profile_message = $('.profile_message_text').val();

            $.ajax({
                type : "POST",
                url : "/hoodify/user/modify_profile_message.php",
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
    var url = "/hoodify/record_CRUD/upload_file.php";
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
    var url = "/hoodify/record_CRUD/update_file.php";
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
    var url = "/hoodify/user/update_profile_img.php";
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
        url : "/hoodify/identity_info/get_deactivated_identities.php",
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
        url : "/hoodify/identity_info/deactivate_identity.php",
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
        url : "/hoodify/identity_info/activate_identity.php",
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
        url : "/hoodify/identity_info/get_user_identities.php",
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
                $('.no_identity').css({'display':'flex'});


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
                                    $(this).css("background-color", "#bad8f2");
                                }else{
                                    $(this).css("background-color", "#bad8f2");
                                }
                            }, function(){
                                if($(this).hasClass("mainIdentity")){
                                    $(this).css("background-color", "#98a9b4");
                                }else{
                                    $(this).css("background-color", "#bdc8ce52");
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

                                    $('.modal_cont').text("\u00a0"+"\u00a0"+identity.identity_desc).css({'font-size':'14px',});
                                    $('#desc_modal').attr("title", identity.identity_name);
                                    $('.ui-dialog-title').text(identity.identity_name);

                                    $('#desc_modal').dialog({
                                        modal: true, 
                                        
                                    }).prev(".ui-dialog-titlebar").css({"background":"#475169",'color':'white', 'z-index': '2000',});

                                    $('.ui-dialog').css({'z-index':'2000',});

                                })

                                
                                Global_Var.userInfo.curr_identity_code = identity.identity_code;


                                // 클릭한 정체성의 태그를 불러오는 코드;
                                $.ajax({
                                        type : "POST",
                                        url : "/hoodify/identity_info/get_identity_keyword.php",
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
                                        url : "/hoodify/identity_info/get_identity_activity.php",
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
                                                        'padding':'10px',
                                                        'background-color': 'white',
                                                        
                                                    }).click(((activity) => function (e) {

                                                            $('.popup_activity_identity').text(activity.identity_name);
                                                            
                                                            $('#addbtn_container').empty();
                                                            
                                                            $('.mylistIMG').css("display", "flex").attr("src",activity.activity_img);
                                                            $('.mylistT').text(activity.activity_name);


                                                            $('.mylistC').text("\u00a0"+"\u00a0"+activity.activity_desc);

                                                                $('.mylistC').click(function(){

                                                                    $('.modal_cont').text("\u00a0"+"\u00a0"+activity.activity_desc).css({'font-size':'14px',});
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
                                                    

                                                            // 해당 activity 전역 변수 설정
                                                            Global_Var.userInfo.curr_activity_code = activity.activity_code;

                                                            $('.contents_item.activity').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");

                                                            $('.popup_activity_img').attr("src",activity.activity_img);
                                                            $('.popup_activity_title').text(activity.activity_name);
                                                            $('.popup_activity_desc').text("　▶　"+activity.activity_desc);

                                                            
                                                            refresh_activity_record_list();

                                                                
                                                                $('<p>',{
                                                                    text: "내 기록 추가하기",

                                                                }).attr('id', 'add_record'
                                                                ).css({
                                                                    width: "120px",
                                                                    color: "#3f5a9d",
                                                                    fontWeight: "bold",
                                                                    cursor:"pointer",


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
                                                    'background-color': '#313843d6',
                                                    borderRadius: '12px',  
                                                    'padding-right':'15px',
                                                    'border': '2px solid white',
                                                    'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);


                                                var activity_img_container = $('<img>',{
                                                    src: activity.activity_img,
                                                    }).css({
                                                    width: "30px",
                                                    height: "30px",
                                                    margin: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",                                                            
                                                    

                                                }).appendTo(contents_container);   


                                                var content_name = $('<p>', {
                                                    text: activity.activity_name,

                                                    }).css({
                                                    "margin-left": "5px",
                                                    'font-size': '14px',
                                                    'font-weight': 'bold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                    'color':'white',
                                                    
                                                
                                                }).appendTo(contents_container);

                                            }

                                            

                                    },
                                        error : function(XMLHttpRequest, textStatus, errorThrown){ // 비동기 통신이 실패할경우 error 콜백으로 들어옵니다.
                                        alert("통신 실패.")
                                    }
                                });
                                

                                // 클릭한 정체성의 item 목록을 불러옴
                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/identity_info/get_identity_item.php",
                                    data : {
                                               'identity_code': identity.identity_code
                                            },
                                    dataType : 'json',
                                    success : function(res){

                                        for (var i = 0; i < res.length; i++) {
                                                
                                                var item = res[i];
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

                                                                $('.modal_cont').text("\u00a0"+"\u00a0"+item.item_desc).css({'font-size':'14px',});
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
                                                            
                                                            Global_Var.userInfo.curr_item_code = item.item_code;

                                                            $('.contents_item.item').removeClass("itemActive").css("background-color", "white");
                                                            $(this).css("background-color", "#bad8f2");
                                                            $(this).addClass("itemActive");


                                                            $('.popup_activity_img').attr("src",item.item_img);
                                                            $('.popup_activity_title').text(item.item_name);
                                                            $('.popup_activity_desc').text("　▶　"+item.item_desc);


                                                            refresh_item_record_list();

                                                                    
                                                                $('<p>',{
                                                                    text: "내 기록 추가하기",

                                                                }).attr('id', 'add_record_item'
                                                                ).css({
                                                                    width: "120px",
                                                                    color: "#3f5a9d",
                                                                    fontWeight: "bold",
                                                                    cursor:"pointer",


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
                                                    'background-color': '#313843d6',
                                                    borderRadius: '12px',  
                                                    'padding-right':'15px',
                                                    'border': '2px solid white',
                                                    'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);

                                                $('<img>',{
                                                    src: item.item_img,
                                                    }).css({
                                                    width: "30px",
                                                    height: "30px",
                                                    margin: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",    
                                                    

                                                }).appendTo(contents_container);        

                                            
                                                $('<p>', {
                                                    text: item.item_name,

                                                    }).css({
                                                        "margin-left": "5px",
                                                    'font-size': '14px',
                                                    'font-weight': 'bold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                    'color':'white',
                                                
                                                }).appendTo(contents_container);


                                            }
                            
                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                        alert("통신 실패.")
                                    }
                                });
                                

                                // 클릭한 정체성의 skill 목록을 불러옴
                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/identity_info/get_identity_skill.php",
                                    data : {
                                                'identity_code': identity.identity_code
                                            },
                                    dataType : 'json',
                                    success : function(res){
                                        for (var i = 0; i < res.length; i++) {

                                            var skill = res[i];
                                            
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

                                                            $('.modal_cont').text("\u00a0"+"\u00a0"+skill.skill_desc).css({'font-size':'14px',});
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
                                                        'background-color': '#313843d6',
                                                        borderRadius: '12px',  
                                                        'padding-right':'15px',
                                                        'border': '2px solid white',
                                                        'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                    }).appendTo(list_container);


                                            $('<img>',{
                                                    src: skill.skill_img,
                                                }).css({
                                                    width: "30px",
                                                    height: "30px",
                                                    margin: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",     

                                                }).appendTo(contents_container);        

                                            
                                            $('<p>', {
                                                text: skill.skill_name,

                                            }).css({
                                                "margin-left": "5px",
                                                    'font-size': '14px',
                                                    'font-weight': 'bold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                    color:'white',
                                            
                                            }).appendTo(contents_container);

                                        }
                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ 
                                        alert("통신 실패.")
                                    }
                                });
                            

                                // 클릭한 정체성의 defect 목록을 불러옴
                                $.ajax({
                                    type : "POST",
                                    url : "/hoodify/identity_info/get_identity_caution.php",
                                    data : {
                                            'identity_code': identity.identity_code
                                        },
                                    dataType : 'json',
                                    success : function(res){

                                        for (var i = 0; i < res.length; i++) {

                                            var defect = res[i];
                                        
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

                                                            $('.modal_cont').text("\u00a0"+"\u00a0"+defect.caution_desc).css({'font-size':'14px',});
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
                                                    'background-color': '#313843d6',
                                                    borderRadius: '8px',  
                                                    'padding-right':'15px',
                                                    'border': '2px solid white',
                                                    'box-shadow': 'rgb(155 144 144) 4px 2px 4px 1px',

                                                }).appendTo(list_container);


                                            $('<img>',{
                                                    src: defect.caution_img,
                                                }).css({
                                                    width: "30px",
                                                    height: "30px",
                                                    margin: "5px",
                                                    float: "left",
                                                    borderRadius: '8px',   
                                                    border: "2px solid #475169",       

                                                }).appendTo(contents_container);        

                                            
                                            $('<p>', {
                                                text: defect.caution_name,

                                            }).css({
                                                "margin-left": "5px",
                                                    'font-size': '14px',
                                                    'font-weight': 'bold',
                                                    'padding-right': '12px',
                                                    'padding-left': '12px',
                                                    color:'white', 
                                            
                                            }).appendTo(contents_container);

                                        }
                                    },
                                    error : function(XMLHttpRequest, textStatus, errorThrown){ 
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
                    backgroundColor : '#98a9b4',
                    opacity: "1.0",

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


    $('.main_list').children().removeClass('mainIdentity').css("background-color", "#bdc8ce52");
    $('.main_list').children().eq(0).addClass('mainIdentity').css("background-color", "#98a9b4");

    var extracted_text = $('.mainIdentity').children().eq(1).children(1).text();
    $('#current_identity').text(extracted_text).hide().fadeIn("slow");

        $.ajax({
            type : "POST",
            url : "/hoodify/identity_info/update_identity_seq.php",
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
            url : "/hoodify/record_CRUD/add_activity_record.php",
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
            url : "/hoodify/record_CRUD/add_item_record.php",
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
            url : "/hoodify/record_CRUD/add_skill_record.php",
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
            url : "/hoodify/record_CRUD/delete_activity_record.php",
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
            url : "/hoodify/record_CRUD/delete_item_record.php",
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
            url : "/hoodify/record_CRUD/delete_skill_record.php",
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
                    url : "/hoodify/record_CRUD/get_user_activity_record.php",
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
                                borderRight: "1px solid #D8D8D8",
                                borderBottom: "1px solid #D8D8D8",
                                cursor:'pointer',
                                width:'85px',
                                height:'100px',
                                flexDirection:'column',
                                'padding-top':'5px',
                                

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
                                    url : "/hoodify/record_CRUD/get_record_img.php",
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
                                    width: "45px",
                                    height: "45px",
                                    margin: "4.5px",
                                    float: "left",
                                    "border-radius": "10px",
                                    "border": "2px solid #475169"
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


                            // 해당 activity의 count 표시하기
                            var total_count = $('.mylist').children('div').length;
                            $('.count_activity').text("보유 기록: " + total_count);




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
        url : "/hoodify/record_CRUD/get_user_item_record.php",
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
                    borderRight: "1px solid #D8D8D8",
                    borderBottom: "1px solid #D8D8D8",
                    cursor:'pointer',
                    width:'100px',
                    height:'100px',
                    flexDirection:'column',
                    'padding-top':'5px',

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
                                    url : "/hoodify/record_CRUD/get_record_img.php",
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
                        width: "45px",
                        height: "45px",
                        margin: "4.5px",
                        float: "left",
                        "border-radius": "10px",
                        "border": "2px solid #475169"
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

            // 해당 item의 count 표시하기
            var total_count = $('.mylist_item').children('div').length;
            $('.count_item').text("보유 기록: " + total_count);

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
        url : "/hoodify/record_CRUD/get_user_skill_record.php",
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
                                    url : "/hoodify/record_CRUD/get_record_img.php",
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

    else if($('.record_cont_modify').val().length<5){

        alert("내용을 입력하세요(10자 이상)");

    }

    else{

        if($('.modify_record_layer').hasClass('state_activity')){

            $.ajax({
                type : "POST",
                url : "/hoodify/record_CRUD/modify_record_activity.php",
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
            url : "/hoodify/record_CRUD/modify_record_item.php",
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
                url : "/hoodify/record_CRUD/modify_record_skill.php",
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
        layer_popup('.mobile_notice');

    } 
    // 모바일 외
    else 
    {
        $(document).ready(function(){

            
            $.ajax({
                type : "POST",
                url : "/hoodify/user/check_main_user.php",

                success : function(res){

                    // 로그인된 유저가 없음
                    if(res == "no user"){

                        $('.top_menu_container').css({display: 'none',});
                        $('.main_list').css({display: 'none',});
                        $('.user_btn_space').css({display: 'none',});
                        $('.public_main').css({display: 'flex',});
                        $('.main_background').css({display: 'none',});
                    
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





</script>





