<?php
    function loadall_taikhoan(){
        $sql="select * from users order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql= "select * from users where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function insert_taikhoan($email,$tendangnhap,$pass,$tel){
        $sql="insert into users(email,tendangnhap,pass,tel) values ('$email','$tendangnhap','$pass','$tel')";
        pdo_execute($sql);
    }
    function checkuser($tendangnhap,$pass){
        $sql= "select * from users where tendangnhap='".$tendangnhap."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql= "select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$email,$user,$pass,$address,$tel){
        $sql="update taikhoan set email='".$email."', user='".$user."', pass='".$pass."', address='".$address."', tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    
?>