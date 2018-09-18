<?php
    //1.接收用户数据
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);

    //2.连接数据库
    require_once('./conn.php');

    //3.构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$pwd."'";
    // echo $sql;
    
    //4.获取字符集
    $rst = mysqli_fetch_assoc(mysqli_query($link,$sql));
    // var_dump($rst);

    //5.根据执行结果返回json结果到前端
    if ($rst!=null) {
        $rstArr=["isSuccess"=>true,"msg"=>"用户登陆成功"];
        //json_encode() 把关联数组转换为json格式
        echo json_encode($rstArr);

        //启用session
        session_start();

        //编写session
        $_SESSION['userid']=$rst["userid"];   
        $_SESSION['username']=$rst["username"]; 
        
    } else {
        $rstArr=["isSuccess"=>false,"msg"=>"用户登陆失败"];
        echo json_encode($rstArr);
    }
?>