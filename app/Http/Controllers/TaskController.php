<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function home() {
		//return view('sidebar')
		//	->with('menu_item', Task::all());
		//$f_grp = DB::table('function_group')->get();
		$f = DB::select(
				'select id, name, path, function_group_id 
					from function 
					where is_in_menu = ? and disable = ? order by function_group_id ',
				[1,0]
		);
		$e = false;
		$c = 0;
		$fg = [];
		while (!$e) {
			$k = $f[$c]->function_group_id;
			$tmp = [];
			while ($k== $f[$c]->function_group_id) {
				$tmp[] = ['path' => $f[$c]->path, 'name' => $f[$c]->name];
				$c++;
				if ($c == count($f)) {				
					$e = true;
					break;
				}				
			}			
			$fg[$k] = $tmp;
		}
		
		return view('sidebar')
			->with(['menu_items'=> DB::table('function_group')->get(),
						'sub_items' => $fg]
			);
	}
	
	
	public function store() {
		$task = new Task;
		$task->title = Input::get('title');
		$task->description = Input::get('description');
		$task->save();
		
		return redirect('tasks');
	}
	
	
}
