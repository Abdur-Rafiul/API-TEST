<?php

use App\Http\Controllers\RelationshipController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['status' => 'ok']);
});

Route::controller(RelationshipController::class)->group(function () {
    Route::get('/one-to-one', 'oneToOne');
    Route::get('/one-to-many', 'oneToMany');
    Route::get('/many-to-one', 'manyToOne');
    Route::get('/many-to-many', 'manyToMany');
    Route::get('/has-on-through', 'hasOnThrough');
    Route::get('/has-many-through', 'hasManyThrough');
    Route::get('/one-to-one-morph', 'morphOne');
});    