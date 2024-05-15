<?php
/**
 * OnSiteRecoRequest
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
 * OnSiteRecoRequest Class Doc Comment
 *
 * @category Class
 * @description Recommendation request parameters.
 * @package  criteo\api\marketingsolutions\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OnSiteRecoRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnSiteRecoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nb_requested_products' => 'int',
        'user_id' => 'string',
        'identity_type' => 'string',
        'ad_set_id' => 'int',
        'ad_id' => 'int',
        'partner_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nb_requested_products' => 'int32',
        'user_id' => null,
        'identity_type' => null,
        'ad_set_id' => 'int32',
        'ad_id' => 'int32',
        'partner_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nb_requested_products' => false,
		'user_id' => true,
		'identity_type' => true,
		'ad_set_id' => true,
		'ad_id' => true,
		'partner_id' => false
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
        'nb_requested_products' => 'nbRequestedProducts',
        'user_id' => 'userId',
        'identity_type' => 'identityType',
        'ad_set_id' => 'adSetId',
        'ad_id' => 'adId',
        'partner_id' => 'partnerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nb_requested_products' => 'setNbRequestedProducts',
        'user_id' => 'setUserId',
        'identity_type' => 'setIdentityType',
        'ad_set_id' => 'setAdSetId',
        'ad_id' => 'setAdId',
        'partner_id' => 'setPartnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nb_requested_products' => 'getNbRequestedProducts',
        'user_id' => 'getUserId',
        'identity_type' => 'getIdentityType',
        'ad_set_id' => 'getAdSetId',
        'ad_id' => 'getAdId',
        'partner_id' => 'getPartnerId'
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

    public const IDENTITY_TYPE_CTO_BUNDLE = 'CtoBundle';
    public const IDENTITY_TYPE_IDFA = 'Idfa';
    public const IDENTITY_TYPE_GAID = 'Gaid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdentityTypeAllowableValues()
    {
        return [
            self::IDENTITY_TYPE_CTO_BUNDLE,
            self::IDENTITY_TYPE_IDFA,
            self::IDENTITY_TYPE_GAID,
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
        $this->setIfExists('nb_requested_products', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('identity_type', $data ?? [], null);
        $this->setIfExists('ad_set_id', $data ?? [], null);
        $this->setIfExists('ad_id', $data ?? [], null);
        $this->setIfExists('partner_id', $data ?? [], null);
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

        if ($this->container['nb_requested_products'] === null) {
            $invalidProperties[] = "'nb_requested_products' can't be null";
        }
        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!is_null($this->container['identity_type']) && !in_array($this->container['identity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'identity_type', must be one of '%s'",
                $this->container['identity_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
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
     * Gets nb_requested_products
     *
     * @return int
     */
    public function getNbRequestedProducts()
    {
        return $this->container['nb_requested_products'];
    }

    /**
     * Sets nb_requested_products
     *
     * @param int $nb_requested_products Amount of products to recommend.
     *
     * @return self
     */
    public function setNbRequestedProducts($nb_requested_products)
    {
        if (is_null($nb_requested_products)) {
            throw new \InvalidArgumentException('non-nullable nb_requested_products cannot be null');
        }
        $this->container['nb_requested_products'] = $nb_requested_products;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id Used to retrieve user events from Criteo trackers.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets identity_type
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identity_type'];
    }

    /**
     * Sets identity_type
     *
     * @param string|null $identity_type Type of the user identifier (CtoBundle, Idfa, Gaid...)  Optional if its type is CtoBundle
     *
     * @return self
     */
    public function setIdentityType($identity_type)
    {
        if (is_null($identity_type)) {
            array_push($this->openAPINullablesSetToNull, 'identity_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identity_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIdentityTypeAllowableValues();
        if (!is_null($identity_type) && !in_array($identity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'identity_type', must be one of '%s'",
                    $identity_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['identity_type'] = $identity_type;

        return $this;
    }

    /**
     * Gets ad_set_id
     *
     * @return int|null
     */
    public function getAdSetId()
    {
        return $this->container['ad_set_id'];
    }

    /**
     * Sets ad_set_id
     *
     * @param int|null $ad_set_id Id of the AdSet. This field is optional and is resolved automatically for adsets previously configured.
     *
     * @return self
     */
    public function setAdSetId($ad_set_id)
    {
        if (is_null($ad_set_id)) {
            array_push($this->openAPINullablesSetToNull, 'ad_set_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_set_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ad_set_id'] = $ad_set_id;

        return $this;
    }

    /**
     * Gets ad_id
     *
     * @return int|null
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id
     *
     * @param int|null $ad_id Id of the Ad. This field is optional, it allows to setup Reco controls at Ad level.
     *
     * @return self
     */
    public function setAdId($ad_id)
    {
        if (is_null($ad_id)) {
            array_push($this->openAPINullablesSetToNull, 'ad_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int $partner_id Id of the partner.
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {
        if (is_null($partner_id)) {
            throw new \InvalidArgumentException('non-nullable partner_id cannot be null');
        }
        $this->container['partner_id'] = $partner_id;

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


