<?php
use App\Pollution;

Route::get('/', function () {
    return view('welcome');
})->name('login');

// Route::get('/test', function () {
//     dd(sentimentScore("Air Pollution is deteriorating this environment. Polythen should be banned. I was surprised and happy. "));
// });

Route::get('/redirect/{service}', 'SocialAuthController@redirect');
Route::get('/callback/{service}', 'SocialAuthController@callback');

Route::get('register', function () {
    if (session()->has('u')) {
        return view('register', ['user' => session('u')]);
    } else {
        return view('register');
    }
});
Route::post('register', 'UserController@register')->name('user.register');

Route::post('login', 'UserController@login');

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('issue/create', function () {
        $pollutions = Pollution::all()->sortBy('name');
        return view('user.add-issue')->with(compact('pollutions'));
    })->name('userCreateIssue');
    Route::post('issue', 'IssueController@store')->name('issue.store');
    Route::get('issues', 'IssueController@index');
    Route::get('issues/{issue}/edit', 'IssueController@edit');
    Route::put('issues/{issue}/update', 'IssueController@update');
    Route::delete('issues/{issue}/delete', 'IssueController@delete')->name('issue.destroy');
});
