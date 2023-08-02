<?php

use Illuminate\Support\Facades\Route;

// home 
Route::get('/', function () {
    return view('home');
});

Route::get('/contact_us', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', 'productController@index')->name('products');
Route::get('/vendors', 'vendorController@index')->name('vendors');
Route::get('/employees', 'employeeController@index')->name('employees');
Route::get('/orders', 'orderController@index')->name('orders');
Route::get('/payments', 'paymentController@index')->name('payments');
Route::get('/invoices', 'invoiceController@index')->name('invoices');
Route::get('/inventorys', 'inventoryController@index')->name('inventorys');
Route::get('/auctions', 'auctionController@index')->name('auctions');
// add product

Route::get('/add', function () {
    return view('pages.add_products');
});
Route::get('/add_vendor', function () {
    return view('pages.add_vendors');
});
Route::get('/add_employee', function () {
    return view('pages.add_employees');
});
Route::get('/add_order', function () {
    return view('pages.add_orders');
});
Route::get('/add_payment', function () {
    return view('payment');
});
Route::get('/add_invoice', function () {
    return view('pages.add_invoices');
});
Route::get('/add_inventory', function () {
    return view('pages.add_inventorys');
});
Route::get('/add_auction', function () {
    return view('pages.add_auctions');
});

Route::post('/add', 'productController@add_product')->name('add_product');
Route::post('/add_vendor', 'vendorController@add_vendor')->name('add_vendor');
Route::post('/add_employee', 'employeeController@add_employee')->name('add_employee');
Route::post('/add_order', 'orderController@add_order')->name('add_order');
Route::post('/add_payment', 'paymentController@add_payment')->name('add_payment');
Route::post('/add_invoice', 'invoiceController@add_invoice')->name('add_invoice');
Route::post('/add_inventory', 'inventoryController@add_inventory')->name('add_inventory');
Route::post('/add_auction', 'auctionController@add_auction')->name('add_auction');
// edit product 

Route::get('/edit/{id}', 'productController@edit_product')->where('id', '[0-9]+')->name('edit_product');
Route::get('/edit_vendor/{id}', 'vendorController@edit_vendor')->where('id', '[0-9]+')->name('edit_vendor');
Route::get('/edit_employee/{id}', 'employeeController@edit_employee')->where('id', '[0-9]+')->name('edit_employee');
Route::get('/edit_order/{id}', 'orderController@edit_order')->where('id', '[0-9]+')->name('edit_order');
Route::get('/edit_invoice/{id}', 'invoiceController@edit_invoice')->where('id', '[0-9]+')->name('edit_invoice');
Route::get('/edit_inventory/{id}', 'inventoryController@edit_inventory')->where('id', '[0-9]+')->name('edit_inventory');
Route::get('/edit_auction/{id}', 'auctionController@edit_auction')->where('id', '[0-9]+')->name('edit_auction');
// update product 

Route::post('/update/{id}', 'productController@update_product')->where('id', '[0-9]+')->name('update_product');
Route::post('/update_vendor/{id}', 'vendorController@update_vendor')->where('id', '[0-9]+')->name('update_vendor');
Route::post('/update_employee/{id}', 'employeeController@update_employee')->where('id', '[0-9]+')->name('update_employee');
Route::post('/update_order/{id}', 'orderController@update_order')->where('id', '[0-9]+')->name('update_order');
Route::post('/update_invoice/{id}', 'invoiceController@update_invoice')->where('id', '[0-9]+')->name('update_invoice');
Route::post('/update_inventory/{id}', 'inventoryController@update_inventory')->where('id', '[0-9]+')->name('update_inventory');
Route::post('/update_auction/{id}', 'auctionController@update_auction')->where('id', '[0-9]+')->name('update_auction');
// delete product

Route::get('/delete/{id}', 'productController@delete_product')->where('id', '[0-9]+')->name('delete_product');
Route::get('/delete_vendor/{id}', 'vendorController@delete_vendor')->where('id', '[0-9]+')->name('delete_vendor');
Route::get('/delete_employee/{id}', 'employeeController@delete_employee')->where('id', '[0-9]+')->name('delete_employee');
Route::get('/delete_order/{id}', 'orderController@delete_order')->where('id', '[0-9]+')->name('delete_order');
Route::get('/delete_invoice/{id}', 'invoiceController@delete_invoice')->where('id', '[0-9]+')->name('delete_invoice');
Route::get('/delete_inventory/{id}', 'inventoryController@delete_inventory')->where('id', '[0-9]+')->name('delete_inventory');
Route::get('/delete_auction/{id}', 'auctionController@delete_auction')->where('id', '[0-9]+')->name('delete_auction');