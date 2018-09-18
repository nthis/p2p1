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
            require_once ("./nav_top.php");
        ?>

        <?php
            require_once ("./headerRegister.php");
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
                <form id="myform" class="form-horizontal" method="post">
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
                            <input type="text" class="form-control" name="mobile" placeholder="请输入电话">
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
            //表单验证
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
                        },
                        checkpwd: {
                            message: '确认密码验证失败',
                            //验证的规则
                            validators: {
                                //非空
                                notEmpty: {
                                    message: '确认密码不能为空'
                                },
                                //长度
                                stringLength: {
                                    min: 6, //最小
                                    max: 18, //最大
                                    message: '确认密码长度必须在6~18位之间'
                                },
                                //密码相同性的验证
                                identical: {
                                    field: 'pwd', //对哪个字段做比较
                                    message: '两次输入的密码不一致'
                                }
                            }
                        },
                        email: {
                            message: '电子邮件验证失败',
                            //验证的规则
                            validators: {
                                //非空
                                notEmpty: {
                                    message: '电子邮件必须填写'
                                },
                                //电子邮件的规则
                                emailAddress: {
                                    message: '电子邮件格式不正确'
                                }
                            }
                        },
                        mobile: {
                            message: '手机号码验证失败',
                            //验证的规则
                            validators: {
                                //非空
                                notEmpty: {
                                    message: '手机号码必须填写'
                                },
                                //手机号码正则表达式验证
                                regexp: {
                                    regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                                    message: '手机号码格式不正确'
                                }
                            }
                        }
                    }
                })
                .on('success.form.bv', function (e) {
                    // 阻止表单的默认行为
                    e.preventDefault();

                    //获取表单实例
                    var $form = $(e.target);

                    //获取验证实例
                    var bv = $form.data('bootstrapValidator');
                    
                    //收集数据
                    var data = $form.serialize();
                    // console.log(data);
                    //使用Ajax提交表单数据
                    $.post('./api/registerMsg.php', data, function (result) {
                        if ( result.isSuccess ) {
                            alert(result.msg);
                            location.href='./login.php';
                        } else {
                            alert(result.msg);
                        }
                    }, 'json');
                });
        })
    </script>

</body>

</html>