<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Translation;

trait ArticleMutators
{

	use Translation;

	public function getTitleAttribute($value)
	{

		return $this->translate('title', $value);

	}

	public function getContentAttribute($value)
	{

		return $this->translate('content', $value);

	}

}