<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'product_name',
        'description',
        'list_price',
        'discount_percent'
    ];

    }




