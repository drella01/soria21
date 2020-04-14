<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand','model','registration','reg_date','km','type_id',
    ];

    public function type()
    {
        return $this->belongsTo(VehicleType::class, 'type_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
