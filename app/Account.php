<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * Allow all fields to be fillable, i.e. none guareded.
     */
    protected $guarded = [];

    /**
     * Get the users for this account
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the client logins for this account
     */
    public function clientlogins()
    {
        return $this->hasMany(ClientLogin::class);
    }

    /**
     * Has one Google Analytics Account ID
     */
    public function googleAnalyticsAccount()
    {
        return $this->hasOne('App\GoogleAnalyticsAccount');
    }
}
