<?php

namespace App\Observers;

use App\Models\Server;

class ServerObserver
{
    /**
     * Handle the Server "created" event.
     *
     * @param \App\Models\Server $server
     * @return void
     */
    public function created(Server $server)
    {
        //
    }

    /**
     * Handle the Server "updated" event.
     *
     * @param \App\Models\Server $server
     * @return void
     */
    public function updated(Server $server)
    {

        if ($server->isDirty('cpu_id') || $server->isDirty('ram_id')|| $server->isDirty('system_id')|| $server->isDirty('disk_id')|| $server->isDirty('ic_ag')|| $server->isDirty('dis_ag')|| $server->isDirty('reason')|| $server->isDirty('description')|| $server->isDirty('kayit')) {
            $server->notification_id=3;
        }
        if ($server->isDirty('comment')) {
            $server->notification_id=2;
        }
        if ($server->isDirty('status_id')) {
            $server->notification_id=4;
        }
        $server->updateQuietly();

    }

    /**
     * Handle the Server "deleted" event.
     *
     * @param \App\Models\Server $server
     * @return void
     */
    public function deleted(Server $server)
    {
        //
    }

    /**
     * Handle the Server "restored" event.
     *
     * @param \App\Models\Server $server
     * @return void
     */
    public function restored(Server $server)
    {
        //
    }

    /**
     * Handle the Server "force deleted" event.
     *
     * @param \App\Models\Server $server
     * @return void
     */
    public function forceDeleted(Server $server)
    {
        //
    }
}
