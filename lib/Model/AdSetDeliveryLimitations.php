<?php
/**
 * AdSetDeliveryLimitations
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2021_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2021-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2021_07\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2021_07\ObjectSerializer;

/**
 * AdSetDeliveryLimitations Class Doc Comment
 *
 * @category Class
 * @description ad set delivery limitations model
 * @package  criteo\api\marketingsolutions\v2021_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdSetDeliveryLimitations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdSetDeliveryLimitations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'environments' => 'string[]',
        'devices' => 'string[]',
        'operating_systems' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'environments' => null,
        'devices' => null,
        'operating_systems' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'environments' => 'environments',
        'devices' => 'devices',
        'operating_systems' => 'operatingSystems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'environments' => 'setEnvironments',
        'devices' => 'setDevices',
        'operating_systems' => 'setOperatingSystems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'environments' => 'getEnvironments',
        'devices' => 'getDevices',
        'operating_systems' => 'getOperatingSystems'
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

    const ENVIRONMENTS_WEB = 'web';
    const ENVIRONMENTS_IN_APP = 'inApp';
    const DEVICES_OTHER = 'other';
    const DEVICES_DESKTOP = 'desktop';
    const DEVICES_MOBILE = 'mobile';
    const DEVICES_TABLET = 'tablet';
    const OPERATING_SYSTEMS_ANDROID = 'android';
    const OPERATING_SYSTEMS_IOS = 'ios';
    const OPERATING_SYSTEMS_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentsAllowableValues()
    {
        return [
            self::ENVIRONMENTS_WEB,
            self::ENVIRONMENTS_IN_APP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDevicesAllowableValues()
    {
        return [
            self::DEVICES_OTHER,
            self::DEVICES_DESKTOP,
            self::DEVICES_MOBILE,
            self::DEVICES_TABLET,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatingSystemsAllowableValues()
    {
        return [
            self::OPERATING_SYSTEMS_ANDROID,
            self::OPERATING_SYSTEMS_IOS,
            self::OPERATING_SYSTEMS_UNKNOWN,
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
        $this->container['environments'] = $data['environments'] ?? null;
        $this->container['devices'] = $data['devices'] ?? null;
        $this->container['operating_systems'] = $data['operating_systems'] ?? null;
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
     * Gets environments
     *
     * @return string[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param string[]|null $environments List of environments which the ad set should target
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (!is_null($environments) && array_diff($environments, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environments', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['environments'] = $environments;

        return $this;
    }

    /**
     * Gets devices
     *
     * @return string[]|null
     */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
     * Sets devices
     *
     * @param string[]|null $devices List of devices which the ad set should target
     *
     * @return self
     */
    public function setDevices($devices)
    {
        $allowedValues = $this->getDevicesAllowableValues();
        if (!is_null($devices) && array_diff($devices, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'devices', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['devices'] = $devices;

        return $this;
    }

    /**
     * Gets operating_systems
     *
     * @return string[]|null
     */
    public function getOperatingSystems()
    {
        return $this->container['operating_systems'];
    }

    /**
     * Sets operating_systems
     *
     * @param string[]|null $operating_systems List of operating systems which the ad set should target
     *
     * @return self
     */
    public function setOperatingSystems($operating_systems)
    {
        $allowedValues = $this->getOperatingSystemsAllowableValues();
        if (!is_null($operating_systems) && array_diff($operating_systems, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operating_systems', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['operating_systems'] = $operating_systems;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


