<?php
/**
 * Created by PhpStorm.
 * User: Mt
 * Date: 2018/9/20
 * Time: 9:37
 */

//接收前端传过来的值
    $borrowType=$_POST["borrowType"];//s
    $borrowAmount=$_POST["bidRequestAmount"];
    $currentRate=$_POST["currentRate"];
    $monthes2Return=$_POST["monthes2Return"];
    $repayment=$_POST["inlineRadioOptions"];//s
    $minAmount=$_POST["minBidAmount"];
    $maxAmount=$_POST["maxBidAmount"];
    $rewardAmount=$_POST["totalRewardAmount"];
    $disableDays=$_POST["disableDays"];
    $borrowTitle=$_POST["borrowTitle"];//s
    $description=$_POST["description"];//s
    session_start();
    $userid=$_SESSION["userid"];

    //2. 构造sql语句【仔细】
    $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";
    // echo $sql;
    //3. 连接数据库
    require_once("./conn.php");

    //4. 执行sql语句
    $result=mysqli_query($link,$sql);

    //5. 根据执行的结果，封装json数据返回前端
    if($result){
        //成功
        $rsArray=["isSuccess"=>true,"msg"=>"借款信息提交成功!"];
        echo json_encode($rsArray);
    }
    else{
        //失败
        $rsArray=["isSuccess"=>false,"msg"=>"借款信息提交失败!"];
        echo json_encode($rsArray);
    }

    //释放内存
    mysqli_close($link);
?>