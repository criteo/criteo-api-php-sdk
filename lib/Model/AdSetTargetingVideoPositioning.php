<?php
/**
 * AdSetTargetingVideoPositioning
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - MarketingSolutions
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\preview\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\preview\ObjectSerializer;

/**
 * AdSetTargetingVideoPositioning Class Doc Comment
 *
 * @category Class
 * @description Video positioning targeting model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdSetTargetingVideoPositioning implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdSetTargetingVideoPositioning';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'video_placement' => 'string[]',
        'playback_method' => 'string[]',
        'skippable' => 'string',
        'video_in_stream_position' => 'string[]',
        'video_player_size' => 'string[]',
        'video_aspect_ratio' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'video_placement' => null,
        'playback_method' => null,
        'skippable' => null,
        'video_in_stream_position' => null,
        'video_player_size' => null,
        'video_aspect_ratio' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'video_placement' => true,
		'playback_method' => true,
		'skippable' => true,
		'video_in_stream_position' => true,
		'video_player_size' => true,
		'video_aspect_ratio' => true
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
        'video_placement' => 'videoPlacement',
        'playback_method' => 'playbackMethod',
        'skippable' => 'skippable',
        'video_in_stream_position' => 'videoInStreamPosition',
        'video_player_size' => 'videoPlayerSize',
        'video_aspect_ratio' => 'videoAspectRatio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'video_placement' => 'setVideoPlacement',
        'playback_method' => 'setPlaybackMethod',
        'skippable' => 'setSkippable',
        'video_in_stream_position' => 'setVideoInStreamPosition',
        'video_player_size' => 'setVideoPlayerSize',
        'video_aspect_ratio' => 'setVideoAspectRatio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'video_placement' => 'getVideoPlacement',
        'playback_method' => 'getPlaybackMethod',
        'skippable' => 'getSkippable',
        'video_in_stream_position' => 'getVideoInStreamPosition',
        'video_player_size' => 'getVideoPlayerSize',
        'video_aspect_ratio' => 'getVideoAspectRatio'
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

    public const VIDEO_PLACEMENT_IN_BANNER = 'InBanner';
    public const VIDEO_PLACEMENT_IN_ARTICLE = 'InArticle';
    public const VIDEO_PLACEMENT_IN_FEED = 'InFeed';
    public const VIDEO_PLACEMENT_INTERSTITIAL = 'Interstitial';
    public const VIDEO_PLACEMENT_IN_STREAM = 'InStream';
    public const PLAYBACK_METHOD_AUTO_SOUND_ON = 'AutoSoundOn';
    public const PLAYBACK_METHOD_AUTO_SOUND_OFF = 'AutoSoundOff';
    public const PLAYBACK_METHOD_CLICK_SOUND_ON = 'ClickSoundOn';
    public const PLAYBACK_METHOD_MOUSE_OVER_SOUND_ON = 'MouseOverSoundOn';
    public const PLAYBACK_METHOD_ENTERING_VIEWPORT_SOUND_ON = 'EnteringViewportSoundOn';
    public const PLAYBACK_METHOD_ENTERING_VIEWPORT_SOUND_OFF = 'EnteringViewportSoundOff';
    public const SKIPPABLE_REQUIRED = 'Required';
    public const SKIPPABLE_BLOCKED = 'Blocked';
    public const VIDEO_IN_STREAM_POSITION_PRE_ROLL = 'PreRoll';
    public const VIDEO_IN_STREAM_POSITION_MID_ROLL = 'MidRoll';
    public const VIDEO_IN_STREAM_POSITION_POST_ROLL = 'PostRoll';
    public const VIDEO_PLAYER_SIZE_SMALL = 'Small';
    public const VIDEO_PLAYER_SIZE_MEDIUM = 'Medium';
    public const VIDEO_PLAYER_SIZE_LARGE = 'Large';
    public const VIDEO_PLAYER_SIZE_EXTRA_LARGE = 'ExtraLarge';
    public const VIDEO_ASPECT_RATIO_HORIZONTAL = 'Horizontal';
    public const VIDEO_ASPECT_RATIO_SQUARE = 'Square';
    public const VIDEO_ASPECT_RATIO_VERTICAL = 'Vertical';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoPlacementAllowableValues()
    {
        return [
            self::VIDEO_PLACEMENT_IN_BANNER,
            self::VIDEO_PLACEMENT_IN_ARTICLE,
            self::VIDEO_PLACEMENT_IN_FEED,
            self::VIDEO_PLACEMENT_INTERSTITIAL,
            self::VIDEO_PLACEMENT_IN_STREAM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlaybackMethodAllowableValues()
    {
        return [
            self::PLAYBACK_METHOD_AUTO_SOUND_ON,
            self::PLAYBACK_METHOD_AUTO_SOUND_OFF,
            self::PLAYBACK_METHOD_CLICK_SOUND_ON,
            self::PLAYBACK_METHOD_MOUSE_OVER_SOUND_ON,
            self::PLAYBACK_METHOD_ENTERING_VIEWPORT_SOUND_ON,
            self::PLAYBACK_METHOD_ENTERING_VIEWPORT_SOUND_OFF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSkippableAllowableValues()
    {
        return [
            self::SKIPPABLE_REQUIRED,
            self::SKIPPABLE_BLOCKED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoInStreamPositionAllowableValues()
    {
        return [
            self::VIDEO_IN_STREAM_POSITION_PRE_ROLL,
            self::VIDEO_IN_STREAM_POSITION_MID_ROLL,
            self::VIDEO_IN_STREAM_POSITION_POST_ROLL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoPlayerSizeAllowableValues()
    {
        return [
            self::VIDEO_PLAYER_SIZE_SMALL,
            self::VIDEO_PLAYER_SIZE_MEDIUM,
            self::VIDEO_PLAYER_SIZE_LARGE,
            self::VIDEO_PLAYER_SIZE_EXTRA_LARGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoAspectRatioAllowableValues()
    {
        return [
            self::VIDEO_ASPECT_RATIO_HORIZONTAL,
            self::VIDEO_ASPECT_RATIO_SQUARE,
            self::VIDEO_ASPECT_RATIO_VERTICAL,
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
        $this->setIfExists('video_placement', $data ?? [], null);
        $this->setIfExists('playback_method', $data ?? [], null);
        $this->setIfExists('skippable', $data ?? [], null);
        $this->setIfExists('video_in_stream_position', $data ?? [], null);
        $this->setIfExists('video_player_size', $data ?? [], null);
        $this->setIfExists('video_aspect_ratio', $data ?? [], null);
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

        $allowedValues = $this->getSkippableAllowableValues();
        if (!is_null($this->container['skippable']) && !in_array($this->container['skippable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'skippable', must be one of '%s'",
                $this->container['skippable'],
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
     * Gets video_placement
     *
     * @return string[]|null
     */
    public function getVideoPlacement()
    {
        return $this->container['video_placement'];
    }

    /**
     * Sets video_placement
     *
     * @param string[]|null $video_placement video_placement
     *
     * @return self
     */
    public function setVideoPlacement($video_placement)
    {
        if (is_null($video_placement)) {
            array_push($this->openAPINullablesSetToNull, 'video_placement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_placement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVideoPlacementAllowableValues();
        if (!is_null($video_placement) && array_diff($video_placement, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'video_placement', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['video_placement'] = $video_placement;

        return $this;
    }

    /**
     * Gets playback_method
     *
     * @return string[]|null
     */
    public function getPlaybackMethod()
    {
        return $this->container['playback_method'];
    }

    /**
     * Sets playback_method
     *
     * @param string[]|null $playback_method playback_method
     *
     * @return self
     */
    public function setPlaybackMethod($playback_method)
    {
        if (is_null($playback_method)) {
            array_push($this->openAPINullablesSetToNull, 'playback_method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('playback_method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getPlaybackMethodAllowableValues();
        if (!is_null($playback_method) && array_diff($playback_method, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'playback_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['playback_method'] = $playback_method;

        return $this;
    }

    /**
     * Gets skippable
     *
     * @return string|null
     */
    public function getSkippable()
    {
        return $this->container['skippable'];
    }

    /**
     * Sets skippable
     *
     * @param string|null $skippable skippable
     *
     * @return self
     */
    public function setSkippable($skippable)
    {
        if (is_null($skippable)) {
            array_push($this->openAPINullablesSetToNull, 'skippable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skippable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSkippableAllowableValues();
        if (!is_null($skippable) && !in_array($skippable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'skippable', must be one of '%s'",
                    $skippable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['skippable'] = $skippable;

        return $this;
    }

    /**
     * Gets video_in_stream_position
     *
     * @return string[]|null
     */
    public function getVideoInStreamPosition()
    {
        return $this->container['video_in_stream_position'];
    }

    /**
     * Sets video_in_stream_position
     *
     * @param string[]|null $video_in_stream_position video_in_stream_position
     *
     * @return self
     */
    public function setVideoInStreamPosition($video_in_stream_position)
    {
        if (is_null($video_in_stream_position)) {
            array_push($this->openAPINullablesSetToNull, 'video_in_stream_position');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_in_stream_position', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVideoInStreamPositionAllowableValues();
        if (!is_null($video_in_stream_position) && array_diff($video_in_stream_position, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'video_in_stream_position', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['video_in_stream_position'] = $video_in_stream_position;

        return $this;
    }

    /**
     * Gets video_player_size
     *
     * @return string[]|null
     */
    public function getVideoPlayerSize()
    {
        return $this->container['video_player_size'];
    }

    /**
     * Sets video_player_size
     *
     * @param string[]|null $video_player_size video_player_size
     *
     * @return self
     */
    public function setVideoPlayerSize($video_player_size)
    {
        if (is_null($video_player_size)) {
            array_push($this->openAPINullablesSetToNull, 'video_player_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_player_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVideoPlayerSizeAllowableValues();
        if (!is_null($video_player_size) && array_diff($video_player_size, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'video_player_size', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['video_player_size'] = $video_player_size;

        return $this;
    }

    /**
     * Gets video_aspect_ratio
     *
     * @return string[]|null
     */
    public function getVideoAspectRatio()
    {
        return $this->container['video_aspect_ratio'];
    }

    /**
     * Sets video_aspect_ratio
     *
     * @param string[]|null $video_aspect_ratio video_aspect_ratio
     *
     * @return self
     */
    public function setVideoAspectRatio($video_aspect_ratio)
    {
        if (is_null($video_aspect_ratio)) {
            array_push($this->openAPINullablesSetToNull, 'video_aspect_ratio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_aspect_ratio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVideoAspectRatioAllowableValues();
        if (!is_null($video_aspect_ratio) && array_diff($video_aspect_ratio, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'video_aspect_ratio', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['video_aspect_ratio'] = $video_aspect_ratio;

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


