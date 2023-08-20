<?php


namespace App\classes;


class product
{
public $products;
public function __construct()
{
    $this->products=[
        0=>[
            'id'=>1,
            'title'=>'Blue T Shirt',
            'price'=> 17500,
            'color'=>'Blue',
            'size'=>'xl',
            'imag'=>'slider1.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',
        ],
        1=>[
            'id'=>2,
            'title'=>'Blue Pant',
            'price'=> 7500,
            'color'=>'Blue',
            'size'=>'xxl',
            'imag'=>'slider2.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',
        ],
        2=>[
            'id'=>3,
            'title'=>'Sony Mobile',
            'price'=> 57500,
            'color'=>'Black',
            'size'=>'5.7',
            'imag'=>'slider3.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',
        ],
        3=>[
            'id'=>4,
            'title'=>'Samsung Mobile',
            'price'=> 67500,
            'color'=>'Gray',
            'size'=>'6.5',
            'imag'=>'slider4.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',
        ],
        4=>[      'id'=>5,
            'title'=>'I Phone',
            'price'=> 117500,
            'color'=>'Blue',
            'size'=>'6.5',
            'imag'=>'slider5.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',],
        5=>[      'id'=>6,
            'title'=>'Gold Color Saree',
            'price'=> 117500,
            'color'=>'Gould',
            'size'=>'F',
            'imag'=>'team-1.jpg',
            'Short_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Long_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus  animi consequatur labore molestiae sint sit? Commodi cumque, dignissimos eveniet illo impedit iusto minima, nobis non omnis similique ullam voluptatum.',],

    ];
}
public function index()
{
    return $this->products;
}
public function getProductDetails($productId)
{
    foreach ($this->products as $product)
    {
        if ($product['id']== $productId)
        {
            return $product;
        }
    }
}

}
