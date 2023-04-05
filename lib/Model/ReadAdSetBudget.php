<?php
/**
 * ReadAdSetBudget
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
 * ReadAdSetBudget Class Doc Comment
 *
 * @category Class
 * @description ad set budget read model
 * @package  criteo\api\marketingsolutions\v2023_01
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReadAdSetBudget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSetBudget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'budget_strategy' => 'string',
        'budget_renewal' => 'string',
        'budget_delivery_smoothing' => 'string',
        'budget_delivery_week' => 'string',
        'budget_amount' => '\criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'budget_strategy' => null,
        'budget_renewal' => null,
        'budget_delivery_smoothing' => null,
        'budget_delivery_week' => null,
        'budget_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'budget_strategy' => false,
		'budget_renewal' => false,
		'budget_delivery_smoothing' => false,
		'budget_delivery_week' => false,
		'budget_amount' => false
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
        'budget_strategy' => 'budgetStrategy',
        'budget_renewal' => 'budgetRenewal',
        'budget_delivery_smoothing' => 'budgetDeliverySmoothing',
        'budget_delivery_week' => 'budgetDeliveryWeek',
        'budget_amount' => 'budgetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budget_strategy' => 'setBudgetStrategy',
        'budget_renewal' => 'setBudgetRenewal',
        'budget_delivery_smoothing' => 'setBudgetDeliverySmoothing',
        'budget_delivery_week' => 'setBudgetDeliveryWeek',
        'budget_amount' => 'setBudgetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budget_strategy' => 'getBudgetStrategy',
        'budget_renewal' => 'getBudgetRenewal',
        'budget_delivery_smoothing' => 'getBudgetDeliverySmoothing',
        'budget_delivery_week' => 'getBudgetDeliveryWeek',
        'budget_amount' => 'getBudgetAmount'
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

    public const BUDGET_STRATEGY_CAPPED = 'capped';
    public const BUDGET_STRATEGY_UNCAPPED = 'uncapped';
    public const BUDGET_RENEWAL_UNDEFINED = 'undefined';
    public const BUDGET_RENEWAL_DAILY = 'daily';
    public const BUDGET_RENEWAL_MONTHLY = 'monthly';
    public const BUDGET_RENEWAL_LIFETIME = 'lifetime';
    public const BUDGET_DELIVERY_SMOOTHING_ACCELERATED = 'accelerated';
    public const BUDGET_DELIVERY_SMOOTHING_STANDARD = 'standard';
    public const BUDGET_DELIVERY_WEEK_UNDEFINED = 'undefined';
    public const BUDGET_DELIVERY_WEEK_MONDAY_TO_SUNDAY = 'mondayToSunday';
    public const BUDGET_DELIVERY_WEEK_TUESDAY_TO_MONDAY = 'tuesdayToMonday';
    public const BUDGET_DELIVERY_WEEK_WEDNESDAY_TO_TUESDAY = 'wednesdayToTuesday';
    public const BUDGET_DELIVERY_WEEK_THURSDAY_TO_WEDNESDAY = 'thursdayToWednesday';
    public const BUDGET_DELIVERY_WEEK_FRIDAY_TO_THURSDAY = 'fridayToThursday';
    public const BUDGET_DELIVERY_WEEK_SATURDAY_TO_FRIDAY = 'saturdayToFriday';
    public const BUDGET_DELIVERY_WEEK_SUNDAY_TO_SATURDAY = 'sundayToSaturday';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetStrategyAllowableValues()
    {
        return [
            self::BUDGET_STRATEGY_CAPPED,
            self::BUDGET_STRATEGY_UNCAPPED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetRenewalAllowableValues()
    {
        return [
            self::BUDGET_RENEWAL_UNDEFINED,
            self::BUDGET_RENEWAL_DAILY,
            self::BUDGET_RENEWAL_MONTHLY,
            self::BUDGET_RENEWAL_LIFETIME,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetDeliverySmoothingAllowableValues()
    {
        return [
            self::BUDGET_DELIVERY_SMOOTHING_ACCELERATED,
            self::BUDGET_DELIVERY_SMOOTHING_STANDARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetDeliveryWeekAllowableValues()
    {
        return [
            self::BUDGET_DELIVERY_WEEK_UNDEFINED,
            self::BUDGET_DELIVERY_WEEK_MONDAY_TO_SUNDAY,
            self::BUDGET_DELIVERY_WEEK_TUESDAY_TO_MONDAY,
            self::BUDGET_DELIVERY_WEEK_WEDNESDAY_TO_TUESDAY,
            self::BUDGET_DELIVERY_WEEK_THURSDAY_TO_WEDNESDAY,
            self::BUDGET_DELIVERY_WEEK_FRIDAY_TO_THURSDAY,
            self::BUDGET_DELIVERY_WEEK_SATURDAY_TO_FRIDAY,
            self::BUDGET_DELIVERY_WEEK_SUNDAY_TO_SATURDAY,
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
        $this->setIfExists('budget_strategy', $data ?? [], null);
        $this->setIfExists('budget_renewal', $data ?? [], null);
        $this->setIfExists('budget_delivery_smoothing', $data ?? [], null);
        $this->setIfExists('budget_delivery_week', $data ?? [], null);
        $this->setIfExists('budget_amount', $data ?? [], null);
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

        $allowedValues = $this->getBudgetStrategyAllowableValues();
        if (!is_null($this->container['budget_strategy']) && !in_array($this->container['budget_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'budget_strategy', must be one of '%s'",
                $this->container['budget_strategy'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBudgetRenewalAllowableValues();
        if (!is_null($this->container['budget_renewal']) && !in_array($this->container['budget_renewal'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'budget_renewal', must be one of '%s'",
                $this->container['budget_renewal'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBudgetDeliverySmoothingAllowableValues();
        if (!is_null($this->container['budget_delivery_smoothing']) && !in_array($this->container['budget_delivery_smoothing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'budget_delivery_smoothing', must be one of '%s'",
                $this->container['budget_delivery_smoothing'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBudgetDeliveryWeekAllowableValues();
        if (!is_null($this->container['budget_delivery_week']) && !in_array($this->container['budget_delivery_week'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'budget_delivery_week', must be one of '%s'",
                $this->container['budget_delivery_week'],
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
     * Gets budget_strategy
     *
     * @return string|null
     */
    public function getBudgetStrategy()
    {
        return $this->container['budget_strategy'];
    }

    /**
     * Sets budget_strategy
     *
     * @param string|null $budget_strategy Whether your budget is capped or not
     *
     * @return self
     */
    public function setBudgetStrategy($budget_strategy)
    {
        if (is_null($budget_strategy)) {
            throw new \InvalidArgumentException('non-nullable budget_strategy cannot be null');
        }
        $allowedValues = $this->getBudgetStrategyAllowableValues();
        if (!in_array($budget_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'budget_strategy', must be one of '%s'",
                    $budget_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_strategy'] = $budget_strategy;

        return $this;
    }

    /**
     * Gets budget_renewal
     *
     * @return string|null
     */
    public function getBudgetRenewal()
    {
        return $this->container['budget_renewal'];
    }

    /**
     * Sets budget_renewal
     *
     * @param string|null $budget_renewal The pace of the budget renewal
     *
     * @return self
     */
    public function setBudgetRenewal($budget_renewal)
    {
        if (is_null($budget_renewal)) {
            throw new \InvalidArgumentException('non-nullable budget_renewal cannot be null');
        }
        $allowedValues = $this->getBudgetRenewalAllowableValues();
        if (!in_array($budget_renewal, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'budget_renewal', must be one of '%s'",
                    $budget_renewal,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_renewal'] = $budget_renewal;

        return $this;
    }

    /**
     * Gets budget_delivery_smoothing
     *
     * @return string|null
     */
    public function getBudgetDeliverySmoothing()
    {
        return $this->container['budget_delivery_smoothing'];
    }

    /**
     * Sets budget_delivery_smoothing
     *
     * @param string|null $budget_delivery_smoothing The pace at which the budget can be spent
     *
     * @return self
     */
    public function setBudgetDeliverySmoothing($budget_delivery_smoothing)
    {
        if (is_null($budget_delivery_smoothing)) {
            throw new \InvalidArgumentException('non-nullable budget_delivery_smoothing cannot be null');
        }
        $allowedValues = $this->getBudgetDeliverySmoothingAllowableValues();
        if (!in_array($budget_delivery_smoothing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'budget_delivery_smoothing', must be one of '%s'",
                    $budget_delivery_smoothing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_delivery_smoothing'] = $budget_delivery_smoothing;

        return $this;
    }

    /**
     * Gets budget_delivery_week
     *
     * @return string|null
     */
    public function getBudgetDeliveryWeek()
    {
        return $this->container['budget_delivery_week'];
    }

    /**
     * Sets budget_delivery_week
     *
     * @param string|null $budget_delivery_week The delivery week for the budget
     *
     * @return self
     */
    public function setBudgetDeliveryWeek($budget_delivery_week)
    {
        if (is_null($budget_delivery_week)) {
            throw new \InvalidArgumentException('non-nullable budget_delivery_week cannot be null');
        }
        $allowedValues = $this->getBudgetDeliveryWeekAllowableValues();
        if (!in_array($budget_delivery_week, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'budget_delivery_week', must be one of '%s'",
                    $budget_delivery_week,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_delivery_week'] = $budget_delivery_week;

        return $this;
    }

    /**
     * Gets budget_amount
     *
     * @return \criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal|null
     */
    public function getBudgetAmount()
    {
        return $this->container['budget_amount'];
    }

    /**
     * Sets budget_amount
     *
     * @param \criteo\api\marketingsolutions\v2023_01\Model\NillableDecimal|null $budget_amount budget_amount
     *
     * @return self
     */
    public function setBudgetAmount($budget_amount)
    {
        if (is_null($budget_amount)) {
            throw new \InvalidArgumentException('non-nullable budget_amount cannot be null');
        }
        $this->container['budget_amount'] = $budget_amount;

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


