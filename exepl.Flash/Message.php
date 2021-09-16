<?php
require 'functions.php';


class Message
{
    public $message = false;

    public function __construct($val)
    {
        $this->registration($val);
    }

    //Проверяем есть ли в сессии пользователь
    public function registration($user)
    {
        if ($user) {
            $this->show_msg('registration');
        }else {
            $this->show_msg('no_registration');
        }
    }


    public function show_msg($value)
    {
        if ($value == 'registration') {
            echo "Пользователь Зарегистрирован! Поздравляем!";
        } elseif ($value == 'no_registration') {
            echo "Зарегистоируйтесь Пожалуйста!";
        }
        die();//останавить скрипт
    }
}
