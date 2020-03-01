<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'product_id', 'desc', 'amount','price','discount','order_id'
    ];

    protected $appends=['subTotal'];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getSubTotalAttribute(){
        $sum=0;
        $discount=($this->discount)?$this->discount:0;
        if(substr($discount, -1)=='%'){
            $discount=rtrim($discount,'%');
            $sum=$this->price*$this->amount*((100-$discount)/100);
        }else{
            $sum=$this->price*$this->amount-$discount;
        }

        return $sum;
    }


}
