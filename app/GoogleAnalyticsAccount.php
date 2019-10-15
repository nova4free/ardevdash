<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleAnalyticsAccount extends Model
{
    /**
     * Allow all fields to be fillable, i.e. none guareded.
     */
    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
