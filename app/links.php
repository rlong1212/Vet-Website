<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class links extends Model {
	use ObservantTrait;
	
    protected $table = 'links';

}
