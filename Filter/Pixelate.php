<?php
/**
 * Part of the Joomla Framework Image Package
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Image\Filter;

use Joomla\Image\ImageFilter;
use InvalidArgumentException;

/**
 * Image Filter class to pixelate an image.
 *
 */
class Pixelate extends ImageFilter
{
	/**
	 * Method to apply a filter to an image resource.
	 *
	 * @param   array  $options  An array of options for the filter.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function execute(array $options = array())
	{
		// Validate that the pixelate value exists and is an integer.
		if (!isset($options[IMG_FILTER_PIXELATE]) || !is_int($options[IMG_FILTER_PIXELATE]))
		{
			throw new InvalidArgumentException('No valid pixelate value was given.  Expected integer.');
		}

		// Perform the pixelate filter.
		imagefilter($this->handle, IMG_FILTER_PIXELATE, $options[IMG_FILTER_PIXELATE]);
	}
}
