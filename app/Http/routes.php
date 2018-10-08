<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

    $data = [
        'title'=>'This is Laravel Email course',
        'Content'=>'I hope you guys like this course'
    ];

    Mail::send('email.test',$data, function ($message){

        $message->to('sentoemail@gmail.com', 'John Smith')->subject('Welcome!');
    });

//    return view('welcome');
});



Route::get('/calstack', function (){

    $subCatArray = array([
        'Category1' => [
            1 => 'This is oneof product',
            2 => 'this is product2'
        ],
        'Category2' => [
            4 => 'product 3',
            5 => 'product 4'
        ]
    ]);

    foreach($subCatArray as $sub){
      $catefoory =$sub['Category1'];
      $catefoory2 =$sub['Category2'];

    }

    $array_cat_value = array(
        'Categories1'=>$catefoory,
        'Categories2'=>$catefoory2

    );


   return view('welcome', $array_cat_value);



});