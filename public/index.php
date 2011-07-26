<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/allinclud.php';

$o_smarty = new simo_smarty();
$o_fmuser = new share_user();

if ($o_fmuser->isLogin()) {
    $o_smarty->assign('login', true);
    $o_smarty->assign('user', simo_session::getVar('login', 'user'));
    $o_smarty->assign('role', $o_fmuser->getUserRole());

    if (isset($_GET['logout'])) {
        $o_fmuser->logOut();
        header("Location: /");
    }

    if ($o_fmuser->getUserRole() == share_user::UT_ADMIN) {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/admin/index.php';
    } else {

    }
} else {
    $o_smarty->assign('login', false);

    if (isset($_POST['login']) && isset($_POST['psw'])) {
        if ($o_fmuser->logIn($_POST['login'], $_POST['psw'])) {
            header("Location: /");
        } else {
            $o_smarty->assign('login_fail', '1');
        }
    }

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

    if ($page == '') {
        $o_smarty->assign('service_list', $o_service->getAllService());
    }
    $o_smarty->display('index.tpl');
}
?>