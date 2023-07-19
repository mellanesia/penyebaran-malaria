<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\RwController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | rw
    |
    | index
    | draft
    | create
    | store
    | show
    | edit
    | update
    | destroy
    | trash
    | restore
    | delete
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(RwController::class)->group(function(){

            // index
            Route::get('rw','index')
                ->name('dasbor.rw');

            // draft
            Route::get('rw/draft','draft')
                ->name('dasbor.rw.draft');

            // create
            Route::get('rw/create','create')
                ->name('dasbor.rw.create');

            // store
            Route::post('rw','store')
                ->name('dasbor.rw.store');


            // show
            Route::get('rw/show/{id}','show')
                ->name('dasbor.rw.show');

            // edit
            Route::get('rw/edit/{id}','edit')
                ->name('dasbor.rw.edit');

            // // edit
            // Route::get('rw/edit/{id}', function() {
            //     return redirect('rw/edit/biography/{id}');
            // });

            // edit > profile
            Route::get('rw/edit/profile/{id}','edit')
            ->name('dasbor.rw.edit.profile');

            // edit > picture
            Route::get('rw/edit/picture/{id}','edit')
            ->name('dasbor.rw.edit.picture');

            // edit > biography
            Route::get('rw/edit/biography/{id}','edit')
            ->name('dasbor.rw.edit.biography');

            // edit > contact
            Route::get('rw/edit/contact/{id}','edit')
            ->name('dasbor.rw.edit.contact');

            // edit > address
            Route::get('rw/edit/address/{id}','edit')
            ->name('dasbor.rw.edit.address');

            // edit > documents
            Route::get('rw/edit/documents/{id}','edit')
            ->name('dasbor.rw.edit.documents');

            // edit > educations
            Route::get('rw/edit/educations/{id}','edit')
            ->name('dasbor.rw.edit.educations');






            // // update
            // Route::put('rw/{id}','update')
            //     ->name('dasbor.rw.update');

            // update > profile
            Route::put('rw/update/profile/{id}','update_profile')
            ->name('dasbor.rw.update.profile');

            // update > picture
            Route::put('rw/update/picture/{id}','update_picture')
                ->name('dasbor.rw.update.picture');

            // update > biography
            Route::put('rw/update/biography/{id}','update_biography')
                ->name('dasbor.rw.update.biography');

            // update > contact
            Route::put('rw/update/contact/{id}','update_contact')
                ->name('dasbor.rw.update.contact');

            // update > address
            Route::put('rw/update/address/{id}','update_address')
                ->name('dasbor.rw.update.address');

            // update > documents
            Route::put('rw/update/documents/{id}','update_documents')
                ->name('dasbor.rw.update.documents');

            // update > educations
            Route::put('rw/update/educations/{id}','update_educations')
                ->name('dasbor.rw.update.educations');








            // destroy
            Route::delete('rw/{id}','destroy')
                ->name('dasbor.rw.destroy');

            // trash
            Route::get('rw/trash','trash')
                ->name('dasbor.rw.trash');

            // restore
            Route::post('rw/restore/{id}','restore')
                ->name('dasbor.rw.restore');

            // delete
            Route::delete('rw/delete/{id}','delete')
                ->name('dasbor.rw.delete');

        });
    });
