<?php


namespace App\classes;


class FullName
{
    public function grtFullName()
    {
        return $_POST['first_name']. ' '.$_POST['last_name'] .' '.$_POST['email'] .' '.$_POST['password'];
    }

}