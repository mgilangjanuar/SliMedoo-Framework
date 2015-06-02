<?php
require 'config/config.php';

// ------------------------------------------ //
// ---------------- Homepage ---------------- //
// ------------------------------------------ //
$app->get('/', function () use ($site) {
    $data = 'views/home.php';
    include_once 'views/_default_template.php';
});

// ------------------------------------------ //
// ------------- Create Function ------------ //
// ------------------------------------------ //
$app->get('/create', function () use ($site) {
    $data = 'views/create.php';
    include_once 'views/_default_template.php';
});

$app->post('/create', function () use ($site) {
    $site['db']->insert('book', [
        'title' => $site['app']->request()->params('title')
    ]);
    $site['app']->redirect($site['base_url'] . '/view');
});

// ------------------------------------------ //
// ------------- Update Function ------------ //
// ------------------------------------------ //
$app->get('/update/:id', function ($id) use ($site) {
    $book = $site['db']->select('book', '*', ['id' => $id])[0];
    $data = 'views/update.php';
    include_once 'views/_default_template.php';
});

$app->post('/update/:id', function ($id) use ($site) {
    $site['db']->update('book', [
        'title' => $site['app']->request()->params('title')
    ], ['id' => $id]);
    $site['app']->redirect($site['base_url'] . '/view');
});

// ------------------------------------------ //
// ------------- Delete Function ------------ //
// ------------------------------------------ //
$app->get('/delete/:id', function ($id) use ($site) {
    $site['db']->delete('book', ['id' => $id]);
    $site['app']->redirect($site['base_url'] . '/view');
});

// ------------------------------------------ //
// -------------- View Function ------------- //
// ------------------------------------------ //
$app->get('/view', function () use ($site) {
    $datas = $site['db']->select('book', '*');
    $data = 'views/view.php';
    include_once 'views/_default_template.php';
});

// run application
$app->run();