<?php
/**
 * TecAddons
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
 * TecAddons Class Doc Comment
 *
 * @category Class
 * @description Add on products that can be requested. Each add on is billable. These are optional parameters and can be omitted if not needed.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TecAddons implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TecAddons';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'direct_check' => 'string',
        'demographics' => 'string',
        'clarity_early_risk_score' => 'string',
        'clarity_data' => '\OpenAPI\Client\Model\ClarityAccountData',
        'renter_risk_score' => 'string',
        'rent_bureau_data' => '\OpenAPI\Client\Model\RentBureauAccountData',
        'risk_models' => '\OpenAPI\Client\Model\RiskModel',
        'summaries' => '\OpenAPI\Client\Model\AddonsSummaries',
        'fraud_shield' => 'string',
        'mla' => 'string',
        'ofacmsg' => 'string',
        'consumer_ident_check' => '\OpenAPI\Client\Model\ConsumerIdentifierCheckOptions',
        'joint' => 'string',
        'payment_history84' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'direct_check' => null,
        'demographics' => null,
        'clarity_early_risk_score' => null,
        'clarity_data' => null,
        'renter_risk_score' => null,
        'rent_bureau_data' => null,
        'risk_models' => null,
        'summaries' => null,
        'fraud_shield' => null,
        'mla' => null,
        'ofacmsg' => null,
        'consumer_ident_check' => null,
        'joint' => null,
        'payment_history84' => null
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
        'direct_check' => 'directCheck',
        'demographics' => 'demographics',
        'clarity_early_risk_score' => 'clarityEarlyRiskScore',
        'clarity_data' => 'clarityData',
        'renter_risk_score' => 'renterRiskScore',
        'rent_bureau_data' => 'rentBureauData',
        'risk_models' => 'riskModels',
        'summaries' => 'summaries',
        'fraud_shield' => 'fraudShield',
        'mla' => 'mla',
        'ofacmsg' => 'ofacmsg',
        'consumer_ident_check' => 'consumerIdentCheck',
        'joint' => 'joint',
        'payment_history84' => 'paymentHistory84'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direct_check' => 'setDirectCheck',
        'demographics' => 'setDemographics',
        'clarity_early_risk_score' => 'setClarityEarlyRiskScore',
        'clarity_data' => 'setClarityData',
        'renter_risk_score' => 'setRenterRiskScore',
        'rent_bureau_data' => 'setRentBureauData',
        'risk_models' => 'setRiskModels',
        'summaries' => 'setSummaries',
        'fraud_shield' => 'setFraudShield',
        'mla' => 'setMla',
        'ofacmsg' => 'setOfacmsg',
        'consumer_ident_check' => 'setConsumerIdentCheck',
        'joint' => 'setJoint',
        'payment_history84' => 'setPaymentHistory84'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direct_check' => 'getDirectCheck',
        'demographics' => 'getDemographics',
        'clarity_early_risk_score' => 'getClarityEarlyRiskScore',
        'clarity_data' => 'getClarityData',
        'renter_risk_score' => 'getRenterRiskScore',
        'rent_bureau_data' => 'getRentBureauData',
        'risk_models' => 'getRiskModels',
        'summaries' => 'getSummaries',
        'fraud_shield' => 'getFraudShield',
        'mla' => 'getMla',
        'ofacmsg' => 'getOfacmsg',
        'consumer_ident_check' => 'getConsumerIdentCheck',
        'joint' => 'getJoint',
        'payment_history84' => 'getPaymentHistory84'
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
        $this->container['direct_check'] = isset($data['direct_check']) ? $data['direct_check'] : null;
        $this->container['demographics'] = isset($data['demographics']) ? $data['demographics'] : null;
        $this->container['clarity_early_risk_score'] = isset($data['clarity_early_risk_score']) ? $data['clarity_early_risk_score'] : null;
        $this->container['clarity_data'] = isset($data['clarity_data']) ? $data['clarity_data'] : null;
        $this->container['renter_risk_score'] = isset($data['renter_risk_score']) ? $data['renter_risk_score'] : null;
        $this->container['rent_bureau_data'] = isset($data['rent_bureau_data']) ? $data['rent_bureau_data'] : null;
        $this->container['risk_models'] = isset($data['risk_models']) ? $data['risk_models'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
        $this->container['fraud_shield'] = isset($data['fraud_shield']) ? $data['fraud_shield'] : null;
        $this->container['mla'] = isset($data['mla']) ? $data['mla'] : null;
        $this->container['ofacmsg'] = isset($data['ofacmsg']) ? $data['ofacmsg'] : null;
        $this->container['consumer_ident_check'] = isset($data['consumer_ident_check']) ? $data['consumer_ident_check'] : null;
        $this->container['joint'] = isset($data['joint']) ? $data['joint'] : null;
        $this->container['payment_history84'] = isset($data['payment_history84']) ? $data['payment_history84'] : null;
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
     * Gets direct_check
     *
     * @return string|null
     */
    public function getDirectCheck()
    {
        return $this->container['direct_check'];
    }

    /**
     * Sets direct_check
     *
     * @param string|null $direct_check Send back subscriber information on the credit profile. When set to Y indicates that subscriber and court names, addresses, and phone numbers who have reported data on the consumer's profile will be sent back on the response.
     *
     * @return $this
     */
    public function setDirectCheck($direct_check)
    {
        $this->container['direct_check'] = $direct_check;

        return $this;
    }

    /**
     * Gets demographics
     *
     * @return string|null
     */
    public function getDemographics()
    {
        return $this->container['demographics'];
    }

    /**
     * Sets demographics
     *
     * @param string|null $demographics Indicates the type of demographic data that should be returned back.
     *
     * @return $this
     */
    public function setDemographics($demographics)
    {
        $this->container['demographics'] = $demographics;

        return $this;
    }

    /**
     * Gets clarity_early_risk_score
     *
     * @return string|null
     */
    public function getClarityEarlyRiskScore()
    {
        return $this->container['clarity_early_risk_score'];
    }

    /**
     * Sets clarity_early_risk_score
     *
     * @param string|null $clarity_early_risk_score Y.  Returns Clarity's 90 day Clear Early Risk Score (CERS) which predict the risk of a consumer going 90 days past due in first 12 months of a traditional bureau trade. This can be omitted if Clarity Early Risk Score is not needed.
     *
     * @return $this
     */
    public function setClarityEarlyRiskScore($clarity_early_risk_score)
    {
        $this->container['clarity_early_risk_score'] = $clarity_early_risk_score;

        return $this;
    }

    /**
     * Gets clarity_data
     *
     * @return \OpenAPI\Client\Model\ClarityAccountData|null
     */
    public function getClarityData()
    {
        return $this->container['clarity_data'];
    }

    /**
     * Sets clarity_data
     *
     * @param \OpenAPI\Client\Model\ClarityAccountData|null $clarity_data clarity_data
     *
     * @return $this
     */
    public function setClarityData($clarity_data)
    {
        $this->container['clarity_data'] = $clarity_data;

        return $this;
    }

    /**
     * Gets renter_risk_score
     *
     * @return string|null
     */
    public function getRenterRiskScore()
    {
        return $this->container['renter_risk_score'];
    }

    /**
     * Sets renter_risk_score
     *
     * @param string|null $renter_risk_score Y.  Returns the rent Bureau's 90 day Rent Risk Score which predict the risk of a renter going 90 days past due in first 12 months of a rental lease. This can be omitted if Renter Risk Score is not needed.
     *
     * @return $this
     */
    public function setRenterRiskScore($renter_risk_score)
    {
        $this->container['renter_risk_score'] = $renter_risk_score;

        return $this;
    }

    /**
     * Gets rent_bureau_data
     *
     * @return \OpenAPI\Client\Model\RentBureauAccountData|null
     */
    public function getRentBureauData()
    {
        return $this->container['rent_bureau_data'];
    }

    /**
     * Sets rent_bureau_data
     *
     * @param \OpenAPI\Client\Model\RentBureauAccountData|null $rent_bureau_data rent_bureau_data
     *
     * @return $this
     */
    public function setRentBureauData($rent_bureau_data)
    {
        $this->container['rent_bureau_data'] = $rent_bureau_data;

        return $this;
    }

    /**
     * Gets risk_models
     *
     * @return \OpenAPI\Client\Model\RiskModel|null
     */
    public function getRiskModels()
    {
        return $this->container['risk_models'];
    }

    /**
     * Sets risk_models
     *
     * @param \OpenAPI\Client\Model\RiskModel|null $risk_models risk_models
     *
     * @return $this
     */
    public function setRiskModels($risk_models)
    {
        $this->container['risk_models'] = $risk_models;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \OpenAPI\Client\Model\AddonsSummaries|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \OpenAPI\Client\Model\AddonsSummaries|null $summaries summaries
     *
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets fraud_shield
     *
     * @return string|null
     */
    public function getFraudShield()
    {
        return $this->container['fraud_shield'];
    }

    /**
     * Sets fraud_shield
     *
     * @param string|null $fraud_shield Y - Fraud Shield Product Option will be output
     *
     * @return $this
     */
    public function setFraudShield($fraud_shield)
    {
        $this->container['fraud_shield'] = $fraud_shield;

        return $this;
    }

    /**
     * Gets mla
     *
     * @return string|null
     */
    public function getMla()
    {
        return $this->container['mla'];
    }

    /**
     * Sets mla
     *
     * @param string|null $mla Y - Trigger a screening process of taking the consumer data from an inquiry to match against the Dept of Defense MLA lists. Message codes 1203-1207 could be returned. Permissible Purpose with valid YOB required for getting this option.
     *
     * @return $this
     */
    public function setMla($mla)
    {
        $this->container['mla'] = $mla;

        return $this;
    }

    /**
     * Gets ofacmsg
     *
     * @return string|null
     */
    public function getOfacmsg()
    {
        return $this->container['ofacmsg'];
    }

    /**
     * Sets ofacmsg
     *
     * @param string|null $ofacmsg Y- Trigger a screening process of taking the consumer data from an inquiry to match against the OFAC (Office of Foreign Asset Control) and PLC (Palestinian Legislative Council) lists. A message 1202 NAME DOES NOT MATCH OFAC/PLC LIST will be printed on credit profile if the consumer is not found on either OFAC or PLC list. A message 1200 NAME MATCHES OFAC/PLC LIST will be printed on credit profile if the consumer is found on either OFAC or PLC list.
     *
     * @return $this
     */
    public function setOfacmsg($ofacmsg)
    {
        $this->container['ofacmsg'] = $ofacmsg;

        return $this;
    }

    /**
     * Gets consumer_ident_check
     *
     * @return \OpenAPI\Client\Model\ConsumerIdentifierCheckOptions|null
     */
    public function getConsumerIdentCheck()
    {
        return $this->container['consumer_ident_check'];
    }

    /**
     * Sets consumer_ident_check
     *
     * @param \OpenAPI\Client\Model\ConsumerIdentifierCheckOptions|null $consumer_ident_check consumer_ident_check
     *
     * @return $this
     */
    public function setConsumerIdentCheck($consumer_ident_check)
    {
        $this->container['consumer_ident_check'] = $consumer_ident_check;

        return $this;
    }

    /**
     * Gets joint
     *
     * @return string|null
     */
    public function getJoint()
    {
        return $this->container['joint'];
    }

    /**
     * Sets joint
     *
     * @param string|null $joint If specified as Y it means that the client is requesting a joint credit report. This is used to request the Dual or Joint Report. Two separate credit reports are returned?one on the primary applicant and one on the secondary applicant. The joint applicant should have the same current address as the primary applicant. Include as much information on the joint applicant as possible, including the surname if it is different from the primary applicant. If NOt specified or N it means that a joint report is NOT being requested.
     *
     * @return $this
     */
    public function setJoint($joint)
    {
        $this->container['joint'] = $joint;

        return $this;
    }

    /**
     * Gets payment_history84
     *
     * @return string|null
     */
    public function getPaymentHistory84()
    {
        return $this->container['payment_history84'];
    }

    /**
     * Sets payment_history84
     *
     * @param string|null $payment_history84 Y.  84 month payment history is requested instead of the 25 month history. This can be omitted if 84 month history is not needed.
     *
     * @return $this
     */
    public function setPaymentHistory84($payment_history84)
    {
        $this->container['payment_history84'] = $payment_history84;

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


