<?php


namespace App\classes;


class HomePage
{
   public function index()
   {
//       $_SESSION
       header('Location: action.php?page=signin');
   }


}