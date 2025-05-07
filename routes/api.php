<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\admin\MahasiswaCollection;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');

Route::get('/tahun-ajar', function () {
  return response()->json([
    'data' => \App\Models\TahunAjar::all()
  ]);
});

Route::get('/jurusan', function () {
  return response()->json([
    'data' => \App\Models\Jurusan::all()
  ]);
});
Route::get('/ruangan', function () {
  return response()->json([
    'data' => \App\Models\Ruangan::all()
  ]);
});

Route::get('/kelas', function () {
  return response()->json([
    'data' => \App\Models\Kelas::all()
  ]);
});

Route::get('/dosen', function () {
  return response()->json([
    'data' => \App\Models\Dosen::all()
  ]);
});

Route::get('/mahasiswa', function () {
  return new MahasiswaCollection([]);
});
