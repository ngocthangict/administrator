<?php
class UserController extends Controller{
    
    function get_index(){
        echo "User";
    }
    
    
    function getSignIn(){
        return View::make('administrator::login-form');
    }
}