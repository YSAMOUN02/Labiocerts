

// maximize Dashboard Size
function maximize() {

    document.querySelector('.body-box').style.position = 'absolute';
    document.querySelector('.body-box').style.top = '20px';
    document.querySelector('.body-box').style.left = '20px';
    document.querySelector('.body-box').style.width = '97%';
    document.querySelector('.body-box').style.height = '90%';
    document.querySelector('.minimize').style.display = 'block';
    document.querySelector('.nav').style.display = 'none';
}

// minimize Dashboard Size
function minimize() {

    document.querySelector('.body-box').style.position = 'sticky';
    document.querySelector('.nav').style.display = 'block';
    document.querySelector('.minimize').style.display = 'none';
}


// Menu Drop Down when Click

var state_user = 0;
function drop_down_logo_user() {

    if (state_user == 0) {
        document.getElementById('user-manage').style.display = 'block';
        document.getElementById('user-manage_icon').style.transform = 'rotate(180deg)';
        document.getElementById('user-manage_icon').style.top = '20%';
        state_user = 1;

        state_media = 1;
        drop_down_media();

    } else {
        document.getElementById('user-manage').style.display = 'none';
        document.getElementById('user-manage_icon').style.transform = 'rotate(0deg)';
        document.getElementById('user-manage_icon').style.top = '20%';
        state_user = 0;
    }
}


var state_media = 0;
function drop_down_media() {

    if (state_media == 0) {
        document.getElementById('media-manage').style.display = 'block';
        document.getElementById('media_icon').style.transform = 'rotate(180deg)';
        document.getElementById('media_icon').style.top = '20%';
        state_media = 1;


        state_user = 1;
        drop_down_logo_user();

    } else {
        document.getElementById('media-manage').style.display = 'none';
        document.getElementById('media_icon').style.transform = 'rotate(0deg)';
        document.getElementById('media_icon').style.top = '20%';
        state_media = 0;
    }
}

// Alert For User 
function fade_alert() {

    document.querySelector('.alert-confirm').style.display = 'none'
}

function alert_logout() {
    document.querySelector('.alert-confirm-logout').style.visibility = 'visible  ';
}
function close_alert_logout() {
    document.querySelector('.alert-confirm-logout').style.visibility = 'hidden';
}
// For Preview File Imag
function loadFile(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
// For Preview File Imag
function loadFile2(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output2');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}



function fade_in_nav() {
    document.querySelector('.nav').style.display = 'block';
}
function fade_nav() {
    document.querySelector('.nav').style.display = 'none';
}

// tinymce
tinymce.init({

    selector: '.textarea',
    plugins: 'image link',
    editable_class: 'mceEditable'
});


var state = 0;
var class_no = 1;
var output =  'output'; 
var input = 'input';
function append_image(){
   
    var append_child = document.querySelector(".input-child");


    if (append_child) {
        var output_id = output_id = output + class_no.toString();
        var input_class = input+class_no.toString();
    
        var new_div = document.createElement('div');
        var new_class = "inputBox"+class_no.toString();
        new_div.classList.add(new_class);
      
        new_div.innerHTML = `
        <div class="row mt-3">
            <div class="col-6">
                <input type="file"  name="${input_class}" onchange="loadFileDynamic(event,'${output_id}')" id="${input_class}" class="form-control d-none">
            </div>
   
            </div>
            <div class="row mt-3">
                <div class="col-6 thumbnail">
                    <img width="100%"  src="" accept="image/*" ondblclick="clearImageThumbnail('${input_class}' , '${output_id}','${new_class}')" id="${output_id}" alt="">
                </div>
            </div>
       
        </div>
                `;
    
         
        append_child.appendChild(new_div);
        document.getElementById(input_class).click();
        class_no ++ ;
        state ++ ;
        document.getElementById('state').value = state;
        
    } else {
        console.log("Element with class 'appen-child' not found");
    }
}


function append_textbox(){
 
         
    var append_child = document.querySelector(".input-child");


    if (append_child) {
        var input = 'input';
        var input_class2 = input+class_no.toString();
        var new_div = document.createElement('div');
        var new_class = "textBox"+class_no.toString();
        new_div.classList.add(new_class);
        new_div.style.position = 'relative';
    
        new_div.innerHTML = `
                <div class="row mt-3">
                        <div class="col-12">
                            <textarea name="${input_class2}" class="textarea" id="${input_class2}" cols="30" rows="10">Test lorem 123rdsdfkofkw ev</textarea>
                            <button class="clear-text-box" type="button" onclick="clearTextbox('${new_class}')"><i class="fa-solid fa-minus"></i></button>
                        </div>
                </div>
            
                `;
  
         
        append_child.appendChild(new_div);
        class_no ++ ;
        state ++ ;
        document.getElementById('state').value = state;
     
                // tinymce
                tinymce.init({
                    selector: `.textarea`,
                    plugins: 'image link'
                });   
                        
    } 
    else {
        console.log("Element with class 'appen-child' not found");
    }
}
function clearTextbox(id_box){
    // alert(123);
    document.querySelector("."+id_box).style.display = 'none';
    document.querySelector("."+id_box).value = "";
}



// Clear Image from input Dynamic
function clearImageThumbnail(inputId ,outputId,disable_class) {
    // alert(disable_class);
    document.querySelector('.'+disable_class).style.display = 'none';
    document.getElementById(inputId).value = "";
    document.getElementById(inputId).removeAttribute = "name";
    document.getElementById(outputId).src = "";
  
}
// For Preview File Image Dynamic  
function loadFileDynamic(event,output_data) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById(output_data);
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
