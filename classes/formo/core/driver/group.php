<?php defined('SYSPATH') or die('No direct script access.');

class Formo_Core_Driver_Group extends Formo_Driver {

	public static function get_template( array $array)
	{
		$field = $array['field'];

		if ($template = $field->get('template'))
		{
			return $template;
		}

		return 'formo/group_template';
	}

	public static function get_val( array $array)
	{
		$field = $array['field'];
		$val = $array['val'];

		$array = array();
		foreach ($field->as_array('val') as $alias => $val)
		{
			$array += array($alias => $val);
		}

		return $array;
	}

}