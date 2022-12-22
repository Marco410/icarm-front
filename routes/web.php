<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'IndexController@index')->name('index');
Route::get('/matrimonios', 'IndexController@matrimonios')->name('index.matrimonios');



Route::get('/login/facebook', 'Auth\SocialLoginController@login')->name('login.facebook');
Route::get('/facebook/callback', 'Auth\SocialLoginController@callback')->name('callback.facebook');
Route::get('/login/google', 'Auth\SocialLoginController@login_google')->name('login.google');
Route::get('/google/callback', 'Auth\SocialLoginController@callback_google')->name('callback.google');

Route::get('/agencia/{agencia}', 'IndexController@agencia_details')->name('agencia.detalles');
Route::post('/agencia/cita/create', 'IndexController@agencia_create_cita')->name('agencia.create.cita');

Route::get('/agencias-automotrices', 'IndexController@agencias')->name('agencias');

Route::get('/marcas', 'IndexController@brands')->name('brands');
Route::get('/contacto', 'IndexController@contacto')->name('contacto');
Route::post('/contacto/guardar', 'IndexController@contacto_store')->name('contacto.store');
Route::get('/nosotros', 'IndexController@nosotros')->name('nosotros');
Route::get('/get-muni', 'DataController@get_muni')->name('get-muni');

Route::get('/add-service', function () {
return view('add-service');
})->name('add-service');
Route::get('/book-service', function () {
return view('book-service');
})->name('book-service');
Route::get('/chat', function () {
return view('chat');
})->name('chat');
Route::get('/edit-service', function () {
return view('edit-service');
})->name('edit-service');
Route::get('/preguntas-frecuentes', function () {
return view('faq');
})->name('faq');
Route::get('/m y-services-inactive', function () {
return view('my-services-inactive');
})->name('my-services-inactive');
Route::get('/my-services', function () {
return view('my-services');
})->name('my-services');
Route::get('/notifications', function () {
return view('notifications');
})->name('notifications');
Route::get('/aviso-privacidad', function () {
return view('privacy-policy');
})->name('privacy-policy');
Route::get('/provider-availability', function () {
return view('provider-availability');
})->name('provider-availability');
Route::get('/provider-bookings', function () {
return view('provider-bookings');
})->name('provider-bookings');
Route::get('/provider-dashboard', function () {
return view('provider-dashboard');
})->name('provider-dashboard');
Route::get('/provider-payment', function () {
return view('provider-payment');
})->name('provider-payment');
Route::get('/provider-reviews', function () {
return view('provider-reviews');
})->name('provider-reviews');
Route::get('/provider-settings', function () {
return view('provider-settings');
})->name('provider-settings');
Route::get('/provider-subscription', function () {
return view('provider-subscription');
})->name('provider-subscription');
Route::get('/provider-wallet', function () {
return view('provider-wallet');
})->name('provider-wallet');
Route::get('/search', function () {
return view('search');
})->name('search');
Route::get('/service-details', function () {
return view('service-details');
})->name('service-details');
Route::get('/terminos-y-condiciones', function () {
return view('term-condition');
})->name('term-condition');
Route::get('/user-bookings', function () {
return view('user-bookings');
})->name('user-bookings');
Route::get('/user-dashboard', function () {
return view('user-dashboard');
})->name('user-dashboard');
Route::get('/user-payment', function () {
return view('user-payment');
})->name('user-payment');
Route::get('/user-reviews', function () {
return view('user-reviews');
})->name('user-reviews');
Route::get('/user-settings', function () {
return view('user-settings');
})->name('user-settings');
Route::get('/user-wallet', function () {
return view('user-wallet');
})->name('user-wallet');
Route::get('/favourites', function () {
return view('favourites');
})->name('favourites');

/*****************LANDING ROUTES*******************/
Route::Group(['prefix' => 'landing'], function () {
    Route::get('/', 'LandingController@index')->name('landing.index');

    Route::post('/registro-dealer', 'LandingController@register_dealer')->name('landing.register_leader');
});

/*****************USER ROUTES*******************/
Route::Group(['prefix' => 'usuario'], function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('user.dashboard');

    Route::post('/store-review', 'IndexController@store_review')->name('user.store-review');
    Route::post('/store-review-personal', 'IndexController@store_review_personal')->name('user.store-review-personal');

    Route::get('/comentarios', 'UserController@reviews')->name('user.reviews');
    Route::get('/agencias', 'UserController@agencies')->name('user.agencies');
    Route::get('/agencias/estadisticas/{agencia}', 'UserController@agencies_stats')->name('user.agency.stats');
    Route::post('/agencias/generar-qr', 'UserController@agency_qr')->name('user.agency.qr');
    Route::get('/agencias-reclamadas', 'UserController@agencies_claim')->name('user.agencies.claim');
    Route::post('/reclamar-agencia', 'UserController@claim_agency')->name('user.claim.agency');

    Route::get('/data-reviews', 'UserController@data_reviews')->name('user.data.reviews');
    Route::get('/data-estandar', 'UserController@data_estandar')->name('user.data.estandar');
    Route::get('/data-reviews-personal', 'UserController@data_reviews_personal')->name('user.data.reviews.personal');
    Route::get('/data-reviews-personal-ver', 'UserController@data_reviews_personal_ver')->name('user.data.reviews.personal.ver');

    Route::get('/personal', 'UserController@personal')->name('user.personal');
    Route::get('/personal/ver/{personal_id}', 'UserController@personal_ver')->name('user.personal.ver');
    Route::post('/personal/añadir', 'UserController@personal_add')->name('user.personal.add');

    Route::get('/comentarios', 'UserController@comments')->name('user.comments');
    Route::post('/comentarios/save-asnwer', 'UserController@comentarios_save_respuesta')->name('user.comments.answer');
    Route::get('/comentarios/ver/{review_id}', 'UserController@comments_see')->name('user.comments.see');


    Route::get('/citas', 'UserController@citas')->name('user.citas');
    Route::get('/citas/ver/{cita_id}', 'UserController@citas_ver')->name('user.citas.ver');
    Route::post('/citas/ask', 'UserController@citas_ask')->name('user.citas.ask');

    Route::get('/notificaciones', 'UserController@notifications')->name('user.notifications');
});

/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () {
    Route::get('/add-category', function () {
        return view('admin.add-category');
    })->name('add-category');
    Route::get('/add-ratingstype', function () {
        return view('admin.add-ratingstype');
    })->name('add-ratingstype');
    Route::get('/add-subcategory', function () {
        return view('admin.add-subcategory');
    })->name('add-subcategory');
    Route::get('/add-subscription', function () {
        return view('admin.add-subscription');
    })->name('add-subscription');
    Route::get('/admin-notification', function () {
        return view('admin.admin-notification');
    })->name('admin-notification');
    Route::get('/admin-profile', function () {
        return view('admin.admin-profile');
    })->name('admin-profile');
    Route::get('/cancel-report', function () {
        return view('admin.cancel-report');
    })->name('cancel-report');
    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');
    Route::get('/complete-report', function () {
        return view('admin.complete-report');
    })->name('complete-report');
    Route::get('/edit-category', function () {
        return view('admin.edit-category');
    })->name('edit-category');
    Route::get('/edit-ratingstype', function () {
        return view('admin.edit-ratingstype');
    })->name('edit-ratingstype');
    Route::get('/edit-subcategory/{id}', 'MarcaController@edit')->name('marca.edit');
    Route::get('/edit-subscription', function () {
        return view('admin.edit-subscription');
    })->name('edit-subscription');
    Route::get('/emailsettings', function () {
        return view('admin.emailsettings');
    })->name('emailsettings');
    Route::get('/inprogress-report', function () {
        return view('admin.inprogress-report');
    })->name('inprogress-report');
    Route::get('/payment_list', function () {
        return view('admin.payment_list');
    })->name('payment_list');
    Route::get('/pending-report', function () {
        return view('admin.pending-report');
    })->name('pending-report');
    Route::get('/ratingstype', function () {
        return view('admin.ratingstype');
    })->name('ratingstype');
    Route::get('/reject-report', function () {
        return view('admin.reject-report');
    })->name('reject-report');
    Route::get('/review-reports', function () {
        return view('admin.review-reports');
    })->name('review-reports');
    Route::get('/service-details', function () {
        return view('admin.service-details');
    })->name('service-details');
    Route::get('/service-list', function () {
        return view('admin.service-list');
    })->name('service-list');
    Route::get('/service-providers', function () {
        return view('admin.service-providers');
    })->name('service-providers');
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    Route::get('/sms-settings', function () {
        return view('admin.sms-settings');
    })->name('sms-settings');
    Route::get('/stripe_payment_gateway', function () {
        return view('admin.stripe_payment_gateway');
    })->name('stripe_payment_gateway');
    Route::get('/subcategories', function () {
        return view('admin.subcategories');
    })->name('subcategories');
    Route::get('/subscriptions', function () {
        return view('admin.subscriptions');
    })->name('subscriptions');
    Route::get('/total-report', function () {
        return view('admin.total-report');
    })->name('total-report');
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');
    Route::get('/wallet-history', function () {
        return view('admin.wallet-history');
    })->name('wallet-history');
    Route::get('/wallet', function () {
        return view('admin.wallet');
    })->name('wallet');


    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    Route::get('/registro', function () {
        return view('admin.register');
    })->name('registro');

    Route::get('/forgot-pass', 'Auth\ForgotPasswordController@create')->name('forgot.password');
    Route::post('/forgot-pass', 'Auth\ForgotPasswordController@store')->name('password.email');

    Route::post('/login', 'Auth\LoginController@login_admin')->name('admin.login');
    Route::post('/login-user', 'Auth\LoginController@login_user')->name('user.login');


    Route::get('/inicio', 'AdminController@dashboard')->name('dashboard');
    Route::post('/baja-encontrado', 'AdminController@baja_encontrado')->name('baja.encontrado');
    Route::get('/baja-view', 'AdminController@baja_view')->name('baja.view');
    Route::post('/baja', 'AdminController@baja')->name('baja');

    Route::get('/encontrados', 'AdminController@encontrados')->name('encontrados');

    Route::get('/filas', 'AdminController@filas')->name('filas');

    Route::post('/bautizar', 'AdminController@bautizar')->name('bautizar');

    Route::get('/alumnos', 'AdminController@alumnos')->name('alumnos');
    Route::get('/alumnos-añadir', 'AdminController@alumnos_add')->name('alumnos.add');
    Route::post('/alumno-create', 'AdminController@alumno_create')->name('alumno.create');
    Route::post('/alumnos-asistencia', 'AdminController@alumnos_asistencia')->name('alumnos.asistencia');
    Route::post('/alumno-editar', 'AdminController@alumno_editar')->name('alumno.editar');
    Route::get('/alumno-ver', 'AdminController@alumno_ver')->name('alumno.ver');
    Route::get('/alumno-asistencia-movil', 'AdminController@alumnos_asistencia_movil')->name('alumno.asistencia.movil');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
