<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    /**
     * Table for this model
     * 
     * @var string
     */
    protected $table = 'stok';

    /**
     * Disable Timestamp for this Model
     * 
     * @var boolean
     */
    public $timestamps = false;
}
