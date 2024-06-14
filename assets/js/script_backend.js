

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
var state_service = 0;
function drop_down_service(){
  
    if(state_service == 0){
        document.getElementById('service-set').style.display = 'block';
        document.getElementById('icon-service').style.transform = 'rotate(180deg)';
        state_service++;
    }else{
        document.getElementById('service-set').style.display = 'none';
        document.getElementById('icon-service').style.transform = 'rotate(0deg)';
        state_service = 0;
    }

}

// Alert For User 
function fade_alert(){

    document.querySelector('.alert-confirm').style.display = 'none'
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
