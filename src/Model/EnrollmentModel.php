<?php
/**
 * EnrollmentModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\OneRoster
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneRoster
 *
 * OneRoster v1.1 API. For details on the OneRoster Version 1.1 Specification, <a href=\"https://www.imsglobal.org/oneroster-v11-final-specification\">click here</a>. The <a href=\"https://developer.blackbaud.com/skyapi/bbem/oneroster/authorization\">Authorization</a> page provides steps to setup and test these endpoints.
 *
 * The version of the OpenAPI document: v1p1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SKY\OneRoster\Model;

use ArrayAccess;
use SKY\OneRoster\ObjectSerializer;

/**
 * EnrollmentModel Class Doc Comment
 *
 * @category Class
 * @package  SKY\OneRoster
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnrollmentModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnrollmentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => '\SKY\OneRoster\Model\GuidRefModel',
        'class' => '\SKY\OneRoster\Model\GuidRefModel',
        'school' => '\SKY\OneRoster\Model\GuidRefModel',
        'role' => 'string',
        'primary' => 'bool',
        'beginDate' => 'string',
        'endDate' => 'string',
        'sourcedId' => 'string',
        'status' => 'string',
        'dateLastModified' => '\DateTime',
        'metadata' => 'array<string,string>',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user' => null,
        'class' => null,
        'school' => null,
        'role' => null,
        'primary' => null,
        'beginDate' => null,
        'endDate' => null,
        'sourcedId' => null,
        'status' => null,
        'dateLastModified' => 'date-time',
        'metadata' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user' => false,
        'class' => false,
        'school' => false,
        'role' => true,
        'primary' => true,
        'beginDate' => true,
        'endDate' => true,
        'sourcedId' => true,
        'status' => true,
        'dateLastModified' => true,
        'metadata' => true,
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
        'user' => 'user',
        'class' => 'class',
        'school' => 'school',
        'role' => 'role',
        'primary' => 'primary',
        'beginDate' => 'beginDate',
        'endDate' => 'endDate',
        'sourcedId' => 'sourcedId',
        'status' => 'status',
        'dateLastModified' => 'dateLastModified',
        'metadata' => 'metadata',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'class' => 'setClass',
        'school' => 'setSchool',
        'role' => 'setRole',
        'primary' => 'setPrimary',
        'beginDate' => 'setBeginDate',
        'endDate' => 'setEndDate',
        'sourcedId' => 'setSourcedId',
        'status' => 'setStatus',
        'dateLastModified' => 'setDateLastModified',
        'metadata' => 'setMetadata',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'class' => 'getClass',
        'school' => 'getSchool',
        'role' => 'getRole',
        'primary' => 'getPrimary',
        'beginDate' => 'getBeginDate',
        'endDate' => 'getEndDate',
        'sourcedId' => 'getSourcedId',
        'status' => 'getStatus',
        'dateLastModified' => 'getDateLastModified',
        'metadata' => 'getMetadata',
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
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('class', $data ?? [], null);
        $this->setIfExists('school', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('beginDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('sourcedId', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('dateLastModified', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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
     * Gets user
     *
     * @return \SKY\OneRoster\Model\GuidRefModel|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \SKY\OneRoster\Model\GuidRefModel|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets class
     *
     * @return \SKY\OneRoster\Model\GuidRefModel|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param \SKY\OneRoster\Model\GuidRefModel|null $class class
     *
     * @return self
     */
    public function setClass($class)
    {
        if (is_null($class)) {
            throw new \InvalidArgumentException('non-nullable class cannot be null');
        }
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets school
     *
     * @return \SKY\OneRoster\Model\GuidRefModel|null
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param \SKY\OneRoster\Model\GuidRefModel|null $school school
     *
     * @return self
     */
    public function setSchool($school)
    {
        if (is_null($school)) {
            throw new \InvalidArgumentException('non-nullable school cannot be null');
        }
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            array_push($this->openAPINullablesSetToNull, 'role');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('role', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary primary
     *
     * @return self
     */
    public function setPrimary($primary)
    {
        if (is_null($primary)) {
            array_push($this->openAPINullablesSetToNull, 'primary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return string|null
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param string|null $beginDate beginDate
     *
     * @return self
     */
    public function setBeginDate($beginDate)
    {
        if (is_null($beginDate)) {
            array_push($this->openAPINullablesSetToNull, 'beginDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beginDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate endDate
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            array_push($this->openAPINullablesSetToNull, 'endDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets sourcedId
     *
     * @return string|null
     */
    public function getSourcedId()
    {
        return $this->container['sourcedId'];
    }

    /**
     * Sets sourcedId
     *
     * @param string|null $sourcedId sourcedId
     *
     * @return self
     */
    public function setSourcedId($sourcedId)
    {
        if (is_null($sourcedId)) {
            array_push($this->openAPINullablesSetToNull, 'sourcedId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sourcedId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sourcedId'] = $sourcedId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets dateLastModified
     *
     * @return \DateTime|null
     */
    public function getDateLastModified()
    {
        return $this->container['dateLastModified'];
    }

    /**
     * Sets dateLastModified
     *
     * @param \DateTime|null $dateLastModified dateLastModified
     *
     * @return self
     */
    public function setDateLastModified($dateLastModified)
    {
        if (is_null($dateLastModified)) {
            array_push($this->openAPINullablesSetToNull, 'dateLastModified');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dateLastModified', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dateLastModified'] = $dateLastModified;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

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
