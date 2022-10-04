<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * Table for this model
     * 
     * @var string
     */
    protected $table = 'supplier';

    /**
     * The Primary Key of this table
     * 
     * @var string
     */
    protected $primaryKey = 'id_supplier';

    /**
     * Disable Timestamp for this Model
     * 
     * @var boolean
     */
    public $timestamps = false;
}
