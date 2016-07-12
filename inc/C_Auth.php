<?php

class C_Auth extends C_Base
{

    public function Action_Login()
    {


// Менеджеры.

        $mUsers = M_Users::Instance();

// Очистка старых сессий.
        $mUsers->ClearSessions();

// Выход.
        $mUsers->Logout();

// Обработка отправки формы.
        if (!empty($_POST)) {
//print_r($_POST);
            if ($mUsers->Login($_POST['login'],
                $_POST['password'],
                isset($_POST['remember']))
            ) {

                header('Location: /index.php?c=article&a=Show_all');
                exit();

            }
        }

        $this->content = $this->Template('theme/v_login.php',
            []);
    }



}





