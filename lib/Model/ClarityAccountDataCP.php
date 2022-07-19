<?php
/**
 * ClarityAccountDataCP
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Credit Profile
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: OpenAPI3.2.0.52
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ClarityAccountDataCP Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClarityAccountDataCP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'clarityAccountDataCP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clarity_account_id' => 'string',
        'clarity_location_id' => 'string',
        'clarity_control_file_name' => 'string',
        'clarity_control_file_version' => 'string',
        'clarity_attributes_control_file_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'clarity_account_id' => null,
        'clarity_location_id' => null,
        'clarity_control_file_name' => null,
        'clarity_control_file_version' => null,
        'clarity_attributes_control_file_name' => null
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
        'clarity_account_id' => 'clarityAccountId',
        'clarity_location_id' => 'clarityLocationId',
        'clarity_control_file_name' => 'clarityControlFileName',
        'clarity_control_file_version' => 'clarityControlFileVersion',
        'clarity_attributes_control_file_name' => 'clarityAttributesControlFileName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clarity_account_id' => 'setClarityAccountId',
        'clarity_location_id' => 'setClarityLocationId',
        'clarity_control_file_name' => 'setClarityControlFileName',
        'clarity_control_file_version' => 'setClarityControlFileVersion',
        'clarity_attributes_control_file_name' => 'setClarityAttributesControlFileName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clarity_account_id' => 'getClarityAccountId',
        'clarity_location_id' => 'getClarityLocationId',
        'clarity_control_file_name' => 'getClarityControlFileName',
        'clarity_control_file_version' => 'getClarityControlFileVersion',
        'clarity_attributes_control_file_name' => 'getClarityAttributesControlFileName'
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
        $this->container['clarity_account_id'] = isset($data['clarity_account_id']) ? $data['clarity_account_id'] : null;
        $this->container['clarity_location_id'] = isset($data['clarity_location_id']) ? $data['clarity_location_id'] : null;
        $this->container['clarity_control_file_name'] = isset($data['clarity_control_file_name']) ? $data['clarity_control_file_name'] : null;
        $this->container['clarity_control_file_version'] = isset($data['clarity_control_file_version']) ? $data['clarity_control_file_version'] : null;
        $this->container['clarity_attributes_control_file_name'] = isset($data['clarity_attributes_control_file_name']) ? $data['clarity_attributes_control_file_name'] : null;
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
     * Gets clarity_account_id
     *
     * @return string|null
     */
    public function getClarityAccountId()
    {
        return $this->container['clarity_account_id'];
    }

    /**
     * Sets clarity_account_id
     *
     * @param string|null $clarity_account_id Clarity Account ID
     *
     * @return $this
     */
    public function setClarityAccountId($clarity_account_id)
    {
        $this->container['clarity_account_id'] = $clarity_account_id;

        return $this;
    }

    /**
     * Gets clarity_location_id
     *
     * @return string|null
     */
    public function getClarityLocationId()
    {
        return $this->container['clarity_location_id'];
    }

    /**
     * Sets clarity_location_id
     *
     * @param string|null $clarity_location_id Clarity Location ID
     *
     * @return $this
     */
    public function setClarityLocationId($clarity_location_id)
    {
        $this->container['clarity_location_id'] = $clarity_location_id;

        return $this;
    }

    /**
     * Gets clarity_control_file_name
     *
     * @return string|null
     */
    public function getClarityControlFileName()
    {
        return $this->container['clarity_control_file_name'];
    }

    /**
     * Sets clarity_control_file_name
     *
     * @param string|null $clarity_control_file_name Clarity Control File Name
     *
     * @return $this
     */
    public function setClarityControlFileName($clarity_control_file_name)
    {
        $this->container['clarity_control_file_name'] = $clarity_control_file_name;

        return $this;
    }

    /**
     * Gets clarity_control_file_version
     *
     * @return string|null
     */
    public function getClarityControlFileVersion()
    {
        return $this->container['clarity_control_file_version'];
    }

    /**
     * Sets clarity_control_file_version
     *
     * @param string|null $clarity_control_file_version Clarity Control File Version
     *
     * @return $this
     */
    public function setClarityControlFileVersion($clarity_control_file_version)
    {
        $this->container['clarity_control_file_version'] = $clarity_control_file_version;

        return $this;
    }

    /**
     * Gets clarity_attributes_control_file_name
     *
     * @return string|null
     */
    public function getClarityAttributesControlFileName()
    {
        return $this->container['clarity_attributes_control_file_name'];
    }

    /**
     * Sets clarity_attributes_control_file_name
     *
     * @param string|null $clarity_attributes_control_file_name Clarity Control File Version for Clarity Attributes. Mandatory when clarityAttributes is 'Y'
     *
     * @return $this
     */
    public function setClarityAttributesControlFileName($clarity_attributes_control_file_name)
    {
        $this->container['clarity_attributes_control_file_name'] = $clarity_attributes_control_file_name;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}

