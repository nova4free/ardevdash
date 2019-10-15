<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
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
}
