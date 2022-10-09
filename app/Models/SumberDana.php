<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class SumberDana extends Model
{
    use HasFactory;

    /**
     * Table for this model
     * 
     * @var string
     */
    protected $table = 'sumber_dana';

    /**
     * The Primary Key of this table
     * 
     * @var string
     */
    protected $primaryKey = 'id_sumber';

    /**
     * Disable Timestamp for this Model
     * 
     * @var boolean
     */
    public $timestamps = false;
}
