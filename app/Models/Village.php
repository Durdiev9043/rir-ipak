<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Village extends Model
{
    use HasFactory;
    protected $fillable=['region_id','name'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function staff(){
        return $this->belongsTo(Staff::class);
    }
}
