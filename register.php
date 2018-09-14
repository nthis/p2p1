<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>用户注册</title>
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
          <h3>请填写注册信息，点击“提交注册”即可完成注册！</h3>
        <form id="myform" class="form-horizontal">
          <!-- 用户名 -->
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-sm-offset-3 control-label">用户名</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="username" placeholder="请输入用户名">
            </div>
          </div>

          <!-- 密码 -->
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">密 码</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" name="pwd" placeholder="请输入密码">
            </div>
          </div>

          <!-- 确认密码 -->
        <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">确认密码</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" name="checkpwd" placeholder="请确认密码">
              </div>
          </div>

        <!-- 电话 -->
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">电 话</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="tel" placeholder="请输入电话">
            </div>
          </div>

          <!-- 邮箱 -->
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">邮 箱</label>
              <div class="col-sm-3">
                <input type="emali" class="form-control" name="email" placeholder="请输入邮箱 ">
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
              <button type="submit" class="btn btn-success btn-primary">注册</button>
              &emsp;&emsp;&emsp;&emsp;
              <a href="./login.php">老用户，请登陆</a>
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
      // $('[data-toggle="tooltip"]').tooltip();
      $('#myform').bootstrapValidator({
        container: 'tooltip',
        //trigger: 'blur',
        feedbackIcons: { //根据验证结果显示的图标
            valid: 'glyphicon glyphicon-ok',  //验证成功的图标
            invalid: 'glyphicon glyphicon-remove',  //验证失败的图标
            validating: 'glyphicon glyphicon-refresh'  //正在加载时的图标
        },
        fields: {
          username: {
                message: '用户名验证失败',
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    stringLength: {
                        min: 2,
                        max: 8,
                        message: '用户名在2~8位'
                    }
                }
            },
            pwd: {
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '密码在6~18位'
                    }
                }
            },
            checkpwd: {
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '验证密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '验证密码在6~18位'
                    },
                    identical: {//与指定控件内容比较是否相同，比如两次密码不一致
                        field: 'pwd',//指定控件name
                        message: '两次密码不一致'
                    }
                }
            },
            tel: {
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '密码在6~18位'
                    }
                }
            },
            email: {
                message: '密码验证失败',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '密码在6~18位'
                    }
                }
            }
        }
    });
    })
  </script>

</body>

</html>