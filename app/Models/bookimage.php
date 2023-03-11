<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookimage extends Model
{
    use HasFactory;

    protected $table = 'bookimage';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'image',
        'book_id'
    ];
}
?>
