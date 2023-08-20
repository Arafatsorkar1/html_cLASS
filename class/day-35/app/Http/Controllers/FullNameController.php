<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FullNameController extends Controller
{
    public $fullName,$result;
    public $array=[];



    public  function index()
    {
        return view('full-name.index',[
            'categories' => Category::allCategories()
        ]);
    }


    public  function  getFullName(Request $request)
    {

       $this->fullName= $request->first_name.' '.$request->last_name;
       return redirect()->back()->with('result',$this->fullName);

    }




    public  function generatePassword()
    {
        return view('password.generate',[
            'categories' => Category::allCategories()
        ]);
    }




    public  function getPassword( Request $request)
    {

        $this->array = ['a','b','c','A','B','M','1','3','6','$','_','#','@'];

        for ($i =1;$i<= $request->leangth;$i++)
        {
            $randValue = rand(0,12);
            $this->result .= $this->array[$randValue];
        }
        return redirect()->back()->with('result',$this->result);

    }

}
