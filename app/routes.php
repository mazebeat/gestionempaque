<?php
setlocale(LC_TIME, 'es_CL.UTF-8');
ini_set('mongo.long_as_object', 1);
//ini_set('mongo.native_long', 0);
ini_set('zlib.output_compression', 'off');
ini_set('output_buffering', 'off');
ini_set("memory_limit", "1024M");
set_time_limit(0);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# Error pages should be shown without requiring login
Route::get('404', function () {
    return View::make('admin/404');
});
Route::get('500', function () {
    return View::make('admin/500');
});

# Index page
Route::get('/', function () {
    return View::make('frontend/index');
});

Route::get('our', function () {
    return View::make('frontend/our');
});
Route::get('users', function () {
    return View::make('frontend/users');
});
Route::get('contact', function () {
    return View::make('frontend/contact');
});
Route::get('registry', function () {
    return View::make('frontend/registry');
});

Route::get('user', 'FrontendController@index');
Route::post('user', 'FrontendController@postSignin');

Route::group(array("before" => "auth"), function () {
    Route::get('indexuser', 'FrontendController@indexUser');
    Route::get('logout', 'FrontendController@getLogout');

    Route::get('repechaje', array('as' => 'returnos', 'uses' => 'RepechajeController@showTurnos'));
    Route::get('normas', array('as' => 'returnos', 'uses' => 'FrontendController@showNormas'));

    Route::get('myturns', 'TurnoController@myTurns');
    Route::get('reeplace', 'TurnoController@reeplaceMy');

    Route::get('taketurn/{id?}', array('as' => 'turnos', 'uses' => 'TurnoController@showTurnos'));
    Route::get('saveTurns', 'TurnoController@getTurnos');
    Route::get('frontend/takeTurn/{id}/{taken}/{left}', 'TurnoController@takeTurns');

    Route::get('directmessage', 'EmpaqueController@directMessage');
    Route::post('directmessage', 'EmpaqueController@sendDirectMessage');
    Route::get('printcredential', 'EmpaqueController@printCredential');
});

Route::group(array('prefix' => 'admin'), function () {
    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return View::make('admin/404');
    });
    Route::get('500', function () {
        return View::make('admin/500');
    });

    # Lock screen aswell
    Route::get('lockscreen', function () {
        return View::make('admin/lockscreen');
    });

    # Dashboard / Index
    Route::get('/', array('as' => 'dashboard', 'uses' => 'JoshController@showHome'));

    # All basic routes defined here
    Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
    Route::post('signin', 'AuthController@postSignin');
    Route::post('signup', array('as' => 'signup', 'uses' => 'AuthController@postSignup'));
    Route::post('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@postForgotPassword'));
    Route::get('login2', function () {
        return View::make('admin/login2');
    });

    # Register2
    Route::get('register2', function () {
        return View::make('admin/register2');
    });
    Route::post('register2', array('as' => 'register2', 'uses' => 'AuthController@postRegister2'));

    # Forgot Password Confirmation
    Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
    Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

    # Account Activation
    Route::get('activate/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

    # Resources
    Route::resource('accesos', 'AccesosController');
    Route::resource('casaestudios', 'CasaEstudiosController');
    Route::resource('comunas', 'ComunasController');
    Route::resource('locals', 'LocalsController');
    Route::resource('normas', 'NormasController');
    Route::get('normas2', 'NormasController@index2');
    Route::resource('perfils', 'PerfilsController');
    Route::resource('permisos', 'PermisosController');
    Route::resource('provincia', 'ProvinciaController');
    Route::resource('regions', 'RegionsController');
    Route::resource('repechajes', 'RepechajesController');
    Route::resource('empaques', 'EmpaqueController');
    Route::get('empaques/changestate/{id}', 'EmpaqueController@changestate');
    Route::post('empaques/search', 'EmpaqueController@search');
    Route::post('empaques/clear', 'EmpaqueController@index');
    Route::resource('faltas', 'FaltasController');
    Route::resource('planillas', 'PlanillasController');

    # Locales
    Route::resource('locales', 'LocalController');
    Route::get('locales/{id}', 'LocalController@detalle');
    Route::get('locales/clear', 'LocalController@index');
    Route::get('turnos', 'TurnoController@index2');

    Route::get('perfilesmayores', function () {
        return View::make('admin.perfilesmayores.index');
    });
    Route::get('reportes', function () {
        return View::make('admin.reportes.index');
    });

    # User Management
    Route::group(array('prefix' => 'users', 'before' => 'Auth'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
        Route::get('create', array('as' => 'create/user', 'uses' => 'UsersController@getCreate'));
        Route::post('create', 'UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'users.update', 'uses' => 'UsersController@getEdit'));
        Route::post('{userId}/edit', 'UsersController@postEdit');
        Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
        Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
        Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
        Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
    });
    Route::get('deleted_users', array('as' => 'deleted_users', 'uses' => 'UsersController@getDeletedUsers'));

    # Group Management
    Route::group(array('prefix' => 'groups', 'before' => 'Auth'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
        Route::get('any_user', 'UsersController@getUserAccess');
        Route::get('admin_only', 'UsersController@getAdminOnlyAccess');
    });

    Route::post('crop_demo', 'JoshController@crop_demo');
    # Remaining pages will be called from below controller method
    # in real world scenario, you may be required to define all routes manually
    Route::get('{name?}', 'JoshController@showView');

    Route::get('location/find/provincia/{id_re}', 'LocationController@findProvinciasByRegion');
    Route::get('location/find/comuna/{id_pr}', 'LocationController@findComunasByProvincia');
});

Route::get('test', function () {
    dd(Hash::make('user'));
});