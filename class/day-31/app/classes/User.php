<?php


namespace App\classes;


class User
{
    protected $name='bitm';
    protected $city = 'Dhaka';
    public function index()
    {
        echo 'Institute Name is '.$this->name.'and city is'.$this->city;
    }

}