<?php
 use App\Conference;
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
    /*
    * pagina principal
    */
    Route::get('/', function (){
        return view('index');
    });
    Route::get('/about', function (){
        return view('about');
    });
    Route::get('/speaker', function (){
        return view('speaker');
    });
    Route::get('/news', function () {
        $posts = App\Post::latest('published_at')->get();

        return view('news', compact('posts'));
    });

    Route::get('posts', function(){
        return App\Post::all();
    });

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

// Admin Auth Routes
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('admin', 'Admin\Auth\LoginController@showLoginForm');
    Route::post('admin/login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('admin/register', 'Admin\Auth\RegisterController@showRegistrationForm');
    Route::post('admin/register', 'Admin\Auth\RegisterController@register')->name('admin.register');
    Route::get('home', 'ConferenceController@get_index')->name('conference-list');
//});

Route::get('userlist', 'ConferenceController@get_userlist')->name('user-list');

/////////data tables routes
Route::post ( '/editItem', function (Request $request) {

    $rules = array (
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|email',
            'gender' => 'required',
            'country' => 'required|regex:/^[\pL\s\-]+$/u',
            'salary' => 'required|regex:/^\d*(\.\d{2})?$/'
    );
    $validator = Validator::make ( Input::all (), $rules );
    if ($validator->fails ())
        return Response::json ( array (
            'errors' => $validator->getMessageBag ()->toArray ()
        ) );
    else {

        $data = Data::find ( $request->id );
        $data->first_name = ($request->fname);
        $data->last_name = ($request->lname);
        $data->email = ($request->email);
        $data->gender = ($request->gender);
        $data->country = ($request->country);
        $data->salary = ($request->salary);
        $data->save ();
        return response ()->json ( $data );
    }
} );

Route::post ( '/deleteItem', function (Request $request) {
    Conference::find ( $request->id_conf )->delete ();
    return response ()->json ();
} );

