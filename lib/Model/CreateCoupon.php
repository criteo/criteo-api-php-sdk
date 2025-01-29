<?php
/**
 * CreateCoupon
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2024_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: 2024-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2024_04\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2024_04\ObjectSerializer;

/**
 * CreateCoupon Class Doc Comment
 *
 * @category Class
 * @description Entity to create a Coupon
 * @package  criteo\api\marketingsolutions\v2024_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateCoupon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'ad_set_id' => 'string',
        'landing_page_url' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'format' => 'string',
        'images' => '\criteo\api\marketingsolutions\v2024_04\Model\CreateImageSlide[]',
        'show_every' => 'int',
        'show_duration' => 'int',
        'rotations_number' => 'int'
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
        'ad_set_id' => null,
        'landing_page_url' => null,
        'start_date' => null,
        'end_date' => null,
        'format' => null,
        'images' => null,
        'show_every' => 'int32',
        'show_duration' => 'int32',
        'rotations_number' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => true,
		'ad_set_id' => false,
		'landing_page_url' => false,
		'start_date' => false,
		'end_date' => true,
		'format' => false,
		'images' => false,
		'show_every' => false,
		'show_duration' => false,
		'rotations_number' => false
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
        'ad_set_id' => 'adSetId',
        'landing_page_url' => 'landingPageUrl',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'format' => 'format',
        'images' => 'images',
        'show_every' => 'showEvery',
        'show_duration' => 'showDuration',
        'rotations_number' => 'rotationsNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'ad_set_id' => 'setAdSetId',
        'landing_page_url' => 'setLandingPageUrl',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'format' => 'setFormat',
        'images' => 'setImages',
        'show_every' => 'setShowEvery',
        'show_duration' => 'setShowDuration',
        'rotations_number' => 'setRotationsNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'ad_set_id' => 'getAdSetId',
        'landing_page_url' => 'getLandingPageUrl',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'format' => 'getFormat',
        'images' => 'getImages',
        'show_every' => 'getShowEvery',
        'show_duration' => 'getShowDuration',
        'rotations_number' => 'getRotationsNumber'
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

    public const FORMAT_FULL_FRAME = 'FullFrame';
    public const FORMAT_LOGO_ZONE = 'LogoZone';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_FULL_FRAME,
            self::FORMAT_LOGO_ZONE,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ad_set_id', $data ?? [], null);
        $this->setIfExists('landing_page_url', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('show_every', $data ?? [], null);
        $this->setIfExists('show_duration', $data ?? [], null);
        $this->setIfExists('rotations_number', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ad_set_id'] === null) {
            $invalidProperties[] = "'ad_set_id' can't be null";
        }
        if ($this->container['landing_page_url'] === null) {
            $invalidProperties[] = "'landing_page_url' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['show_every'] === null) {
            $invalidProperties[] = "'show_every' can't be null";
        }
        if (($this->container['show_every'] > 10)) {
            $invalidProperties[] = "invalid value for 'show_every', must be smaller than or equal to 10.";
        }

        if (($this->container['show_every'] < 1)) {
            $invalidProperties[] = "invalid value for 'show_every', must be bigger than or equal to 1.";
        }

        if ($this->container['show_duration'] === null) {
            $invalidProperties[] = "'show_duration' can't be null";
        }
        if (($this->container['show_duration'] > 5)) {
            $invalidProperties[] = "invalid value for 'show_duration', must be smaller than or equal to 5.";
        }

        if (($this->container['show_duration'] < 1)) {
            $invalidProperties[] = "invalid value for 'show_duration', must be bigger than or equal to 1.";
        }

        if ($this->container['rotations_number'] === null) {
            $invalidProperties[] = "'rotations_number' can't be null";
        }
        if (($this->container['rotations_number'] > 10)) {
            $invalidProperties[] = "invalid value for 'rotations_number', must be smaller than or equal to 10.";
        }

        if (($this->container['rotations_number'] < 1)) {
            $invalidProperties[] = "invalid value for 'rotations_number', must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the Coupon
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the Coupon
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ad_set_id
     *
     * @return string
     */
    public function getAdSetId()
    {
        return $this->container['ad_set_id'];
    }

    /**
     * Sets ad_set_id
     *
     * @param string $ad_set_id The id of the Ad Set on which the Coupon is applied to
     *
     * @return self
     */
    public function setAdSetId($ad_set_id)
    {
        if (is_null($ad_set_id)) {
            throw new \InvalidArgumentException('non-nullable ad_set_id cannot be null');
        }
        $this->container['ad_set_id'] = $ad_set_id;

        return $this;
    }

    /**
     * Gets landing_page_url
     *
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->container['landing_page_url'];
    }

    /**
     * Sets landing_page_url
     *
     * @param string $landing_page_url Web redirection of the landing page url
     *
     * @return self
     */
    public function setLandingPageUrl($landing_page_url)
    {
        if (is_null($landing_page_url)) {
            throw new \InvalidArgumentException('non-nullable landing_page_url cannot be null');
        }
        $this->container['landing_page_url'] = $landing_page_url;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date The date when the coupon will be launched  String must be in ISO8601 format
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date The date when when we will stop to show this Coupon. If the end date is not specified (i.e. null) then the Coupon will go on forever  String must be in ISO8601 format
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            array_push($this->openAPINullablesSetToNull, 'end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Format of the Coupon, it can have two values: \"FullFrame\" or \"LogoZone\"
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \criteo\api\marketingsolutions\v2024_04\Model\CreateImageSlide[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \criteo\api\marketingsolutions\v2024_04\Model\CreateImageSlide[] $images List of slides containing the images as a base-64 encoded string
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets show_every
     *
     * @return int
     */
    public function getShowEvery()
    {
        return $this->container['show_every'];
    }

    /**
     * Sets show_every
     *
     * @param int $show_every Show the Coupon every N seconds (between 1 and 10)
     *
     * @return self
     */
    public function setShowEvery($show_every)
    {
        if (is_null($show_every)) {
            throw new \InvalidArgumentException('non-nullable show_every cannot be null');
        }

        if (($show_every > 10)) {
            throw new \InvalidArgumentException('invalid value for $show_every when calling CreateCoupon., must be smaller than or equal to 10.');
        }
        if (($show_every < 1)) {
            throw new \InvalidArgumentException('invalid value for $show_every when calling CreateCoupon., must be bigger than or equal to 1.');
        }

        $this->container['show_every'] = $show_every;

        return $this;
    }

    /**
     * Gets show_duration
     *
     * @return int
     */
    public function getShowDuration()
    {
        return $this->container['show_duration'];
    }

    /**
     * Sets show_duration
     *
     * @param int $show_duration Show Coupon for a duration of N seconds (between 1 and 5)
     *
     * @return self
     */
    public function setShowDuration($show_duration)
    {
        if (is_null($show_duration)) {
            throw new \InvalidArgumentException('non-nullable show_duration cannot be null');
        }

        if (($show_duration > 5)) {
            throw new \InvalidArgumentException('invalid value for $show_duration when calling CreateCoupon., must be smaller than or equal to 5.');
        }
        if (($show_duration < 1)) {
            throw new \InvalidArgumentException('invalid value for $show_duration when calling CreateCoupon., must be bigger than or equal to 1.');
        }

        $this->container['show_duration'] = $show_duration;

        return $this;
    }

    /**
     * Gets rotations_number
     *
     * @return int
     */
    public function getRotationsNumber()
    {
        return $this->container['rotations_number'];
    }

    /**
     * Sets rotations_number
     *
     * @param int $rotations_number Number of rotations for the Coupons (from 1 to 10 times)
     *
     * @return self
     */
    public function setRotationsNumber($rotations_number)
    {
        if (is_null($rotations_number)) {
            throw new \InvalidArgumentException('non-nullable rotations_number cannot be null');
        }

        if (($rotations_number > 10)) {
            throw new \InvalidArgumentException('invalid value for $rotations_number when calling CreateCoupon., must be smaller than or equal to 10.');
        }
        if (($rotations_number < 1)) {
            throw new \InvalidArgumentException('invalid value for $rotations_number when calling CreateCoupon., must be bigger than or equal to 1.');
        }

        $this->container['rotations_number'] = $rotations_number;

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


