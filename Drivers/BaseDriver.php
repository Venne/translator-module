<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011, 2012 Josef Kříž (http://www.josef-kriz.cz)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace TranslatorModule\Drivers;

use Venne;
use Nette\Object;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
abstract class BaseDriver extends Object implements IDriver
{

	protected $file;


	/**
	 * @param string $lang
	 */
	public function __construct($file)
	{
		if (!file_exists($file)) {
			throw new \Nette\InvalidArgumentException("File {$file} does not exists.");
		}

		$this->file = $file;
	}


	/**
	 * @param string $lang
	 */
	public function save($data)
	{

	}


	/**
	 * @return string
	 */
	public function load()
	{
		return array();
	}

}
