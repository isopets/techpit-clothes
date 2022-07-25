<?php
  Route::name('product.')
  ->group(function()){
    Route::get('/', 'ProductController@')
  }
