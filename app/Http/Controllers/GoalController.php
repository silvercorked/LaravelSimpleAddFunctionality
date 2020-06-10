<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
	public function index() {
		$goals = Goal::all();
		return view('goals.index', ['goals' => $goals]);
	}
	public function create() {
		return view('goals.create');
	}
	public function store(Request $request) {
		//dd($request);
		$this->validate($request, [
			'title' => ['string', 'required', 'min:3', 'max:255'],
			'description' => ['string', 'required', 'min:10', 'max:255'],
			'target' => ['numeric', 'nullable'],
			'progress' => ['numeric', 'nullable'],
			'unit' => ['string', 'nullable', 'min:2', 'max:255'],
		]);
		$goal = new Goal();
		$goal->title = $request['title'];
		$goal->description = $request['description'];
		$goal->target = $request['target'];
		$goal->progress = $request['progress'];
		$goal->unit = $request['unit'];

		$goal->save();
		return redirect()->action('GoalController@index');
	}
}
