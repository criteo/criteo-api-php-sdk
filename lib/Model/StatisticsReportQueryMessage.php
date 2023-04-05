<?php
/**
 * StatisticsReportQueryMessage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\marketingsolutions\v2022_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo publicly exposed API
 *
 * The version of the OpenAPI document: 2022-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\marketingsolutions\v2022_04\Model;

use \ArrayAccess;
use \criteo\api\marketingsolutions\v2022_04\ObjectSerializer;

/**
 * StatisticsReportQueryMessage Class Doc Comment
 *
 * @category Class
 * @description This is the message defining the query for Adset report
 * @package  criteo\api\marketingsolutions\v2022_04
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticsReportQueryMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatisticsReportQueryMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertiser_ids' => 'string',
        'ad_set_ids' => 'string[]',
        'ad_set_names' => 'string[]',
        'ad_set_status' => 'string[]',
        'dimensions' => 'string[]',
        'metrics' => 'string[]',
        'currency' => 'string',
        'format' => 'string',
        'timezone' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advertiser_ids' => null,
        'ad_set_ids' => null,
        'ad_set_names' => null,
        'ad_set_status' => null,
        'dimensions' => null,
        'metrics' => null,
        'currency' => null,
        'format' => null,
        'timezone' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'advertiser_ids' => false,
		'ad_set_ids' => false,
		'ad_set_names' => false,
		'ad_set_status' => false,
		'dimensions' => false,
		'metrics' => false,
		'currency' => false,
		'format' => false,
		'timezone' => false,
		'start_date' => false,
		'end_date' => false
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
        'advertiser_ids' => 'advertiserIds',
        'ad_set_ids' => 'adSetIds',
        'ad_set_names' => 'adSetNames',
        'ad_set_status' => 'adSetStatus',
        'dimensions' => 'dimensions',
        'metrics' => 'metrics',
        'currency' => 'currency',
        'format' => 'format',
        'timezone' => 'timezone',
        'start_date' => 'startDate',
        'end_date' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiser_ids' => 'setAdvertiserIds',
        'ad_set_ids' => 'setAdSetIds',
        'ad_set_names' => 'setAdSetNames',
        'ad_set_status' => 'setAdSetStatus',
        'dimensions' => 'setDimensions',
        'metrics' => 'setMetrics',
        'currency' => 'setCurrency',
        'format' => 'setFormat',
        'timezone' => 'setTimezone',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiser_ids' => 'getAdvertiserIds',
        'ad_set_ids' => 'getAdSetIds',
        'ad_set_names' => 'getAdSetNames',
        'ad_set_status' => 'getAdSetStatus',
        'dimensions' => 'getDimensions',
        'metrics' => 'getMetrics',
        'currency' => 'getCurrency',
        'format' => 'getFormat',
        'timezone' => 'getTimezone',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate'
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

    public const DIMENSIONS_ADSET_ID = 'AdsetId';
    public const DIMENSIONS_ADSET = 'Adset';
    public const DIMENSIONS_ADVERTISER_ID = 'AdvertiserId';
    public const DIMENSIONS_ADVERTISER = 'Advertiser';
    public const DIMENSIONS_CATEGORY_ID = 'CategoryId';
    public const DIMENSIONS_CATEGORY = 'Category';
    public const DIMENSIONS_HOUR = 'Hour';
    public const DIMENSIONS_DAY = 'Day';
    public const DIMENSIONS_WEEK = 'Week';
    public const DIMENSIONS_MONTH = 'Month';
    public const DIMENSIONS_YEAR = 'Year';
    public const DIMENSIONS_OS = 'Os';
    public const DIMENSIONS_DEVICE = 'Device';
    public const DIMENSIONS_CAMPAIGN_ID = 'CampaignId';
    public const DIMENSIONS_CAMPAIGN = 'Campaign';
    public const DIMENSIONS_AD_ID = 'AdId';
    public const DIMENSIONS_AD = 'Ad';
    public const DIMENSIONS_COUPON_ID = 'CouponId';
    public const DIMENSIONS_COUPON = 'Coupon';
    public const DIMENSIONS_MARKETING_OBJECTIVE_ID = 'MarketingObjectiveId';
    public const DIMENSIONS_MARKETING_OBJECTIVE = 'MarketingObjective';
    public const DIMENSIONS_CHANNEL_ID = 'ChannelId';
    public const DIMENSIONS_CHANNEL = 'Channel';
    public const DIMENSIONS_GOAL = 'Goal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionsAllowableValues()
    {
        return [
            self::DIMENSIONS_ADSET_ID,
            self::DIMENSIONS_ADSET,
            self::DIMENSIONS_ADVERTISER_ID,
            self::DIMENSIONS_ADVERTISER,
            self::DIMENSIONS_CATEGORY_ID,
            self::DIMENSIONS_CATEGORY,
            self::DIMENSIONS_HOUR,
            self::DIMENSIONS_DAY,
            self::DIMENSIONS_WEEK,
            self::DIMENSIONS_MONTH,
            self::DIMENSIONS_YEAR,
            self::DIMENSIONS_OS,
            self::DIMENSIONS_DEVICE,
            self::DIMENSIONS_CAMPAIGN_ID,
            self::DIMENSIONS_CAMPAIGN,
            self::DIMENSIONS_AD_ID,
            self::DIMENSIONS_AD,
            self::DIMENSIONS_COUPON_ID,
            self::DIMENSIONS_COUPON,
            self::DIMENSIONS_MARKETING_OBJECTIVE_ID,
            self::DIMENSIONS_MARKETING_OBJECTIVE,
            self::DIMENSIONS_CHANNEL_ID,
            self::DIMENSIONS_CHANNEL,
            self::DIMENSIONS_GOAL,
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
        $this->setIfExists('advertiser_ids', $data ?? [], null);
        $this->setIfExists('ad_set_ids', $data ?? [], null);
        $this->setIfExists('ad_set_names', $data ?? [], null);
        $this->setIfExists('ad_set_status', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('metrics', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], 'UTC');
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
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

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['metrics'] === null) {
            $invalidProperties[] = "'metrics' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
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
     * Gets advertiser_ids
     *
     * @return string|null
     */
    public function getAdvertiserIds()
    {
        return $this->container['advertiser_ids'];
    }

    /**
     * Sets advertiser_ids
     *
     * @param string|null $advertiser_ids The comma-separated list of advertiser ids. If empty, all the advertisers in the portfolio will be used
     *
     * @return self
     */
    public function setAdvertiserIds($advertiser_ids)
    {
        if (is_null($advertiser_ids)) {
            throw new \InvalidArgumentException('non-nullable advertiser_ids cannot be null');
        }
        $this->container['advertiser_ids'] = $advertiser_ids;

        return $this;
    }

    /**
     * Gets ad_set_ids
     *
     * @return string[]|null
     */
    public function getAdSetIds()
    {
        return $this->container['ad_set_ids'];
    }

    /**
     * Sets ad_set_ids
     *
     * @param string[]|null $ad_set_ids list of adSets ids. If empty, all the adSets will be fetched
     *
     * @return self
     */
    public function setAdSetIds($ad_set_ids)
    {
        if (is_null($ad_set_ids)) {
            throw new \InvalidArgumentException('non-nullable ad_set_ids cannot be null');
        }


        $this->container['ad_set_ids'] = $ad_set_ids;

        return $this;
    }

    /**
     * Gets ad_set_names
     *
     * @return string[]|null
     */
    public function getAdSetNames()
    {
        return $this->container['ad_set_names'];
    }

    /**
     * Sets ad_set_names
     *
     * @param string[]|null $ad_set_names list of adSets names. If empty, all the adSets will be fetched
     *
     * @return self
     */
    public function setAdSetNames($ad_set_names)
    {
        if (is_null($ad_set_names)) {
            throw new \InvalidArgumentException('non-nullable ad_set_names cannot be null');
        }


        $this->container['ad_set_names'] = $ad_set_names;

        return $this;
    }

    /**
     * Gets ad_set_status
     *
     * @return string[]|null
     */
    public function getAdSetStatus()
    {
        return $this->container['ad_set_status'];
    }

    /**
     * Sets ad_set_status
     *
     * @param string[]|null $ad_set_status list of adSets status. If empty, all the adSets will be fetched
     *
     * @return self
     */
    public function setAdSetStatus($ad_set_status)
    {
        if (is_null($ad_set_status)) {
            throw new \InvalidArgumentException('non-nullable ad_set_status cannot be null');
        }


        $this->container['ad_set_status'] = $ad_set_status;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return string[]
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param string[] $dimensions The dimensions for the report.
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }
        $allowedValues = $this->getDimensionsAllowableValues();
        if (array_diff($dimensions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dimensions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return string[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param string[] $metrics The list of metrics to report.
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        if (is_null($metrics)) {
            throw new \InvalidArgumentException('non-nullable metrics cannot be null');
        }


        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency used for the report. ISO 4217 code (three-letter capitals).
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

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
     * @param string $format The file format of the generated report: csv, xml, excel or json.
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The timezone used for the report. Timezone Database format (Tz).
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
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
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

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


