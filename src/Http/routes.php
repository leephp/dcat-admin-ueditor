<?php

use Illuminate\Support\Facades\Route;
use LeePhpG\UEditor\Http\Controllers\UEditorController;

Route::any('leephpg/ueditor/handle', UEditorController::class.'@handle')->name('leephpg.ueditor.handle');
