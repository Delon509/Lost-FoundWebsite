const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };


function check(){
  var uname= document.getElementById('uname').value;
  var psw= document.getElementById('psw').value;
  var nickname= document.getElementById('nickname').value;
  var email= document.getElementById('email').value;
  var gender= document.getElementById('gender').value;
    var birthday= document.getElementById('birthday').value;
    var sq= document.getElementById('sq').value;
    var sa= document.getElementById('sa').value;
    var image= document.getElementById('image').value;
    
    if(uname == null || uname=="" || psw == null || psw.length==0|| nickname == null || nickname.length==0|| email == null || email.length==0|| gender == null || gender.length==0|| birthday == null || birthday.length==0|| sq == null || sq.length==0|| sa == null || sa.length==0||image == null || image.length==0){
      alert("please provide the required information!");
    }
    else if(!validateEmail(email)){
        alert("please enter a valid email address");
    }
    else{
        document.getElementById('formid').submit();
    }
    
    }