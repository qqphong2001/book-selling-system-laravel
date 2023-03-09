<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;

    protected $table = 'publisher';
    protected $priamryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
}
?>
