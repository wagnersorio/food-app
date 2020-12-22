<?php

namespace App\Observers;

use App\Models\Plans;
use Illuminate\Support\Str;

class PlanObserver
{
    /**
     * Handle the Plans "created" event.
     *
     * @param  \App\Models\Plans  $plans
     * @return void
     */
    public function creating(Plans $plans)
    {
        $plans->url - Str::kebab($plans->name);
    }

    /**
     * Handle the Plans "updated" event.
     *
     * @param  \App\Models\Plans  $plans
     * @return void
     */
    public function updating(Plans $plans)
    {
        $plans->url - Str::kebab($plans->name);
    }
}
