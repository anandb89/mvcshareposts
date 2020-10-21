<?php

class Pages extends Controller {
    public function __construct(){
        //echo "Pages loaded";
    }

    public function index(){

        // If logged in show the post page not home
        if(isLoggedIn()){
            redirect('posts');
        }

        //Data to be passed to the view
        $data = [
            "title" => "SharePosts",
            "description" => "Simple blog built on testMVC"
        ];


        $this->view("pages/index", $data);
        
    }

    public function about(){
         //Data to be passed to the view
         $data = [
            "title" => "About Us",
            "description" => "App to share posts with other users"
        ];

        $this->view("pages/about", $data);
    }
}