<?php
namespace App\Observers;

use App\links;

class linksObserver
{
    
    /**
     * Listen to the links creating event.
     *
     * @param  links  $links
     * @return void
     */
    public function creating(links $links)
    {
        //code...
    }

     /**
     * Listen to the links created event.
     *
     * @param  links  $links
     * @return void
     */
    public function created(links $links)
    {
        //code...
    }

    /**
     * Listen to the links updating event.
     *
     * @param  links  $links
     * @return void
     */
    public function updating(links $links)
    {
        //code...
    }

    /**
     * Listen to the links updated event.
     *
     * @param  links  $links
     * @return void
     */
    public function updated(links $links)
    {
        //code...
    }

    /**
     * Listen to the links saving event.
     *
     * @param  links  $links
     * @return void
     */
    public function saving(links $links)
    {
        //code...
    }

    /**
     * Listen to the links saved event.
     *
     * @param  links  $links
     * @return void
     */
    public function saved(links $links)
    {
        //code...
    }

    /**
     * Listen to the links deleting event.
     *
     * @param  links  $links
     * @return void
     */
    public function deleting(links $links)
    {
        //code...
    }

    /**
     * Listen to the links deleted event.
     *
     * @param  links  $links
     * @return void
     */
    public function deleted(links $links)
    {
        //code...
    }

    /**
     * Listen to the links restoring event.
     *
     * @param  links  $links
     * @return void
     */
    public function restoring(links $links)
    {
        //code...
    }

    /**
     * Listen to the links restored event.
     *
     * @param  links  $links
     * @return void
     */
    public function restored(links $links)
    {
        //code...
    }
}