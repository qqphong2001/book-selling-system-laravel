<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    protected $table = 'genre';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name_genre',
        'image'
    ];
}
?>
