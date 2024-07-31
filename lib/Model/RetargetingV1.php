<?php
/**
 * RetargetingV1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2024_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2024-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2024_07\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2024_07\ObjectSerializer;

/**
 * RetargetingV1 Class Doc Comment
 *
 * @category Class
 * @description Settings to target users based on its type and days since last visit.
 * @package  criteo\api\marketingsolutions\v2024_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RetargetingV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'visitors_type' => 'string',
        'days_since_last_visit_min' => 'int',
        'days_since_last_visit_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'visitors_type' => null,
        'days_since_last_visit_min' => 'int32',
        'days_since_last_visit_max' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'visitors_type' => true,
		'days_since_last_visit_min' => true,
		'days_since_last_visit_max' => true
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
        'visitors_type' => 'visitorsType',
        'days_since_last_visit_min' => 'daysSinceLastVisitMin',
        'days_since_last_visit_max' => 'daysSinceLastVisitMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'visitors_type' => 'setVisitorsType',
        'days_since_last_visit_min' => 'setDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'setDaysSinceLastVisitMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'visitors_type' => 'getVisitorsType',
        'days_since_last_visit_min' => 'getDaysSinceLastVisitMin',
        'days_since_last_visit_max' => 'getDaysSinceLastVisitMax'
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

    public const VISITORS_TYPE_UNKNOWN = 'Unknown';
    public const VISITORS_TYPE_ALL = 'All';
    public const VISITORS_TYPE_BUYERS = 'Buyers';
    public const VISITORS_TYPE_NON_BUYERS = 'NonBuyers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisitorsTypeAllowableValues()
    {
        return [
            self::VISITORS_TYPE_UNKNOWN,
            self::VISITORS_TYPE_ALL,
            self::VISITORS_TYPE_BUYERS,
            self::VISITORS_TYPE_NON_BUYERS,
        ];
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
        $this->setIfExists('visitors_type', $data ?? [], null);
        $this->setIfExists('days_since_last_visit_min', $data ?? [], null);
        $this->setIfExists('days_since_last_visit_max', $data ?? [], null);
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

        $allowedValues = $this->getVisitorsTypeAllowableValues();
        if (!is_null($this->container['visitors_type']) && !in_array($this->container['visitors_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'visitors_type', must be one of '%s'",
                $this->container['visitors_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets visitors_type
     *
     * @return string|null
     */
    public function getVisitorsType()
    {
        return $this->container['visitors_type'];
    }

    /**
     * Sets visitors_type
     *
     * @param string|null $visitors_type Types of visitors.
     *
     * @return self
     */
    public function setVisitorsType($visitors_type)
    {
        if (is_null($visitors_type)) {
            array_push($this->openAPINullablesSetToNull, 'visitors_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visitors_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVisitorsTypeAllowableValues();
        if (!is_null($visitors_type) && !in_array($visitors_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'visitors_type', must be one of '%s'",
                    $visitors_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visitors_type'] = $visitors_type;

        return $this;
    }

    /**
     * Gets days_since_last_visit_min
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMin()
    {
        return $this->container['days_since_last_visit_min'];
    }

    /**
     * Sets days_since_last_visit_min
     *
     * @param int|null $days_since_last_visit_min Minimum number of days since last visit to partner.
     *
     * @return self
     */
    public function setDaysSinceLastVisitMin($days_since_last_visit_min)
    {
        if (is_null($days_since_last_visit_min)) {
            array_push($this->openAPINullablesSetToNull, 'days_since_last_visit_min');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('days_since_last_visit_min', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['days_since_last_visit_min'] = $days_since_last_visit_min;

        return $this;
    }

    /**
     * Gets days_since_last_visit_max
     *
     * @return int|null
     */
    public function getDaysSinceLastVisitMax()
    {
        return $this->container['days_since_last_visit_max'];
    }

    /**
     * Sets days_since_last_visit_max
     *
     * @param int|null $days_since_last_visit_max Maximum number of days since last visit to partner.
     *
     * @return self
     */
    public function setDaysSinceLastVisitMax($days_since_last_visit_max)
    {
        if (is_null($days_since_last_visit_max)) {
            array_push($this->openAPINullablesSetToNull, 'days_since_last_visit_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('days_since_last_visit_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['days_since_last_visit_max'] = $days_since_last_visit_max;

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


