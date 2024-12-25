<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Define the table name if it's not the default pluralized name
    // protected $table = 'doctors';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'id',
        'name',
        'specialization',
        'contact',
        'email',
        'created_at'
        // Add other columns that exist in your doctors table
    ];


}
