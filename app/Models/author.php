<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $table = 'author';
    protected $priamryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description'
    ];
}
?>
