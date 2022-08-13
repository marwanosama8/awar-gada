<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property integer $id
 * @property integer $availability_id
 * @property integer $brand_id
 * @property integer $capacity_id
 * @property integer $catgory_id
 * @property integer $style_id
 * @property string $name
 * @property string $slug
 * @property string $sku
 * @property string $price
 * @property string $quantity
 * @property string $description
 * @property string $key_features
 * @property string $warranty
 * @property string $available
 * @property string $height
 * @property string $width
 * @property string $depth
 * @property string $available_in
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['availability_id', 'brand_id', 'capacity_id', 'catgory_id', 'style_id', 'name', 'slug', 'sku', 'price', 'quantity', 'description', 'key_features', 'warranty', 'available', 'height', 'width', 'depth', 'available_in', 'created_at', 'updated_at'];

    /**
     * Get the availability that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    /**
     * Get the brand that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the capacity that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function capacity()
    {
        return $this->belongsTo(Capacity::class);
    }

    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the style that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    ################ Accessors #####################
    /**
     * Interact with the product's photo.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl();
    }

    /**
     * Interact with the product's brand.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function getBrandAttribute()
    {
        $brand = Brand::find($this->brand_id);
        if ($brand) {
            return $brand->name;
        }
        return null;
    }
    /**
     * Interact with the product's availability.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function getAvailabilityAttribute()
    {
        $item = Availability::find($this->availability_id);
        if ($item) {
            return $item->name;
        }
        return null;
    }
}
