<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ukk_fia2024model extends Model
{
    use HasFactory;
    protected $table="ukk_fia2024";
    protected $fillable =['bukuId','judul','penulis','penerbit','tahunterbit'];
}
