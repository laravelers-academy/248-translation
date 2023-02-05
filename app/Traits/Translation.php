<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

trait Translation
{

	public function translate($column, $default = '')
	{

		if(session()->has('locale')){

            $locale = session()->get('locale');

        } else {

        	$locale = App::getLocale();

        }

		if($this->local == $locale){

			return $default;

		}

		$translation = DB::table('translations')
			->where('table', $this->table)
			->where('column', $column)
			->where('row_id', $this->id)
			->where('locale', $locale)
			->first();

		if($translation){

			return $translation->translation;

		}else{

			return $default;

		}
		
	}

}