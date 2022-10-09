<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelUser extends Model
{
    use HasFactory;

    /**
     * Table for this model
     * 
     * @var string
     */
    protected $table = 'level_user';

    /**
     * The Primary Key of this table
     * 
     * @var string
     */
    protected $primaryKey = 'id_level';

    /**
     * Disable Timestamp for this Model
     * 
     * @var boolean
     */
    public $timestamps = false;
}
