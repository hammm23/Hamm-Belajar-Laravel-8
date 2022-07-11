<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use \App\Http\Middleware\RedirectIfAuthenticated;
use \App\Http\Middleware\Authenticate;
use App\Http\Controllers\DataController;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ilham Prabowo",
        "email" => "ilhamprabowo009@gmail.com",
        "image" => "franku.jpg.jpg"
    ]);
});




Route::get('/blog', function () {$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ilham Prabowo",
        "body" => "George Kusunoki Miller (ジョージ・楠木・ミラー, Jōji Kusunoki Mirā, born 18 September 1992), known professionally as Joji and formerly as Filthy Frank and Pink Guy, is a Japanese singer, rapper, comedian, and former YouTuber. Miller's music has been described as a mix between R&B, lo-fi, and trip hop.

        Miller began his YouTube career in 2011 shortly after moving to the United States, gaining recognition for portraying oddball characters on the satire channels TVFilthyFrank, TooDamnFilthy, and DizastaMusic. The channels, which featured comedy hip hop, rants, extreme challenges, and ukulele and dance performances, are noted for their shock humor and prolific virality. Miller's videos helped popularize the Harlem Shake, that contributed to the commercial success of Baauer's song of the same name which led to the production of memes and collaborations with YouTubers.As Pink Guy, Miller released two comedy studio albums and an extended play between 2014 and 2017."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Freddy Andaru",
        "body" => "George Kusunoki Miller (ジョージ・楠木・ミラー, Jōji Kusunoki Mirā, born 18 September 1992), known professionally as Joji and formerly as Filthy Frank and Pink Guy, is a Japanese singer, rapper, comedian, and former YouTuber. Miller's music has been described as a mix between R&B, lo-fi, and trip hop.
        Miller began his YouTube career in 2011 shortly after moving to the United States, gaining recognition for portraying oddball characters on the satire channels TVFilthyFrank, TooDamnFilthy, and DizastaMusic. The channels, which featured comedy hip hop, rants, extreme challenges, and ukulele and dance performances, are noted for their shock humor and prolific virality. Miller's videos helped popularize the Harlem Shake, that contributed to the commercial success of Baauer's song of the same name which led to the production of memes and collaborations with YouTubers.As Pink Guy, Miller released two comedy studio albums and an extended play between 2014 and 2017. 
        In late 2017, Miller retired as a YouTuber to pursue a music career under the name Joji. His debut album, Ballads 1, was released in 2018 and featured the single Slow Dancing in the Dark. His second album, Nectar (2020), contained the singles Sanctuary and Run. In 2022, he released the US Billboard Hot 100 top-ten single Glimpse of Us, his highest charting song."
    ],
];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//  halaman single post 
Route::get('posts/{slug}', function($slug) {
     $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ilham Prabowo",
            "body" => "George Kusunoki Miller (ジョージ・楠木・ミラー, Jōji Kusunoki Mirā, born 18 September 1992), known professionally as Joji and formerly as Filthy Frank and Pink Guy, is a Japanese singer, rapper, comedian, and former YouTuber. Miller's music has been described as a mix between R&B, lo-fi, and trip hop.
    
            Miller began his YouTube career in 2011 shortly after moving to the United States, gaining recognition for portraying oddball characters on the satire channels TVFilthyFrank, TooDamnFilthy, and DizastaMusic. The channels, which featured comedy hip hop, rants, extreme challenges, and ukulele and dance performances, are noted for their shock humor and prolific virality. Miller's videos helped popularize the Harlem Shake, that contributed to the commercial success of Baauer's song of the same name which led to the production of memes and collaborations with YouTubers.As Pink Guy, Miller released two comedy studio albums and an extended play between 2014 and 2017."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ilham Andaru",
            "body" => "George Kusunoki Miller (ジョージ・楠木・ミラー, Jōji Kusunoki Mirā, born 18 September 1992), known professionally as Joji and formerly as Filthy Frank and Pink Guy, is a Japanese singer, rapper, comedian, and former YouTuber. Miller's music has been described as a mix between R&B, lo-fi, and trip hop.
            Miller began his YouTube career in 2011 shortly after moving to the United States, gaining recognition for portraying oddball characters on the satire channels TVFilthyFrank, TooDamnFilthy, and DizastaMusic. The channels, which featured comedy hip hop, rants, extreme challenges, and ukulele and dance performances, are noted for their shock humor and prolific virality. Miller's videos helped popularize the Harlem Shake, that contributed to the commercial success of Baauer's song of the same name which led to the production of memes and collaborations with YouTubers.As Pink Guy, Miller released two comedy studio albums and an extended play between 2014 and 2017. 
            In late 2017, Miller retired as a YouTuber to pursue a music career under the name Joji. His debut album, Ballads 1, was released in 2018 and featured the single Slow Dancing in the Dark. His second album, Nectar (2020), contained the singles Sanctuary and Run. In 2022, he released the US Billboard Hot 100 top-ten single Glimpse of Us, his highest charting song."
        ],
    ];


    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/datauser', [DataController::class, 'index'])->name('datauser');
Route::get('/createuser', [DataController::class, 'create'])->name('createuser');
Route::post('/createuser', [DataController::class, 'store'])->name('createuser')->middleware('auth');
Route::get('/edituser/{id}', [DataController::class, 'edit'])->name('edituser')->middleware('auth');
Route::post('/edituser/{id}', [DataController::class, 'update'])->name('edituser')->middleware('auth');
Route::get('/deleteuser/{id}', [DataController::class, 'destroy'])->name('deleteuser')->middleware('auth');







