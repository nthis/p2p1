<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>账户信息</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- template.css -->
    <link rel="stylesheet" href="./dist/css/minCss/tempale.min.css">
    <!-- personal.css -->
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">

    <!-- jquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- checkstatus.js -->
    <script src="./dist/js/checkStatus.min.js"></script>
</head>
<body>
    
    <!-- 头部 -->
    <header>
        <?php
            require_once ("./nav_top.php");
        ?>

        <?php
            require_once ("./header.php");
        ?>
    </header>

    <!-- 内容 -->
    <div id="cont" class="container">
        <div class="row">
            <!-- 左部菜单 -->
            <div class="col-sm-3 col-xs-6" id="mainMeua">
                <div class="list-group">
                    <a href="#" class="list-group-item">投资项目</a>
                    <a href="#" class="list-group-item">借款项目</a>
                    <a href="#" class="list-group-item pro">借款项目</a>
                    <a href="#" class="list-group-item pro">还款明细</a>
                    <a href="./personal.php" class="list-group-item active">账户信息</a>
                    <a href="#" class="list-group-item pro">实名认证</a>
                    <a href="#" class="list-group-item pro">银行卡管理</a>
                    <a href="#" class="list-group-item pro">登陆记录</a>
                    <a href="#" class="list-group-item">资产详情</a>
                    <a href="#" class="list-group-item pro">账户流水</a>
                    <a href="#" class="list-group-item pro">充值明细</a>
                    <a href="#" class="list-group-item pro">提现记录</a>
                    <a href="#" class="list-group-item pro">收款明细</a>
                    <a href="#" class="list-group-item">个人资料</a>
                </div>
            </div>

            <!-- 右部内容 -->
            <div class="col-sm-9 col-xs-12" id="mainCont">
                <button type="button" class="btn btn-primary btn-xs" id="onOff">显示</button>

                <!-- 面板 -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- 头部 -->
                        <div class="row borderBottom">
                            <div class="col-xs-2">
                                <img class="img-responsive" src="./imgs/head_icon.jpg" alt="">
                            </div>
                            <div class="col-xs-10">
                                <p class="paragraph">昵 称：源代码教育</p>
                                <p class="paragraph">用户名： <sapn id="username">小强</sapn> </p>
                                <p class="paragraph">最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>

                        <!-- 内容 -->
                        <div class="row content">
                            <div class="col-xs-4 amount">
                                <p>总金额: <span>10000元</span> </p>
                            </div>
                            <div class="col-xs-4 amount">
                                <p>可用金额: <span>8000元</span> </p>
                            </div>
                            <div class="col-xs-4 amount">
                                <p>冻结金额: <span>2000元</span> </p>
                            </div>

                            <div class="col-sm-12">
                                <p class="text-center">
                                    <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                                    <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                                </p>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="clearfix col">
                                    <img src="./imgs/shiming.png" alt="" class="pull-left">

                                    <div class="pull-left">
                                        <h5>实名认证</h5>
                                        未认证 <a href="#">认证</a>
                                    </div>
                                </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="clearfix col">
                                    <img src="./imgs//shouji.jpg" alt="" class="pull-left">

                                    <div class="pull-left">
                                        <h5>手机认证</h5>
                                        未认证 <a href="#">查看</a>
                                    </div>
                                </div>
                                <p>可以收到系统操作信息,并增加使用安全性</p>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="clearfix col">
                                    <img src="./imgs/youxiang.jpg" alt="" class="pull-left">

                                    <div class="pull-left">
                                        <h5>邮箱认证</h5>
                                        未认证 <a href="#">查看</a>
                                    </div>
                                </div>
                                <p>您可以设置邮箱来接收重要信息</p>
                            </div>

<!--                            <div class="col-sm-4 col-xs-12">-->
<!--                                <div class="clearfix col">-->
<!--                                    <img src="./imgs/baozhan.jpg" alt="" class="pull-left">-->
<!---->
<!--                                    <div class="pull-left">-->
<!--                                        <h5>VIP会员</h5>-->
<!--                                        普通用户 <a href="#">查看</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <p>VIP会员，让你更快捷的投资</p>-->
<!--                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 页脚 -->
    <?php
        require_once ("./footer.php");
    ?>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        //按钮
        $("#onOff").on('click',function () {
            $("#cont").toggleClass("toogle");
            if($("#cont").hasClass("toogle")){
                $(this).text('隐藏')
            } else {
                $(this).text('显示')
            }
        });

        //手机端移动划出菜单栏
        var x1=0,x2=0,y1=0,y2=0;
        $(window).on('touchstart',function (e) {
            // console.log("开始触摸",e.originalEvent.changedTouches[0].clientX);
            x1 = e.originalEvent.changedTouches[0].clientX;
            y1 = e.originalEvent.changedTouches[0].clientY;
            // console.log(x1);
        });

        $(window).on('touchend',function (e) {
            // console.log("结束触摸",e.originalEvent.changedTouches[0].clientX);
            x2 = e.originalEvent.changedTouches[0].clientX;
            y2 = e.originalEvent.changedTouches[0].clientY;
            // console.log(x2);
            //滑动距离
            var dx=x2-x1;
            var dy=y2-y1;
            // console.log(dx);
            if (Math.abs(dx)>=100){
                // $("#onOff").trigger("click");//完整写法
                $("#onOff").click();//简写写法
            }
        });

    </script>
</body>
</html>