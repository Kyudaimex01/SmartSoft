<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expositor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age','description','address_exp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function conference(){
        return $this->belongsTo('App\Conference','id_conf');
    }
}
