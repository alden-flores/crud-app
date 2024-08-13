<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    public $timestamps = false;

    protected $fillable =[
        'name',
        'brgy_id',
        'number',
        'email',
        'case_type',
        'coronavirus_status'
    ];

    public function barangayName(){
        return $this->belongsTo(barangay::class,'brgy_id','id');
    }
}
