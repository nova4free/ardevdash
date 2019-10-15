<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleAnalyticsAccount extends Model
{
    /**
     * Allow all fields to be fillable, i.e. none guareded.
     */
    protected $guarded = [];

    /**
     * Belows to one account entry
     */
    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
