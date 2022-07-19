<?php
/**
 * EndTotalsErrorResp
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
 * EndTotalsErrorResp Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EndTotalsErrorResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'endTotalsErrorResp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_report_segments' => 'string',
        'positive_trade_items' => 'string',
        'non_evaluated_trade_items' => 'string',
        'negative_trade_items' => 'string',
        'non_evaluated_legal_items' => 'string',
        'negative_legal_items' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total_report_segments' => null,
        'positive_trade_items' => null,
        'non_evaluated_trade_items' => null,
        'negative_trade_items' => null,
        'non_evaluated_legal_items' => null,
        'negative_legal_items' => null
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
        'total_report_segments' => 'totalReportSegments',
        'positive_trade_items' => 'positiveTradeItems',
        'non_evaluated_trade_items' => 'nonEvaluatedTradeItems',
        'negative_trade_items' => 'negativeTradeItems',
        'non_evaluated_legal_items' => 'nonEvaluatedLegalItems',
        'negative_legal_items' => 'negativeLegalItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_report_segments' => 'setTotalReportSegments',
        'positive_trade_items' => 'setPositiveTradeItems',
        'non_evaluated_trade_items' => 'setNonEvaluatedTradeItems',
        'negative_trade_items' => 'setNegativeTradeItems',
        'non_evaluated_legal_items' => 'setNonEvaluatedLegalItems',
        'negative_legal_items' => 'setNegativeLegalItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_report_segments' => 'getTotalReportSegments',
        'positive_trade_items' => 'getPositiveTradeItems',
        'non_evaluated_trade_items' => 'getNonEvaluatedTradeItems',
        'negative_trade_items' => 'getNegativeTradeItems',
        'non_evaluated_legal_items' => 'getNonEvaluatedLegalItems',
        'negative_legal_items' => 'getNegativeLegalItems'
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
        $this->container['total_report_segments'] = isset($data['total_report_segments']) ? $data['total_report_segments'] : null;
        $this->container['positive_trade_items'] = isset($data['positive_trade_items']) ? $data['positive_trade_items'] : null;
        $this->container['non_evaluated_trade_items'] = isset($data['non_evaluated_trade_items']) ? $data['non_evaluated_trade_items'] : null;
        $this->container['negative_trade_items'] = isset($data['negative_trade_items']) ? $data['negative_trade_items'] : null;
        $this->container['non_evaluated_legal_items'] = isset($data['non_evaluated_legal_items']) ? $data['non_evaluated_legal_items'] : null;
        $this->container['negative_legal_items'] = isset($data['negative_legal_items']) ? $data['negative_legal_items'] : null;
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
     * Gets total_report_segments
     *
     * @return string|null
     */
    public function getTotalReportSegments()
    {
        return $this->container['total_report_segments'];
    }

    /**
     * Sets total_report_segments
     *
     * @param string|null $total_report_segments Number of report segments.
     *
     * @return $this
     */
    public function setTotalReportSegments($total_report_segments)
    {
        $this->container['total_report_segments'] = $total_report_segments;

        return $this;
    }

    /**
     * Gets positive_trade_items
     *
     * @return string|null
     */
    public function getPositiveTradeItems()
    {
        return $this->container['positive_trade_items'];
    }

    /**
     * Sets positive_trade_items
     *
     * @param string|null $positive_trade_items Number of positive trade segments.
     *
     * @return $this
     */
    public function setPositiveTradeItems($positive_trade_items)
    {
        $this->container['positive_trade_items'] = $positive_trade_items;

        return $this;
    }

    /**
     * Gets non_evaluated_trade_items
     *
     * @return string|null
     */
    public function getNonEvaluatedTradeItems()
    {
        return $this->container['non_evaluated_trade_items'];
    }

    /**
     * Sets non_evaluated_trade_items
     *
     * @param string|null $non_evaluated_trade_items Number of non-evaluated trade items.
     *
     * @return $this
     */
    public function setNonEvaluatedTradeItems($non_evaluated_trade_items)
    {
        $this->container['non_evaluated_trade_items'] = $non_evaluated_trade_items;

        return $this;
    }

    /**
     * Gets negative_trade_items
     *
     * @return string|null
     */
    public function getNegativeTradeItems()
    {
        return $this->container['negative_trade_items'];
    }

    /**
     * Sets negative_trade_items
     *
     * @param string|null $negative_trade_items Number of negative trade items.
     *
     * @return $this
     */
    public function setNegativeTradeItems($negative_trade_items)
    {
        $this->container['negative_trade_items'] = $negative_trade_items;

        return $this;
    }

    /**
     * Gets non_evaluated_legal_items
     *
     * @return string|null
     */
    public function getNonEvaluatedLegalItems()
    {
        return $this->container['non_evaluated_legal_items'];
    }

    /**
     * Sets non_evaluated_legal_items
     *
     * @param string|null $non_evaluated_legal_items Number of non-evaluated legal items.
     *
     * @return $this
     */
    public function setNonEvaluatedLegalItems($non_evaluated_legal_items)
    {
        $this->container['non_evaluated_legal_items'] = $non_evaluated_legal_items;

        return $this;
    }

    /**
     * Gets negative_legal_items
     *
     * @return string|null
     */
    public function getNegativeLegalItems()
    {
        return $this->container['negative_legal_items'];
    }

    /**
     * Sets negative_legal_items
     *
     * @param string|null $negative_legal_items Number of negative legal items.
     *
     * @return $this
     */
    public function setNegativeLegalItems($negative_legal_items)
    {
        $this->container['negative_legal_items'] = $negative_legal_items;

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

