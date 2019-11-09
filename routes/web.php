<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//Route de Test
Route::get('blade', function () {
    return view('child');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('legal', function () {
    return view('legal');
});
//Benjamin, n'hésite pas à modifier les routes en fonction de ce que tu as besoin pour la partie légal
Route::get('legal/cookies', function () {
    return view('legalcookies');
});
Route::get('legal/CGV', function () {
    return view('legalcgv');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('shop/{id}', function () {
    return view('article');
});
Route::get('events', function () {
    return view('events');
});
Route::get('events/{id}', function () {
    return view('event');
});


Route::get('testDiplayCampus', function () {

    $campuss = App\Campus::all();
    foreach ($campuss as $campus)
    {
        echo $campus->id;
        echo '<br>';
        echo $campus->name;
        echo '<br>';
        echo $campus->address;
        echo '<br>';
        echo $campus->city;
        echo '<br>';
        echo "-----";
        echo '<br>';
    }
});
Route::get('testDiplayUsers', function () {

    $users = App\User::all();
    foreach ($users as $user)
    {
        echo $user->id;
        echo '<br>';
        echo $user->last_name;
        echo '<br>';
        echo $user->first_name;
        echo '<br>';
        echo $user->email;
        echo '<br>';
        echo $user->password;
        echo '<br>';
        echo $user->created_at;
        echo '<br>';
        echo $user->updated_at;
        echo '<br>';
        echo $user->id_campus;
        echo ':';
        echo $user->campus->name;
        echo ':';
        echo $user->campus->address;
        echo ':';
        echo $user->campus->city;
        echo '<br>';
        echo $user->id_roles;
        echo ':';
        echo $user->role->name;
        echo '<br>';
        echo $user->id_images;
        echo ':';
        echo $user->image->path;
        echo ':';
        echo $user->image->alt;
        echo '<br>';
        echo "-----";
        echo '<br>';
    }
});


Route::get('testDiplayEvents', function () {

    $events = App\Event::all();
    foreach ($events as $event)
    {
        echo $event->id;
        echo '<br>';
        echo $event->name;
        echo '<br>';
        echo $event->description;
        echo '<br>';
        echo $event->start_date;
        echo '<br>';
        echo $event->end_date;
        echo '<br>';
        echo $event->price;
        echo '<br>';
        echo $event->recurrent;
        echo '<br>';
        echo $event->validate;
        echo '<br>';
        echo $event->id_images;
        echo ':';
        echo $event->image->path;
        echo ':';
        echo $event->image->alt;
        echo '<br>';
        echo $event->id_users;
        echo ':';
        echo $event->creator->email;
        echo '<br>';
        echo "<br>PARTICIPATE:<br>";
        foreach($event->participate as $user)
        {
            echo '| ';
            echo $user->email;
            echo '<br>';
        }
        echo "<br>VOTED:<br>";
        foreach($event->voted as $user)
        {
            echo '| ';
            echo $user->email;
            echo '<br>';
        }
        echo "<br>LOCALISATION:<br>";
        foreach($event->localisation as $campus)
        {
            echo '| ';
            echo $campus->name;
            echo '<br>';
        }
        echo "<br>POSTS:<br>";
        foreach($event->posts as $post)
        {
            echo '| ';
            echo $post->text;
            echo ' : ';
            echo $post->user->email;
            echo '<br>';
        }
        echo "<br>IMAGES:<br>";
        foreach($event->illustrateeventsmulti as $illustrate)
        {
            echo '| ';
            echo $illustrate->image->path;
            echo ' : ';
            echo $illustrate->user->email;
            echo '<br>';
        }
        
        echo "--------------------------------";
        echo '<br>';
    }
});

