<?php

namespace Application\controller;

class Home extends Controller
{

    public function index()
    {
        $productName = "iphone";
        $this->view('app.index' , compact('productName'));
    }

    public function create()
    {
        echo "this is create method !";
    }

}