<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('barang', function () {
    $arrBarang = ["Monitor ASUS","Samsung Galaxy A52","Lenovo Flex 5", 
    "CPU Rakitan","Kabel Printer"];
    return view('barang')->with('barang', $arrBarang);
    });

Route::get('databarang', function () {
    $arrDataBarang = ["ID Barang","Kode Barang",
    "Nama Barang","Tanggal Pembelian","Jumlah Barang","Satuan Barang","Harga Beli","Status Barang"];
    return view('databarang')->with('databarang', $arrDataBarang);
    });
    
Route::get('gallery', function () {
    return view('gallery');
    });