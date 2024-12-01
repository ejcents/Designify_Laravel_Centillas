<?php

use App\Http\Controllers\DesignController;

Route::get('/', [DesignController::class, 'index']);
Route::get('/designs/create', [DesignController::class, 'create'])->name('designs.create');
Route::post('/designs', [DesignController::class, 'store'])->name('designs.store');
Route::delete('/designs/{design}', [DesignController::class, 'destroy'])->name('designs.destroy');
    

// Route for displaying the list of designs
Route::get('/designs', [DesignController::class, 'index'])->name('designs.index');

// Route for showing the edit form for a specific design
Route::get('/designs/{design}/edit', [DesignController::class, 'edit'])->name('designs.edit');

// Route for updating a design
Route::put('/designs/{design}', [DesignController::class, 'update'])->name('designs.update');

