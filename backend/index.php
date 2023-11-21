<?php
require('vendor/autoload.php');

// Start session
session_start();

// Include router class
include('src/lib/Route.php');

// Add base route (startpage)
Route::add('/game/([1-9]*)', function ($choice) {
    require __DIR__ . '/src/views/game.php';
});

// Set language
Route::add('/language/([a-z]*)', function ($language) {
    $_SESSION["language"]=$language;

    require __DIR__ . '/src/views/language.php';
});

// Set language
Route::add('/setting/([a-z]*)', function ($setting) {
    $_SESSION["setting"]=$setting;

    require __DIR__ . '/src/views/setting.php';
});

// Add base route (startpage)
Route::add('/session', function () {
    require __DIR__ . '/src/views/session.php';
}, 'get');

Route::run('/');

?>