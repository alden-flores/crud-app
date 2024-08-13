<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class barangay extends Model
{
    use HasFactory;
    protected $table = 'barangay';

    protected $fillable = [
        'name',
        'city_id'
    ];

    //This part here basically declares the relation between the City Class and Barangay class
    public function cityName()
    {
        return $this->belongsTo(city::class,'city_id','id');
    }

    public $timestamps = false;
}
