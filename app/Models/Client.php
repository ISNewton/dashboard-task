<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
    ];

    public function getImagePathAttribute() {
        return asset('storage/' . $this->image);
    }

    public function project() {
        return $this->hasOne(Project::class);
    }

}
