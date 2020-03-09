<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
    ];

    /**
     * Get the user record associated with the ticket.
     */
    public function user()
    {
        return $this->hasOne('App\User','id','id_user');
    }

}
