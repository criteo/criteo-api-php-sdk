<?php
/**
 * CampaignSpendLimit
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2023-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2023_01\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2023_01\ObjectSerializer;

/**
 * CampaignSpendLimit Class Doc Comment
 *
 * @category Class
 * @description campaign spend limit model
 * @package  criteo\api\marketingsolutions\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignSpendLimit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignSpendLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'spend_limit_type' => 'string',
        'spend_limit_renewal' => 'string',
        'spend_limit_amount' => '\criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'spend_limit_type' => null,
        'spend_limit_renewal' => null,
        'spend_limit_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'spend_limit_type' => false,
		'spend_limit_renewal' => false,
		'spend_limit_amount' => false
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
        'spend_limit_type' => 'spendLimitType',
        'spend_limit_renewal' => 'spendLimitRenewal',
        'spend_limit_amount' => 'spendLimitAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spend_limit_type' => 'setSpendLimitType',
        'spend_limit_renewal' => 'setSpendLimitRenewal',
        'spend_limit_amount' => 'setSpendLimitAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spend_limit_type' => 'getSpendLimitType',
        'spend_limit_renewal' => 'getSpendLimitRenewal',
        'spend_limit_amount' => 'getSpendLimitAmount'
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

    public const SPEND_LIMIT_TYPE_CAPPED = 'capped';
    public const SPEND_LIMIT_TYPE_UNCAPPED = 'uncapped';
    public const SPEND_LIMIT_RENEWAL_UNDEFINED = 'undefined';
    public const SPEND_LIMIT_RENEWAL_DAILY = 'daily';
    public const SPEND_LIMIT_RENEWAL_MONTHLY = 'monthly';
    public const SPEND_LIMIT_RENEWAL_LIFETIME = 'lifetime';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpendLimitTypeAllowableValues()
    {
        return [
            self::SPEND_LIMIT_TYPE_CAPPED,
            self::SPEND_LIMIT_TYPE_UNCAPPED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpendLimitRenewalAllowableValues()
    {
        return [
            self::SPEND_LIMIT_RENEWAL_UNDEFINED,
            self::SPEND_LIMIT_RENEWAL_DAILY,
            self::SPEND_LIMIT_RENEWAL_MONTHLY,
            self::SPEND_LIMIT_RENEWAL_LIFETIME,
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
        $this->setIfExists('spend_limit_type', $data ?? [], null);
        $this->setIfExists('spend_limit_renewal', $data ?? [], null);
        $this->setIfExists('spend_limit_amount', $data ?? [], null);
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

        $allowedValues = $this->getSpendLimitTypeAllowableValues();
        if (!is_null($this->container['spend_limit_type']) && !in_array($this->container['spend_limit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spend_limit_type', must be one of '%s'",
                $this->container['spend_limit_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpendLimitRenewalAllowableValues();
        if (!is_null($this->container['spend_limit_renewal']) && !in_array($this->container['spend_limit_renewal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spend_limit_renewal', must be one of '%s'",
                $this->container['spend_limit_renewal'],
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
     * Gets spend_limit_type
     *
     * @return string|null
     */
    public function getSpendLimitType()
    {
        return $this->container['spend_limit_type'];
    }

    /**
     * Sets spend_limit_type
     *
     * @param string|null $spend_limit_type Whether your spend limit is capped or not
     *
     * @return self
     */
    public function setSpendLimitType($spend_limit_type)
    {
        if (is_null($spend_limit_type)) {
            throw new \InvalidArgumentException('non-nullable spend_limit_type cannot be null');
        }
        $allowedValues = $this->getSpendLimitTypeAllowableValues();
        if (!in_array($spend_limit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spend_limit_type', must be one of '%s'",
                    $spend_limit_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spend_limit_type'] = $spend_limit_type;

        return $this;
    }

    /**
     * Gets spend_limit_renewal
     *
     * @return string|null
     */
    public function getSpendLimitRenewal()
    {
        return $this->container['spend_limit_renewal'];
    }

    /**
     * Sets spend_limit_renewal
     *
     * @param string|null $spend_limit_renewal The pace of the spend limit renewal
     *
     * @return self
     */
    public function setSpendLimitRenewal($spend_limit_renewal)
    {
        if (is_null($spend_limit_renewal)) {
            throw new \InvalidArgumentException('non-nullable spend_limit_renewal cannot be null');
        }
        $allowedValues = $this->getSpendLimitRenewalAllowableValues();
        if (!in_array($spend_limit_renewal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spend_limit_renewal', must be one of '%s'",
                    $spend_limit_renewal,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spend_limit_renewal'] = $spend_limit_renewal;

        return $this;
    }

    /**
     * Gets spend_limit_amount
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal|null
     */
    public function getSpendLimitAmount()
    {
        return $this->container['spend_limit_amount'];
    }

    /**
     * Sets spend_limit_amount
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal|null $spend_limit_amount spend_limit_amount
     *
     * @return self
     */
    public function setSpendLimitAmount($spend_limit_amount)
    {
        if (is_null($spend_limit_amount)) {
            throw new \InvalidArgumentException('non-nullable spend_limit_amount cannot be null');
        }
        $this->container['spend_limit_amount'] = $spend_limit_amount;

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


