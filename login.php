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
            require_once ("./nav_top.php");
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

          <!-- 表单 -->
        <form id="myform" class="form-horizontal" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-sm-offset-3 control-label">用户名</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="username" placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 col-sm-offset-3 control-label">密 码</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" name="pwd" placeholder="请输入密码">
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

  <!-- 模态框 -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-success" data-dismiss="modal" id="jump">立即跳转</button>
          </div>
        </div>
      </div>
    </div>

  <!-- jquery.js -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- bootstrap.js -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- bootstrapValidator.js -->
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  <script>
    $(function () {
      $('#myform')
        .bootstrapValidator({
            message: 'This value is not valid', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度
                        stringLength: {
                            min: 2, //最小
                            max: 11, //最大
                            message: '用户名长度必须在2~11位之间'
                        }
                    }
                },
                pwd: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 18, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            // 阻止表单默认行为
            e.preventDefault();

            // 获取表单实例
            var $form = $(e.target);

            // 获取验证实例
            var bv = $form.data('bootstrapValidator');

            // 收集数据
            var data = $form.serialize();
            // console.log(data);

            // 发送Ajax请求
            $.post('./api/loginMsg.php', data, function(result) {
              console.log(result.isSuccess);
              if( result.isSuccess ) {
                //成功提示的标题
                $('#myModalLabel').text(result.msg);
                
                //成功显示的内容
                $('.modal-body').html("<span class='glyphicon glyphicon-ok' id='ojbk'></span><span id='waitNum'>6</span>秒后跳转到个人中心...");

                //设置定时器
                let num=6;
                var times=setInterval(( ) => {
                  num--;
                  $('#waitNum').text(num);
                  if (num == 0) {
                    clearInterval(times);
                    location.href="./personal.php";
                  }
                },1000)

              //模态框立即跳转按钮
              $("#jump").show(); //显示按钮

              $("#jump").on("click",function () {
                 //停止计时器
                  clearInterval(times);
                  location.href="./personal.php";
              });
              } else {
                //失败时显示的标题
                $('#myModalLabel').text(result.msg);
                //失败显示的内容
                $('.modal-body').html('<span class="glyphicon glyphicon-remove" id="remove"></span>请检查账号或密码是否正确');
              //隐藏模态框立即跳转按钮
                $("#jump").hide();

              }
              //显示模态框
              $('#myModal').modal('show');

            }, 'json');
        });
    })
  </script>

  <script>

  </script>

</body>

</html>