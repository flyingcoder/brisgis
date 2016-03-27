<?php

namespace brisgis\Repositories;

use brisgis\Province;
use Illuminate\Http\Request;
use App\Http\Requests;
use brisgis\Repositories\Contracts\ProvinceRepositoryInterface;

/**
 * Class ProvinceRepositoryDB
 * @package brisgis\Repositories
 */
class ProvinceRepositoryDB implements ProvinceRepositoryInterface 
{
	public function get_all()
	{
		return Province::all();
		
	}

	public function get($id)
	{
		return Province::find($id);

	}
	
	public function set(Request $request)
	{
		$inputs = $request->all();

		return Province::create($inputs);

	}

	public function update(Request $request, $id)
	{
        $updates = $request->all();
        
        $province = Province::find($id);
        return $province->update($updates);

	}

}