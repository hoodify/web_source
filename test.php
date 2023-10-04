
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>
    

<div class="rCol"> 
     <div id ="prv" style="height:auto; width:auto; float:left; margin-bottom: 28px; margin-left: 200px;"></div>
       </div>
    <div class="rCol" style="clear:both;">

    <label > Upload Photo : </label> 
    <input type="file" id="file" name='file' onChange=" return submitForm();">
    <input type="hidden" id="filecount" value='0'>


    <script>


function submitForm() {

    var fcnt = $('#filecount').val();
    var fname = $('#filename').val();
    var imgclean = $('#file');
    if(fcnt<=5)
    {
    data = new FormData();
    data.append('file', $('#file')[0].files[0]);

    var imgname  =  $('input[type=file]').val();
     var size  =  $('#file')[0].files[0].size;

    var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );
    if(ext=='jpg' || ext=='jpeg' || ext=='png' || ext=='gif' || ext=='PNG' || ext=='JPG' || ext=='JPEG')
    {
     if(size<=1000000)
     {
    $.ajax({
      url: "/hoodify/upload_file.php",
      type: "POST",
      data: data,
      enctype: 'multipart/form-data',
      processData: false,  // tell jQuery not to process the data
      contentType: false   // tell jQuery not to set contentType
    }).done(function(data) {
       if(data!='FILE_SIZE_ERROR' || data!='FILE_TYPE_ERROR' )
       {
        fcnt = parseInt(fcnt)+1;
        $('#filecount').val(fcnt);
        var img = '<div class="dialog" id ="img_'+fcnt+'" ><img src="/hoodify/img/user_img/'+data+'"><a href="#" id="rmv_'+fcnt+'" onclick="return removeit('+fcnt+')" class="close-classic"></a></div><input type="hidden" id="name_'+fcnt+'" value="'+data+'">';
        $('#prv').append(img);
        if(fname!=='')
        {
          fname = fname+','+data;
        }else
        {
          fname = data;
        }
         $('#filename').val(fname);
          imgclean.replaceWith( imgclean = imgclean.clone( true ) );
       }
       else
       {
         imgclean.replaceWith( imgclean = imgclean.clone( true ) );
         alert('SORRY SIZE AND TYPE ISSUE');
       }

    });
    return false;
  }//end size
  else
  {
      imgclean.replaceWith( imgclean = imgclean.clone( true ) );//Its for reset the value of file type
    alert('Sorry File size exceeding from 1 Mb');
  }
  }//end FILETYPE
  else
  {
     imgclean.replaceWith( imgclean = imgclean.clone( true ) );
    alert('Sorry Only you can uplaod JPEG|JPG|PNG|GIF file type ');
  }
  }//end filecount
  else
  {    imgclean.replaceWith( imgclean = imgclean.clone( true ) );
     alert('You Can not Upload more than 6 Photos');
  }
}


/*

매일 daily_check 값 업데이트
CREATE EVENT IF NOT EXISTS 'reset_daily_check'
    ON SCHEDULE
           EVERY 10 minute
    ON COMPLETION NOT PRESERVE
    ENABLE
    COMMENT 'reset_daily_check'
    DO 
    UPDATE user SET daily_check = 0

*/

</script>
