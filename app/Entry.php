<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'service','description','vehicule','cost','pay-method',
        'status','client-type','inventory-number','folio',
        'telephone','contact', 'start-time', 'end-time', 'driver'
    ];
}
