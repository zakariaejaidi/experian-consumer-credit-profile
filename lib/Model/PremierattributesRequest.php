<?php
/**
 * PremierattributesRequest
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
 * PremierattributesRequest Class Doc Comment
 *
 * @category Class
 * @description Credit Profile Request Body
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PremierattributesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'premierattributesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consumer_pii' => '\OpenAPI\Client\Model\PII',
        'requestor' => '\OpenAPI\Client\Model\Requestor',
        'permissible_purpose' => '\OpenAPI\Client\Model\PermissiblePurpose',
        'reseller_info' => '\OpenAPI\Client\Model\Reseller',
        'freeze_override' => '\OpenAPI\Client\Model\FreezeOverride',
        'vendor_data' => '\OpenAPI\Client\Model\VendorData',
        'add_ons' => '\OpenAPI\Client\Model\AddonsDaasPremier',
        'custom_options' => '\OpenAPI\Client\Model\CustomOptions',
        'solution_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'consumer_pii' => null,
        'requestor' => null,
        'permissible_purpose' => null,
        'reseller_info' => null,
        'freeze_override' => null,
        'vendor_data' => null,
        'add_ons' => null,
        'custom_options' => null,
        'solution_id' => null
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
        'consumer_pii' => 'consumerPii',
        'requestor' => 'requestor',
        'permissible_purpose' => 'permissiblePurpose',
        'reseller_info' => 'resellerInfo',
        'freeze_override' => 'freezeOverride',
        'vendor_data' => 'vendorData',
        'add_ons' => 'addOns',
        'custom_options' => 'customOptions',
        'solution_id' => 'solutionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumer_pii' => 'setConsumerPii',
        'requestor' => 'setRequestor',
        'permissible_purpose' => 'setPermissiblePurpose',
        'reseller_info' => 'setResellerInfo',
        'freeze_override' => 'setFreezeOverride',
        'vendor_data' => 'setVendorData',
        'add_ons' => 'setAddOns',
        'custom_options' => 'setCustomOptions',
        'solution_id' => 'setSolutionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumer_pii' => 'getConsumerPii',
        'requestor' => 'getRequestor',
        'permissible_purpose' => 'getPermissiblePurpose',
        'reseller_info' => 'getResellerInfo',
        'freeze_override' => 'getFreezeOverride',
        'vendor_data' => 'getVendorData',
        'add_ons' => 'getAddOns',
        'custom_options' => 'getCustomOptions',
        'solution_id' => 'getSolutionId'
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
        $this->container['consumer_pii'] = isset($data['consumer_pii']) ? $data['consumer_pii'] : null;
        $this->container['requestor'] = isset($data['requestor']) ? $data['requestor'] : null;
        $this->container['permissible_purpose'] = isset($data['permissible_purpose']) ? $data['permissible_purpose'] : null;
        $this->container['reseller_info'] = isset($data['reseller_info']) ? $data['reseller_info'] : null;
        $this->container['freeze_override'] = isset($data['freeze_override']) ? $data['freeze_override'] : null;
        $this->container['vendor_data'] = isset($data['vendor_data']) ? $data['vendor_data'] : null;
        $this->container['add_ons'] = isset($data['add_ons']) ? $data['add_ons'] : null;
        $this->container['custom_options'] = isset($data['custom_options']) ? $data['custom_options'] : null;
        $this->container['solution_id'] = isset($data['solution_id']) ? $data['solution_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consumer_pii'] === null) {
            $invalidProperties[] = "'consumer_pii' can't be null";
        }
        if ($this->container['requestor'] === null) {
            $invalidProperties[] = "'requestor' can't be null";
        }
        if ($this->container['solution_id'] === null) {
            $invalidProperties[] = "'solution_id' can't be null";
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
     * Gets consumer_pii
     *
     * @return \OpenAPI\Client\Model\PII
     */
    public function getConsumerPii()
    {
        return $this->container['consumer_pii'];
    }

    /**
     * Sets consumer_pii
     *
     * @param \OpenAPI\Client\Model\PII $consumer_pii consumer_pii
     *
     * @return $this
     */
    public function setConsumerPii($consumer_pii)
    {
        $this->container['consumer_pii'] = $consumer_pii;

        return $this;
    }

    /**
     * Gets requestor
     *
     * @return \OpenAPI\Client\Model\Requestor
     */
    public function getRequestor()
    {
        return $this->container['requestor'];
    }

    /**
     * Sets requestor
     *
     * @param \OpenAPI\Client\Model\Requestor $requestor requestor
     *
     * @return $this
     */
    public function setRequestor($requestor)
    {
        $this->container['requestor'] = $requestor;

        return $this;
    }

    /**
     * Gets permissible_purpose
     *
     * @return \OpenAPI\Client\Model\PermissiblePurpose|null
     */
    public function getPermissiblePurpose()
    {
        return $this->container['permissible_purpose'];
    }

    /**
     * Sets permissible_purpose
     *
     * @param \OpenAPI\Client\Model\PermissiblePurpose|null $permissible_purpose permissible_purpose
     *
     * @return $this
     */
    public function setPermissiblePurpose($permissible_purpose)
    {
        $this->container['permissible_purpose'] = $permissible_purpose;

        return $this;
    }

    /**
     * Gets reseller_info
     *
     * @return \OpenAPI\Client\Model\Reseller|null
     */
    public function getResellerInfo()
    {
        return $this->container['reseller_info'];
    }

    /**
     * Sets reseller_info
     *
     * @param \OpenAPI\Client\Model\Reseller|null $reseller_info reseller_info
     *
     * @return $this
     */
    public function setResellerInfo($reseller_info)
    {
        $this->container['reseller_info'] = $reseller_info;

        return $this;
    }

    /**
     * Gets freeze_override
     *
     * @return \OpenAPI\Client\Model\FreezeOverride|null
     */
    public function getFreezeOverride()
    {
        return $this->container['freeze_override'];
    }

    /**
     * Sets freeze_override
     *
     * @param \OpenAPI\Client\Model\FreezeOverride|null $freeze_override freeze_override
     *
     * @return $this
     */
    public function setFreezeOverride($freeze_override)
    {
        $this->container['freeze_override'] = $freeze_override;

        return $this;
    }

    /**
     * Gets vendor_data
     *
     * @return \OpenAPI\Client\Model\VendorData|null
     */
    public function getVendorData()
    {
        return $this->container['vendor_data'];
    }

    /**
     * Sets vendor_data
     *
     * @param \OpenAPI\Client\Model\VendorData|null $vendor_data vendor_data
     *
     * @return $this
     */
    public function setVendorData($vendor_data)
    {
        $this->container['vendor_data'] = $vendor_data;

        return $this;
    }

    /**
     * Gets add_ons
     *
     * @return \OpenAPI\Client\Model\AddonsDaasPremier|null
     */
    public function getAddOns()
    {
        return $this->container['add_ons'];
    }

    /**
     * Sets add_ons
     *
     * @param \OpenAPI\Client\Model\AddonsDaasPremier|null $add_ons add_ons
     *
     * @return $this
     */
    public function setAddOns($add_ons)
    {
        $this->container['add_ons'] = $add_ons;

        return $this;
    }

    /**
     * Gets custom_options
     *
     * @return \OpenAPI\Client\Model\CustomOptions|null
     */
    public function getCustomOptions()
    {
        return $this->container['custom_options'];
    }

    /**
     * Sets custom_options
     *
     * @param \OpenAPI\Client\Model\CustomOptions|null $custom_options custom_options
     *
     * @return $this
     */
    public function setCustomOptions($custom_options)
    {
        $this->container['custom_options'] = $custom_options;

        return $this;
    }

    /**
     * Gets solution_id
     *
     * @return string
     */
    public function getSolutionId()
    {
        return $this->container['solution_id'];
    }

    /**
     * Sets solution_id
     *
     * @param string $solution_id SolutionId provided by Experian during the setup process used for the RR- keyword.  Tells DaaS system how to route to the correct processing environment, which will process your request.
     *
     * @return $this
     */
    public function setSolutionId($solution_id)
    {
        $this->container['solution_id'] = $solution_id;

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


