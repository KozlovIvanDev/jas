<style>
    .copyright_date{
        font-size: .8rem;
        font-weight: lighter;
        color: #000;
    }
</style>
<footer id="contact" class="footer"> 
    <div class="footer_container">
        <div class="footer_column">
            <h4 class="footer_column_header">Можливості системи</h4> 
            <div class="footer_column_list">
                <a href="../index.html">Для учнів</a>
                <a href="../index.html">Для вчителів</a>
                <a href="../index.html">Для батьків</a>
                <a href="../index.html">Для розробників</a> 
            </div>
        </div>

        <div class="footer_column">
            <a href="../index.html">
                <img class="copy_head" src="../images/logo2.svg" alt="">
            </a>
            <div class="copyright_date"></div>
        </div>
            
        <div class="footer_column">
            <h4 class="footer_column_header">Наші контакти</h4> 
            <div class="footer_column_list">               
                <a href = "mailto: ikozlov15.ik@gmail.com" target="_blank">Пошта</a>
                <a href="https://www.google.com.ua/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%93%D0%B0%D0%B3%D0%B0%D1%80%D1%96%D0%BD%D0%B0,+23%D0%90,+%D0%91%D1%80%D0%BE%D0%B2%D0%B0%D1%80%D0%B8,+%D0%9A%D0%B8%D1%97%D0%B2%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB.,+07400/@50.5107,30.7921125,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4d9659d4d92c1:0x76265120d63d10fc!8m2!3d50.5107!4d30.7943012?hl=uk&authuser=0" target="_blank">Адреса</a>

                <a href="https://www.facebook.com/bsch7/" target="_blank">Facebook</a> 
                <a href="https://www.instagram.com/007_brvr/"target="_blank">Instagram</a> 
            </div>
        </div>
</footer>
<script>
    const year = new Date().getFullYear();

    const date = `Copyright &copy; <a class="lets-a" href="">CheckON</a> ${year}. All Rights Reserved.`;

    document.getElementsByClassName('copyright_date')[0].innerHTML = date;
</script>