<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyBase
{
    //
	protected $titles_array = [];
	public function getAllTitles()
	{
		return $this->titles_array;

	}

	public function getTitleByTitleId($id)
	{
		return $this -> titles_array[$id];
	}
}
