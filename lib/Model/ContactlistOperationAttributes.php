<?php
/**
 * ContactlistOperationAttributes
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
 * ContactlistOperationAttributes Class Doc Comment
 *
 * @category Class
 * @description the contactlist operation attributes
 * @package  criteo\api\marketingsolutions\v2024_07
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContactlistOperationAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactlistOperation_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_list_id' => 'int',
        'operation' => 'string',
        'request_date' => '\DateTime',
        'identifier_type' => 'string',
        'nb_valid_identifiers' => 'int',
        'nb_invalid_identifiers' => 'int',
        'sample_invalid_identifiers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_list_id' => null,
        'operation' => null,
        'request_date' => 'date-time',
        'identifier_type' => null,
        'nb_valid_identifiers' => null,
        'nb_invalid_identifiers' => null,
        'sample_invalid_identifiers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact_list_id' => true,
		'operation' => false,
		'request_date' => true,
		'identifier_type' => true,
		'nb_valid_identifiers' => true,
		'nb_invalid_identifiers' => true,
		'sample_invalid_identifiers' => true
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
        'contact_list_id' => 'contactListId',
        'operation' => 'operation',
        'request_date' => 'requestDate',
        'identifier_type' => 'identifierType',
        'nb_valid_identifiers' => 'nbValidIdentifiers',
        'nb_invalid_identifiers' => 'nbInvalidIdentifiers',
        'sample_invalid_identifiers' => 'sampleInvalidIdentifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_list_id' => 'setContactListId',
        'operation' => 'setOperation',
        'request_date' => 'setRequestDate',
        'identifier_type' => 'setIdentifierType',
        'nb_valid_identifiers' => 'setNbValidIdentifiers',
        'nb_invalid_identifiers' => 'setNbInvalidIdentifiers',
        'sample_invalid_identifiers' => 'setSampleInvalidIdentifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_list_id' => 'getContactListId',
        'operation' => 'getOperation',
        'request_date' => 'getRequestDate',
        'identifier_type' => 'getIdentifierType',
        'nb_valid_identifiers' => 'getNbValidIdentifiers',
        'nb_invalid_identifiers' => 'getNbInvalidIdentifiers',
        'sample_invalid_identifiers' => 'getSampleInvalidIdentifiers'
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
        $this->setIfExists('contact_list_id', $data ?? [], null);
        $this->setIfExists('operation', $data ?? [], null);
        $this->setIfExists('request_date', $data ?? [], null);
        $this->setIfExists('identifier_type', $data ?? [], null);
        $this->setIfExists('nb_valid_identifiers', $data ?? [], null);
        $this->setIfExists('nb_invalid_identifiers', $data ?? [], null);
        $this->setIfExists('sample_invalid_identifiers', $data ?? [], null);
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

        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
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
     * Gets contact_list_id
     *
     * @return int|null
     */
    public function getContactListId()
    {
        return $this->container['contact_list_id'];
    }

    /**
     * Sets contact_list_id
     *
     * @param int|null $contact_list_id the affected user list id
     *
     * @return self
     */
    public function setContactListId($contact_list_id)
    {
        if (is_null($contact_list_id)) {
            array_push($this->openAPINullablesSetToNull, 'contact_list_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact_list_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact_list_id'] = $contact_list_id;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation The action recorded
     *
     * @return self
     */
    public function setOperation($operation)
    {
        if (is_null($operation)) {
            throw new \InvalidArgumentException('non-nullable operation cannot be null');
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return \DateTime|null
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param \DateTime|null $request_date When the action was recorded
     *
     * @return self
     */
    public function setRequestDate($request_date)
    {
        if (is_null($request_date)) {
            array_push($this->openAPINullablesSetToNull, 'request_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('request_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets identifier_type
     *
     * @return string|null
     */
    public function getIdentifierType()
    {
        return $this->container['identifier_type'];
    }

    /**
     * Sets identifier_type
     *
     * @param string|null $identifier_type The schema specified for of the identifiers
     *
     * @return self
     */
    public function setIdentifierType($identifier_type)
    {
        if (is_null($identifier_type)) {
            array_push($this->openAPINullablesSetToNull, 'identifier_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identifier_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['identifier_type'] = $identifier_type;

        return $this;
    }

    /**
     * Gets nb_valid_identifiers
     *
     * @return int|null
     */
    public function getNbValidIdentifiers()
    {
        return $this->container['nb_valid_identifiers'];
    }

    /**
     * Sets nb_valid_identifiers
     *
     * @param int|null $nb_valid_identifiers How many identifiers were valid for the specified schema
     *
     * @return self
     */
    public function setNbValidIdentifiers($nb_valid_identifiers)
    {
        if (is_null($nb_valid_identifiers)) {
            array_push($this->openAPINullablesSetToNull, 'nb_valid_identifiers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_valid_identifiers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_valid_identifiers'] = $nb_valid_identifiers;

        return $this;
    }

    /**
     * Gets nb_invalid_identifiers
     *
     * @return int|null
     */
    public function getNbInvalidIdentifiers()
    {
        return $this->container['nb_invalid_identifiers'];
    }

    /**
     * Sets nb_invalid_identifiers
     *
     * @param int|null $nb_invalid_identifiers How many identifiers were invalid for the specified schema
     *
     * @return self
     */
    public function setNbInvalidIdentifiers($nb_invalid_identifiers)
    {
        if (is_null($nb_invalid_identifiers)) {
            array_push($this->openAPINullablesSetToNull, 'nb_invalid_identifiers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_invalid_identifiers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_invalid_identifiers'] = $nb_invalid_identifiers;

        return $this;
    }

    /**
     * Gets sample_invalid_identifiers
     *
     * @return string[]|null
     */
    public function getSampleInvalidIdentifiers()
    {
        return $this->container['sample_invalid_identifiers'];
    }

    /**
     * Sets sample_invalid_identifiers
     *
     * @param string[]|null $sample_invalid_identifiers A sample of invalid identifiers if there is some
     *
     * @return self
     */
    public function setSampleInvalidIdentifiers($sample_invalid_identifiers)
    {
        if (is_null($sample_invalid_identifiers)) {
            array_push($this->openAPINullablesSetToNull, 'sample_invalid_identifiers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sample_invalid_identifiers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sample_invalid_identifiers'] = $sample_invalid_identifiers;

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


