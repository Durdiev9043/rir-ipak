<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable=['name','klaster_id'];

    public function klaster(){
        return $this->belongsTo(Klaster::class);
    }
}
