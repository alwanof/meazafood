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
            $total=$total+$item->amount*$item->price;
        }
        return $total;
    }
    public function getSummaryAttribute()
    {
        $total=0;
        $items=$this->items;
        $discount=($this->discount)?$this->discount:0;
        foreach ($items as $item){
            if(substr($item->discount, -1)=='%'){
                $itemDiscount=rtrim($item->discount,'%');
                $total=$total+($item->amount*$item->price*((100-$itemDiscount)/100));
            }else{
                $total=$total+($item->amount*$item->price)-$item->discount;
            }
        }

        if(substr($discount, -1)=='%'){
            $discount=rtrim($discount,'%');
            $total=$total*((100-$discount)/100);
        }else{
            $total=$total-$discount;
        }

        return $total;
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
