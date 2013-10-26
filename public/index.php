<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/allinclud.php';

$o_smarty = new simo_smarty();
$o_fmuser = new share_user();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

if (isset($_GET['subaction'])) {
    $subaction = $_GET['subaction'];
} else {
    $subaction = '';
}

$o_smarty->assign('page', $page);
$o_smarty->assign('action', $action);
$o_smarty->assign('subaction', $subaction);

$o_service = new service();
$o_project = new project();
$o_client = new client();

if ($page == 'service') {
    if ($action == 'view') {
        $o_smarty->assign('service', $o_service->getService($_GET['id']));

        $o_smarty->assign('project_list', $o_project->getProjectByService($_GET['id']));
        $o_smarty->assign('client_list', $o_client->getClientByService($_GET['id']));
    } else {
        $o_smarty->assign('service_list', $o_service->getAllService());
    }
}

if ($page == 'client') {

    $o_client = new client();

    if ($action == 'view') {
        $o_smarty->assign('client', $o_client->getClient($_GET['id']));
        $o_smarty->assign('project_list', $o_project->getProjectByClient($_GET['id']));
    } else {
        $o_smarty->assign('client_list', $o_client->getAllClient());
    }
}

if ($page == 'project') {

    if (isset($_GET['is_complite'])) {
        $is_complite = $_GET['is_complite'];
    } else {
        $is_complite = -1;
    }

    $o_project = new project();
    $o_client = new client();

    if ($action == 'view') {
        $o_smarty->assign('project', $o_project->getProject($_GET['id']));
        $o_smarty->assign('service_list', $o_service->getServiceByProject($_GET['id']));

        $o_gallery = new gallery();
        $o_smarty->assign('gallery', $o_gallery->getImageByObject($_GET['id']));

        $o_client = new client();
        $o_smarty->assign('client', $o_client->getClientByProject($_GET['id']));
    } else {
        $o_smarty->assign('project_list', $o_project->getAllProject($is_complite));
    }


}

if ($page == 'news') {

    $o_news = new gkh_news();

    if ($action == 'view_news' && isset($_GET['id'])) {
        $news = $o_news->getNews($_GET['id']);
        $o_smarty->assign('news', $news);
    } else {
        $o_smarty->assign('news_list_full', $o_news->getAllNews());
    }
}

if ($page == 'content_page' && isset($_GET['title'])) {

    $o_content_page = new gkh_content_page();
    $o_smarty->assign('conpage', $o_content_page->getContentPage($_GET['title']));
    $o_smarty->assign('conpage_title', $_GET['title']);
}

if ($page == 'personal') {
    $o_personal = new gkh_personal();

    $o_smarty->assign('personal_list', $o_personal->getAllPersonal());
}

if ($page == 'license') {

    $o_license = new gkh_license();
    $o_smarty->assign('license_list', $o_license->getAllLicense());
}

if ($page == '') {
    $o_smarty->assign('service_list', $o_service->getAllService());
    $o_smarty->assign('page', 'service');
}

$o_news = new gkh_news();
$o_smarty->assign('news_list_main', $o_news->getTopNews());
$o_smarty->assign('client_list_main', $o_client->getAllClient());

$o_smarty->display('index.tpl');

