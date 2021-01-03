<?php

Route::get('/', function () {
    return view('cobalogin');
});

// Route::post('/auth/login', 'LoginController@login');

Route::get('/siswa', function () {
    return view('userView');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {

    // CONTROLLER SISWA
    Route::get('/koleksibuku', 'SiswaController@koleksi');
    Route::get('/koleksibuku/cari', 'SiswaController@cari');
    Route::get('/pinjam', 'SiswaController@pinjam');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('/admin', function () {
        return view('adminView');
    });

    // CONTROLLER BUKU
    Route::get('/get-buku', 'BukuController@pdf');
    Route::get('/download-buku', 'BukuController@downloadBook');
    Route::get('/buku', 'BukuController@index');
    Route::get('/buku/create', 'BukuController@create');
    Route::post('/buku/store', 'BukuController@store');
    Route::get('/buku/edit/{id}', 'BukuController@edit');
    Route::get('/buku/{buku}', 'BukuController@show');
    Route::put('/buku/update/{id}', 'BukuController@update');
    Route::get('/buku/delete/{id}', 'BukuController@destroy');

    // CONTROLLER ANGGOTA
    Route::get('/anggota', 'AnggotaController@index');
    Route::get('/anggota/create', 'AnggotaController@create');
    Route::post('/anggota/store', 'AnggotaController@store');
    Route::get('/anggota/edit/{id}', 'AnggotaController@edit');
    Route::get('/anggota/{anggota}', 'AnggotaController@show');
    Route::put('/anggota/update/{id}', 'AnggotaController@update');
    Route::get('/anggota/delete/{id}', 'AnggotaController@destroy');

    // CONTROLLER PETUGAS
    Route::get('/petugas', 'PetugasController@index');
    Route::get('/petugas/create', 'PetugasController@create');
    Route::post('/petugas/store', 'PetugasController@store');
    Route::get('/petugas/edit/{id}', 'PetugasController@edit');
    Route::get('/petugas/{petugas}', 'PetugasController@show');
    Route::put('/petugas/update/{id}', 'PetugasController@update');
    Route::get('/petugas/delete/{id}', 'PetugasController@destroy');

    // CONTROLLER RAK
    Route::get('/rak', 'RakController@index');
    Route::get('/rak/create', 'RakController@create');
    Route::post('/rak/store', 'RakController@store');
    Route::get('/rak/edit/{id}', 'RakController@edit');
    Route::get('/rak/{rak}', 'RakController@show');
    Route::put('/rak/update/{id}', 'RakController@update');
    Route::get('/rak/delete/{id}', 'RakController@destroy');

    // CONTROLLER PEMINJAMAN
    Route::get('/peminjaman', 'PeminjamanController@index');
    Route::get('/peminjaman/create', 'PeminjamanController@create');
    Route::post('/peminjaman/store', 'PeminjamanController@store');
    Route::get('/peminjaman/edit/{id}', 'PeminjamanController@edit');
    Route::get('/peminjaman/{peminjaman}', 'PeminjamanController@show');
    Route::put('/peminjaman/update/{id}', 'PeminjamanController@update');
    Route::get('/peminjaman/delete/{id}', 'PeminjamanController@destroy');

    // CONTROLLER PENGEMBALIAN
    Route::get('/pengembalian', 'PengembalianController@index');
    Route::get('/pengembalian/create', 'PengembalianController@create');
    Route::post('/pengembalian/store', 'PengembalianController@store');
    Route::get('/pengembalian/edit/{id}', 'PengembalianController@edit');
    Route::get('/pengembalian/{pengembalian}', 'PengembalianController@show');
    Route::put('/pengembalian/update/{id}', 'PengembalianController@update');
    Route::get('/pengembalian/delete/{id}', 'PengembalianController@destroy');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
