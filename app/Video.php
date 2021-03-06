<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Video extends Model implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'title',
		'save_to'    => 'slug',
		'unique'          => true,
		'on_update'       => true,
	);

	protected $fillable = ['code', 'title', 'slug', 'desc', 'image', 'views'];

}
