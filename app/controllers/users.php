<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'users';

//fetch only admin
 /*$admin_users = selectAll($table, ['admin' => 1]); */

//fetch all users in db

$admin_users = selectAll($table);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';


function loginUser($user)
{
    
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if($_SESSION['admin']) {
        header('location:' . BASE_URL . '/admin/dashboard.php');
    }
    else {
        header('location:' . BASE_URL . '/index.php');
    }
    
    exit();
}


if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){
    $errors = validateUser($_POST);
    if(count($errors) === 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);

        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table , $_POST);
            $_SESSION['message'] = "Admin user created successfully";
            $_SESSION['type'] = "success";
            header('location:' . BASE_URL . '/admin/users/index.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table , $_POST);
            $user = selectOne($table , ['id' => $user_id]);
           
            //Log user in
            loginUser($user);
        }
       
    }

    else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
   
}

if(isset($_POST['update-admin'])) {
    adminOnly();
    $errors = validateUser($_POST);
    if(count($errors) === 0)
    {
        $id = $_POST['id'];
        unset( $_POST['passwordConf'], $_POST['update-admin'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $count = update($table , $id, $_POST);
        $_SESSION['message'] = "Admin user updated successfully";
        $_SESSION['type'] = "success";
        header('location:' . BASE_URL . '/admin/users/index.php');
        exit();

       
       
    }

    else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}
//delete user
if(isset($_GET['id'])) {
    
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'] === 1 ? 1 : 0;
    $email = $user['email'];
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table , ['username' => $_POST['username']]);

        if($user && password_verify($_POST['password'], $user['password']) ){
            //login , redirect 
            loginUser($user);
        }else {

            array_push($errors, 'Wrong credentials');

        }
    }
    
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Admin user delete successfully";
    $_SESSION['type'] = "success";
    header('location:' . BASE_URL . '/admin/users/index.php');
    exit();

}