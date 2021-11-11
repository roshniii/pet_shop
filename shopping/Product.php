<?php

class Product
{

    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => 'Husky',
            'code' => '3DcAM01',
            'image' => 'product-images/huskyf.jpg',
            'price' => '60.00'
        ),
        "USm02" => array(
            'id' => '2',
            'name' => 'Golden Retreiver',
            'code' => 'USm02',
            'image' => 'product-images/goldenf.jpg',
            'price' => '70.00'
        ),
        "wkM03" => array(
            'id' => '3',
            'name' => 'Shitzu',
            'code' => 'wkM03',
            'image' => 'product-images/shitzuf.jpg',
            'price' => '80.00'
        ),
        "KKuk05" => array(
            'id' => '4',
            'name' => 'Poodle',
            'code' => 'KKuk05',
            'image' =>'product-images/poodle.jpg',
            'price' =>'50.00'
        ),
        "OOK9" => array(
            'id' => '5',
            'name' => 'French Bulldog',
            'code' => 'OOK9',
            'image' =>'product-images/bulldog.jpg',
            'price' =>'40.00'
        ),
        "RSu4" => array(
            'id' => '5',
            'name' => 'Boxer',
            'code' => 'RSu4',
            'image' =>'product-images/boxer.jpg',
            'price' =>'30.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
