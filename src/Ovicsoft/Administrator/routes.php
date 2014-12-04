<?php

Route::get('/guest/sign-in','UserController@getSignIn');


Route::get('hello',function(){
   //Cpanel::showPage();
});

Route::controller('cpanel','CpanelController');