<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?= Config::get('site_name')?></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li <?php if (App::getRouter()->getController() == 'pages') { ?> class="active" <?php } ?> ><a href="/">صفحه سوالات</a></li>
            <li <?php if (App::getRouter()->getController() == "contacts") { ?> class="active" <?php } ?> ><a href="/contacts">پشتیبانی</a></li>
            <li <?php if (App::getRouter()->getController() == "posts") { ?> class="active" <?php } ?> ><a href="/posts/asking">یک سوال بپرسید!</a></li>

        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pages">Pages</a></li>
            <li><a href="/contacts">contacts</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <div class="row center">
            <h5 class="header col s12 light">


                <div>
                    <?php
                    if (Session::hasFlash()) {
                        ?>
                        <div style="background: red" role="alert">
                            <?php Session::flash() ?>
                        </div>
                    <?php } ?>

                </div>

                <?= $data['content'] ?>

                <?php
                if (Session::hasFlash()) {
                    ?>
                    <div class="" role="alert">

                        <p style="font-size: 14px;color: red"><?php Session::flash() ?></p>


                    </div>
                <?php } ?>



                <br><br>
<!--                <?/*= __('lng.test','default_value')*/?></h5>
-->        </div>

        <div class="row center">
        </div>
        <br><br>

    </div>
</div>


<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">my web site.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="#">mvc</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>

</body>
</html>