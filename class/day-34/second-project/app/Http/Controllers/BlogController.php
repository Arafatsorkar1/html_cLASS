<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogs, $blog, $categories, $result;
    public function blogs ()
    {
        $this->categories = Category::allCategories();

        $this->blogs = Blog::allBlogs();
        return view('blog.blogs', [
            'blogs' => $this->blogs,
            'categories' => $this->categories
        ]);
    }

    public function details ($id)
    {
        $this->categories = Category::allCategories();
        $this->blog = Blog::getBlogDetails($id);
        return view('blog.details', [
            'blog'  => $this->blog,
            'categories' => $this->categories
        ]);
    }

    public function categoryBlog ($categoryId)
    {
        $this->categories = Category::allCategories();

        $this->blogs = Blog::allBlogs();

        $this->result = [];
        foreach ($this->blogs as $blog)
        {
            if ($blog['category_id'] == $categoryId)
            {
                array_push($this->result, $blog);
            }
        }

        return view('blog.blogs', [
            'blogs' => $this->result,
            'categories' => $this->categories
        ]);

    }
}

