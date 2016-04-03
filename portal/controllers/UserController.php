<?php


class UserController extends BaseController
{
    public function actionLogin()
    {
        $err = '';
        if ($post = Application::request()->getPost('User')) {

            $model = new UsersModel();
            $result = $model->login($post);


            if ($result) {
                $_SESSION['user_login'] = $result['user_login'];
                $this->redirect('/');
            } else {
                $err = '<h2>Вы ввели неправильный логин/пароль</h2>';
            }
        }
        $this->render('login', ['err' => $err]);
    }

    public function actionLogout()
    {
        unset($_SESSION['user_login']);

        $this->redirect('/');
    }

    public function actionRegister()
    {
        $err = '';
        if ($post = Application::request()->getPost('User')) {
            $user = new UsersModel();
            $validation = $user->validateRegistration($post);
            if ($validation === true) {
                $realPassword = $post['user_password'];
                $post['user_password'] = md5(md5(trim($post['user_password'])));
                $user->save($post);
                $_POST['User[user_login]'] = $post['$post'];
                $_POST['User[user_password]'] = $realPassword;
                $this->actionLogin('/user/login');
            } else {
                $err = $validation;
            }
        }
        $this->render('register', ['err' => $err]);
    }
}