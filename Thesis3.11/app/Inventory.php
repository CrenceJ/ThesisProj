<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Inventory extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'inventory_id';
    protected $table = 'inventory';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial', 'inventory_brand', 'inventory_item'
    ];

}
