<?php
use App\Pollution;
use App\Issue;

Route::get('/', function () {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://newsapi.org/v2/everything?q=environment&sortBy=publishedAt&apiKey=665f0a517e85463fb21017065595b4e5&sources=the-hindu', []);
    $arr = json_decode($res->getBody());
    $issues = Issue::all()->toArray();
    return view('welcome', ['news' => $arr->articles, 'issues' => $issues]);
})->name('login');

Route::get('blog/create', function () {
        return view('user.add-blog');
})->name('userCreateBLog');
    Route::post('blog', 'BlogController@store')->name('blog.store');
    Route::get('blogs', 'BlogController@index');
    Route::get('blogs/{blog}/edit', 'BlogController@edit');
    Route::put('blogs/{blog}/update', 'BlogController@update');
    Route::delete('blogs/{blog}/delete', 'BlogController@delete')->name('blog.destroy');

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

    // Route::get('blog/create', function () {
    //     return view('user.add-blog');
    // })->name('userCreateBLog');
    // Route::post('blog', 'BlogController@store')->name('blog.store');
    // Route::get('blogs', 'BlogController@index');
    // Route::get('blogs/{blog}/edit', 'BlogController@edit');
    // Route::put('blogs/{blog}/update', 'BlogController@update');
    // Route::delete('blogs/{blog}/delete', 'BlogController@delete')->name('blog.destroy');
});
