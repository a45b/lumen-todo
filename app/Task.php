<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class Task extends Model {

	protected $table = 'tasks';
    
	public static $rules = array(		
		'name'=>'required'
	);
}