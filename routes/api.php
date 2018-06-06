<?php

Route::model('/question', 'App\Model\Question');
Route::model('/category', 'App\Model\Category');


Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
