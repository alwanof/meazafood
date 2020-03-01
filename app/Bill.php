<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable=['title','amount','user_id','order_id'];
    //protected $appends=['humansDate'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPaymentAttribute(){
        if ($this->amount>=0){
            return 0;
        }
        return abs($this->amount);
    }

    /*public function getHumansDateAttribute()
    {
        return Carbon::createFromDate($this->attributes['created_at'])->diffForHumans();
    }*/
}
