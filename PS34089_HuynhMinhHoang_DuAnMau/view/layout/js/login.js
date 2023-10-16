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
var check_login = function () {
    if(userName.value == ""){
        // document.querySelector("#errUser").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        alert("Mời nhập tên tài khoản!");
        userName.focus();
        return false;
    }else if(userName.value.length < 5){
        // document.querySelector("#errUser").innerHTML = "Nhập tối đa 6 ký tự!";
        alert("Nhập tối đa 5 ký tự!");
        userName.focus();
        return false;
    }else{
        document.querySelector("#errUser").innerHTML = "";
    }
    if(password.value == ""){
        // document.querySelector("#errPass").innerHTML = "Xin hãy nhập thông tin bắt buộc!";
        alert("Bạn chưa nhập mật khẩu!");
        password.focus();
        return false;
    }else if(password.value.length < 6){
        // document.querySelector("#errPass").innerHTML = "Mật khẩu không dưới 8 ký tự!";
        alert("Mật khẩu không dưới 6 ký tự!");
        password.focus();
        return false;
    }else{
        document.querySelector("#errPass").innerHTML = "";
    }
    return true;
}