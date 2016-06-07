<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <!--[if lte IE 8]><script src="<?= $view->url()->getStatic('theme:js/ie/html5shiv.js')?>"></script><![endif]-->
        <link rel="stylesheet" href="<?= $view->url()->getStatic('theme:css/main.css') ?>" >
        <!--[if lte IE 8]><link rel="stylesheet" href="<?= $view->url()->getStatic('theme:css/ie8.css') ?>" ><![endif]-->
    </head>
    <body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">
                <!-- Logo -->
                <?php if ($params['show_text_logo']) : ?>
                    <div id="logo">
                        <h1><a href="<?= $view->url()->get() ?>">
                                <?= $app->config('system/site')->get('title') ?>
                            </a></h1>
                    </div>
                <?php else : ?>
                    <div id="logopic">
                        <a href="<?= $view->url()->get() ?>">
                                <img height="67px" src="<?= $this->escape($params['logo']) ?>" alt="<?= $app->config('system/site')->get('title') ?>">
                            </a>
                    </div>

                <?php endif ?>

                <!-- Nav -->
                <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                <nav id="nav">
                        <?= $view->menu('main', 'menu-navbar.php') ?>
                </nav>
                <?php endif ?>
            </header>
        </div>

        <!-- Banner -->
        <?php if ($view->position()->exists('banner_top')) : ?>
                        <?= $view->position('banner_top', 'banner_top.php') ?>
        <?php endif; ?>

        <!-- Features -->
        <?php if ($view->position()->exists('features')) : ?>
            <?= $view->position('features', 'features.php') ?>
        <?php endif; ?>

        <!-- Main -->
        <div id="main-wrapper">
            <div class="container">
                <div class="row 200%">
                        <!-- Sidebar -->
                        <?php if ($view->position()->exists('sidebar')) : ?>
                            <?= $view->position('sidebar', 'sidebar.php') ?>
                        <?php endif; ?>
                    <div class="<?= $params['mainbody_size'] ?> 12u(medium) important(medium)">
                        <!-- Content -->
                        <div id="content">
                            <?= $view->render('messages') ?>
                            <?= $view->render('content') ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <?php if ($view->position()->exists('footerpos')) : ?>
                        <?= $view->position('footerpos', 'footerpos.php') ?>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="12u">
                        <div id="copyright">
                            <ul class="menu">
                                <li><?= $params['copyright'] ?></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>Pagekit adaptation: <a href="http://2ld.ru"><img src="<?= $view->url()->getStatic('theme:css/images/logo.svg')?>" style="margin-bottom: -12px;" alt="2LD" title="2LD"/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Scripts -->
    <script src="<?= $view->url()->getStatic('theme:js/jquery.min.js')?>"></script>
    <script src="<?= $view->url()->getStatic('theme:js/jquery.dropotron.min.js')?>"></script>
    <script src="<?= $view->url()->getStatic('theme:js/skel.min.js')?>"></script>
    <script src="<?= $view->url()->getStatic('theme:js/util.js')?>"></script>
    <!--[if lte IE 8]><script src="<?= $view->url()->getStatic('theme:js/ie/respond.min.js')?>"></script><![endif]-->
    <script src="<?= $view->url()->getStatic('theme:js/main.js')?>"></script>
    </body>
</html>
