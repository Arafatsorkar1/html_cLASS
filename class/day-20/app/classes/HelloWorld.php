<?php

namespace App\classes;

use mysql_xdevapi\Statement;

class HelloWorld{
    public $message;

    public $firstName , $lastName;
    public $firstNumber,$middnumber, $lastNumber;

    public function __construct()
    {
        $this->message = 'Hello World';

        $this->firstName='Arafatpub';
        $this->lastName='Sorkar';


    }

    /**
     * @return mixed
     */
    public function index()
    {
//        echo $this->message;
//        3 major rules
        /*
         * start with $ sign
         * a-z A-Z 0-9 ,-
         * no number in first
         */
        echo $this->firstName.' &nbsp; &nbsp; &nbsp; '.$this->lastName;
      echo  gettype($this->firstName);
     echo $this->firstNumber=10;
       echo $this->lastNumber=20;
       echo $this->middnumber= 30;





       echo '<br>';
       echo $this->firstNumber++;echo '<br>';
       echo --$this->firstNumber;

       echo '<br>';
       echo $this->firstNumber+$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber-$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber*$this->lastNumber;
 echo '<br>';
       echo $this->firstNumber/$this->lastNumber;
       echo '<br>';
       echo $this->firstNumber%$this->lastNumber;

        echo '<br>';
        echo $this->firstNumber+=$this->lastNumber;

        echo '<br>';
        echo $this->firstNumber-=$this->lastNumber;

        echo '<br>';
        echo $this->firstNumber*=$this->lastNumber;

        echo '<br>';
        echo $this->firstNumber%=$this->lastNumber;




        echo '<br>';
        echo '<br>';
        echo $this->firstNumber>$this->lastNumber;

        echo '<br>';
        echo '<br>';
        echo $this->firstNumber<$this->lastNumber;


        echo '<br>';
        echo '<br>';
        echo $this->firstNumber>=$this->lastNumber;


        echo '<br>';
        echo '<br>';
        echo $this->firstNumber<=$this->lastNumber;


        echo '<br>';
        echo '<br>';
        echo $this->firstNumber==$this->lastNumber;



        echo '<br>';
        echo '<br>';
        echo $this->firstNumber===$this->lastNumber;


        echo '<br>';
        echo '<br>';
        echo $this->firstNumber!=$this->lastNumber;



        echo '<br>';
        echo '<br>';
        echo $this->firstNumber!==$this->lastNumber;





        echo '<br>';
        echo '<br>';
        echo ($this->firstNumber<$this->lastNumber) && ($this->middnumber<$this->lastNumber);


echo '<br>';
        echo '<br>';
        echo ($this->firstNumber<$this->lastNumber) && ($this->middnumber>$this->lastNumber);


echo '<br>';
        echo '<br>';
        echo ($this->firstNumber>$this->lastNumber) && ($this->middnumber<$this->lastNumber);


echo '<br>';
        echo '<br>';
        echo ($this->firstNumber>$this->lastNumber) && ($this->middnumber>$this->lastNumber);




        echo '<br>';
        echo '<br>';
        echo ($this->firstNumber<$this->lastNumber) || ($this->middnumber<$this->lastNumber);


        echo '<br>';
        echo '<br>';
        echo ($this->firstNumber<$this->lastNumber) || ($this->middnumber>$this->lastNumber);


        echo '<br>';
        echo '<br>';
        echo ($this->firstNumber>$this->lastNumber) || ($this->middnumber<$this->lastNumber);


        echo '<br>';
        echo '<br>';
        echo ($this->firstNumber>$this->lastNumber) ||($this->middnumber>$this->lastNumber);








        echo '<br>';
        echo '<br>';

        $a= false;
        echo !$a;


//        Statement

       $this->firstNumber=10;
//       or
        $b=20;
         $this->firstNumber=$b;
         echo '<br>';

        $this->firstNumber=10;
        if ($this->firstNumber<20)
        {
            echo 'Hello';
        }
        echo '<br>';
        if ($this->firstNumber=='10')
        {
            echo 'Arafat';
        }
        else
        {
            echo 'sorkar';
        }

        echo '<br>';

        $this->firstNumber=10;
        $this->nameOne='arif';
        $this->nameTwo='binti';

        if ( $this->nameOne=='arif')

        {
            echo 'Arafat';
        }
    else
        {
            echo 'sorkar';
        }


        echo '<br>';

        $this->firstNumber=10;
        {
            echo 'unlimited statement checker elsif';

        }
        echo '<br>';
        echo '<br>';
        switch ($this->firstNumber)
        {
            case 5 : echo 'hello';
            break;
            case 10 : echo 'hello w';
            break;
            case 15 : echo 'hellog';
            break;
            default : echo 'Arafat';
        }










    }

}