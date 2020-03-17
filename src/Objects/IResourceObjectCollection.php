<?php declare(strict_types = 1);

/**
 * IResourceObjectCollection.php
 *
 * @license        More in license.md
 * @copyright      https://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:JsonAPIDocument!
 * @subpackage     Objects
 * @since          1.0.0
 *
 * @date           05.05.18
 */

namespace IPub\JsonAPIDocument\Objects;

use IPub\JsonAPIDocument\Exceptions;

/**
 * Resource objects collection interface
 *
 * @package        iPublikuj:JsonAPIDocument!
 * @subpackage     Objects
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
interface IResourceObjectCollection extends \IteratorAggregate, \Countable
{

	/**
	 * Does the collection contain a resource with the supplied identifier?
	 *
	 * @param IResourceIdentifier $identifier
	 *
	 * @return bool
	 */
	public function has(IResourceIdentifier $identifier): bool;

	/**
	 * Get the resource with the supplied identifier
	 *
	 * @param IResourceIdentifier $identifier
	 *
	 * @return IResourceObject
	 *
	 * @throws Exceptions\RuntimeException if the collection does not contain a resource that matches the supplied identifier
	 */
	public function get(IResourceIdentifier $identifier): IResourceObject;

	/**
	 * Get the collection as an array
	 *
	 * @return IResourceObject[]
	 */
	public function getAll(): array;

	/**
	 * Get all the resource identifiers of the resources in the collection
	 *
	 * @return IResourceIdentifierCollection
	 */
	public function getIdentifiers(): IResourceIdentifierCollection;

	/**
	 * Is the collection empty?
	 *
	 * @return bool
	 */
	public function isEmpty(): bool;

}
