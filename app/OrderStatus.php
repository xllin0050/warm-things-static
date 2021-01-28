<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class OrderStatus extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'order_status';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['status', 'created_at', 'updated_at'];

    public function order(){
        return $this->hasMany('App\Order','order_status','id');
    }

}
