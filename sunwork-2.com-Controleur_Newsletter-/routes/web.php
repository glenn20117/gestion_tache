<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\EmailProcedureController;
use App\Http\Controllers\EmailContactController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewsletterSubscriptionController;

/******************** ROUTES GET *******************/
Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});


Route::get('/sunwork-for-drivers', function () { return view('ui-drivers'); }); 
Route::get('/investment-sunwork', function () { return view('ui-investment'); }); 
Route::get('/contact-sunwork', function () { return view('ui-contact'); });
Route::get('/about-us-sunwork', function () { return view('ui-about-us'); });
Route::get('/services-sunwork', function () { return view('ui-services'); });
Route::get('/faq-sunwork', function () { return view('ui-faq'); });
Route::get('/legalization-sunwork', function () { return view('ui-legalization'); });
Route::get('/privacy-policy', function () { return view('ui-privacy-policy'); });
Route::get('/terms-of-service', function () { return view('ui-terms-of-service'); });

/******************** ROUTES POST *******************/
Route::post('/sending-email-for-procedure', [EmailProcedureController::class, 'sendEmailProcedure'])->name('email-procedure');
Route::post('/sending-email-for-contact', [EmailContactController::class, 'sendEmailContact'])->name('email-contact');

//Route::post('/admin/login', [AdminAuthController::class, 'login']);
//Route::post('/admin/logout', [AdminAuthController::class, 'logout']);
//Route::post('/admin/visiteurs', [VisiteurController::class, 'store']);
//Route::post('frequency', [AdminController::class, 'updateFrequency'])->name('admin.frequency.update');

Route::post('/newsletter/subscribe', [NewsletterSubscriptionController::class, 'subscribe'])->name('newsletter.subscribe');

/******************** ROUTES DELETE *******************/
//Route::delete('/admin/visiteurs/{id}', [VisiteurController::class, 'destroy']);

/******************** AUTH ROUTES ********************/
// Auth Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

use App\Http\Controllers\DashboardController;


use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');

    // Routes pour les projets
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project_s');
    Route::delete('/project/{id}/destroy', [ProjectController::class, 'destroy'])->name('p_destroy');

    // Routes pour les tâches
    Route::post('/task/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::delete('/task/{id}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

/******************** MULTI-LANGUE ROUTE ********************/
Route::get('/{page?}', function ($page = 'welcome') {
    $pages = ['welcome', 'about', 'contact', 'conducteur', 'FAQ', 'Investissement', 'legalisation', 'policy', 'service', 'utilisation'];

    if (!in_array($page, $pages)) {
        abort(404, 'Page non trouvée.');
    }

    // Langue depuis l'URL
    if (request()->has('langue')) {
        $langue = request('langue');
        if (in_array($langue, ['en', 'fr', 'pl'])) {
            Session::put('locale', $langue);
        }
    }

    // Langue depuis la session
    $langue = Session::get('locale', 'en');
    App::setLocale($langue);

    $view = "$langue.$page";

    if (view()->exists($view)) {
        return view($view, ['page' => $page, 'langue' => $langue]);
    }

    abort(404, "Vue '$view' introuvable.");
})->name('chemin');



