<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 *
 * @package App
 * @property string $title
 * @property text $cocntent
*/
class News extends Model
{
    use SoftDeletes;

    
    protected $table = "news";
    protected $fillable = ['title', 'cocntent'];
    protected $hidden = [];
    
    
    
}
