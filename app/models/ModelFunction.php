<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/08/2016
 * Time: 4:39
 */
class ModelFunction extends \Illuminate\Database\Eloquent\Model
{
	/**
	 * Convert a DateTime to a storable MongoDate object.
	 *
	 * @param  DateTime|int $value
	 * @return MongoDate
	 */
	public function fromDateTime($value)
	{
		// If the value is already a MongoDate instance, we don't need to parse it.
		if ($value instanceof MongoDate) {
			if (isset($value->sec)) {
				return date('Y-m-d', $value->sec);
			}
			
			return $value;
		}
		
		// Let Eloquent convert the value to a DateTime instance.
		if (!$value instanceof DateTime) {
			$value = parent::asDateTime($value);
		}
		
		return new MongoDate($value->getTimestamp());
	}
	
	/**
	 * Return a timestamp as Date object.
	 *
	 * @param  mixed $value
	 * @return DateTime
	 */
	protected function asDates($value)
	{
		// Convert MongoDate instances.
		if ($value instanceof MongoDate) {
			return Carbon::createFromTimestamp($value->sec);
		}
		
		return date('Y-m-d', $value);
	}
	
	/**
	 * Return a timestamp as DateTime object.
	 *
	 * @param  mixed $value
	 * @return DateTime
	 */
	protected function asDateTime($value)
	{
		// Convert MongoDate instances.
		if ($value instanceof MongoDate) {
			return Carbon::createFromTimestamp($value->sec);
		}
		
		return parent::asDateTime($value);
	}
	
	/**
	 * Get the format for database stored dates.
	 *
	 * @return string
	 */
	protected function getDateFormat()
	{
		return 'Y-m-d H:i:s';
	}
	
	/**
	 * Get a fresh timestamp for the model.
	 *
	 * @return MongoDate
	 */
	public function freshTimestamp()
	{
		return new MongoDate;
	}
}