<?php
    //1.接收用户数据
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];

    //2.连接数据库
    require_once('./conn.php');

    //3.构造sql语句
    $sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$pwd."','".$mobile."','".$email."')";
    // echo $sql;

    //4.执行sql语句
    //mysqli_query 成功true 失败false
    $rst = mysqli_query($link,$sql);

    //5.根据执行结果返回json结果到前端
    if ($rst) {
        $rstArr=["isSuccess"=>true,"msg"=>"用户注册成功"];
        //json_encode() 把关联数组转换为json格式
        echo json_encode($rstArr);
    } else {
        $rstArr=["isSuccess"=>false,"msg"=>"用户注册失败"];
        echo json_encode($rstArr);
    }
?>