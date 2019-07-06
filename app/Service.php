<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 *
 * @package App
 * @property string $title
 * @property string $images
*/
class Service extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'images'];
    protected $hidden = [];
    
    
    
}
