<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\SubcategoryController;

use App\Http\Controllers\ProductController; 

use App\Http\Controllers\ReviewController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ShowProductController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\DoctorController; 
use App\Http\Controllers\EmailController;



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

Route::get('/demo', function () {
    return view('welcome');
});


Route::get('/data', function () {
    return view('Data');
}); 


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//    Route::get('/addcategory', function () {
//        return view('admin.addcategory');
//});

Route::get('/form', function () {
    return view('admin.form');
});

//Route::get('/addsubcategory', function () {
//    return view('admin.addsubcategory');
//});

//Route::get('/addproduct', function () {
//    return view('admin.addproduct');
//});

//Route::get('/addreview', function () {
//    return view('admin.addreview');
//}); 

// Route::get('/showcategory', function () {
//     return view('admin.showcategory');
// });

Route::resources([
    'user1' => UserController::class,
    
]);


Route::resources([
    'category' => CategoryController::class,
    
]);

Route::resources([
    'subcategory' => SubcategoryController::class,
    
]);

//Route::get('/showsubcategory', function () {
//    return view('admin.showsubcategory');
//});

Route::get('/usercart', function () {
    return view('admin.showsubcategory');
});

Route::resources([
    'product' => ProductController::class,
    
]);


//Route::get('/showproduct', function () {
//    return view('admin.showproduct');
//});

Route::resources([
    'review' => ReviewController::class,
    
]);
//Route::get('/showreview', function () {
//    return view('admin.showreview');
//});

Route::get('/adminlogin', function () {
    return view('admin.adminlogin');
});

Route::get('/adminforgotpassword', function () {
    return view('admin.adminforgotpassword');
});

Route::get('/userforgotpassword', function () {
    return view('user.userforgotpassword');
});

Route::get('/checkout', function () {
    return view('user.checkout');
});

Route::get('/usermaster', function () {return view('user.usermaster');
});

Route::get('/', function () {
    return view('user.userhome');
});

Route::get('/aboutus', function () {
    return view('user.aboutus');
});

Route::get('/contactus', function () {
    return view('user.contactus');
});


Route::get('/gallery', function () {
    return view('user.gallery');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('user.register');
});


Route::get('/usercart', function () {
    return view('user.usercart');
});

//Route::get('/showproduct', function () {
//    return view('user.showproduct');
//});

Route::resources([
    'showproduct' => ShowProductController::class,
    
]);


Route::resources([
    'cart' => CartController::class,
    
]);





Route::any('/singleproduct/{id}', [ProductController::class, 'show']);

Route::any('/checklogin', [UserController::class, 'checklogin']);



Route::any('/checkadminlogin', [UserController::class, 'adminlogin']);


Route::any('/logout', [UserController::class, 'logout']);

Route::any('/adminlogout', [UserController::class, 'adminlogout']);

Route::any('/myprofile', [UserController::class, 'adminprofile']);

Route::any('/editprofile', [UserController::class, 'userprofile']);

// Route::any('/updatecategory', [CategoryController::class, 'updatecategory']);

// Route::get('/adminprofile', function () {
//     return view('admin.adminprofile');
// });

Route::resources([
    'doctor' => DoctorController::class,
    
]);

Route::get('/doctorregister', function () {
    return view('user.doctorregister');
});





Route::any('/showdoctor', [DoctorController::class, 'showdr']);


Route::any('/send-email', [EmailController::class, 'index']);




Route::any('/deletecart/{id}', [CartController::class, 'deletecart']); 

Route::any('/updatecart/{id}', [CartController::class, 'incresedata']);

Route::any('/updatedec/{id}', [CartController::class, 'decreasedata']);




