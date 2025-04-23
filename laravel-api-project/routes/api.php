<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// الحصول على جميع المنتجات
Route::get('products', [ProductController::class, 'getAllProducts']);

// الحصول على منتج محدد
Route::get('products/{id}', [ProductController::class, 'getProduct']);

// إنشاء منتج جديد
Route::post('products_create', [ProductController::class, 'createProduct']);

// تحديث منتج
Route::put('products/{id}', [ProductController::class, 'updateProduct']);

// حذف منتج
Route::delete('products/{id}', [ProductController::class, 'deleteProduct']);



// يمكنك الآن اختبار API الخاص بك باستخدام Postman أو أي أداة أخرى. المسارات ستكون:

// الحصول على كل المنتجات:

// GET http://127.0.0.1:8000/api/products


// الحصول على منتج محدد:

// GET http://127.0.0.1:8000/api/products/{id}


// إنشاء منتج جديد:

// POST http://127.0.0.1:8000/api/products
// مع JSON يحتوي على بيانات المنتج


// تحديث منتج:

// PUT http://127.0.0.1:8000/api/products/{id}
// مع JSON يحتوي على البيانات المحدثة


// حذف منتج:

// DELETE http://127.0.0.1:8000/api/products/{id}



