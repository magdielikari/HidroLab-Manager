<?php 

namespace common\models\helpers;

Class ModelUtility
{
	public static function handler($record, $relation, $attribute)
	{
		$summary = [];

		foreach($record[$relation] as $data)
			$summary[] = $data[$attribute];

		return implode(' - ', $summary);
	}
}

?>