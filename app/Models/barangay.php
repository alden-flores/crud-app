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
        'name'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(city::class);
    }

    public $timestamps = false;
}
