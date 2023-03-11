<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'isbn',
        'title',
        'description',
        'numPages',
        'layout',
        'publishDate',
        'available',
        'weight',
        'translatorName',
        'hSize',
        'wSize',
        'unitPrice',
        'unitStock',
        'ranking',
        'discount',
        'cover',
        'publisher_id',
        'author_id',
        'genre_id',

    ];
}
?>
