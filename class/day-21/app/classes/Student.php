<?php


namespace App\classes;


class Student
{

    public $students;
    public function __construct()
    {
        $this->students=[

            0=>[

                    'name'=> 'Sovon',
                    'email'=>'skqws@gmail',
                    'phone'=>'1251441',
                    'city'=> 'Dhaka',
                    'Address'=>'Muhammadpur',


            ],


            1=>[

                'name'=> 'Rana',
                'email'=>'rana@gmail',
                'phone'=>'254441',
                'city'=> 'Dhaka',
                'Address'=>'Asulia',

            ],


            2=>[

                'name'=> 'thh',
                'email'=>'thh@gmail',
                'phone'=>'20014441',
                'city'=> 'Dhaka',
                'Address'=>'tejgon',
            ],


            3=>[

                'name'=> 'kkjh',
                'email'=>'kkjh@gmail',
                'phone'=>'00251441',
                'city'=> 'Dhaka',
                'Address'=>'Mhnu',
            ],


            4=>[

                'name'=> 'kaeri',
                'email'=>'kaeri@gmail',
                'phone'=>'2571441',
                'city'=> 'Dhaka',
                'Address'=>'jinjira',
            ],

        ];
    }
    public function getAllStudents()
    {
        return $this->students;
    }



}

