<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
include 'views/head.php';

// header
include 'views/header.php';

// menu
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        include 'views/home.php';
        break;
    case 'articles':
        //get articles from the model
        require_once 'model/getarticles.php';

        $templateParser->assign('articles_list',$result_list);
        //rewrite to smarty template
        $templateParser->display('articles.tpl');
        break;
    case 'about':
        require_once 'model/getabout.php';
        $templateParser->assign('about_list',$result_list);
        //use 'display' to show a template
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        //contact
        include 'views/contact.php';
        break;
    case 'admin':

        include 'views/admin.php';
        break;
}

// footer
include 'views/footer.php';

?>