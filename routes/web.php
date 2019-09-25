<?php
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username === 'admin'
        && $request->password === 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});


?>
