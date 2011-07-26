<?php

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

if ($page == 'content_page') {

    $o_content_page = new gkh_content_page();

    if ($action == 'add') {
        if (isset($_POST['data'])) {
            $o_content_page->addContentPage($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('conpage', '');
        $o_smarty->assign('txt', 'Добавить контентную страницу');
    } elseif ($action == 'edit' && isset($_GET['id'])) {

        if (isset($_POST['data'])) {
            $o_content_page->updateContentPage($_GET['id'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('txt', 'Редактировать контентную страницу');
        $o_smarty->assign('conpage', $o_content_page->getContentPage($_GET['id']));
    } elseif ($action == 'del') {
        $o_content_page->deleteContentPage($_GET['id']);
        simo_functions::chLocation('?page=' . $page);
    } else {
        $o_smarty->assign('conpage_list', $o_content_page->getAllContentPage());
    }
}

if ($page == 'user') {

    $o_user = new share_user();
    $o_smarty->assign('role_list', $o_user->role_list);

    if ($action == 'add') {
        if (isset($_POST['data'])) {
            $o_user->addUser($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('user', '');
        $o_smarty->assign('txt', 'Добавить пользователя');
    } elseif ($action == 'edit' && isset($_GET['login'])) {

        if (isset($_POST['data'])) {
            $o_user->updateUser($_GET['login'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('txt', 'Редактировать пользователя');
        $o_smarty->assign('user', $o_user->getUser($_GET['login']));
    } elseif ($action == 'del') {
        $o_user->deleteUser($_GET['login']);
        simo_functions::chLocation('?page=' . $page);
    } else {
        $o_smarty->assign('user_list', $o_user->getAllUser());
    }
}

if ($page == 'service') {

    $o_service = new service();

    if ($action == 'add') {
        if (isset($_POST['data'])) {
            $o_service->addService($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('service', '');
        $o_smarty->assign('txt', 'Добавить услугу');
    } elseif ($action == 'edit' && isset($_GET['id'])) {

        if (isset($_POST['data'])) {
            $o_service->updateService($_GET['id'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('txt', 'Редактировать услугу');
        $o_smarty->assign('service', $o_service->getService($_GET['id']));
    } elseif ($action == 'del') {
        $o_service->deleteService($_GET['id']);
        simo_functions::chLocation('?page=' . $page);
    } else {
        $o_smarty->assign('service_list', $o_service->getAllService());
    }
}

if ($page == 'client') {

    $o_client = new client();

    if ($action == 'add') {
        if (isset($_POST['data'])) {
            $o_client->addClient($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('client', '');
        $o_smarty->assign('txt', 'Добавить клиента');
    } elseif ($action == 'edit' && isset($_GET['id'])) {

        if (isset($_POST['data'])) {
            $o_client->updateClient($_GET['id'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('txt', 'Редактировать клиента');
        $o_smarty->assign('client', $o_client->getClient($_GET['id']));
    } elseif ($action == 'del') {
        $o_client->deleteClient($_GET['id']);
        simo_functions::chLocation('?page=' . $page);
    } elseif ($action == 'del_img' && isset($_GET['id'])) {
        $o_client->deleteFile($_GET['id'], 'img');
        simo_functions::chLocation('?page=' . $page);
        exit;
    } else {
        $o_smarty->assign('client_list', $o_client->getAllClient());
    }
}

if ($page == 'project') {

    $o_project = new project();
    $o_client = new client();

    if ($action == 'add') {
        if (isset($_POST['data'])) {
            $o_project->addProject($_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        //$o_smarty->assign('project', '');
        $o_smarty->assign('txt', 'Добавить проект');
        $o_smarty->assign('client_list', $o_client->getAllClient());
    } elseif ($action == 'edit' && isset($_GET['id'])) {

        if (isset($_POST['data'])) {
            $o_project->updateProject($_GET['id'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_smarty->assign('txt', 'Редактировать проект');
        $o_smarty->assign('project', $o_project->getProject($_GET['id']));
        $o_smarty->assign('client_list', $o_client->getAllClient());
    } elseif ($action == 'del') {
        $o_project->deleteProject($_GET['id']);
        simo_functions::chLocation('?page=' . $page);
    } elseif ($action == 'service' && isset($_GET['id'])) {
        if (isset($_POST['data'])) {
            $o_project->saveServiceList($_GET['id'], $_POST['data']);
            simo_functions::chLocation('?page=' . $page);
            exit;
        }

        $o_service = new service();
        $o_smarty->assign('service_list', $o_service->getAllService());
        $o_smarty->assign('service_array', $o_service->getServiceArrayByProject($_GET['id']));
        $o_smarty->assign('project', $o_project->getProject($_GET['id']));
    } elseif ($action == 'photo_view') {
        $o_gallery = new gallery();
        $o_smarty->assign('project', $o_project->getProject($_GET['id']));

        if ($subaction == 'add') {
            if (isset($_POST['data'])) {
                $o_gallery->addImage($_POST['data']);
                simo_functions::chLocation('?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
                exit;
            }

            $o_smarty->assign('txt', 'Добавить фотографию');
        } elseif ($subaction == 'edit') {

            if (isset($_POST['data'])) {
                $o_gallery->updateImage($_GET['img_id'], $_POST['data']);
                simo_functions::chLocation('?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
                exit;
            }

            $o_smarty->assign('txt', 'Редактировать фотографию');
            $o_smarty->assign('img', $o_gallery->getImage($_GET['img_id']));
        } elseif ($subaction == 'del') {
            $o_gallery->deleteImage($_GET['img_id']);
            simo_functions::chLocation('?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
        } else {
            $o_smarty->assign('gallery', $o_gallery->getImageByObject($_GET['id']));
        }
    } else {
        $o_smarty->assign('project_list', $o_project->getAllProject());
    }
}

if ($page == '') {
    $o_service = new service();
    $o_smarty->assign('service_list', $o_service->getAllService());
}

$o_smarty->display('admin/index.tpl');
?>