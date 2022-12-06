<?php

class UserController extends CI_Controller{


   public function index(){
    // echo "index methodu";
    $this->load->view('user/index');
   

   } 

   public function about(){
    // echo "about methodu";
    $this->load->view('user/about');

   }


   public function contact(){
   // echo "contact methodu";  
   $this->load->view('user/contact');

   }

   public function settings(){
    $this->load->view('user/settings');

   }

    // http:/localhost/dailynewss/
    // http://localhost/dailynewss/index.php/UserController/index

    // http://localhost/dailynewss/index.php/UserController/index
    // http://localhost/dailynewss/UserController/index

    // http://localhost/dailynewss//azima

    




}
