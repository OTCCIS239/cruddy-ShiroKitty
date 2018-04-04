<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('certificatons', function(){
    return view('certifications');
});

Route::get('games', function(){
    return view('games');
});

Route::get('shows', function(){
    return view('shows');
});




/* IC Notes

    

    
    <li class="nav-item" @if(Route::is('/tabletops.*')) active(this is bootstrap's css) @endif>
        <a href="{{ route()}}
    </li>
    
    url()
    
    Route::resource()
    
    @extends
    @yield
    @section
    
    @endsection @stop
*/