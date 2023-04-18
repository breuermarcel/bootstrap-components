<?php

Route::get("/", function () {
    return view("bc::showcase");
})->name("showcase");
