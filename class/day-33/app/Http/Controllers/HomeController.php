<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categories;
    public  function home()
    {
        $this->categories = Category::allCategories();
        return view('home.home',[
            'categories'=>$this->categories
        ]);
    }
    public  function about()
    {
        $this->categories = Category::allCategories();
        return view('about.about',[
            'categories'=>$this->categories
        ]);
    }
    public  function contact()
    {
        $this->categories = Category::allCategories();
        return view('contact.contact',[
        'categories' =>$this->categories
        ]);
    }

}
