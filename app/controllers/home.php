<?php

Class Home extends Controller
{
    public function index($a='',$b='')
    {
        
       $this->view("home");
    }
}