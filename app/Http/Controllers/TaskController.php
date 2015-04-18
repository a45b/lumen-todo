<?php namespace App\Http\Controllers;

use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller {

    public function index()
    {
    	return view('index');
    }

  	public function tasks()
    {
    	$task = Task::all();
    	return response()->json($task);
    	
    }
    
	public function create()
	{		
		$validator = Validator::make(Input::all(), Task::$rules);
		if ($validator->passes()) {
			$task = new Task;
			$task->name = Input::get('name');
			$task->save();
			return response()->json($task);
		}
		else{
			return "Error";
		}		
	}

    public function update($id)
	{
		$validator = Validator::make(Input::all(), Task::$rules);		
		if ($validator->passes()) {
    	    $task = Task::find($id);
			$task->name = Input::get('name');
			$task->save();
            return "Task updated successfully";
        }        
        else{
           	return "Error";           	
        }
	}

	public function done($id){
		$task = Task::find($id);
		$task->done = 1;
		$task->save();
		return "Task updated successfully";
	}
	
    public function delete($id)
	{
		$task = Task::find($id);
		$task->delete();
		return "Task deleted successfully";
	}
	
}
