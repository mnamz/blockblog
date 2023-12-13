<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/posts/{slug}', [BlogController::class, 'show'])->name('post.single');
Route::get('/project', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/project/{slug}', [PortfolioController::class, 'show'])->name('project.single');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');



// Route::get('/blog', function () {
//     return Inertia::render('Blog', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->name('blog');

// Route::get('/blog', [PostController::class, 'listing'])->name('blog');
// Route::get('/blog/1', [PostController::class, 'show'])->name('blog.show');
Route::get('/blog-single', function () {
    return Inertia::render('Blog/Single', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('blog.single');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::resource('projects', ProjectController::class);
    Route::resource('posts', PostController::class);
    
    Route::get('/site/settings', function(){
        return Inertia::render('Site/Show');
    })->name('site.settings');
    Route::get('/site/settings', [ProfileController::class, 'index'])->name('site.settings');
    Route::put('/site/settings/update', [ProfileController::class, 'update'])->name('site.settings.update');
});
