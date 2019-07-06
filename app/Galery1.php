<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Galery1
 *
 * @package App
 * @property string $title
 * @property string $images
 * @property text $content
*/
class Galery1 extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'images', 'content'];
    protected $hidden = [];
    
    
    
}
