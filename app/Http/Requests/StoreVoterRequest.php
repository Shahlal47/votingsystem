<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreVoterRequest extends Request {


	public function authorize()
	{
		//return false;
		return true;
	}


	public function rules()
	{
		return [
			'votername' => 'required',
			'voterid' => 'required|min:13|max:13|unique:voters,voterid,'.$this->get('voterid'),
		];
	}

}
