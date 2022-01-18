<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $itaskid
 * @property string $strweekday
 * @property int $ihour
 * @property int $iminute
 * @property int $ihalfday
 * @property string $strcolor
 */
class ErrorType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'error_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}
