<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProjectController;

Route :: get ('/', [TypeController :: class, 'index']) -> name('type.index');
Route :: get ('/projects', [ProjectController :: class, 'index']) -> name('project.index');
Route :: get('/types/create', [TypeController :: class, 'create']) -> name('type.create');
Route :: post ('types', [TypeController :: class, 'store']) -> name('type.store');
Route :: get ('/types/{id}', [TypeController :: class, 'show']) -> name ('type.show');
Route :: get ('/types/{id}/edit', [TypeController :: class, 'edit']) -> name ('type.edit');
Route :: put ('/types/{id}', [TypeController :: class, 'update']) -> name ('type.update');