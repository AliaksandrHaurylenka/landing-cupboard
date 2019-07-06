<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Advantage
 *
 * @package App
 * @property string $photo
 * @property string $title
*/
class Advantage extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'title'];
    protected $hidden = [];
    
    
    
}
