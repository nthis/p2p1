<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <!-- 引入bootstrap -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>

    <header>
        <?php
            require_once ("./nav_top.php");
        ?>

        <?php
            require_once ("./header.php");
        ?>
    </header>

    <!-- 轮播 -->
    <section>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- 小圆点 -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- 轮播图片 -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- 图片 -->
                    <img src="./imgs/banner01.jpg" alt="...">
                    <!-- 说明文字 -->
                    <div class="carousel-caption">

                    </div>
                </div>

                <div class="item">
                    <!-- 图片 -->
                    <img src="./imgs/banner02.jpg" alt="...">
                    <!-- 说明文字 -->
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- 控制按钮 -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- 三大特色 -->
    <div class="container">
        <div class="row">
            <div class="fea col-sm-4 col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="fea col-sm-4 col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
            <div class="fea col-sm-4 col-xs-12">
                <h3>投资理财</h3>
                <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
            </div>
        </div>
    </div>

    <!-- 投资信息 -->
    <div id="investor">
        <div class="container">
            <!-- 面板 -->
            <div class="panel panel-default">
                <!-- 面板头部 -->
                <div class="panel-heading clearfix">
                    <h3 class="pull-left">进行中借款</h3>
                    <a href="#" class="pull-right">进入投资列表</a>
                </div>

                <!-- Table -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>借款人</th>
                            <th class="displayTable">借款标题</th>
                            <th>年利率</th>
                            <th>金额</th>
                            <th>还款方式</th>
                            <th class="displayTable">进度</th>
                            <th class="text-center">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>张三</td>
                            <td class="displayTable">给我2000度过难关</td>
                            <td>10.00%</td>
                            <td>2,000.00</td>
                            <td>按月分期还款</td>
                            <td class="displayTable">78.00%</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm">查看</button>
                            </td>
                        </tr>

                        <tr>
                            <td>王五</td>
                            <td class="displayTable">江湖救急，借100吃饭</td>
                            <td>12.00%</td>
                            <td>2,000.00</td>
                            <td>按月分期还款</td>
                            <td class="displayTable">78.00%</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm">查看</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- 新闻资讯 -->
    <div id="news" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <!-- 面板头部 -->
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">企业最新资讯</h3>
                        <a href="#" class="pull-right">更多资讯</a>
                    </div>

                    <!-- 面板内容 -->
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <!-- 面板头部 -->
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">企业最新资讯</h3>
                        <a href="#" class="pull-right">更多资讯</a>
                    </div>

                    <!-- 面板内容 -->
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <!-- 面板头部 -->
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">企业最新资讯</h3>
                        <a href="#" class="pull-right">更多资讯</a>
                    </div>

                    <!-- 面板内容 -->
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <!-- 面板头部 -->
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">企业最新资讯</h3>
                        <a href="#" class="pull-right">更多资讯</a>
                    </div>

                    <!-- 面板内容 -->
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                    <div class="panel-body clearfix">
                        <p> <a href="#">央视力挺互联网金融</a> <span class="pull-right">发表日期：2015-03-23</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 页脚 -->
    <?php
        require_once ("./footer.php");
    ?>

    <!-- 引入jQuery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>