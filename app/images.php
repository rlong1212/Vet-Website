<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class images extends Model {
	use ObservantTrait;
	
    protected $table = 'images';

}
