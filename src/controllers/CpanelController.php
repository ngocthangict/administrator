<?php
class CpanelController extends Controller{
    
    function get_index(){
        return View::make('administrator::dashboard');
    }
}