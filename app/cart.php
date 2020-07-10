<?php

namespace App;

class cart 
{
    public $items =null;
    public $count = 0;
    public $price = 0;
    public $timestamps = false;
    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->count = $oldCart->count;
            $this->price = $oldCart->price;
        }
    }

    public function add($item, $id){
		$giohang = ['count'=>0, 'price' => $item->price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['count']++;
		$giohang['price'] = $item->price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->count++;
		$this->price += $item->price;
	}
}


	