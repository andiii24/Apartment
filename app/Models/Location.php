<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = ['city', 'subcity', 'specific_location'];
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
