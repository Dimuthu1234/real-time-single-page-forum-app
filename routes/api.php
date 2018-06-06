<?php

Route::model('/question', 'App\Model\Question');
Route::model('/category', 'App\Model\Category');
Route::model('/question/{question}/reply', 'App\Model\Reply');


Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/question/{question}/reply', 'ReplyController');


Route::post('/like/{reply}', 'LikeController@likeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');
