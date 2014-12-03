<?php
Route::get('hello',function(){
   //Cpanel::showPage();
});

Route::controller('cpanel','CpanelController');
Route::controller('users','UserController');
Route::controller('func','FuncController');