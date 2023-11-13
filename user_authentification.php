//Laravel code for user authentication

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
