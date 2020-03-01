<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $appends=['total','summary'];

    protected $fillable = [
        'user_id', 'title', 'desc','note','discount','status','status_note'
    ];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalAttribute()
    {
        $items=$this->items;
        $total=0;

        foreach ($items as $item){
            $discount=($item->discount)?$item->discount:0;
            if(substr($item->discount, -1)=='%'){
                $discount=rtrim($discount,'%');
                $subtotal=$item->amount*$item->price*((100-$discount)/100);
            }else{
                $subtotal=($item->amount*$item->price)-$discount;
            }
            $total=$total+$subtotal;

        }
        return $total;
    }
    public function getSummaryAttribute()
    {
        $sum=0;
        $discount=($this->discount)?$this->discount:0;
        if(substr($discount, -1)=='%'){
            $discount=rtrim($discount,'%');
            $sum=$this->total*((100-$discount)/100);
        }else{
            $sum=$this->total-$discount;
        }

        return $sum;
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::createFromDate($this->attributes['created_at'])->diffForHumans();
    }

    public function oDate()
    {
        return Carbon::createFromDate($this->attributes['created_at'])->format("d-m-Y");
    }
}
