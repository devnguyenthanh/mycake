<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    const UPDATED_AT = null;
    protected $fillable = [
        'id',
        'address',
        'phone',
        'email',
    ]; 
}
