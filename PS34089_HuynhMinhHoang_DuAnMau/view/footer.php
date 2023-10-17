 <!-----------------------Footer--------------------------->
 <footer>
     <div id="footer-wrap">
         <div id="footer-bottom">
             <div class="ft-bt-main">
                 <div class="ft">
                     <ul class="main-ft">
                         <li><a href="">Thông tin web</a></li>
                         <li><a href="">Chính sách bảo hành</a></li>
                         <li><a href="">Chính sách đổi trả</a></li>
                         <li><a href="">Giao hàng & thanh toán</a></li>
                     </ul>
                 </div>
                 <div class="ft">
                     <ul class="main-ft">
                         <li><a href="">Mua hàng online</a></li>
                         <li><a href="">Hướng dẫn online</a></li>
                         <li><a href="">Hóa đơn</a></li>
                         <li><a href="">Cảnh báo</a></li>
                     </ul>
                 </div>
                 <div class="ft">
                     <ul class="main-ft">
                         <li><a href="">Gọi mua:00000000</a></li>
                         <li><a href="">Kỹ thuật:00000000</a></li>
                         <li><a href="">Bảo hành:00000000</a></li>
                         <li><a href="">Khiếu nại:00000000</a></li>
                     </ul>
                 </div>
                 <div class="ft">
                     <ul class="main-ft">
                         <li>
                             <ion-icon name="home-outline"></ion-icon><a href="">P.Tân Hưng Thuận, Q.12, TP.Hồ Chí Minh</a>
                         </li>
                         <li>
                             <ion-icon name="call-outline"></ion-icon><a href="">0123456789</a>
                         </li>
                         <li>
                             <ion-icon name="mail-outline"></ion-icon><a href="">techphone@gmail.com</a>
                         </li>
                     </ul>
                     <div class="logo-tt">
                         <a href="">
                             <ion-icon name="logo-facebook"></ion-icon>
                         </a>
                         <a href="">
                             <ion-icon name="logo-google"></ion-icon>
                         </a>
                         <a href="">
                             <ion-icon name="logo-twitter"></ion-icon>
                         </a>
                         <a href="">
                             <ion-icon name="logo-instagram"></ion-icon>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="dp_flex__pay">
                 <div class="pay">
                     <img class="item1" src="./view/layout/image/fjb.png" alt="">
                     <img class="item2" src="./view/layout/image/foxpay.png" alt="">
                     <img class="item3" src="./view/layout/image/visa.png" alt="">
                     <img class="item4" src="./view/layout/image/mastercard.png" alt="">
                     <img class="item5" src="./view/layout/image/zalopay.png" alt="">
                     <img class="item6" src="./view/layout/image/vnpay.png" alt="">
                 </div>
             </div>
         </div>
         <div class="lastFoo">
             <div class="content">© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM
                 cấp ngày
                 02/01/2007.
                 Địa chỉ:  P. Tân Hưng Thuận, Q.12, TP. Hồ Chí Minh. Điện thoại: 028 38125960.</div>
         </div>
     </div>
 </footer>

 </body>
 <!-- <script src="./view/layout/js/product.js"></script> -->
 <script>
const toggle_menu = document.querySelector(".toggle_menu");
const toggle_close = document.querySelector(".toggle_close");
const mobile_menu = document.querySelector(".mobile-menu");
const overflow = document.querySelector(".overflow");
toggle_menu.addEventListener("click", () => {
    mobile_menu.style.transform = 'translateX(0)';
    mobile_menu.style.opacity = '1';
    mobile_menu.style.visibility = 'visible';
    overflow.style.display = 'block';
})
toggle_close.addEventListener("click", () => {
    mobile_menu.style.transform = 'translateX(100%)';
    mobile_menu.style.opacity = '0';
    mobile_menu.style.visibility = 'hidden';
    overflow.style.display = 'none';
})
overflow.addEventListener("click", () => {
    mobile_menu.style.transform = 'translateX(100%)';
    mobile_menu.style.opacity = '0';
    mobile_menu.style.visibility = 'hidden';
    overflow.style.display = 'none';
})
 </script>

 </html>