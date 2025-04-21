<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'price',
        'image_path',
        'category_id',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(ProductCategory::class);
    }

    public function isSelectedCategory(int $category_id): bool {
        return $this->hasCategory() && $this->category->id == $category_id;
    }

    public function hasCategory(): bool
    {
        return !is_null($this->category);
    }
}
