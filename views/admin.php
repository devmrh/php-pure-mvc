<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#"
                                          class="brand-logo"><?= Config::get('site_name') ?>
            - <?= __('lng.admin', 'Admin Section') ?></a>
        <?php if (Session::get('username')) { ?>
            <ul class="right hide-on-med-and-down">
                <li <?php if (App::getRouter()->getController() == 'pages') { ?> class="active" <?php } ?> ><a
                            href="/admin/pages">Pages</a></li>
                <li <?php if (App::getRouter()->getController() == "contacts") { ?> class="active" <?php } ?> ><a
                            href="/admin/contacts">contacts</a></li>
                <li><?php echo '<a href="/admin/users/logout">Logout</a>';

                    ?><form></form></li>
                <li><a href="/">go gome</a></li>
            </ul>
        <?php } ?>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/admin/pages">Pages</a></li>
            <li><a href="/admin/contacts">contacts</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h3 class="header center orange-text">admin layout</h3>
        <div class="row center">
            <h5 class="header col s12 light">


                <div>
                    <?php
                    if (Session::hasFlash()) {
                        ?>
                        <div class="" role="alert">

                            <p style="font-size: 14px;color: red"><?php Session::flash() ?></p>


                        </div>
                    <?php } ?>

                </div>

                <?= $data['content'] ?>
                <?php $aa = new Session();
                $aa::setFlash("hoy");


                ?>


                <?= __('lng.test', 'default_value') ?></h5>
        </div>

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
<script src="/js/admin.js"></script>

</body>
</html>