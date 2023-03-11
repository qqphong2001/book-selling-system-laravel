<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    public $primaryKey = 'id_employee';
    public $timestamps = false;
    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'dob',
        'phoneNumber',
        'address',
        'account_id',
        'avatar'
    ];
}
?>
