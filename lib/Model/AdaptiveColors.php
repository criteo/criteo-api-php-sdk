<?php
/**
 * AdaptiveColors
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
 * AdaptiveColors Class Doc Comment
 *
 * @category Class
 * @description Entity consists of the color aliases of the creative&#39;s elements
 * @package  criteo\api\marketingsolutions\v2024_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdaptiveColors implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdaptiveColors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_area_and_title_color' => 'string',
        'background_color' => 'string',
        'text1_color' => 'string',
        'text2_color' => 'string',
        'cta_background_color' => 'string',
        'cta_text_color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_area_and_title_color' => null,
        'background_color' => null,
        'text1_color' => null,
        'text2_color' => null,
        'cta_background_color' => null,
        'cta_text_color' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'logo_area_and_title_color' => false,
		'background_color' => false,
		'text1_color' => false,
		'text2_color' => false,
		'cta_background_color' => false,
		'cta_text_color' => false
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
        'logo_area_and_title_color' => 'logoAreaAndTitleColor',
        'background_color' => 'backgroundColor',
        'text1_color' => 'text1Color',
        'text2_color' => 'text2Color',
        'cta_background_color' => 'ctaBackgroundColor',
        'cta_text_color' => 'ctaTextColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_area_and_title_color' => 'setLogoAreaAndTitleColor',
        'background_color' => 'setBackgroundColor',
        'text1_color' => 'setText1Color',
        'text2_color' => 'setText2Color',
        'cta_background_color' => 'setCtaBackgroundColor',
        'cta_text_color' => 'setCtaTextColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_area_and_title_color' => 'getLogoAreaAndTitleColor',
        'background_color' => 'getBackgroundColor',
        'text1_color' => 'getText1Color',
        'text2_color' => 'getText2Color',
        'cta_background_color' => 'getCtaBackgroundColor',
        'cta_text_color' => 'getCtaTextColor'
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
        $this->setIfExists('logo_area_and_title_color', $data ?? [], null);
        $this->setIfExists('background_color', $data ?? [], null);
        $this->setIfExists('text1_color', $data ?? [], null);
        $this->setIfExists('text2_color', $data ?? [], null);
        $this->setIfExists('cta_background_color', $data ?? [], null);
        $this->setIfExists('cta_text_color', $data ?? [], null);
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

        if ($this->container['logo_area_and_title_color'] === null) {
            $invalidProperties[] = "'logo_area_and_title_color' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ($this->container['text1_color'] === null) {
            $invalidProperties[] = "'text1_color' can't be null";
        }
        if ($this->container['text2_color'] === null) {
            $invalidProperties[] = "'text2_color' can't be null";
        }
        if ($this->container['cta_background_color'] === null) {
            $invalidProperties[] = "'cta_background_color' can't be null";
        }
        if ($this->container['cta_text_color'] === null) {
            $invalidProperties[] = "'cta_text_color' can't be null";
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
     * Gets logo_area_and_title_color
     *
     * @return string
     */
    public function getLogoAreaAndTitleColor()
    {
        return $this->container['logo_area_and_title_color'];
    }

    /**
     * Sets logo_area_and_title_color
     *
     * @param string $logo_area_and_title_color Color of the creative's logo area.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\").
     *
     * @return self
     */
    public function setLogoAreaAndTitleColor($logo_area_and_title_color)
    {
        if (is_null($logo_area_and_title_color)) {
            throw new \InvalidArgumentException('non-nullable logo_area_and_title_color cannot be null');
        }
        $this->container['logo_area_and_title_color'] = $logo_area_and_title_color;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color Color of the creative's background.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setBackgroundColor($background_color)
    {
        if (is_null($background_color)) {
            throw new \InvalidArgumentException('non-nullable background_color cannot be null');
        }
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets text1_color
     *
     * @return string
     */
    public function getText1Color()
    {
        return $this->container['text1_color'];
    }

    /**
     * Sets text1_color
     *
     * @param string $text1_color Color of the headline and the description texts.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setText1Color($text1_color)
    {
        if (is_null($text1_color)) {
            throw new \InvalidArgumentException('non-nullable text1_color cannot be null');
        }
        $this->container['text1_color'] = $text1_color;

        return $this;
    }

    /**
     * Gets text2_color
     *
     * @return string
     */
    public function getText2Color()
    {
        return $this->container['text2_color'];
    }

    /**
     * Sets text2_color
     *
     * @param string $text2_color Color of the image set's headline text.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setText2Color($text2_color)
    {
        if (is_null($text2_color)) {
            throw new \InvalidArgumentException('non-nullable text2_color cannot be null');
        }
        $this->container['text2_color'] = $text2_color;

        return $this;
    }

    /**
     * Gets cta_background_color
     *
     * @return string
     */
    public function getCtaBackgroundColor()
    {
        return $this->container['cta_background_color'];
    }

    /**
     * Sets cta_background_color
     *
     * @param string $cta_background_color Color of the background of the CTA.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\").
     *
     * @return self
     */
    public function setCtaBackgroundColor($cta_background_color)
    {
        if (is_null($cta_background_color)) {
            throw new \InvalidArgumentException('non-nullable cta_background_color cannot be null');
        }
        $this->container['cta_background_color'] = $cta_background_color;

        return $this;
    }

    /**
     * Gets cta_text_color
     *
     * @return string
     */
    public function getCtaTextColor()
    {
        return $this->container['cta_text_color'];
    }

    /**
     * Sets cta_text_color
     *
     * @param string $cta_text_color Color of the text of the CTA.  A valid RGB24 color in hexadecimal (e.g. \"AB00FF\").
     *
     * @return self
     */
    public function setCtaTextColor($cta_text_color)
    {
        if (is_null($cta_text_color)) {
            throw new \InvalidArgumentException('non-nullable cta_text_color cannot be null');
        }
        $this->container['cta_text_color'] = $cta_text_color;

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


