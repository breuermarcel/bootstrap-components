<?php

Route::get("/", function () {
    return view("bs-components::showcase");
})->name("showcase");
