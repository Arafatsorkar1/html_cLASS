<?php


namespace App\classes;


class Student
{
    private  $country = 'Bangladesh';
    public function manage()
    {
        echo $this->country;
    }

}