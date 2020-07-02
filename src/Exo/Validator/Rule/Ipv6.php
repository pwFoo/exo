<?php
/**
 * Exo // Next-Gen Eco Framework
 *
 * @package Exo
 * @copyright 2015-2020 Shay Anderson <https://www.shayanderson.com>
 * @license MIT License <https://github.com/shayanderson/exo/blob/master/LICENSE>
 * @link <https://github.com/shayanderson/exo>
 */
declare(strict_types=1);

namespace Exo\Validator\Rule;

/**
 * IPv6 rule
 *
 * @author Shay Anderson
 * #docs
 */
class Ipv6 extends \Exo\Validator\Rule
{
	protected $message = 'must be valid IPv6 address';

	public function validate($value): bool
	{
		return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false;
	}
}