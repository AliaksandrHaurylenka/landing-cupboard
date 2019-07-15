<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Catalog
 *
 * @package App
 * @property string $photo
 * @property string $title
 * @property string $description
 * @property decimal $price
*/
class Catalog extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'title', 'type', 'description', 'price'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setPriceAttribute($input)
    {
        $this->attributes['price'] = $input ? $input : null;
    }
    
}
