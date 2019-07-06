<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 *
 * @package App
 * @property string $phone
 * @property string $email
 * @property string $address
*/
class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = ['phone', 'email', 'address'];
    protected $hidden = [];
    
    
    
}
