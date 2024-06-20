

// maximize Dashboard Size
function maximize(){

    document.querySelector('.body-box').style.position = 'absolute';
    document.querySelector('.body-box').style.top = '20px';
    document.querySelector('.body-box').style.left = '20px';
    document.querySelector('.body-box').style.width = '97%';
    document.querySelector('.body-box').style.height = '90%';
    document.querySelector('.minimize').style.display = 'block';
    document.querySelector('.nav').style.display = 'none';
}

// minimize Dashboard Size
    function minimize(){
    
    document.querySelector('.body-box').style.position = 'sticky';
    document.querySelector('.nav').style.display = 'block';
    document.querySelector('.minimize').style.display = 'none';
}


// Menu Drop Down when Click

var state_user = 0;
function drop_down_logo_user(){
  
    if(state_user == 0){
        document.getElementById('user-manage').style.display = 'block';
        document.getElementById('user-manage_icon').style.transform = 'rotate(180deg)';
        document.getElementById('user-manage_icon').style.top = '20%';
     state_user = 1;

     state_media = 1;
     drop_down_media();

    }else{
        document.getElementById('user-manage').style.display = 'none';
        document.getElementById('user-manage_icon').style.transform = 'rotate(0deg)';
        document.getElementById('user-manage_icon').style.top = '20%';
        state_user = 0;
    }
}


var state_media = 0;
function drop_down_media(){
  
    if(state_media == 0){
        document.getElementById('media-manage').style.display = 'block';
        document.getElementById('media_icon').style.transform = 'rotate(180deg)';
        document.getElementById('media_icon').style.top = '20%';
     state_media = 1;


     state_user = 1;
     drop_down_logo_user();

    }else{
        document.getElementById('media-manage').style.display = 'none';
        document.getElementById('media_icon').style.transform = 'rotate(0deg)';
        document.getElementById('media_icon').style.top = '20%';
        state_media = 0;
    }
}

// Alert For User 
function fade_alert(){

    document.querySelector('.alert-confirm').style.display = 'none'
}

function alert_logout(){
    document.querySelector('.alert-confirm-logout').style.visibility= 'visible  ';
}
function close_alert_logout(){
    document.querySelector('.alert-confirm-logout').style.visibility= 'hidden';
}
// For Preview File Imag
function loadFile(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
// For Preview File Imag
function loadFile2(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output2');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function fade_in_nav(){
    document.querySelector('.nav').style.display = 'block';
}
function fade_nav(){
    document.querySelector('.nav').style.display = 'none';
}