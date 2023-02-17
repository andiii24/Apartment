<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = ['title,location_id', 'bedroom', 'property_type', 'payment_type', 'property_status', 'property_description', 'size', 'price','images','service_type','bathroom'];
    protected $casts = [
        'images' => 'array',
    ];

    public function location()
    {
        return $this->belogsTo(Location::class, 'location_id', 'id');
    }
}
