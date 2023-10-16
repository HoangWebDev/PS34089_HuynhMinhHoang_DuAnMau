var name = document.querySelector(".name");
var userName = document.querySelector(".username");
var email = document.querySelector(".email");
var password = document.querySelector(".password");
var confirmpass = document.querySelector(".confirmpass");

var validForm = function () {
    //Check Name
    if(name.value == ""){
        // document.querySelector("#errName").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        alert("Xin hãy nhập thông tin bắt buộc!");
        name.focus();
        return false;
    }else if(name.value.length < 6){
        document.querySelector("#errName").innerHTML = "Nhập tối đa 6 ký tự!";
        name.focus();
        return false;
    }else{
        document.querySelector("#errName").innerHTML = "";
    }
    //Check UserName
    if(userName.value == ""){
        document.querySelector("#errUser").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        userName.focus();
        return false;
    }else if(userName.value.length < 6){
        document.querySelector("#errUser").innerHTML = "Nhập tối đa 6 ký tự!";
        userName.focus();
        return false;
    }else{
        document.querySelector("#errUser").innerHTML = "";
    }
    //Định dạng email
    let emailPtn = /^(\w{2,}@\w{2,}(\.[a-zA-Z]{2,3})){1,2}$/;
    if(email.value == ""){
        document.querySelector("#errEmail").innerHTML = "Vui lòng nhập email!";
        email.focus();
        return false;
    }
    //Kiểm tra định dạng
    else if(!emailPtn.test(email.value)){
        document.querySelector("#errEmail").innerHTML = "Email không phù hợp!Xin vui lòng nhập lại";
        email.focus();
        return false;
    }else{
        document.querySelector("#errEmail").innerHTML = "";
    }
    // Check PassWord
    if(password.value == ""){
        document.querySelector("#errPass").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        password.focus();
        return false;
    }else if(password.value.length < 8){
        document.querySelector("#errPass").innerHTML = "Mật khẩu không dưới 8 ký tự!";
        password.focus();
        return false;
    }else{
        document.querySelector("#errPass").innerHTML = "";
    }
    //Check EnterPass
    if(confirmpass.value == ""){
        document.querySelector("#errConfirmPass").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        confirmpass.focus();
        return false;
    }else if(confirmpass.value != password.value){
        document.querySelector("#errConfirmPass").innerHTML = "Mật khẩu nhập lại không chính xác!";
        confirmpass.focus();
        return false;
    }else{
        document.querySelector("#errConfirmPass").innerHTML = "";
    }
    return true;
}