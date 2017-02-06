<?php
/**
 * This file is part of smartguy/string-utils.
 *
 * @author Walid Jlidi <tomkyle@posteo.de>
 */
namespace smartguy;


/**
 * SmartString
 *
 * @author Walid Jlidi  <wjlidi@smart-team.tn>
 */
class SmartString {

	/**
	 * @var string
	 */
	public $value;


	public function __construct()
	{
		$value ='smartguy';
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->value;
	}
}
