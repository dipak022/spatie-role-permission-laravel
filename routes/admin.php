<?php

Route::group(['prefix'=>'admin', 'middleware'=>['auth:admin']], function(){

    
     // role route here 
     Route::resource('/role', App\Http\Controllers\Role\RolesController::class);

     //user Assign role update 
     Route::resource('/user', App\Http\Controllers\Role\UserController::class);

           
  


          
});