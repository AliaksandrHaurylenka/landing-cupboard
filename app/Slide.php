<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slide
 *
 * @package App
 * @property string $photo
 * @property string $text
*/
class Slide extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'text'];
    protected $hidden = [];
    
    
    
}
