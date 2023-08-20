<?php


namespace App\classes;


class User
{
    public function allUser()
    {
        return[
            0=>[
                'id'=>1,
                'email'=>'admin@admin.com',
                'password'=>'123',
            ],
            1=>[
                'id'=>2,
                'email'=>'mehedi@beshi.com',
                'password'=>'123',
            ],
        ];
    }

    protected function country()
    {
        echo 'country: Bangladesh';
    }

    protected function phoneNumber()
    {
        echo '0123452482';
    }


}