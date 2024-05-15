<?php
/**
 * DynamicWriteAttributes
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
 * DynamicWriteAttributes Class Doc Comment
 *
 * @category Class
 * @description The attributes specific to create or update a Dynamic creative
 * @package  criteo\api\marketingsolutions\v2024_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DynamicWriteAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DynamicWriteAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_base64_string' => 'string',
        'creative_background_color' => 'string',
        'body_text_color' => 'string',
        'prices_color' => 'string',
        'primary_font' => 'string',
        'calls_to_action' => 'string[]',
        'product_image_display' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_base64_string' => null,
        'creative_background_color' => null,
        'body_text_color' => null,
        'prices_color' => null,
        'primary_font' => null,
        'calls_to_action' => null,
        'product_image_display' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'logo_base64_string' => false,
		'creative_background_color' => true,
		'body_text_color' => false,
		'prices_color' => false,
		'primary_font' => true,
		'calls_to_action' => false,
		'product_image_display' => false
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
        'logo_base64_string' => 'logoBase64String',
        'creative_background_color' => 'creativeBackgroundColor',
        'body_text_color' => 'bodyTextColor',
        'prices_color' => 'pricesColor',
        'primary_font' => 'primaryFont',
        'calls_to_action' => 'callsToAction',
        'product_image_display' => 'productImageDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_base64_string' => 'setLogoBase64String',
        'creative_background_color' => 'setCreativeBackgroundColor',
        'body_text_color' => 'setBodyTextColor',
        'prices_color' => 'setPricesColor',
        'primary_font' => 'setPrimaryFont',
        'calls_to_action' => 'setCallsToAction',
        'product_image_display' => 'setProductImageDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_base64_string' => 'getLogoBase64String',
        'creative_background_color' => 'getCreativeBackgroundColor',
        'body_text_color' => 'getBodyTextColor',
        'prices_color' => 'getPricesColor',
        'primary_font' => 'getPrimaryFont',
        'calls_to_action' => 'getCallsToAction',
        'product_image_display' => 'getProductImageDisplay'
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

    public const PRODUCT_IMAGE_DISPLAY_SHOW_FULL_IMAGE = 'ShowFullImage';
    public const PRODUCT_IMAGE_DISPLAY_ZOOM_ON_IMAGE = 'ZoomOnImage';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductImageDisplayAllowableValues()
    {
        return [
            self::PRODUCT_IMAGE_DISPLAY_SHOW_FULL_IMAGE,
            self::PRODUCT_IMAGE_DISPLAY_ZOOM_ON_IMAGE,
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
        $this->setIfExists('logo_base64_string', $data ?? [], null);
        $this->setIfExists('creative_background_color', $data ?? [], null);
        $this->setIfExists('body_text_color', $data ?? [], null);
        $this->setIfExists('prices_color', $data ?? [], null);
        $this->setIfExists('primary_font', $data ?? [], null);
        $this->setIfExists('calls_to_action', $data ?? [], null);
        $this->setIfExists('product_image_display', $data ?? [], null);
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

        if ($this->container['logo_base64_string'] === null) {
            $invalidProperties[] = "'logo_base64_string' can't be null";
        }
        if ($this->container['body_text_color'] === null) {
            $invalidProperties[] = "'body_text_color' can't be null";
        }
        if ($this->container['prices_color'] === null) {
            $invalidProperties[] = "'prices_color' can't be null";
        }
        if ($this->container['calls_to_action'] === null) {
            $invalidProperties[] = "'calls_to_action' can't be null";
        }
        if ((count($this->container['calls_to_action']) < 1)) {
            $invalidProperties[] = "invalid value for 'calls_to_action', number of items must be greater than or equal to 1.";
        }

        if ($this->container['product_image_display'] === null) {
            $invalidProperties[] = "'product_image_display' can't be null";
        }
        $allowedValues = $this->getProductImageDisplayAllowableValues();
        if (!is_null($this->container['product_image_display']) && !in_array($this->container['product_image_display'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_image_display', must be one of '%s'",
                $this->container['product_image_display'],
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
     * Gets logo_base64_string
     *
     * @return string
     */
    public function getLogoBase64String()
    {
        return $this->container['logo_base64_string'];
    }

    /**
     * Sets logo_base64_string
     *
     * @param string $logo_base64_string Logo image as a base-64 encoded string
     *
     * @return self
     */
    public function setLogoBase64String($logo_base64_string)
    {
        if (is_null($logo_base64_string)) {
            throw new \InvalidArgumentException('non-nullable logo_base64_string cannot be null');
        }
        $this->container['logo_base64_string'] = $logo_base64_string;

        return $this;
    }

    /**
     * Gets creative_background_color
     *
     * @return string|null
     */
    public function getCreativeBackgroundColor()
    {
        return $this->container['creative_background_color'];
    }

    /**
     * Sets creative_background_color
     *
     * @param string|null $creative_background_color Color of the creative's background  Valid hexadecimal RGB color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setCreativeBackgroundColor($creative_background_color)
    {
        if (is_null($creative_background_color)) {
            array_push($this->openAPINullablesSetToNull, 'creative_background_color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creative_background_color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creative_background_color'] = $creative_background_color;

        return $this;
    }

    /**
     * Gets body_text_color
     *
     * @return string
     */
    public function getBodyTextColor()
    {
        return $this->container['body_text_color'];
    }

    /**
     * Sets body_text_color
     *
     * @param string $body_text_color Color of the creative's body text  Valid hexadecimal RGB color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setBodyTextColor($body_text_color)
    {
        if (is_null($body_text_color)) {
            throw new \InvalidArgumentException('non-nullable body_text_color cannot be null');
        }
        $this->container['body_text_color'] = $body_text_color;

        return $this;
    }

    /**
     * Gets prices_color
     *
     * @return string
     */
    public function getPricesColor()
    {
        return $this->container['prices_color'];
    }

    /**
     * Sets prices_color
     *
     * @param string $prices_color Color of the creative's prices  Valid hexadecimal RGB color (e.g. \"AB00FF\")
     *
     * @return self
     */
    public function setPricesColor($prices_color)
    {
        if (is_null($prices_color)) {
            throw new \InvalidArgumentException('non-nullable prices_color cannot be null');
        }
        $this->container['prices_color'] = $prices_color;

        return $this;
    }

    /**
     * Gets primary_font
     *
     * @return string|null
     */
    public function getPrimaryFont()
    {
        return $this->container['primary_font'];
    }

    /**
     * Sets primary_font
     *
     * @param string|null $primary_font Font of the primary font  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setPrimaryFont($primary_font)
    {
        if (is_null($primary_font)) {
            array_push($this->openAPINullablesSetToNull, 'primary_font');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary_font', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary_font'] = $primary_font;

        return $this;
    }

    /**
     * Gets calls_to_action
     *
     * @return string[]
     */
    public function getCallsToAction()
    {
        return $this->container['calls_to_action'];
    }

    /**
     * Sets calls_to_action
     *
     * @param string[] $calls_to_action A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as “Buy now” or “Go!”.
     *
     * @return self
     */
    public function setCallsToAction($calls_to_action)
    {
        if (is_null($calls_to_action)) {
            throw new \InvalidArgumentException('non-nullable calls_to_action cannot be null');
        }


        if ((count($calls_to_action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $calls_to_action when calling DynamicWriteAttributes., number of items must be greater than or equal to 1.');
        }
        $this->container['calls_to_action'] = $calls_to_action;

        return $this;
    }

    /**
     * Gets product_image_display
     *
     * @return string
     */
    public function getProductImageDisplay()
    {
        return $this->container['product_image_display'];
    }

    /**
     * Sets product_image_display
     *
     * @param string $product_image_display Value can be \"ShowFullImage\" or \"ZoomOnImage\". Choose whether your product catalog images should fit inside the allocated  space (\"ShowFullImage\") or whether they should fill that space (\"ZoomOnImage\"). If you choose ZoomOnImage, there may be some  image cropping.
     *
     * @return self
     */
    public function setProductImageDisplay($product_image_display)
    {
        if (is_null($product_image_display)) {
            throw new \InvalidArgumentException('non-nullable product_image_display cannot be null');
        }
        $allowedValues = $this->getProductImageDisplayAllowableValues();
        if (!in_array($product_image_display, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_image_display', must be one of '%s'",
                    $product_image_display,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_image_display'] = $product_image_display;

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


