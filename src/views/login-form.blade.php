
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập - Quản lý văn bằng</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{Asset('packages/ovicsoft/administrator/')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container" style="margin-top: 120px;">
                <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{URL::to('/guest/sign-in')}}" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control input-sm" placeholder="Tài khoản" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-sm" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary btn-sm" />
                                <a href="{{URL::to('/guest/forget-password')}}">Quên mật khẩu ?</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
