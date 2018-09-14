<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登陆</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- template.css -->
  <link rel="stylesheet" href="./dist/css/minCss/tempale.min.css">
  <!-- bootstrapValidator.css -->
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
  <!-- login.css -->
  <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
</head>

<body>

  <!-- 头部 -->
  <header>
    <?php
            require_once ("./navLogin_top.php");
        ?>

    <?php
            require_once ("./headerLogin.php");
        ?>
  </header>

  <!-- 内容 -->
  <div id="cont" class="container">
    <div class="panel panel-default">
      <!-- 头部栏 -->
      <div class="panel-heading">用户登录</div>
      <!-- 内容 -->
      <div class="panel-body">
          <h3>请输入用户名和密码</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-sm-offset-3 control-label">用户名</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">密 码</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
            </div>
          </div>
          <!-- 记住密码 -->
          <!-- <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div> -->
          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
              <button type="submit" class="btn btn-success btn-primary">登陆</button>
              &emsp;&emsp;&emsp;&emsp;
              <a href="./register.php">新用户，请注册</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- 页脚 -->
  <?php
        require_once ("./footer.php");
    ?>

  <!-- jquery.js -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- bootstrap.js -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- bootstrapValidator.js -->
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</body>

</html>