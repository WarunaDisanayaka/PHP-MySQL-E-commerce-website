<?php

Class Signup extends Controller
{
    public function index()
    {
        
       $data['page_title']="Signup"; 
       $this->view("Signup",$data);
    }
}