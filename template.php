<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>模板</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- template.css -->
    <link rel="stylesheet" href="./dist/css/minCss/tempale.min.css">
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
        <h1>模板</h1>
    </div>

    <!-- 页脚 -->
    <?php
        require_once ("./footer.php");
    ?>

    <!-- jquery.js -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>
</html>