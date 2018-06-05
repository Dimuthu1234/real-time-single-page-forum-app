<?php

Route::model('/question', 'App\Model\Question');


Route::apiResource('/question', 'QuestionController');
