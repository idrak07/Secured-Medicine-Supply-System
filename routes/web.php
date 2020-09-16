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
use App\Http\Middleware\CanEditPost;

Route::get('/',function(){return view('index');});
Route::get('/index',function(){return view('index');});
Route::get('/index/background',function(){return view('about.backgroundIndex');});
Route::get('/index/biography',function(){return view('about.biography');});



//////////////////////////////////////////////////Sign Up///////////////////////////////


Route::get('/sign-up/pharmacy','SignUpController@getPharmacySignup')->name('getPharmacySignup');
Route::get('/sign-up/manufacturer','SignUpController@getManufacturerSignup')->name('getManufacturerSignup');
Route::post('/sign-up/pharmacy','SignUpController@postPharmacySignup')->name('postPharmacySignup');
Route::post('/sign-up/manufacturer','SignUpController@postManufacturerSignup')->name('postManufacturerSignup');


Route::group(['middleware'=>['beforelogin']], function(){
	Route::get('/login','LoginController@index')->name('login.index');
	Route::post('/login','LoginController@login');
});

//////////////////////////////////////////////////LogOut///////////////////////////////////////////////////////////

Route::get('/logout','LogoutController@index');


Route::group(['middleware'=>['sess']], function(){
	Route::group(['middleware'=>['pharmacysess']], function(){
	Route::get('/pharmacyhome','PharmacyHomeController@index')->name('pharmacyhome.index');

	Route::get('/orderforsupply','PharmacyOrderController@index')->name('pharmacyorder.index');
	Route::post('/orderforsupply','PharmacyOrderController@processorder');
	Route::get('/orderproceed','PharmacyOrderController@orderlist');
	Route::post('/orderproceed','PharmacyOrderController@proceedorder');
	Route::get('/orderforsupply/search', 'PharmacyOrderController@search')->name('order.search');
	Route::get('/orderforsupply/meddetails', 'PharmacyOrderController@meddetails')->name('order.meddetails');
	Route::get('/pharmacyorderlist','PharmacyOrderController@orderlist')->name('pharmacyorder.orderlist');
	Route::get('/pharmacyorder/details/{oid}','PharmacyOrderController@orderdetails')->name('pharmacyorder.orderdetails');
	Route::get('/pharmacyorder/confirm/{oid}','PharmacyInventoryController@inventoryupdate')->name('pharmacyorder.orderconfirm');
	Route::get('/pharmacyorder/cancel/{oid}','PharmacyOrderController@ordercancel')->name('pharmacyorder.ordercancel');

	Route::get('/prescription/search', 'PharmacyPrescriptionController@search')->name('prescription.search');

	Route::get('/pharmacyinventory','PharmacyInventoryController@index')->name('pharmacyinventory.index');
	Route::get('/pharmacyinventory/unitsearch','PharmacyInventoryController@unitsearch')->name('pharmacyinventoryunit.search');
	Route::get('/pharmacyinventory/itemsearch', 'PharmacyInventoryController@itemsearch')->name('pharmacyinventory.itemsearch');

	Route::post('/purchase','PharmacyPurchaseController@purchase');
	Route::get('/pharmacypurchaselist','PharmacyPurchaseController@purchaselist')->name('pharmacypurchase.purchaselist');
	Route::get('/pharmacypurchase/details/{purchaseid}','PharmacyPurchaseController@purchasedetails')->name('pharmacypurchase.purchasetails');
	Route::get('/pharmacypurchase/search','PharmacyPurchaseController@purchasesearch')->name('pharmacypurchase.search');
	Route::get('/pharmacypurchase/itemsearch','PharmacyPurchaseController@itemsearch')->name('pharmacypurchase.itemsearch');

	Route::get('/pharmacytax','PharmacyTaxController@index')->name('pharmacytax.index');

	Route::get('/pharmacychangepassword','PharmacySettingsController@passwordchange')->name('pharmacysettings.changepassword');
	Route::post('/pharmacychangepassword','PharmacySettingsController@updatepassword');

	});

	Route::group(['middleware'=>['companysess']], function(){
		Route::get('/companyhome','CompanyHomeController@index')->name('companyhome.index');

		Route::get('/companyproductrelease','CompanyProductController@productreleaserequest')->name('company.releaserequest');
		Route::post('/companyproductrelease','CompanyProductController@productreleaserequestsubmit');
		Route::get('/company/genericsearch','CompanyProductController@genericsearch')->name('companygeneric.search');
		Route::get('/companyproduct','CompanyProductController@index')->name('company.product');
		Route::get('/companyproduct/details/{prodid}','CompanyProductController@productdetails')->name('companyproduct.details');
		Route::get('/companyproduct/hide/{prodid}','CompanyProductController@hide')->name('companyproduct.hide');
		Route::get('/companyproduct/unhide/{prodid}','CompanyProductController@unhide')->name('companyproduct.unhide');
		Route::get('/companyproduct/productsearch','CompanyProductController@productsearch')->name('companyproduct/productsearch');

		Route::get('/companypendingorder/details/{orderid}','CompanyOrderController@orderdetails')->name('companyorder.orderdetails');
		Route::post('/companypendingorder/details/{orderid}','CompanyOrderController@orderconfirm');

		Route::get('/companydeliveredorder','CompanyOrderController@deliveredorder')->name('companydeliveredorder.orderlist');
		Route::get('/companydeliveredorder/details/{orderid}','CompanyOrderController@deliveredorderdetails')->name('companydeliveredorder.orderdetails');

		Route::get('/companyinventory','CompanyInventoryController@index')->name('companyinventory.index');
		Route::get('/companyupdateinventory','CompanyInventoryController@addnewbatch')->name('companyinventory.addnewbatch');
		Route::post('/companyupdateinventory','CompanyInventoryController@addnewbatchfinal');
		Route::get('/companyinventoryupdate/search','CompanyInventoryController@updatesearch')->name('companyinventoryupdate.updatesearch');
		Route::get('/companyinventory/itemsearch', 'CompanyInventoryController@itemsearch')->name('companyinventory.itemsearch');
		Route::get('/companyinventory/delete/{id}','CompanyInventoryController@delete')->name('companyinventory.delete');
		
		Route::get('/companytax','CompanyTaxController@index')->name('companytax.index');

		Route::get('/companychangepassword','CompanySettingsController@passwordchange')->name('companysettings.changepassword');
		Route::post('/companychangepassword','CompanySettingsController@updatepassword');

	});

	Route::group(['middleware'=>['dgdasess']],function(){

		////////////////////////////////   DGDA    //////////////////////////////////////////////////////////

	Route::get('/dgda','DgdaController@index')->name('dgda.index');
	//about
	Route::get('/dgda/background','DgdaController@getBackground')->name('dgda.background');
	Route::get('/dgda/biography','DgdaController@getBiography')->name('dgda.Biography');
	//pharmacies list
	Route::get('/dgda/pharmacies','DgdaController@getpharmacies')->name('dgda.pharmacies');
	Route::get('/dgda/pharmacies/allopathicRetailPharmacyView/{lowserial}-{highserial}','DgdaController@allopathicRetailPharmacyView')->name('dgda.allopathicRetailPharmacyView');
	Route::get('/dgda/pharmacies/ayurvedicRetailPharmacyView/{lowserial}-{highserial}','DgdaController@ayurvedicRetailPharmacyView')->name('dgda.ayurvedicRetailPharmacyView');
	Route::get('/dgda/pharmacies/unaniRetailPharmacyView/{lowserial}-{highserial}','DgdaController@unaniRetailPharmacyView')->name('unaniRetailPharmacyView');
	Route::get('/dgda/pharmacies/herbalRetailPharmacyView/{lowserial}-{highserial}','DgdaController@herbalRetailPharmacyView')->name('herbalRetailPharmacyView');
	Route::get('/dgda/pharmacies/homeopathicRetailPharmacyView/{lowserial}-{highserial}','DgdaController@homeopathicRetailPharmacyView')->name('homeopathicRetailPharmacyView');


	//////////////////////////////////////SEARCH////////////////////////////////////////////////
	Route::post('/dgda/pharmacies/search','DgdaController@SearchPharmacies')->name('SearchPharmacies');



	//////////////////////////////////Pharmacy Profile///////////////////////////////////////////////////

	Route::get('/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}','DgdaController@allopathicRetailPharmacyProfile');
	Route::get('/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}','DgdaController@ayurvedicRetailPharmacyProfile');
	Route::get('/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}','DgdaController@unaniRetailPharmacyProfile');
	Route::get('/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}','DgdaController@herbalRetailPharmacyProfile');
	Route::get('/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}','DgdaController@homeopathicRetailPharmacyProfile');


	/////////////////////////////////////////////Pharmacy Take Actions////////////////////////////////////////////////

	Route::get('/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@allopathicRetailPharmacyProfileAction')->name('allopathicRetailPharmacyProfileAction');
	Route::get('/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@ayurvedicRetailPharmacyProfileAction')->name('ayurvedicRetailPharmacyProfileAction');
	Route::get('/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/actions','DgdaController@unaniRetailPharmacyProfileAction')->name('unaniRetailPharmacyProfileAction');
	Route::get('/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/actions','DgdaController@herbalRetailPharmacyProfileAction')->name('herbalRetailPharmacyProfileAction');
	Route::get('/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@homeopathicRetailPharmacyProfileAction')->name('homeopathicRetailPharmacyProfileAction');


	/////////////////////////////////pharmact update info/////////////////////

	Route::post('/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@allopathicRetailPharmacyProfileActionUpdate')->name('allopathicRetailPharmacyProfileActionUpdate');

	Route::post('/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@ayurvedicRetailPharmacyProfileActionUpdate')->name('ayurvedicRetailPharmacyProfileActionUpdate');

	Route::post('/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/actions','DgdaController@unaniRetailPharmacyProfileActionUpdate')->name('unaniRetailPharmacyProfileActionUpdate');

	Route::post('/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/actions','DgdaController@herbalRetailPharmacyProfileActionUpdate')->name('herbalRetailPharmacyProfileActionUpdate');

	Route::post('/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/actions','DgdaController@homeopathicRetailPharmacyProfileActionUpdate')->name('homeopathicRetailPharmacyProfileActionUpdate');

	////////////////////////////////////////////////ban////////////////////////////


	Route::get('/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/Ban','DgdaController@allopathicRetailPharmacyban' )->name('allopathicRetailPharmacyban');
	Route::get('/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/Ban','DgdaController@ayurvedicRetailPharmacyban' )->name('ayurvedicRetailPharmacyban');
	Route::get('/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/Ban','DgdaController@unaniRetailPharmacyban' )->name('unaniRetailPharmacyban');
	Route::get('/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/Ban','DgdaController@herbalRetailPharmacyban' )->name('herbalRetailPharmacyban');
	Route::get('/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/Ban','DgdaController@homeopathicRetailPharmacyban' )->name('homeopathicRetailPharmacyban');




	////////////////////////////////////UnBan ////////////////////////////////////////
	Route::get('/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/Unban','DgdaController@allopathicRetailPharmacyUnban' )->name('allopathicRetailPharmacyUnban');
	Route::get('/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/Unban','DgdaController@ayurvedicRetailPharmacyUnban' )->name('ayurvedicRetailPharmacyUnban');
	Route::get('/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/Unban','DgdaController@unaniRetailPharmacyUnban' )->name('allopathicRetailPharmacyUnban');
	Route::get('/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/Unban','DgdaController@herbalRetailPharmacyUnban' )->name('allopathicRetailPharmacyUnban');
	Route::get('/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/Unban','DgdaController@homeopathicRetailPharmacyUnban' )->name('homeopathicRetailPharmacyUnban');


	/////////////////////////////////////////////// New Pharmacy Requests/////////////////////////////


	Route::get('/dgda/pharmacies/requests','DgdaController@newPharmacyReq')->name('dgda.newPharmacyRequest');
	Route::get('/dgda/pharmacies/requests/{licenseNo}','DgdaController@viewPharmacyReq')->name('dgda.viewPharmacyReq');
	Route::get('/dgda/pharmacies/requests/{licenseNo}/verify-nbr','DgdaController@forwardToNBR')->name('dgda.forwardToNBR');
	Route::get('/dgda/pharmacies/requests/{licenseNo}/verify-confirm','DgdaController@confirmPharmacyReq')->name('dgda.confirmPharmacyReq');
	Route::get('/dgda/pharmacies/requests/{licenseNo}/verify-cancel','DgdaController@cancelPharmacyReq')->name('dgda.cancelPharmacyReq');


	/////////////////////////////////////Manufacturer////////////////////////////////////////////////////////////
	///////////////list/////////////////

	Route::get('/dgda/manufacturers','DgdaManufacturerController@getManufacturers')->name('dgda.manufacturers');
	Route::get('/dgda/manufacturers/allopathicManufacturerView/{lowserial}-{highserial}','DgdaManufacturerController@allopathicManufacturerView')->name('dgda.allopathicManufacturerView');
	Route::get('/dgda/manufacturers/ayurvedicManufacturerView/{lowserial}-{highserial}','DgdaManufacturerController@ayurvedicManufacturerView')->name('dgda.ayurvedicManufacturerView');
	Route::get('/dgda/manufacturers/unaniManufacturerView/{lowserial}-{highserial}','DgdaManufacturerController@unaniManufacturerView')->name('unaniManufacturerView');
	Route::get('/dgda/manufacturers/herbalManufacturerView/{lowserial}-{highserial}','DgdaManufacturerController@herbalManufacturerView')->name('herbalManufacturerView');
	Route::get('/dgda/manufacturers/homeopathicManufacturerView/{lowserial}-{highserial}','DgdaManufacturerController@homeopathicManufacturerView')->name('homeopathicManufacturerView');


	//////////////////////////////////Manyfacturer Profile///////////////////////////////////////////////////

	Route::get('/dgda/manufacturers/allopathicManufacturerProfile/{licenseNo}','DgdaManufacturerController@allopathicManufacturerProfile');
	Route::get('/dgda/manufacturers/ayurvedicManufacturerProfile/{licenseNo}','DgdaManufacturerController@ayurvedicManufacturerProfile');
	Route::get('/dgda/manufacturers/unaniManufacturerProfile/{licenseNo}','DgdaManufacturerController@unaniManufacturerProfile');
	Route::get('/dgda/manufacturers/herbalManufacturerProfile/{licenseNo}','DgdaManufacturerController@herbalManufacturerProfile');
	Route::get('/dgda/manufacturers/homeopathicManufacturerProfile/{licenseNo}','DgdaManufacturerController@homeopathicManufacturerProfile');



	/////////////////////////////////////////////Manufacturer Take Actions////////////////////////////////////////////////

	Route::get('/dgda/manufacturers/allopathicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@allopathicManufacturerProfileAction')->name('allopathicManufacturerProfileAction');
	Route::get('/dgda/manufacturers/ayurvedicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@ayurvedicManufacturerProfileAction')->name('ayurvedicManufacturerProfileAction');
	Route::get('/dgda/manufacturers/unaniManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@unaniManufacturerProfileAction')->name('unaniManufacturerProfileAction');
	Route::get('/dgda/manufacturers/herbalManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@herbalManufacturerProfileAction')->name('herbalManufacturerProfileAction');
	Route::get('/dgda/manufacturers/homeopathicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@homeopathicManufacturerProfileAction')->name('homeopathicManufacturerProfileAction');



	/////////////////////////////////Manufacturer update info/////////////////////

	Route::post('/dgda/manufacturers/allopathicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@allopathicManufacturerProfileActionUpdate')->name('allopathicManufacturerProfileActionUpdate');

	Route::post('/dgda/manufacturers/ayurvedicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@ayurvedicManufacturerProfileActionUpdate')->name('ayurvedicManufacturerProfileActionUpdate');

	Route::post('/dgda/manufacturers/unaniManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@unaniManufacturerProfileActionUpdate')->name('unaniManufacturerProfileActionUpdate');

	Route::post('/dgda/manufacturers/herbalManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@herbalManufacturerProfileActionUpdate')->name('herbalManufacturerProfileActionUpdate');

	Route::post('/dgda/manufacturers/homeopathicManufacturerProfile/{licenseNo}/actions','DgdaManufacturerController@homeopathicManufacturerProfileActionUpdate')->name('homeopathicManufacturerProfileActionUpdate');


	//////////////////////////////////////SEARCH////////////////////////////////////////////////
	Route::post('/dgda/manufacturers/search','DgdaManufacturerController@searchManufacturers')->name('searchManufacturers');



	////////////////////////////////////////////////Suspend////////////////////////////


	Route::get('/dgda/manufacturers/allopathicManufacturerProfile/{licenseNo}/Suspend','DgdaManufacturerController@allopathicManufacturerSuspend' )->name('allopathicManufacturerSuspend');
	Route::get('/dgda/manufacturers/ayurvedicManufacturerProfile/{licenseNo}/Suspend','DgdaManufacturerController@ayurvedicManufacturerSuspend' )->name('ayurvedicManufacturerSuspend');
	Route::get('/dgda/manufacturers/unaniManufacturerProfile/{licenseNo}/Suspend','DgdaManufacturerController@unaniManufacturerSuspend' )->name('unaniManufacturerSuspend');
	Route::get('/dgda/manufacturers/herbalManufacturerProfile/{licenseNo}/Suspend','DgdaManufacturerController@herbalManufacturerSuspend' )->name('herbalManufacturerSuspend');
	Route::get('/dgda/manufacturers/homeopathicManufacturerProfile/{licenseNo}/Suspend','DgdaManufacturerController@homeopathicManufacturerSuspend' )->name('homeopathicManufacturerSuspend');

	////////////////////////////////////Activate ////////////////////////////////////////
	Route::get('/dgda/manufacturers/allopathicManufacturerProfile/{licenseNo}/Activate','DgdaManufacturerController@allopathicManufacturerActivate' )->name('allopathicManufacturerActivate');
	Route::get('/dgda/manufacturers/ayurvedicManufacturerProfile/{licenseNo}/Activate','DgdaManufacturerController@ayurvedicManufacturerActivate' )->name('ayurvedicManufacturerActivate');
	Route::get('/dgda/manufacturers/unaniManufacturerProfile/{licenseNo}/Activate','DgdaManufacturerController@unaniManufacturerActivate' )->name('allopathicManufacturerActivate');
	Route::get('/dgda/manufacturers/herbalManufacturerProfile/{licenseNo}/Activate','DgdaManufacturerController@herbalManufacturerActivate' )->name('allopathicManufacturerActivate');
	Route::get('/dgda/manufacturers/homeopathicManufacturerProfile/{licenseNo}/Activate','DgdaManufacturerController@homeopathicManufacturerActivate' )->name('homeopathicManufacturerActivate');

	/////////////////////////////////////////////// New Manufacturer Requests/////////////////////////////


	Route::get('/dgda/manufacturers/requests','DgdaManufacturerController@newManufacturerReq')->name('dgdaManufacturer.newManufacturerRequest');
	Route::get('/dgda/manufacturers/requests/{licenseNo}','DgdaManufacturerController@viewManufacturerReq')->name('dgdaManufacturer.viewManufacturerReq');
	Route::get('/dgda/manufacturers/requests/{licenseNo}/verify-nbr','DgdaManufacturerController@forwardToNBR')->name('dgdaManufacturer.forwardToNBR');
	Route::get('/dgda/manufacturers/requests/{licenseNo}/verify-confirm','DgdaManufacturerController@confirmManufacturerReq')->name('dgdaManufacturer.confirmManufacturerReq');
	Route::get('/dgda/manufacturers/requests/{licenseNo}/verify-cancel','DgdaManufacturerController@cancelManufacturerReq')->name('dgdaManufacturer.cancelManufacturerReq');

	});
});


	








///////////////////////////////////////////////////////////////NBR///////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/nbr','NbrController@index')->name('nbr.index');
Route::get('/nbr/dgda/pharmacies','NbrController@getpharmacies')->name('nbr.getpharmacies');
Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyView/{lowserial}-{highserial}','NbrController@allopathicRetailPharmacyView')->name('nbr.allopathicRetailPharmacyView');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyView/{lowserial}-{highserial}','NbrController@ayurvedicRetailPharmacyView')->name('nbr.ayurvedicRetailPharmacyView');
Route::get('nbr/dgda/pharmacies/unaniRetailPharmacyView/{lowserial}-{highserial}','NbrController@unaniRetailPharmacyView')->name('nbr.unaniRetailPharmacyView');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyView/{lowserial}-{highserial}','NbrController@herbalRetailPharmacyView')->name('nbr.herbalRetailPharmacyView');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyView/{lowserial}-{highserial}','NbrController@homeopathicRetailPharmacyView')->name('nbr.homeopathicRetailPharmacyView');



///////////////////////////////////////////////////////////////NBR Profile/////////////////////////////////////////////////////////////////////////////////////



Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}','NbrController@allopathicRetailPharmacyProfile');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}','NbrController@ayurvedicRetailPharmacyProfile');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}','NbrController@unaniRetailPharmacyProfile');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}','NbrController@herbalRetailPharmacyProfile');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}','NbrController@homeopathicRetailPharmacyProfile');


////////////////////////////////////////////////NBR WaRNinG////////////////////////////


Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/makeWarning','NbrController@allopathicRetailPharmacymakeWarning' )->name('allopathicRetailPharmacymakeWarning');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/makeWarning','NbrController@ayurvedicRetailPharmacymakeWarning' )->name('ayurvedicRetailPharmacymakeWarning');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/makeWarning','NbrController@unaniRetailPharmacymakeWarning' )->name('unaniRetailPharmacymakeWarning');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/makeWarning','NbrController@herbalRetailPharmacymakeWarning' )->name('herbalRetailPharmacymakeWarning');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/makeWarning','NbrController@homeopathicRetailPharmacymakeWarning' )->name('homeopathicRetailPharmacymakeWarning');


/////////////////////////////////////////////////////NBR SUSPEND/////////////////////////////


Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/suspend','NbrController@allopathicRetailPharmacysuspend' )->name('allopathicRetailPharmacysuspend');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/suspend','NbrController@ayurvedicRetailPharmacysuspend' )->name('ayurvedicRetailPharmacysuspend');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/suspend','NbrController@unaniRetailPharmacysuspend' )->name('unaniRetailPharmacysuspend');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/suspend','NbrController@herbalRetailPharmacysuspend' )->name('herbalRetailPharmacysuspend');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/suspend','NbrController@homeopathicRetailPharmacysuspend' )->name('homeopathicRetailPharmacysuspend');


/////////////////////////////////////////////////////NBR Clear /////////////////////////////



Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/clear','NbrController@allopathicRetailPharmacyClear' )->name('allopathicRetailPharmacyClear');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/clear','NbrController@ayurvedicRetailPharmacyClear' )->name('ayurvedicRetailPharmacyClear');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/clear','NbrController@unaniRetailPharmacyClear' )->name('unaniRetailPharmacyClear');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/clear','NbrController@herbalRetailPharmacyClear' )->name('herbalRetailPharmacyClear');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/clear','NbrController@homeopathicRetailPharmacyClear' )->name('homeopathicRetailPharmacyClear');




/////////////////////////////////Tax List


Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/getTaxList','NbrController@allopathicRetailPharmacyTaxList' )->name('allopathicRetailPharmacyTaxList');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/getTaxList','NbrController@ayurvedicRetailPharmacyTaxList' )->name('ayurvedicRetailPharmacyTaxList');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/getTaxList','NbrController@unaniRetailPharmacyTaxList' )->name('unaniRetailPharmacyTaxList');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/getTaxList','NbrController@herbalRetailPharmacyTaxList' )->name('herbalRetailPharmacyTaxList');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/getTaxList','NbrController@homeopathicRetailPharmacyTaxList' )->name('homeopathicRetailPharmacyTaxList');






//////////////////////////////////////download/////////////////////////



Route::get('/nbr/dgda/pharmacies/allopathicRetailPharmacyProfile/{licenseNo}/getTaxList/download','DownloadController@allopathicRetailPharmacyTaxListDownload' )->name('allopathicRetailPharmacyTaxListDownload');
Route::get('/nbr/dgda/pharmacies/ayurvedicRetailPharmacyProfile/{licenseNo}/getTaxList/download','DownloadController@ayurvedicRetailPharmacyTaxListDownload' )->name('ayurvedicRetailPharmacyTaxListDownload');
Route::get('/nbr/dgda/pharmacies/unaniRetailPharmacyProfile/{licenseNo}/getTaxList/download','DownloadController@unaniRetailPharmacyTaxListDownload' )->name('unaniRetailPharmacyTaxListDownload');
Route::get('/nbr/dgda/pharmacies/herbalRetailPharmacyProfile/{licenseNo}/getTaxList/download','DownloadController@herbalRetailPharmacyTaxListDownload' )->name('herbalRetailPharmacyTaxListDownload');
Route::get('/nbr/dgda/pharmacies/homeopathicRetailPharmacyProfile/{licenseNo}/getTaxList/download','DownloadController@homeopathicRetailPharmacyTaxListDownload' )->name('homeopathicRetailPharmacyTaxListDownload');


////////////////////////////////////////////////////////////Requests///////////////////////////////


Route::get('/nbr/dgda/pharmacies/requests','NbrController@newPharmacyReq')->name('nbr.newPharmacyReq');
Route::get('/nbr/dgda/pharmacies/requests/{licenseNo}','NbrController@viewPharmacyReq')->name('nbr.viewPharmacyReq');
Route::get('/nbr/dgda/pharmacies/requests/{licenseNo}/verify-dgda','NbrController@forwardToDGDA')->name('nbr.forwardToDGDa');
Route::get('/nbr/dgda/pharmacies/requests/{licenseNo}/verify-cancel','DgdaController@cancelPharmacyReq')->name('nbr.cancelPharmacyReq');



/////////////////////////////////////////Doctor///////////////////////////////////////////////////////////////////////////////////


Route::get('/doctor','DoctorController@index')->name('doctor.index');
Route::post('/doctor','DoctorController@prescribe')->name('doctor.prescribe');
Route::get('/doctor/serachmedicine','DoctorController@serachmedicine')->name('getDrugname.Search');