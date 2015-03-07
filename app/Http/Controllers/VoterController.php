<?php namespace App\Http\Controllers;


use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Voter;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVoterRequest;

class VoterController extends Controller {


	public function index()
	{
		$projects = Voter::all();
		return view('voters.index', compact('projects'));
	}


	public function create()
	{
		return view('voters.create');
	}


	public function store(StoreVoterRequest $voter)
	{
		$input = Input::all();
		Voter::create( $input );
		return Redirect::route('voters.index')->with('message', 'New Voter is Added');
	}


	public function show(Voter $voter)
	{
		return view('voters.show', compact('voter'));
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
