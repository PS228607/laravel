<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $table = "albums";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'year', 'times_sold'];
    public $timestamps = false;

    /**
     * The Albums that belong to the song.
     */
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

    /**
     * The Albums that belong to the band.
     */
    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
