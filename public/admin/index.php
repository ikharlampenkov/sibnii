<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/allinclud.php';

$o_smarty = new simo_smarty();
$o_fmuser = new share_user();

if ($o_fmuser->isLogin() && $o_fmuser->getUserRole() == share_user::UT_ADMIN) {
    $o_smarty->assign('login', true);
    $o_smarty->assign('user', simo_session::getVar('login', 'user'));
    $o_smarty->assign('role', $o_fmuser->getUserRole());

    if (isset($_GET['logout'])) {
        $o_fmuser->logOut();
        header("Location: /");
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

    global $__cfg;
    include_once $__cfg['site.dir'] . 'ckeditor/ckeditor.php';
    include_once $__cfg['site.dir'] . 'ckfinder/ckfinder.php';

    $CKEditor = new CKEditor();
    $CKEditor->basePath = '/ckeditor/';
    $CKEditor->returnOutput = true;

    $ckFinder = new CKFinder();
    $ckFinder->BasePath = '/ckfinder/';
    $ckFinder->SetupCKEditorObject($CKEditor);

    if ($page == 'content_page') {

        $o_content_page = new gkh_content_page();

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_content_page->addContentPage($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('conpage', '');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[content]', ''));
            $o_smarty->assign('txt', 'Добавить контентную страницу');
            $o_smarty->assign('conpage_title', '');
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_content_page->updateContentPage($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $conpage = $o_content_page->getContentPage($_GET['id']);

            $o_smarty->assign('txt', 'Редактировать контентную страницу');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[content]', $conpage['content']));
            $o_smarty->assign('conpage', $conpage);
            $o_smarty->assign('conpage_title', $conpage['title']);
        } elseif ($action == 'del') {
            $o_content_page->deleteContentPage($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } else {
            $o_smarty->assign('conpage_list', $o_content_page->getAllContentPage());
            $o_smarty->assign('conpage_title', '');
        }
    }

    if ($page == 'user') {

        $o_user = new share_user();
        $o_smarty->assign('role_list', $o_user->role_list);

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_user->addUser($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('user', '');
            $o_smarty->assign('txt', 'Добавить пользователя');
        } elseif ($action == 'edit' && isset($_GET['login'])) {

            if (isset($_POST['data'])) {
                $o_user->updateUser($_GET['login'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('txt', 'Редактировать пользователя');
            $o_smarty->assign('user', $o_user->getUser($_GET['login']));
        } elseif ($action == 'del') {
            $o_user->deleteUser($_GET['login']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } else {
            $o_smarty->assign('user_list', $o_user->getAllUser());
        }
    }

    if ($page == 'service') {

        $o_service = new service();

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_service->addService($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('service', '');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[content]', $service['content']));
            $o_smarty->assign('txt', 'Добавить услугу');
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_service->updateService($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $service = $o_service->getService($_GET['id']);
            $o_smarty->assign('txt', 'Редактировать услугу');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', $service['description']));
            $o_smarty->assign('service', $service);
        } elseif ($action == 'del') {
            $o_service->deleteService($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } else {
            $o_smarty->assign('service_list', $o_service->getAllService());
        }
    }

    if ($page == 'client') {

        $o_client = new client();

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_client->addClient($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('client', '');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', ''));
            $o_smarty->assign('txt', 'Добавить клиента');
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_client->updateClient($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $client = $o_client->getClient($_GET['id']);
            $o_smarty->assign('txt', 'Редактировать клиента');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', $client['description']));
            $o_smarty->assign('client', $client);
        } elseif ($action == 'del') {
            $o_client->deleteClient($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } elseif ($action == 'del_img' && isset($_GET['id'])) {
            $o_client->deleteFile($_GET['id'], 'img');
            simo_functions::chLocation('/admin/?page=' . $page);
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
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            //$o_smarty->assign('project', '');
            $o_smarty->assign('txt', 'Добавить проект');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', ''));
            $o_smarty->assign('client_list', $o_client->getAllClient());
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_project->updateProject($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $project = $o_project->getProject($_GET['id']);

            $o_smarty->assign('txt', 'Редактировать проект');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', $project['description']));
            $o_smarty->assign('project', $project);
            $o_smarty->assign('client_list', $o_client->getAllClient());
        } elseif ($action == 'del') {
            $o_project->deleteProject($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } elseif ($action == 'service' && isset($_GET['id'])) {
            if (isset($_POST['data'])) {
                $o_project->saveServiceList($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
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
                    simo_functions::chLocation('/admin/?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
                    exit;
                }

                $o_smarty->assign('txt', 'Добавить фотографию');
            } elseif ($subaction == 'edit') {

                if (isset($_POST['data'])) {
                    $o_gallery->updateImage($_GET['img_id'], $_POST['data']);
                    simo_functions::chLocation('/admin/?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
                    exit;
                }

                $o_smarty->assign('txt', 'Редактировать фотографию');
                $o_smarty->assign('img', $o_gallery->getImage($_GET['img_id']));
            } elseif ($subaction == 'del') {
                $o_gallery->deleteImage($_GET['img_id']);
                simo_functions::chLocation('/admin/?page=' . $page . '&action=photo_view&id=' . $_GET['id']);
            } else {
                $o_smarty->assign('gallery', $o_gallery->getImageByObject($_GET['id']));
            }
        } else {
            $o_smarty->assign('project_list', $o_project->getAllProject());
        }
    }


    if ($page == 'license') {

        $o_license = new gkh_license();

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_license->addLicense($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', ''));
            $o_smarty->assign('txt', 'Добавить лицензию');
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_license->updateLicense($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $license = $o_license->getLicense($_GET['id']);

            $o_smarty->assign('txt', 'Редактировать лицензию');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', $license['description']));
            $o_smarty->assign('license', $license);
        } elseif ($action == 'del') {
            $o_license->deleteLicense($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
            exit;
        } elseif ($action == 'del_file') {
            $o_license->deleteFile($_GET['id'], $_GET['field']);
            simo_functions::chLocation('/admin/?page=' . $page . '&action=edit&id=' . $_GET['id']);
        } else {
            $o_smarty->assign('license_list', $o_license->getAllLicense());
        }
    }

    if ($page == 'personal') {

        $o_personal = new gkh_personal();

        if ($action == 'add') {
            if (isset($_POST['data'])) {
                $o_personal->addPersonal($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $o_smarty->assign('txt', 'Добавить работника');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[contact]', ''));
        } elseif ($action == 'edit' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_personal->updatePersonal($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $personal = $o_personal->getPersonal($_GET['id']);

            $o_smarty->assign('txt', 'Редактировать работника');
            $o_smarty->assign('personal', $o_personal->getPersonal($_GET['id']));
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[contact]', $personal['contact']));
        } elseif ($action == 'del') {
            $o_personal->deletePersonal($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
            exit;
        } elseif ($action == 'del_file') {
            $o_personal->deleteFile($_GET['id'], $_GET['field']);
            simo_functions::chLocation('/admin/?page=' . $page . '&action=edit&id=' . $_GET['id']);
        } else {
            $o_smarty->assign('personal_list', $o_personal->getAllPersonal());
        }
    }

    if ($page == 'news') {

        $o_news = new gkh_news();

        if ($action == 'add_news') {
            if (isset($_POST['data'])) {
                $o_news->addNews($_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[description]', ''));
            $o_smarty->assign('txt', 'Добавить новость');
        } elseif ($action == 'edit_news' && isset($_GET['id'])) {

            if (isset($_POST['data'])) {
                $o_news->updateNews($_GET['id'], $_POST['data']);
                simo_functions::chLocation('/admin/?page=' . $page);
                exit;
            }

            $new = $o_news->getNews($_GET['id']);
            $o_smarty->assign('txt', 'Редактировать новость');
            $o_smarty->assign('ckeditor', $CKEditor->editor('data[full_text]', $new['full_text']));
            $o_smarty->assign('news', $new);
        } elseif ($action == 'del_news') {
            $o_news->deleteNews($_GET['id']);
            simo_functions::chLocation('/admin/?page=' . $page);
        } else {
            $o_smarty->assign('news_list', $o_news->getAllNews());
        }
    }

    if ($page == '') {
        $o_service = new service();
        $o_smarty->assign('service_list', $o_service->getAllService());
    }

    $o_client = new client();
    $o_smarty->assign('client_list_main', $o_client->getAllClient());

    $o_smarty->display('admin/index.tpl');

} else {
    $o_smarty->assign('login', false);

    if (isset($_POST['login']) && isset($_POST['psw'])) {
        if ($o_fmuser->logIn($_POST['login'], $_POST['psw'])) {
            header("Location: /admin/");
        } else {
            $o_smarty->assign('login_fail', '1');
        }
    }

    $o_smarty->display('login.tpl');
}

?>