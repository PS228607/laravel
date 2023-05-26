<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    public $table = "bands";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'genre', 'founded'];

    /**
     * The Bands that belong to the album.
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
