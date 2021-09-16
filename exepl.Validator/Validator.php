<?php


class Validation {
    public $error = false;

    public function  __construct($val) {
        $this->length($val);
        $this->valid($val);
        $this->random($val);
    }

    //Проверяем длину
    public function length($val) {
        if(strlen($val) < 4) {
            $this->error_msg('1');
        }
    }

    //Корректность
    public function valid($val) {
        if( preg_match('/[0-9]/', $val) !=true) {
            $this->error_msg('2');
        }
    }

    //Любая другая валидация проверка
    public function random($val) {
        if( true) {
            $this->error_msg('3');
        }
    }

    public function error_msg($code){
        if($code == '1'){
            echo"Длинна должна быть не менее 4 символов";
        }
        elseif($code == '2'){
            echo"введите корректные данные , разрешены только цифры";
        }
        elseif($code == '3'){
            echo" Любая следующаяя проверка";
        }

        die();//останавливаешь скрипт
    }
}






