<?php
/**
 * AudienceSegmentUpdateEntityV1
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2024-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2024_01\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2024_01\ObjectSerializer;

/**
 * AudienceSegmentUpdateEntityV1 Class Doc Comment
 *
 * @category Class
 * @description Set of rules that defines specific people to target.
 * @package  criteo\api\marketingsolutions\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AudienceSegmentUpdateEntityV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AudienceSegmentUpdateEntityV1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => '\criteo\api\marketingsolutions\v2024_01\Model\NillableString',
        'in_market' => '\criteo\api\marketingsolutions\v2024_01\Model\InMarketUpdateV1',
        'location' => '\criteo\api\marketingsolutions\v2024_01\Model\LocationUpdateV1',
        'retargeting' => '\criteo\api\marketingsolutions\v2024_01\Model\RetargetingUpdateV1',
        'lookalike' => '\criteo\api\marketingsolutions\v2024_01\Model\LookalikeUpdateV1',
        'prospecting' => '\criteo\api\marketingsolutions\v2024_01\Model\ProspectingUpdateV1'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'in_market' => null,
        'location' => null,
        'retargeting' => null,
        'lookalike' => null,
        'prospecting' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'description' => false,
		'in_market' => false,
		'location' => false,
		'retargeting' => false,
		'lookalike' => false,
		'prospecting' => false
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
        'name' => 'name',
        'description' => 'description',
        'in_market' => 'inMarket',
        'location' => 'location',
        'retargeting' => 'retargeting',
        'lookalike' => 'lookalike',
        'prospecting' => 'prospecting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'in_market' => 'setInMarket',
        'location' => 'setLocation',
        'retargeting' => 'setRetargeting',
        'lookalike' => 'setLookalike',
        'prospecting' => 'setProspecting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'in_market' => 'getInMarket',
        'location' => 'getLocation',
        'retargeting' => 'getRetargeting',
        'lookalike' => 'getLookalike',
        'prospecting' => 'getProspecting'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('in_market', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('retargeting', $data ?? [], null);
        $this->setIfExists('lookalike', $data ?? [], null);
        $this->setIfExists('prospecting', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the segment
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\NillableString|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\NillableString|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets in_market
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\InMarketUpdateV1|null
     */
    public function getInMarket()
    {
        return $this->container['in_market'];
    }

    /**
     * Sets in_market
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\InMarketUpdateV1|null $in_market in_market
     *
     * @return self
     */
    public function setInMarket($in_market)
    {
        if (is_null($in_market)) {
            throw new \InvalidArgumentException('non-nullable in_market cannot be null');
        }
        $this->container['in_market'] = $in_market;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\LocationUpdateV1|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\LocationUpdateV1|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets retargeting
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\RetargetingUpdateV1|null
     */
    public function getRetargeting()
    {
        return $this->container['retargeting'];
    }

    /**
     * Sets retargeting
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\RetargetingUpdateV1|null $retargeting retargeting
     *
     * @return self
     */
    public function setRetargeting($retargeting)
    {
        if (is_null($retargeting)) {
            throw new \InvalidArgumentException('non-nullable retargeting cannot be null');
        }
        $this->container['retargeting'] = $retargeting;

        return $this;
    }

    /**
     * Gets lookalike
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\LookalikeUpdateV1|null
     */
    public function getLookalike()
    {
        return $this->container['lookalike'];
    }

    /**
     * Sets lookalike
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\LookalikeUpdateV1|null $lookalike lookalike
     *
     * @return self
     */
    public function setLookalike($lookalike)
    {
        if (is_null($lookalike)) {
            throw new \InvalidArgumentException('non-nullable lookalike cannot be null');
        }
        $this->container['lookalike'] = $lookalike;

        return $this;
    }

    /**
     * Gets prospecting
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\ProspectingUpdateV1|null
     */
    public function getProspecting()
    {
        return $this->container['prospecting'];
    }

    /**
     * Sets prospecting
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\ProspectingUpdateV1|null $prospecting prospecting
     *
     * @return self
     */
    public function setProspecting($prospecting)
    {
        if (is_null($prospecting)) {
            throw new \InvalidArgumentException('non-nullable prospecting cannot be null');
        }
        $this->container['prospecting'] = $prospecting;

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


