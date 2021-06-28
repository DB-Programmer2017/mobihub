<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quotation';

    /**     
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quo_no',
        'email',
        'company',
        'phone',
        'message',
        'products',
        'created_at',
        'updated_at'
    ];

    /**
     * Get all of the products for the Quotation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Quotation::class, 'product_id');
    }

    /* Mutators เข้า
     * jason_encode the products conditions
     * returns the JSON representation of a value
     */
    public function setProductsAttribute($value) {
        $this->attributes['products'] = json_encode($value);
    }

     /**
     * Accessors ออก
     * jason_decode the products conditions
     * encoded string and converts it into a PHP variable
     */
    // public function getProductsAttribute($value) {
    //     $this->attributes['products'] = json_decode($value);
    // }

}
