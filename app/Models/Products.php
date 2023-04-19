<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductAttachments;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'cost', 'description', 'units', 'weight_per_unit'];

    /**
     * Get the attachments for the product.
     */
    public function attachments()
    {
        return $this->hasMany(ProductAttachments::class, 'product_id');
    }
}
