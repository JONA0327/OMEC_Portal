<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
// profile
Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', 'ProfileController@index');
    Route::post('update-profile', 'ProfileController@update');
});

// User
Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@redirect');

    Route::get('dashboard', 'HomeController@index')->name('home');
    Route::get('change-password', 'ChangePasswordController@create')->name('password.create');
    Route::post('change-password', 'ChangePasswordController@update')->name('password.update');
    Route::get('test', 'TestsController@index')->name('test');
    Route::post('test', 'TestsController@store')->name('test.store');
    Route::get('results/{result_id}', 'ResultsController@show')->name('results.show');
    Route::get('send/{result_id}', 'ResultsController@send')->name('results.send');
});

Route::get('/', 'HomeController@home')->name('/');
Route::post('FAQ_Search', 'HomeController@FaqSearch')->name('FAQ_Search');
Route::get('contact', 'ContactController@index');
Route::get('about', 'AboutController@index');
Route::post('Send_Message', 'ContactController@store')->name('Send_Message');
Route::get('lang/home', 'LangController@index');
Route::get('lang/change', 'LangController@change')->name('changeLang');
Route::post('newsletter', 'NewsletterController@store')->name('newsletter');

Auth::routes();

Route::view('test', 'test');
Route::post('test', 'TestController@index');

Route::get('create/award', 'AwardController@createForm');
Route::post('create/award', 'AwardController@create');
Route::get('bulet', 'AwardController@Bulit');
Route::get('service', 'ServicesController@index');
Route::get('service_detail/{id}', 'ServicesController@edit');

// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin','auth']], function () {

    Route::get('/admin', 'HomeController@index')->name('home');
    Route::get('paid-users/{id?}', 'HomeController@paidUsers');
    //Profile
    Route::view('profile','Admin/users/profile');
    // Rank
    Route::resource('rank', 'RankController');
    Route::post('deleteRank', 'RankController@destroy')->name('deleteRank');
    // Reason of award
    Route::resource('reason', 'ReasonAwardController');
    Route::post('deleteReason', 'ReasonAwardController@destroy')->name('deleteReason');
    // Type of Medals
    Route::resource('typemedal', 'TypeMedalController');
    Route::post('deleteTypeMedal', 'TypeMedalController@destroy')->name('deleteTypeMedal');
    // newsletter
    Route::resource('newsletter', 'NewsletterController');
    Route::post('deletenewsletter', 'NewsletterController@destroy')->name('deletenewsletter');
    // Service
    Route::resource('service', 'ServiceController');
    Route::post('deleteService', 'ServiceController@destroy')->name('deleteService');
    // Review
    Route::resource('review', 'ReviewController');
    Route::post('deleteReview', 'ReviewController@destroy')->name('deleteReview');
    // media
    Route::resource('media', 'MediaController');
    Route::post('deletemedia', 'MediaController@destroy')->name('deleteMedia');
    // Website Content
    Route::resource('content', 'ContentController');
    // Country
    Route::resource('country', 'CountryController');
    // Profile
    Route::resource('profile', 'ProfileController');
    // Faq Category
    Route::resource('faq_category', 'FaqCategoryController');
    // Faq
    Route::resource('faq', 'FaqController');
    Route::post('deleteFAQ', 'FaqController@destroy')->name('deleteFAQ');
    // Support
    Route::resource('support', 'SupportController');
    Route::post('deleteSupport', 'SupportController@destroy')->name('deleteSupport');
    // Team
    Route::resource('team', 'TeamController');
    Route::post('deleteTeam', 'TeamController@destroy')->name('deleteTeam');
    // news
    Route::resource('news', 'NewsController');
    Route::post('deletenews', 'NewsController@destroy')->name('deleteNews');
    // writing point
    Route::resource('writing_point', 'WritingPointController');
    Route::post('deleteWritingPoint', 'WritingPointController@destroy')->name('deleteWritingPoint');
    // contact
    Route::resource('contact', 'ContactController');
    Route::post('deleteContact', 'ContactController@destroy')->name('deleteContact');

    // Lists
    Route::resource('lists', 'ListController');
    // Abbreviation
    Route::resource('abbreviation', 'AbbreviationController');
    Route::post('deleteAbbreviation', 'AbbreviationController@destroy')->name('deleteAbbreviation');
    Route::get('export', 'AbbreviationController@export')->name('export');
    Route::post('import', 'AbbreviationController@import')->name('import');

    // // Companies
    // Route::resource('companies', 'CompanyController');
    // Route::post('companies/add-to-list', 'CompanyController@addToList')->name('companies.addToList');

    // // Account
    // Route::resource('accounts', 'AccountController');
    // Route::post('accounts/add-to-list', 'AccountController@addToList')->name('accounts.addToList');

    // // Import
    // Route::get('import/companies', 'CompanyController@importForm')->name('import.companies.form');
    // Route::post('import/companies', 'CompanyController@import')->name('import.companies');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    //Document
    Route::delete('documents/destroy', 'DocumentController@massDestroy')->name('documents.massDestroy');
    Route::resource('documents', 'DocumentController');
    //Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::resource('products', 'ProductController');
    Route::post('products/import', 'ProductController@Import')->name('products.import');
    //Warehouse
    Route::delete('warehouses/destroy', 'WarehouseController@massDestroy')->name('warehouses.massDestroy');
    Route::resource('warehouses', 'WarehouseController');
    //Stocks
    Route::delete('stocks/destroy', 'StockController@massDestroy')->name('stocks.massDestroy');
    Route::resource('stocks', 'StockController');
    Route::post('stocks/import', 'StockController@Import')->name('stocks.import');
    Route::get('stocks-import', 'StockController@localImport')->name('stocks.localImport');
    Route::post('stocks/multidelete', 'StockController@multidelete')->name('stocks.multidelete');
    Route::post('stocks/setdate', 'StockController@setdate')->name('stocks.setdate');
    //Session control
    Route::get('sessions', 'StockController@sessions')->name('sessions.index');
    // Categories
    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');

    // Questions
    // Route::delete('questions/destroy', 'QuestionsController@massDestroy')->name('questions.massDestroy');
    // Route::resource('questions', 'QuestionsController');

    // Options
    // Route::delete('options/destroy', 'OptionsController@massDestroy')->name('options.massDestroy');
    // Route::resource('options', 'OptionsController');

    // Results
    // Route::delete('results/destroy', 'ResultsController@massDestroy')->name('results.massDestroy');
    // Route::resource('results', 'ResultsController');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', 'ProfileController@index');
    Route::post('update-profile', 'ProfileController@update');

    Route::get('stripe', 'StripeController@stripe');
    Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');
});

Route::get('/service/create', 'ServicesController@create');
Route::post('/service/store', 'ServicesController@store');
Route::get('/service/view', 'ServicesController@view');
Route::get('/service/edit/{id}', 'ServicesController@edit');
Route::post('/service/update/{id}', 'ServicesController@update');
Route::post('/service/delete/{id}', 'ServicesController@delete');
// Features Routes
Route::get('/feature/create', 'FeatureController@create');
Route::post('/feature/store', 'FeatureController@store');
Route::get('/feature/view', 'FeatureController@view');
Route::get('/feature/edit/{id}', 'FeatureController@edit');
Route::post('/feature/update/{id}', 'FeatureController@update');
Route::post('/feature/delete/{id}', 'FeatureController@delete');
// Banner Routes
Route::get('/banner/create', 'BannerController@create');
Route::post('/banner/store', 'BannerController@store');
Route::get('/banner/view', 'BannerController@view');
Route::get('/banner/edit/{id}', 'BannerController@edit');
Route::post('/banner/update/{id}', 'BannerController@update');
Route::post('/banner/delete/{id}', 'BannerController@delete');
//Delivered
Route::resource('delivered', 'DeliveredController');
//Team
Route::resource('team', 'TeamController');
//Comander
Route::resource('comander', 'ComanderController');
// /*Document Route starts*/
Route::get('document', 'DocumentController@index')->name('document.index');
Route::get('document/view/{id}', 'DocumentController@create')->name('document.create');
Route::post('document/store', 'DocumentController@store')->name('document.store');
Route::post('document/update', 'DocumentController@update')->name('document.update');
Route::get('document/{id}/remove', 'DocumentController@remove')->name('document.remove');
Route::get('document/details/{id}', 'DocumentController@documentBYId')->name('document.details');
Route::post('document/rename-document', 'DocumentController@renameDocument')->name('document.rename');
Route::post('document/add-document-user', 'DocumentController@addDocumentUser')->name('document-user.store');
Route::post('document/edit-document-user', 'DocumentController@editDocumentUser')->name('document-user.update');
Route::get('get-document-users/{id}', 'DocumentController@getDocumentUsers')->name('get.document.users');
Route::get('get-document-user-details/{id}', 'DocumentController@getDocumentUserDetails');
Route::get('delete-document-user/{id}', 'DocumentController@deleteDocumentUser');
Route::get('send-document-to-users/{id}', 'DocumentController@sendDocumentUser')->name('send.document.to.users');
Route::get('document-download/{id}', 'DocumentController@getDownload')->name('document.download');
Route::get('got-it-how-to-add-user', 'DocumentController@gotItHowToAddUser');
Route::get('got-it-how-to-add-user-signature', 'DocumentController@gotItHowToAddUserSignature');
Route::get('got-it-how-to-add-signature-box', 'DocumentController@gotItHowToAddSignatureBox');
Route::post('folder/search', 'DocumentController@searchFolder')->name('folder.search');
Route::post('folder/suggestion-search', 'DocumentController@suggestionSearch')->name('folder.suggestion.search');
Route::get('document/response-list/{id}', 'DocumentController@documentResponseList')->name('document.response.list');

Route::post('document/add-document-user-element', 'DocumentController@addDocumentUserElement')->name('document-user-element.store');
Route::get('get-document-elements/{id}/{page}/{user_id}', 'DocumentController@getDocumentElements')->name('get.document.element');
Route::get('delete-document-elements/{id}', 'DocumentController@deleteDocumentElement')->name('delete.document.element');

Route::post('folder/store', 'DocumentController@folderStore')->name('folder.store');
Route::post('folder/update', 'DocumentController@folderUpdate')->name('folder.update');
Route::get('folder/details/{id}', 'DocumentController@folderBYId')->name('folder.details');
Route::get('folder/{id}/remove', 'DocumentController@removeFolder')->name('folder.remove');
Route::get('document/modify/{id}', 'DocumentController@modifyDocument')->name('document.modify');
/*un-auth route of document*/
Route::post('document/document-response-store', 'DocumentController@documentUserResponseStore')->name('document-user-response.store');
Route::get('document/check-file/{id}/{user_id}/{send_id}', 'DocumentController@checkDocumentAttachFile')->name('check.email.document');
Route::get('document/document-file/{id}/{user_id}/{send_id}', 'DocumentController@downloadFile')->name('download.document.file');
/*Document route ended*/

Route::post('document/signature-store', 'DocumentController@documentSignature')->name('document-signature.store');

Route::post('document/image-store', 'DocumentController@documentImage')->name('document-image.store');
Route::post('document/text-store', 'DocumentController@documentText')->name('document-text.store');
