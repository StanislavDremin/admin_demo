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

//Route::get('/', 'PageIndex@index');

Route::group(
	['prefix' => 'admin' ], //'middleware' => 'auth'
	function () {
		Route::get('/', function () {
			return view('admin/main', ['title' => 'Админка']);
		});
		Route::get('/pages', ['uses' => 'Admin\PageSectionsCtrl@sectionList', 'as' => 'sectionList']);

		Route::group(['prefix' => 'rest', 'middleware' => 'rest'],  function (){
			Route::group(['prefix' => 'sections'], function (){
				Route::get('/heads', 'Admin\PageSectionsCtrl@getColumns');
				Route::get('/items', 'Admin\PageSectionsCtrl@getSections');
			});
		});
//		Route::group(['prefix' => 'page'], function () {
//			Route::get('/', ['uses' => 'Admin\PageCtrl@exec', 'as' => 'pages']);
//			Route::get('/add', ['uses' => 'Admin\PageCtrl@addPage', 'as' => 'pages'])->name('page_form');
//		});
	}
);
//Auth::routes();