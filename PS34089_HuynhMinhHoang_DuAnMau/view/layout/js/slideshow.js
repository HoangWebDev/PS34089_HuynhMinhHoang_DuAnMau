/*Tạo mảng chứa các ảnh*/ 
const arrHinh = [
    "Realme-C55-720-220-720x220.webp",
    "Mac-2880-800-1920x533-1.webp",
    "wo-top-2880-800-1920x533-1.webp",
    "khuyen-mai2-1.jpg",
    "iPad10-2880-800-1920x533-1.webp"
];
/* Tạo chỉ số index trong mảng */ 
var curIdx = 0;
/* Hàm next ảnh */
function nextImg() {
    curIdx++;
    if(curIdx >= arrHinh.length){
        curIdx = 0;
    }
    document.querySelector("#myImg").src = `./view/layout/image/${arrHinh[curIdx]}`;
}
setInterval(nextImg, 3000);
/* Hàm prev ảnh */
function prevImg() {
    curIdx--;
    if(curIdx < 0){
        curIdx = arrHinh.length-1;
    }
    document.querySelector("#myImg").src = `./view/layout/image/${arrHinh[curIdx]}`;
}

