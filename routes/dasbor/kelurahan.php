<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\KelurahanController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | kelurahan
    |
    | index
    | draft
    | tambah
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
    
        Route::controller(KelurahanController::class)->group(function(){

            // index
            Route::get('kelurahan','index')
                ->name('dasbor.kelurahan');

            // draft
            Route::get('kelurahan/draft','draft')
                ->name('dasbor.kelurahan.draft');

            // tambah
            Route::get('kelurahan/tambah','tambah')
                ->name('dasbor.kelurahan.tambah');

            // store
            Route::post('kelurahan','store')
                ->name('dasbor.kelurahan.store');


            // show
            Route::get('kelurahan/show/{id}','show')
                ->name('dasbor.kelurahan.show');

            // edit
            Route::get('kelurahan/edit/{id}','edit')
                ->name('dasbor.kelurahan.edit');

            // // edit
            // Route::get('kelurahan/edit/{id}', function() {
            //     return redirect('kelurahan/edit/biography/{id}');
            // });

            // edit > profile
            Route::get('kelurahan/edit/profile/{id}','edit')
            ->name('dasbor.kelurahan.edit.profile');

            // edit > picture
            Route::get('kelurahan/edit/picture/{id}','edit')
            ->name('dasbor.kelurahan.edit.picture');

            // edit > biography
            Route::get('kelurahan/edit/biography/{id}','edit')
            ->name('dasbor.kelurahan.edit.biography');

            // edit > contact
            Route::get('kelurahan/edit/contact/{id}','edit')
            ->name('dasbor.kelurahan.edit.contact');

            // edit > address
            Route::get('kelurahan/edit/address/{id}','edit')
            ->name('dasbor.kelurahan.edit.address');

            // edit > documents
            Route::get('kelurahan/edit/documents/{id}','edit')
            ->name('dasbor.kelurahan.edit.documents');

            // edit > educations
            Route::get('kelurahan/edit/educations/{id}','edit')
            ->name('dasbor.kelurahan.edit.educations');






            // // update
            // Route::put('kelurahan/{id}','update')
            //     ->name('dasbor.kelurahan.update');

            // update > profile
            Route::put('kelurahan/update/profile/{id}','update_profile')
            ->name('dasbor.kelurahan.update.profile');

            // update > picture
            Route::put('kelurahan/update/picture/{id}','update_picture')
                ->name('dasbor.kelurahan.update.picture');

            // update > biography
            Route::put('kelurahan/update/biography/{id}','update_biography')
                ->name('dasbor.kelurahan.update.biography');

            // update > contact
            Route::put('kelurahan/update/contact/{id}','update_contact')
                ->name('dasbor.kelurahan.update.contact');

            // update > address
            Route::put('kelurahan/update/address/{id}','update_address')
                ->name('dasbor.kelurahan.update.address');

            // update > documents
            Route::put('kelurahan/update/documents/{id}','update_documents')
                ->name('dasbor.kelurahan.update.documents');

            // update > educations
            Route::put('kelurahan/update/educations/{id}','update_educations')
                ->name('dasbor.kelurahan.update.educations');








            // destroy
            Route::delete('kelurahan/{id}','destroy')
                ->name('dasbor.kelurahan.destroy');

            // trash
            Route::get('kelurahan/trash','trash')
                ->name('dasbor.kelurahan.trash');

            // restore
            Route::post('kelurahan/restore/{id}','restore')
                ->name('dasbor.kelurahan.restore');

            // delete
            Route::delete('kelurahan/delete/{id}','delete')
                ->name('dasbor.kelurahan.delete');

        });
    });
