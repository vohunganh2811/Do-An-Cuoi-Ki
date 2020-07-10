<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product;

class giohang extends Model
{
    public $masp;
    public $tensp;
    public $soluong;
    public $dongia;
    public $hinhanh;
    public $thanhtien;
     public $timestamps = false;
    /**
     * Get the value of masp
     */ 
    public function getMasp()
    {
        return $this->masp;
    }

    /**
     * Set the value of masp
     *
     * @return  self
     */ 
    public function setMasp($masp)
    {
        $this->masp = $masp;

        return $this;
    }

    /**
     * Get the value of tensp
     */ 
    public function getTensp()
    {
        return $this->tensp;
    }

    /**
     * Set the value of tensp
     *
     * @return  self
     */ 
    public function setTensp($tensp)
    {
        $this->tensp = $tensp;

        return $this;
    }

    /**
     * Get the value of soluong
     */ 
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * Set the value of soluong
     *
     * @return  self
     */ 
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;

        return $this;
    }

    /**
     * Get the value of dongia
     */ 
    public function getDongia()
    {
        return $this->dongia;
    }

    /**
     * Set the value of dongia
     *
     * @return  self
     */ 
    public function setDongia($dongia)
    {
        $this->dongia = $dongia;

        return $this;
    }

    /**
     * Get the value of hinhanh
     */ 
    public function getHinhanh()
    {
        return $this->hinhanh;
    }

    /**
     * Set the value of hinhanh
     *
     * @return  self
     */ 
    public function setHinhanh($hinhanh)
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }

    /**
     * Get the value of thanhtien
     */ 
    public function getThanhtien()
    {
        return $this->thanhtien;
    }

    /**
     * Set the value of thanhtien
     *
     * @return  self
     */ 
    public function setThanhtien($thanhtien)
    {
        $this->thanhtien = $thanhtien;

        return $this;
    }

    
    public function giohang($masanpham, $soluongsanpham)
    {
        $this->masp=$masanpham;
        $this->soluong=$soluongsanpham;
        $sanpham=product::where('id',$masanpham)->first();
        $this->tensp=$sanpham->name;
        $this->dongia=$sanpham->price;
        $this->hinhanh=$sanpham->image;
        $this->thanhtien=$this->dongia * $this->soluong;
    }

    public function giohang($idsapham)
    {
        $this->masp=$idsapham;
        $this->soluong=1;
        $sanpham=product::where('id',$idsapham)->first();
        $this->tensp=$sanpham->name;
        $this->dongia=$sanpham->price;
        $this->hinhanh=$sanpham->image;
        $this->thanhtien=$this->dongia * $this->soluong;
    }
    
    
}
