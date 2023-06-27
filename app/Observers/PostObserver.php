<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\Profile;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function created(Post $post)
    {

    }

    /**
     * Handle the Post "updated" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function updated(Post $post)
    {

        if ($post->isDirty('category_id') || $post->isDirty('description')) {
            $post->notification_id=3;
        }
         if ($post->isDirty('comment')) {
            $post->notification_id=2;
        }
         if ($post->isDirty('status_id')) {
            $post->notification_id=4;
        }
         $post->updateQuietly();

    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}


