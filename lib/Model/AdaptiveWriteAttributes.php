<?php
/**
 * AdaptiveWriteAttributes
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
 * AdaptiveWriteAttributes Class Doc Comment
 *
 * @category Class
 * @description The attributes specific to create or update an Adaptive creative
 * @package  criteo\api\marketingsolutions\v2024_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdaptiveWriteAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdaptiveWriteAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'layouts' => 'string[]',
        'logo_base64_string' => 'string',
        'headline_text' => 'string',
        'headline_font' => 'string',
        'description_text' => 'string',
        'description_font' => 'string',
        'calls_to_action' => 'string[]',
        'colors' => '\criteo\api\marketingsolutions\v2024_01\Model\AdaptiveColors',
        'image_sets_base64' => '\criteo\api\marketingsolutions\v2024_01\Model\ImageSetBase64[]',
        'image_display' => 'string',
        'video_base64_strings' => 'string[]',
        'landing_page_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'layouts' => null,
        'logo_base64_string' => null,
        'headline_text' => null,
        'headline_font' => null,
        'description_text' => null,
        'description_font' => null,
        'calls_to_action' => null,
        'colors' => null,
        'image_sets_base64' => null,
        'image_display' => null,
        'video_base64_strings' => null,
        'landing_page_url' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'layouts' => false,
		'logo_base64_string' => false,
		'headline_text' => false,
		'headline_font' => false,
		'description_text' => false,
		'description_font' => false,
		'calls_to_action' => false,
		'colors' => false,
		'image_sets_base64' => true,
		'image_display' => true,
		'video_base64_strings' => true,
		'landing_page_url' => false
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
        'layouts' => 'layouts',
        'logo_base64_string' => 'logoBase64String',
        'headline_text' => 'headlineText',
        'headline_font' => 'headlineFont',
        'description_text' => 'descriptionText',
        'description_font' => 'descriptionFont',
        'calls_to_action' => 'callsToAction',
        'colors' => 'colors',
        'image_sets_base64' => 'imageSetsBase64',
        'image_display' => 'imageDisplay',
        'video_base64_strings' => 'videoBase64Strings',
        'landing_page_url' => 'landingPageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'layouts' => 'setLayouts',
        'logo_base64_string' => 'setLogoBase64String',
        'headline_text' => 'setHeadlineText',
        'headline_font' => 'setHeadlineFont',
        'description_text' => 'setDescriptionText',
        'description_font' => 'setDescriptionFont',
        'calls_to_action' => 'setCallsToAction',
        'colors' => 'setColors',
        'image_sets_base64' => 'setImageSetsBase64',
        'image_display' => 'setImageDisplay',
        'video_base64_strings' => 'setVideoBase64Strings',
        'landing_page_url' => 'setLandingPageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'layouts' => 'getLayouts',
        'logo_base64_string' => 'getLogoBase64String',
        'headline_text' => 'getHeadlineText',
        'headline_font' => 'getHeadlineFont',
        'description_text' => 'getDescriptionText',
        'description_font' => 'getDescriptionFont',
        'calls_to_action' => 'getCallsToAction',
        'colors' => 'getColors',
        'image_sets_base64' => 'getImageSetsBase64',
        'image_display' => 'getImageDisplay',
        'video_base64_strings' => 'getVideoBase64Strings',
        'landing_page_url' => 'getLandingPageUrl'
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

    public const LAYOUTS_EDITORIAL = 'Editorial';
    public const LAYOUTS_MONTAGE = 'Montage';
    public const LAYOUTS_IN_BANNER_VIDEO = 'InBannerVideo';
    public const IMAGE_DISPLAY_SHOW_FULL_IMAGE = 'ShowFullImage';
    public const IMAGE_DISPLAY_ZOOM_ON_IMAGE = 'ZoomOnImage';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutsAllowableValues()
    {
        return [
            self::LAYOUTS_EDITORIAL,
            self::LAYOUTS_MONTAGE,
            self::LAYOUTS_IN_BANNER_VIDEO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageDisplayAllowableValues()
    {
        return [
            self::IMAGE_DISPLAY_SHOW_FULL_IMAGE,
            self::IMAGE_DISPLAY_ZOOM_ON_IMAGE,
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
        $this->setIfExists('layouts', $data ?? [], null);
        $this->setIfExists('logo_base64_string', $data ?? [], null);
        $this->setIfExists('headline_text', $data ?? [], null);
        $this->setIfExists('headline_font', $data ?? [], null);
        $this->setIfExists('description_text', $data ?? [], null);
        $this->setIfExists('description_font', $data ?? [], null);
        $this->setIfExists('calls_to_action', $data ?? [], null);
        $this->setIfExists('colors', $data ?? [], null);
        $this->setIfExists('image_sets_base64', $data ?? [], null);
        $this->setIfExists('image_display', $data ?? [], null);
        $this->setIfExists('video_base64_strings', $data ?? [], null);
        $this->setIfExists('landing_page_url', $data ?? [], null);
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

        if ($this->container['layouts'] === null) {
            $invalidProperties[] = "'layouts' can't be null";
        }
        if ((count($this->container['layouts']) < 1)) {
            $invalidProperties[] = "invalid value for 'layouts', number of items must be greater than or equal to 1.";
        }

        if ($this->container['logo_base64_string'] === null) {
            $invalidProperties[] = "'logo_base64_string' can't be null";
        }
        if ($this->container['headline_text'] === null) {
            $invalidProperties[] = "'headline_text' can't be null";
        }
        if ($this->container['headline_font'] === null) {
            $invalidProperties[] = "'headline_font' can't be null";
        }
        if ($this->container['description_text'] === null) {
            $invalidProperties[] = "'description_text' can't be null";
        }
        if ($this->container['description_font'] === null) {
            $invalidProperties[] = "'description_font' can't be null";
        }
        if ($this->container['calls_to_action'] === null) {
            $invalidProperties[] = "'calls_to_action' can't be null";
        }
        if ((count($this->container['calls_to_action']) < 1)) {
            $invalidProperties[] = "invalid value for 'calls_to_action', number of items must be greater than or equal to 1.";
        }

        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
        }
        $allowedValues = $this->getImageDisplayAllowableValues();
        if (!is_null($this->container['image_display']) && !in_array($this->container['image_display'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'image_display', must be one of '%s'",
                $this->container['image_display'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['landing_page_url'] === null) {
            $invalidProperties[] = "'landing_page_url' can't be null";
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
     * Gets layouts
     *
     * @return string[]
     */
    public function getLayouts()
    {
        return $this->container['layouts'];
    }

    /**
     * Sets layouts
     *
     * @param string[] $layouts The Adaptive layouts that are enabled.  It can contain any of the following values: \"Editorial\", “Montage“, \"InBannerVideo\".
     *
     * @return self
     */
    public function setLayouts($layouts)
    {
        if (is_null($layouts)) {
            throw new \InvalidArgumentException('non-nullable layouts cannot be null');
        }
        $allowedValues = $this->getLayoutsAllowableValues();
        if (array_diff($layouts, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'layouts', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($layouts) < 1)) {
            throw new \InvalidArgumentException('invalid length for $layouts when calling AdaptiveWriteAttributes., number of items must be greater than or equal to 1.');
        }
        $this->container['layouts'] = $layouts;

        return $this;
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
     * Gets headline_text
     *
     * @return string
     */
    public function getHeadlineText()
    {
        return $this->container['headline_text'];
    }

    /**
     * Sets headline_text
     *
     * @param string $headline_text The headline text of the banner
     *
     * @return self
     */
    public function setHeadlineText($headline_text)
    {
        if (is_null($headline_text)) {
            throw new \InvalidArgumentException('non-nullable headline_text cannot be null');
        }
        $this->container['headline_text'] = $headline_text;

        return $this;
    }

    /**
     * Gets headline_font
     *
     * @return string
     */
    public function getHeadlineFont()
    {
        return $this->container['headline_font'];
    }

    /**
     * Sets headline_font
     *
     * @param string $headline_font Font of the headline  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setHeadlineFont($headline_font)
    {
        if (is_null($headline_font)) {
            throw new \InvalidArgumentException('non-nullable headline_font cannot be null');
        }
        $this->container['headline_font'] = $headline_font;

        return $this;
    }

    /**
     * Gets description_text
     *
     * @return string
     */
    public function getDescriptionText()
    {
        return $this->container['description_text'];
    }

    /**
     * Sets description_text
     *
     * @param string $description_text The description text of the banner
     *
     * @return self
     */
    public function setDescriptionText($description_text)
    {
        if (is_null($description_text)) {
            throw new \InvalidArgumentException('non-nullable description_text cannot be null');
        }
        $this->container['description_text'] = $description_text;

        return $this;
    }

    /**
     * Gets description_font
     *
     * @return string
     */
    public function getDescriptionFont()
    {
        return $this->container['description_font'];
    }

    /**
     * Sets description_font
     *
     * @param string $description_font Font of the description  Valid supported font like \"Arial\"
     *
     * @return self
     */
    public function setDescriptionFont($description_font)
    {
        if (is_null($description_font)) {
            throw new \InvalidArgumentException('non-nullable description_font cannot be null');
        }
        $this->container['description_font'] = $description_font;

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
            throw new \InvalidArgumentException('invalid length for $calls_to_action when calling AdaptiveWriteAttributes., number of items must be greater than or equal to 1.');
        }
        $this->container['calls_to_action'] = $calls_to_action;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\AdaptiveColors
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\AdaptiveColors $colors colors
     *
     * @return self
     */
    public function setColors($colors)
    {
        if (is_null($colors)) {
            throw new \InvalidArgumentException('non-nullable colors cannot be null');
        }
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets image_sets_base64
     *
     * @return \criteo\api\marketingsolutions\v2024_01\Model\ImageSetBase64[]|null
     */
    public function getImageSetsBase64()
    {
        return $this->container['image_sets_base64'];
    }

    /**
     * Sets image_sets_base64
     *
     * @param \criteo\api\marketingsolutions\v2024_01\Model\ImageSetBase64[]|null $image_sets_base64 Multiple image sets, each image set consists of multiple images as a base-64 encoded string and a headline text.
     *
     * @return self
     */
    public function setImageSetsBase64($image_sets_base64)
    {
        if (is_null($image_sets_base64)) {
            array_push($this->openAPINullablesSetToNull, 'image_sets_base64');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_sets_base64', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['image_sets_base64'] = $image_sets_base64;

        return $this;
    }

    /**
     * Gets image_display
     *
     * @return string|null
     */
    public function getImageDisplay()
    {
        return $this->container['image_display'];
    }

    /**
     * Sets image_display
     *
     * @param string|null $image_display Value can be \"ShowFullImage\" or \"ZoomOnImage\". Choose whether your image set should fit inside the allocated  space (\"ShowFullImage\") or whether it should fill that space (\"ZoomOnImage\"). If you choose ZoomOnImage, there may be some  image cropping.
     *
     * @return self
     */
    public function setImageDisplay($image_display)
    {
        if (is_null($image_display)) {
            array_push($this->openAPINullablesSetToNull, 'image_display');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_display', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getImageDisplayAllowableValues();
        if (!is_null($image_display) && !in_array($image_display, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'image_display', must be one of '%s'",
                    $image_display,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['image_display'] = $image_display;

        return $this;
    }

    /**
     * Gets video_base64_strings
     *
     * @return string[]|null
     */
    public function getVideoBase64Strings()
    {
        return $this->container['video_base64_strings'];
    }

    /**
     * Sets video_base64_strings
     *
     * @param string[]|null $video_base64_strings Multiple videos potentially in different shapes, each video is a base-64 encoded string.
     *
     * @return self
     */
    public function setVideoBase64Strings($video_base64_strings)
    {
        if (is_null($video_base64_strings)) {
            array_push($this->openAPINullablesSetToNull, 'video_base64_strings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_base64_strings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['video_base64_strings'] = $video_base64_strings;

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
     * @param string $landing_page_url Web redirection of the landing page url.
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


