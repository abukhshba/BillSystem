<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
        protected $fillable = [
            'user_id',


        ];
       
        
        public function user(){
            return $this->belongsTo(User::class,"user_id","id");
        }
        
        public function products()
        {
            return $this->belongsToMany(Product::class , table:'bill_details'
            ,foreignPivotKey:'bill_id',relatedPivotKey:'product_id',
            parentKey:'id' , relatedKey:'id' )->withTimestamps();

        }
}