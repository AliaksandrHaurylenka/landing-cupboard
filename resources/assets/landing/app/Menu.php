<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Menu
 *
 * @package App
 * @property string $title
*/
class Menu extends Model
{
    use SoftDeletes;
  use Sluggable;

    protected $fillable = ['title'];
    protected $hidden = [];

  /**
   * Return the sluggable configuration array for this model.
   *
   * @return array
   */
  public function sluggable() {
    return [
      'slug' => [
        'source' => 'title',
      ],
    ];
  }
    
}
