<?php
  Route::name('product.')
  ->group(function()){
    Route::get('/', 'Product')
  }
