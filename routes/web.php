<?php
use App\Pollution;
use App\Blog;
use App\Issue;
use App\User;
use App\IssueSign;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://newsapi.org/v2/everything?q=environment&sortBy=publishedAt&apiKey=665f0a517e85463fb21017065595b4e5&sources=the-hindu', []);
    $arr = json_decode($res->getBody());
    $issues = Issue::orderBy('created_at', 'desc')->take(6)->get()->toArray();
    $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
    $allissues = Issue::all()->pluck('latitude', 'longitude')->toArray();
    return view('welcome', ['news' => $arr->articles, 'issues' => $issues, 'blogs' => $blogs, 'allissues' => $allissues]);
})->name('login');


// Route::get('/test', function () {
//     dd(sentimentScore("Air Pollution is deteriorating this environment. Polythen should be banned. I was surprised and happy. "));
// });

Route::get('/issues', function () {
    $issues = Issue::withCount('signs')->orderBy('id', 'desc')->paginate(10);
    return view('issues', ['issues' => $issues]);
});

Route::get('/redirect/{service}', 'SocialAuthController@redirect');
Route::get('/callback/{service}', 'SocialAuthController@callback');

// Route::get('register', function () {
//     if (session()->has('u')) {
//         return view('register', ['user' => session('u')]);
//     } else {
//         return view('register');
//     }
// });
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
    //Route::get('issues', 'IssueController@index');
    Route::get('issues/{issue}/edit', 'IssueController@edit');
    Route::put('issues/{issue}/update', 'IssueController@update');
    Route::delete('issues/{issue}/delete', 'IssueController@delete')->name('issue.destroy');
    Route::get('issue/{issue}', function ($id) {
        $issue = Issue::withCount('signs')->find($id);
        $c = IssueSign::where('issue_id', $id)->where('user_id', Auth::id())->count();
        return view('issue')->with(compact('issue', 'c'));
    });
    Route::post('issue/sign', 'IssueController@sign');
});
Route::get('blog/create', function () {
        return view('user.add-blog');
})->name('userCreateBLog');
    Route::post('blog', 'BlogController@store')->name('blog.store');
    Route::get('blogs', 'BlogController@index');
    Route::get('blogs/{blog}/edit', 'BlogController@edit');
    Route::put('blogs/{blog}/update', 'BlogController@update');
    Route::delete('blogs/{blog}/delete', 'BlogController@delete')->name('blog.destroy');

    Route::get('dash/blogs', function () {
        return view('user.blogs');
    });
    Route::get('dt_blogs', 'BlogController@data')->name('user.blogs');
});

Route::get('blogs/{id}', function ($id) {
    $b = Blog::find($id);
    return view('blog');
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', function () {
        $user = User::count();
        $air_issue = Issue::where('pollution_id', '1')->count();
        $noise_issue = Issue::where('pollution_id', '2')->count();
        $soil_issue = Issue::where('pollution_id', '3')->count();
        $water_issue = Issue::where('pollution_id', '4')->count();
        $issue_date = Issue::select(DB::raw('DATE(created_at) as date'), DB::raw('count(id) as total'))
                        ->whereBetween('created_at', [date("Y-m-d", strtotime('-6 days'))." 00:00:00", date("Y-m-d")." 23:59:59"])
                        ->orderBy('date')->groupBy('date')->get()->toArray();
        $issue_date = array_column($issue_date, 'total', 'date');
        for ($i=6; $i >= 0; $i--) {
            if (!array_key_exists(date("Y-m-d", strtotime('-'.$i.' days')), $issue_date)) {
                $issue_date[date("Y-m-d", strtotime('-'.$i.' days'))] = 0;
            }
        }
        $blog = Blog::count();
        return view('admin.home', [
            'user' => $user,
            'blog' => $blog,
            'air_issue' => $air_issue,
            'noise_issue' => $noise_issue,
            'soil_issue' => $soil_issue,
            'water_issue' => $water_issue,
            'issue_date' => $issue_date
        ]);
    });

    Route::get('issues', function () {
        return view('admin.issues');
    });
    Route::get('dt_issues', 'Admin\IssueController@data')->name('get.issues');

    Route::get('users', function () {
        return view('admin.users');
    });
    Route::get('dt_users', 'Admin\UserController@data')->name('get.users');

    Route::get('blogs', function () {
        return view('admin.blogs');
    });
    Route::get('dt_blogs', 'Admin\BlogController@data')->name('get.blogs');
});
