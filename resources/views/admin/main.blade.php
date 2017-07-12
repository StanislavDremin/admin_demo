<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="cs" content="<?= csrf_token()?>">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{asset('asset/css/normalize.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/admin/css/components.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/admin/css/main.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrap">
    <div class="sidebar sidebar_left">
        <div class="nav_title">
            <a href="/admin/" class="site_title">
                <i class="fa fa-paw"></i>
                <span>Web todo</span>
            </a>
        </div>

        <div class="profile_left">
            <div class="profile_pic">
                <img src="{{asset('asset/admin/img/img.jpg')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Приветствуем!</span>
                <h2>Admin</h2>
            </div>
        </div>
        <menu-left></menu-left>
    </div>
    <div class="section_content">
        <header>
            <a href="javascript:" class="toggle_menu"><i class="fa fa-bars"></i></a>
            <div class="right_bar">
                <div class="message_bar">
                    <div class="envelope">
                        <a href="javascript:" class="info-number">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                    </div>
                    <div class="profile">
                        <a href="javascript:" class="user-profile dropdown-toggle">
                            <img src="{{asset('asset/admin/img/img.jpg')}}" class="ava" alt="">
							Admin ST
                            <span class=" fa fa-angle-down"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <section class="content_bar">
            <div class="col-xs-9">
            </div>
        </section>
    </div>
</div>

<script src="{{asset('asset/admin/js/jquery-3.2.1.min.js')}}"></script>

<?if($app->environment() == 'dev'):?>
    <script src="{{asset('asset/vendor/vue.js')}}"></script>
<?else:?>
    <script src="{{asset('asset/vendor/vue.min.js')}}"></script>
<?endif;?>

<script src="{{asset('asset/vendor/vue-router.min.js')}}"></script>
<script src="{{asset('asset/admin/js/builder.js')}}"></script>

</body>
</html>