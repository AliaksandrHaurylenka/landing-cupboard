<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Menu
 *
 * @package App
 * @property string $title
*/
class Menu extends Model
{
    use SoftDeletes;

    protected $fillable = ['title'];
    protected $hidden = [];
    
    
    
}
