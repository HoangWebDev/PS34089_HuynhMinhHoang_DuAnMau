var userName = document.querySelector(".username")
var password = document.querySelector(".password")
var check_login = function () {
    if(userName.value == ""){
        document.querySelector("#errUser").innerHTML = "Xin hãy nhập tài khoản!";
        // alert("Mời nhập tên tài khoản!");
        userName.focus();
        return false;
    }else if(userName.value.length < 6){
        document.querySelector("#errUser").innerHTML = "Nhập tối đa 6 ký tự!";
        // alert("Nhập tối đa 5 ký tự!");
        userName.focus();
        return false;
    }else{
        document.querySelector("#errUser").innerHTML = "";
    }
    if(password.value == ""){
        document.querySelector("#errPass").innerHTML = "Bạn chưa nhập mật khẩu!";
        // alert("Bạn chưa nhập mật khẩu!");
        password.focus();
        return false;
    }else if(password.value.length < 8){
        document.querySelector("#errPass").innerHTML = "Mật khẩu không dưới 8 ký tự!";
        // alert("Mật khẩu không dưới 6 ký tự!");
        password.focus();
        return false;
    }else{
        document.querySelector("#errPass").innerHTML = "";
    }
    return true;
}