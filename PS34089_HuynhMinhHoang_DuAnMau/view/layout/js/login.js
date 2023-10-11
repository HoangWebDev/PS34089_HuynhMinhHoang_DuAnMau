var userName = document.querySelector(".username")
var password = document.querySelector(".password")
var show;
function showPass() {
    if(show){
        password.type = "text";
        show = false;
    }else{
        password.type = "password";
        show = true;
    }
}
function check_login() {
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
    
    return true;
}