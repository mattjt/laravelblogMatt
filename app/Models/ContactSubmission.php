<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'email', 'message'];

    public $timestamps = true; // Add this line to enable timestamps

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}