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
class Settings extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'settings';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * @var array
     */
    protected $fillable = ['id', 'server_address', 'ip_from', 'ip_to', /*'cidr_range',*/ 'store_location', 'system_id', 'system_ver'];
}
