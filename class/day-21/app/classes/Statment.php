<?php


namespace App\classes;


class Statment
{
    public $message;
    public $firstNumber;
    public $lastNumber;
    public $number;

    public $Name, $Email, $Phone , $Data;

    public function __construct()
    {
    }
    public function index()
    {
       echo $this->message="hello world";
       echo "<br>";
        echo "<br>";

       $this->firstNumber =10;
       $this->lastNumber =10;
       $this->number=10;

       $this->Name ='Arafat Sorkar';
       $this->Email='arafatsorkar12345@gmail.com';
       $this->Phone='01318452438';


       for ($this->firstNumber;$this->firstNumber<=30 ;$this->firstNumber++)
       {
//           echo 'I am sorry<br>';
           echo $this->firstNumber.', ';
       }
       echo "<br>";
        echo "<br>";

       while ($this->lastNumber<15)
       {
           echo $this->lastNumber. ' ';
           $this->lastNumber++;
       }
        echo "<br>";
        echo "<br>";

       do{
           echo $this->number.', ';
           $this->number++ ;

       }
       while($this->number<12);


        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";


        $this->Data=['Rohim', 'karim',10 , 20, 10 ,1.2, 'mail.com'];

            $this->Data[4];


        echo "<br>";
        echo "<br>";
        $this->Data=[
            'name' => 'Arfat',
            'email'=> 'sorkar@gmail.com',
            'phone'=> '22410355',
        ];
        echo $this->Data['email']; echo "<br>";
        echo $this->Data['phone']; echo "<br>";
        echo $this->Data['name']; echo "<br>";

        echo "<br>";
        echo "<br>";


        $this->Name=[];
        $this->Name[0]='Arif';
        echo $this->Name[0];


        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $this->Data=[
            0=> [

                'name' => 'Sorkar',
                'email'=> 'sorkaeeeeer@gmail.com',
                'phone'=> '20145354',

            ],
            1=> [

                'name' => 'Sorkar',
                'email'=> 'sorkaeeeeer@gmail.com',
                'phone'=> '20145354',

            ],

            2=> [

                'name' => 'Sorkar',
                'email'=> 'sorkaeeeeer@gmail.com',
                'phone'=> '20145354',

            ],

            3=> [

                'name' => 'Sorkar',
                'email'=> 'sorkaeeeeer@gmail.com',
                'phone'=> '20145354',

            ],
        ];
        echo $this->Data[1]['name'];

        echo "<br>";
        echo "<br>";

        foreach ($this->Data as $Value)
        {
            echo $Value['name'];

        }
        echo "<br>";
        echo "<br>";

       foreach ($this->Data as $Value)
       {
          echo 'name:',' '; echo $Value['name'],' ';
           echo 'email:',' '; echo $Value['email'],' ';
           echo 'phone:',' '; echo $Value['phone']."<br>";
       }


        echo "<br>";
        echo "<br>";
        echo '<pre>';
        print_r($this->Data);

        echo "<br>";
        echo "<br>";
        var_dump($this->Data);






    }

}