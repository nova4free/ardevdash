<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientLogin extends Model
{
    /**
     * Get the account related to this client login
     */
    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
