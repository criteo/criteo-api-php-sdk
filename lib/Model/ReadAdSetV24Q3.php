<?php
/**
 * ReadAdSetV24Q3
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
 * The version of the OpenAPI document: preview
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
 * ReadAdSetV24Q3 Class Doc Comment
 *
 * @category Class
 * @description ad set read model
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReadAdSetV24Q3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSetV24Q3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'advertiser_id' => 'string',
        'dataset_id' => 'string',
        'campaign_id' => 'string',
        'destination_environment' => 'string',
        'objective' => 'string',
        'schedule' => '\criteo\api\marketingsolutions\preview\Model\ReadAdSetScheduleV24Q3',
        'bidding' => '\criteo\api\marketingsolutions\preview\Model\ReadAdSetBiddingV24Q3',
        'targeting' => '\criteo\api\marketingsolutions\preview\Model\AdSetTargetingV24Q3',
        'budget' => '\criteo\api\marketingsolutions\preview\Model\ReadAdSetBudgetV24Q3',
        'media_type' => 'string',
        'video_channel' => 'string',
        'attribution_configuration' => '\criteo\api\marketingsolutions\preview\Model\ReadAdSetAttributionConfigurationV24Q3'
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
        'advertiser_id' => null,
        'dataset_id' => null,
        'campaign_id' => null,
        'destination_environment' => null,
        'objective' => null,
        'schedule' => null,
        'bidding' => null,
        'targeting' => null,
        'budget' => null,
        'media_type' => null,
        'video_channel' => null,
        'attribution_configuration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'advertiser_id' => true,
		'dataset_id' => true,
		'campaign_id' => true,
		'destination_environment' => true,
		'objective' => true,
		'schedule' => false,
		'bidding' => false,
		'targeting' => false,
		'budget' => false,
		'media_type' => true,
		'video_channel' => true,
		'attribution_configuration' => false
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
        'advertiser_id' => 'advertiserId',
        'dataset_id' => 'datasetId',
        'campaign_id' => 'campaignId',
        'destination_environment' => 'destinationEnvironment',
        'objective' => 'objective',
        'schedule' => 'schedule',
        'bidding' => 'bidding',
        'targeting' => 'targeting',
        'budget' => 'budget',
        'media_type' => 'mediaType',
        'video_channel' => 'videoChannel',
        'attribution_configuration' => 'attributionConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'advertiser_id' => 'setAdvertiserId',
        'dataset_id' => 'setDatasetId',
        'campaign_id' => 'setCampaignId',
        'destination_environment' => 'setDestinationEnvironment',
        'objective' => 'setObjective',
        'schedule' => 'setSchedule',
        'bidding' => 'setBidding',
        'targeting' => 'setTargeting',
        'budget' => 'setBudget',
        'media_type' => 'setMediaType',
        'video_channel' => 'setVideoChannel',
        'attribution_configuration' => 'setAttributionConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'advertiser_id' => 'getAdvertiserId',
        'dataset_id' => 'getDatasetId',
        'campaign_id' => 'getCampaignId',
        'destination_environment' => 'getDestinationEnvironment',
        'objective' => 'getObjective',
        'schedule' => 'getSchedule',
        'bidding' => 'getBidding',
        'targeting' => 'getTargeting',
        'budget' => 'getBudget',
        'media_type' => 'getMediaType',
        'video_channel' => 'getVideoChannel',
        'attribution_configuration' => 'getAttributionConfiguration'
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

    public const DESTINATION_ENVIRONMENT_UNDEFINED = 'undefined';
    public const DESTINATION_ENVIRONMENT_WEB = 'web';
    public const DESTINATION_ENVIRONMENT_APP = 'app';
    public const OBJECTIVE_CUSTOM_ACTION = 'customAction';
    public const OBJECTIVE_CLICKS = 'clicks';
    public const OBJECTIVE_CONVERSIONS = 'conversions';
    public const OBJECTIVE_DISPLAYS = 'displays';
    public const OBJECTIVE_APP_PROMOTION = 'appPromotion';
    public const OBJECTIVE_REVENUE = 'revenue';
    public const OBJECTIVE_STORE_CONVERSIONS = 'storeConversions';
    public const OBJECTIVE_VALUE = 'value';
    public const OBJECTIVE_REACH = 'reach';
    public const OBJECTIVE_VISITS = 'visits';
    public const OBJECTIVE_VIDEO_VIEWS = 'videoViews';
    public const MEDIA_TYPE_DISPLAY = 'display';
    public const MEDIA_TYPE_VIDEO = 'video';
    public const VIDEO_CHANNEL_OLV = 'olv';
    public const VIDEO_CHANNEL_CTV = 'ctv';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationEnvironmentAllowableValues()
    {
        return [
            self::DESTINATION_ENVIRONMENT_UNDEFINED,
            self::DESTINATION_ENVIRONMENT_WEB,
            self::DESTINATION_ENVIRONMENT_APP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectiveAllowableValues()
    {
        return [
            self::OBJECTIVE_CUSTOM_ACTION,
            self::OBJECTIVE_CLICKS,
            self::OBJECTIVE_CONVERSIONS,
            self::OBJECTIVE_DISPLAYS,
            self::OBJECTIVE_APP_PROMOTION,
            self::OBJECTIVE_REVENUE,
            self::OBJECTIVE_STORE_CONVERSIONS,
            self::OBJECTIVE_VALUE,
            self::OBJECTIVE_REACH,
            self::OBJECTIVE_VISITS,
            self::OBJECTIVE_VIDEO_VIEWS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_DISPLAY,
            self::MEDIA_TYPE_VIDEO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoChannelAllowableValues()
    {
        return [
            self::VIDEO_CHANNEL_OLV,
            self::VIDEO_CHANNEL_CTV,
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
        $this->setIfExists('advertiser_id', $data ?? [], null);
        $this->setIfExists('dataset_id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('destination_environment', $data ?? [], null);
        $this->setIfExists('objective', $data ?? [], null);
        $this->setIfExists('schedule', $data ?? [], null);
        $this->setIfExists('bidding', $data ?? [], null);
        $this->setIfExists('targeting', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('media_type', $data ?? [], null);
        $this->setIfExists('video_channel', $data ?? [], null);
        $this->setIfExists('attribution_configuration', $data ?? [], null);
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

        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($this->container['destination_environment']) && !in_array($this->container['destination_environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'destination_environment', must be one of '%s'",
                $this->container['destination_environment'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getObjectiveAllowableValues();
        if (!is_null($this->container['objective']) && !in_array($this->container['objective'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'objective', must be one of '%s'",
                $this->container['objective'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['media_type']) && !in_array($this->container['media_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'media_type', must be one of '%s'",
                $this->container['media_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVideoChannelAllowableValues();
        if (!is_null($this->container['video_channel']) && !in_array($this->container['video_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'video_channel', must be one of '%s'",
                $this->container['video_channel'],
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
     * @param string|null $name name
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
     * Gets advertiser_id
     *
     * @return string|null
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string|null $advertiser_id advertiser_id
     *
     * @return self
     */
    public function setAdvertiserId($advertiser_id)
    {
        if (is_null($advertiser_id)) {
            array_push($this->openAPINullablesSetToNull, 'advertiser_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('advertiser_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets dataset_id
     *
     * @return string|null
     */
    public function getDatasetId()
    {
        return $this->container['dataset_id'];
    }

    /**
     * Sets dataset_id
     *
     * @param string|null $dataset_id dataset_id
     *
     * @return self
     */
    public function setDatasetId($dataset_id)
    {
        if (is_null($dataset_id)) {
            array_push($this->openAPINullablesSetToNull, 'dataset_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dataset_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dataset_id'] = $dataset_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id campaign_id
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets destination_environment
     *
     * @return string|null
     */
    public function getDestinationEnvironment()
    {
        return $this->container['destination_environment'];
    }

    /**
     * Sets destination_environment
     *
     * @param string|null $destination_environment destination_environment
     *
     * @return self
     */
    public function setDestinationEnvironment($destination_environment)
    {
        if (is_null($destination_environment)) {
            array_push($this->openAPINullablesSetToNull, 'destination_environment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('destination_environment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($destination_environment) && !in_array($destination_environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'destination_environment', must be one of '%s'",
                    $destination_environment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_environment'] = $destination_environment;

        return $this;
    }

    /**
     * Gets objective
     *
     * @return string|null
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     *
     * @param string|null $objective objective
     *
     * @return self
     */
    public function setObjective($objective)
    {
        if (is_null($objective)) {
            array_push($this->openAPINullablesSetToNull, 'objective');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('objective', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getObjectiveAllowableValues();
        if (!is_null($objective) && !in_array($objective, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'objective', must be one of '%s'",
                    $objective,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objective'] = $objective;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ReadAdSetScheduleV24Q3|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ReadAdSetScheduleV24Q3|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        if (is_null($schedule)) {
            throw new \InvalidArgumentException('non-nullable schedule cannot be null');
        }
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ReadAdSetBiddingV24Q3|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ReadAdSetBiddingV24Q3|null $bidding bidding
     *
     * @return self
     */
    public function setBidding($bidding)
    {
        if (is_null($bidding)) {
            throw new \InvalidArgumentException('non-nullable bidding cannot be null');
        }
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \criteo\api\marketingsolutions\preview\Model\AdSetTargetingV24Q3|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \criteo\api\marketingsolutions\preview\Model\AdSetTargetingV24Q3|null $targeting targeting
     *
     * @return self
     */
    public function setTargeting($targeting)
    {
        if (is_null($targeting)) {
            throw new \InvalidArgumentException('non-nullable targeting cannot be null');
        }
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ReadAdSetBudgetV24Q3|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ReadAdSetBudgetV24Q3|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (is_null($budget)) {
            throw new \InvalidArgumentException('non-nullable budget cannot be null');
        }
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string|null $media_type media_type
     *
     * @return self
     */
    public function setMediaType($media_type)
    {
        if (is_null($media_type)) {
            array_push($this->openAPINullablesSetToNull, 'media_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('media_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($media_type) && !in_array($media_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'media_type', must be one of '%s'",
                    $media_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets video_channel
     *
     * @return string|null
     */
    public function getVideoChannel()
    {
        return $this->container['video_channel'];
    }

    /**
     * Sets video_channel
     *
     * @param string|null $video_channel video_channel
     *
     * @return self
     */
    public function setVideoChannel($video_channel)
    {
        if (is_null($video_channel)) {
            array_push($this->openAPINullablesSetToNull, 'video_channel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_channel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getVideoChannelAllowableValues();
        if (!is_null($video_channel) && !in_array($video_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'video_channel', must be one of '%s'",
                    $video_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['video_channel'] = $video_channel;

        return $this;
    }

    /**
     * Gets attribution_configuration
     *
     * @return \criteo\api\marketingsolutions\preview\Model\ReadAdSetAttributionConfigurationV24Q3|null
     */
    public function getAttributionConfiguration()
    {
        return $this->container['attribution_configuration'];
    }

    /**
     * Sets attribution_configuration
     *
     * @param \criteo\api\marketingsolutions\preview\Model\ReadAdSetAttributionConfigurationV24Q3|null $attribution_configuration attribution_configuration
     *
     * @return self
     */
    public function setAttributionConfiguration($attribution_configuration)
    {
        if (is_null($attribution_configuration)) {
            throw new \InvalidArgumentException('non-nullable attribution_configuration cannot be null');
        }
        $this->container['attribution_configuration'] = $attribution_configuration;

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


