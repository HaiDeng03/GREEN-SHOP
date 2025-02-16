<div class="wrapper">
        <h1>ĐĂNG KÝ</h1>
        <form action="" method="post" >
            <input type="Email" id="email" name="email" placeholder="Email">
            <input type="text" id="tendangnhap" name="tendangnhap" placeholder="Tên đăng nhập">
            <input type="password" id="pass" name="pass" placeholder="Mật khẩu">
            <input type="text" id="tel" name="tel" placeholder="Số điện thoại">
            <button type="submit" name="dangky" value="submit">Đăng ký tài khoản</button>
            <h4 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h4>
        </form>
 <br>
        
        <div class="member">
            Bạn đã có tài khoản? <a href="index.php?action=dangnhap">Đăng nhập ngay</a>
        </div>
    </div>