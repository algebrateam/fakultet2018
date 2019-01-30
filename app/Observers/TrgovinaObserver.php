<?php
//php artisan make:observer TrgovinaObserver --model=Trgovina

namespace App\Observers;

use App\Trgovina;

class TrgovinaObserver
{
    /*
     * retrieved
     * creating
     * created
     * updating
     * updated
     * saving
     * saved
     * deleting
     * deleted
     * restoring
     * restored*/
    
     /**
     * Handle the trgovina "updating" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function updating(Trgovina $trgovina)
    {
        $trgovina->drzava= ucfirst($trgovina->drzava);
    }   
    
    /**
     * Handle the trgovina "created" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function created(Trgovina $trgovina)
    {
        //
    }

    /**
     * Handle the trgovina "updated" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function updated(Trgovina $trgovina)
    {
        //
    }

    /**
     * Handle the trgovina "deleted" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function deleted(Trgovina $trgovina)
    {
        //
    }

    /**
     * Handle the trgovina "restored" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function restored(Trgovina $trgovina)
    {
        //
    }

    /**
     * Handle the trgovina "force deleted" event.
     *
     * @param  Trgovina  $trgovina
     * @return void
     */
    public function forceDeleted(Trgovina $trgovina)
    {
        //
    }
}
