<?php
namespace App\Observers;

use App\images;

class imagesObserver
{
    
    /**
     * Listen to the images creating event.
     *
     * @param  images  $images
     * @return void
     */
    public function creating(images $images)
    {
        //code...
    }

     /**
     * Listen to the images created event.
     *
     * @param  images  $images
     * @return void
     */
    public function created(images $images)
    {
        //code...
    }

    /**
     * Listen to the images updating event.
     *
     * @param  images  $images
     * @return void
     */
    public function updating(images $images)
    {
        //code...
    }

    /**
     * Listen to the images updated event.
     *
     * @param  images  $images
     * @return void
     */
    public function updated(images $images)
    {
        //code...
    }

    /**
     * Listen to the images saving event.
     *
     * @param  images  $images
     * @return void
     */
    public function saving(images $images)
    {
        //code...
    }

    /**
     * Listen to the images saved event.
     *
     * @param  images  $images
     * @return void
     */
    public function saved(images $images)
    {
        //code...
    }

    /**
     * Listen to the images deleting event.
     *
     * @param  images  $images
     * @return void
     */
    public function deleting(images $images)
    {
        //code...
    }

    /**
     * Listen to the images deleted event.
     *
     * @param  images  $images
     * @return void
     */
    public function deleted(images $images)
    {
        //code...
    }

    /**
     * Listen to the images restoring event.
     *
     * @param  images  $images
     * @return void
     */
    public function restoring(images $images)
    {
        //code...
    }

    /**
     * Listen to the images restored event.
     *
     * @param  images  $images
     * @return void
     */
    public function restored(images $images)
    {
        //code...
    }
}