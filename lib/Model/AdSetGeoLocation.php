<?php
/**
 * AdSetGeoLocation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2022-10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2022_10\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2022_10\ObjectSerializer;

/**
 * AdSetGeoLocation Class Doc Comment
 *
 * @category Class
 * @description ad set geolocation model
 * @package  criteo\api\marketingsolutions\v2022_10
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdSetGeoLocation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdSetGeoLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countries' => '\criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule',
        'subdivisions' => '\criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule',
        'zip_codes' => '\criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'countries' => null,
        'subdivisions' => null,
        'zip_codes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'countries' => false,
		'subdivisions' => false,
		'zip_codes' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'countries' => 'countries',
        'subdivisions' => 'subdivisions',
        'zip_codes' => 'zipCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countries' => 'setCountries',
        'subdivisions' => 'setSubdivisions',
        'zip_codes' => 'setZipCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countries' => 'getCountries',
        'subdivisions' => 'getSubdivisions',
        'zip_codes' => 'getZipCodes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('subdivisions', $data ?? [], null);
        $this->setIfExists('zip_codes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets countries
     *
     * @return \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets subdivisions
     *
     * @return \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null
     */
    public function getSubdivisions()
    {
        return $this->container['subdivisions'];
    }

    /**
     * Sets subdivisions
     *
     * @param \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null $subdivisions subdivisions
     *
     * @return self
     */
    public function setSubdivisions($subdivisions)
    {
        if (is_null($subdivisions)) {
            throw new \InvalidArgumentException('non-nullable subdivisions cannot be null');
        }
        $this->container['subdivisions'] = $subdivisions;

        return $this;
    }

    /**
     * Gets zip_codes
     *
     * @return \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null
     */
    public function getZipCodes()
    {
        return $this->container['zip_codes'];
    }

    /**
     * Sets zip_codes
     *
     * @param \criteo\api\marketingsolutions\v2022_10\Model\NillableAdSetTargetingRule|null $zip_codes zip_codes
     *
     * @return self
     */
    public function setZipCodes($zip_codes)
    {
        if (is_null($zip_codes)) {
            throw new \InvalidArgumentException('non-nullable zip_codes cannot be null');
        }
        $this->container['zip_codes'] = $zip_codes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


