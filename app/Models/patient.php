<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    public $timestamps = 'false';

    protected $filable =[
        'name',
        'brgy_id',
        'number',
        'email',
        'case_type',
        'coronavirus_status'
    ];
}
