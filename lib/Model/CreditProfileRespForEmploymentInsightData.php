<?php
/**
 * CreditProfileRespForEmploymentInsightData
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
 * CreditProfileRespForEmploymentInsightData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreditProfileRespForEmploymentInsightData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'creditProfileRespForEmploymentInsightData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_information' => '\OpenAPI\Client\Model\AddressInformationResp[]',
        'consumer_assistance_referral_address' => '\OpenAPI\Client\Model\ConsumerAssistanceReferralAddress',
        'consumer_identity' => '\OpenAPI\Client\Model\ConsumerIdentityWithoutDOB',
        'direct_check' => '\OpenAPI\Client\Model\DirectCheckResp[]',
        'employment_information' => '\OpenAPI\Client\Model\EmploymentInformationResp[]',
        'fraud_shield' => '\OpenAPI\Client\Model\FraudShieldResp[]',
        'informational_message' => '\OpenAPI\Client\Model\InformationalMessageResp[]',
        'inquiry' => '\OpenAPI\Client\Model\InquiryResp[]',
        'ofac' => '\OpenAPI\Client\Model\OfacResp',
        'summaries' => '\OpenAPI\Client\Model\Summary[]',
        'public_record' => '\OpenAPI\Client\Model\PublicRecordResp[]',
        'ssn' => '\OpenAPI\Client\Model\SsnResp[]',
        'statement' => '\OpenAPI\Client\Model\StatementResp[]',
        'tradeline' => '\OpenAPI\Client\Model\TradelineRespEmp[]',
        'unique_consumer_identifier' => '\OpenAPI\Client\Model\UniqueConsumerIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address_information' => null,
        'consumer_assistance_referral_address' => null,
        'consumer_identity' => null,
        'direct_check' => null,
        'employment_information' => null,
        'fraud_shield' => null,
        'informational_message' => null,
        'inquiry' => null,
        'ofac' => null,
        'summaries' => null,
        'public_record' => null,
        'ssn' => null,
        'statement' => null,
        'tradeline' => null,
        'unique_consumer_identifier' => null
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
        'address_information' => 'addressInformation',
        'consumer_assistance_referral_address' => 'consumerAssistanceReferralAddress',
        'consumer_identity' => 'consumerIdentity',
        'direct_check' => 'directCheck',
        'employment_information' => 'employmentInformation',
        'fraud_shield' => 'fraudShield',
        'informational_message' => 'informationalMessage',
        'inquiry' => 'inquiry',
        'ofac' => 'ofac',
        'summaries' => 'summaries',
        'public_record' => 'publicRecord',
        'ssn' => 'ssn',
        'statement' => 'statement',
        'tradeline' => 'tradeline',
        'unique_consumer_identifier' => 'uniqueConsumerIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_information' => 'setAddressInformation',
        'consumer_assistance_referral_address' => 'setConsumerAssistanceReferralAddress',
        'consumer_identity' => 'setConsumerIdentity',
        'direct_check' => 'setDirectCheck',
        'employment_information' => 'setEmploymentInformation',
        'fraud_shield' => 'setFraudShield',
        'informational_message' => 'setInformationalMessage',
        'inquiry' => 'setInquiry',
        'ofac' => 'setOfac',
        'summaries' => 'setSummaries',
        'public_record' => 'setPublicRecord',
        'ssn' => 'setSsn',
        'statement' => 'setStatement',
        'tradeline' => 'setTradeline',
        'unique_consumer_identifier' => 'setUniqueConsumerIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_information' => 'getAddressInformation',
        'consumer_assistance_referral_address' => 'getConsumerAssistanceReferralAddress',
        'consumer_identity' => 'getConsumerIdentity',
        'direct_check' => 'getDirectCheck',
        'employment_information' => 'getEmploymentInformation',
        'fraud_shield' => 'getFraudShield',
        'informational_message' => 'getInformationalMessage',
        'inquiry' => 'getInquiry',
        'ofac' => 'getOfac',
        'summaries' => 'getSummaries',
        'public_record' => 'getPublicRecord',
        'ssn' => 'getSsn',
        'statement' => 'getStatement',
        'tradeline' => 'getTradeline',
        'unique_consumer_identifier' => 'getUniqueConsumerIdentifier'
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
        $this->container['address_information'] = isset($data['address_information']) ? $data['address_information'] : null;
        $this->container['consumer_assistance_referral_address'] = isset($data['consumer_assistance_referral_address']) ? $data['consumer_assistance_referral_address'] : null;
        $this->container['consumer_identity'] = isset($data['consumer_identity']) ? $data['consumer_identity'] : null;
        $this->container['direct_check'] = isset($data['direct_check']) ? $data['direct_check'] : null;
        $this->container['employment_information'] = isset($data['employment_information']) ? $data['employment_information'] : null;
        $this->container['fraud_shield'] = isset($data['fraud_shield']) ? $data['fraud_shield'] : null;
        $this->container['informational_message'] = isset($data['informational_message']) ? $data['informational_message'] : null;
        $this->container['inquiry'] = isset($data['inquiry']) ? $data['inquiry'] : null;
        $this->container['ofac'] = isset($data['ofac']) ? $data['ofac'] : null;
        $this->container['summaries'] = isset($data['summaries']) ? $data['summaries'] : null;
        $this->container['public_record'] = isset($data['public_record']) ? $data['public_record'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['tradeline'] = isset($data['tradeline']) ? $data['tradeline'] : null;
        $this->container['unique_consumer_identifier'] = isset($data['unique_consumer_identifier']) ? $data['unique_consumer_identifier'] : null;
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
     * Gets address_information
     *
     * @return \OpenAPI\Client\Model\AddressInformationResp[]|null
     */
    public function getAddressInformation()
    {
        return $this->container['address_information'];
    }

    /**
     * Sets address_information
     *
     * @param \OpenAPI\Client\Model\AddressInformationResp[]|null $address_information Best Consumer Addresses
     *
     * @return $this
     */
    public function setAddressInformation($address_information)
    {
        $this->container['address_information'] = $address_information;

        return $this;
    }

    /**
     * Gets consumer_assistance_referral_address
     *
     * @return \OpenAPI\Client\Model\ConsumerAssistanceReferralAddress|null
     */
    public function getConsumerAssistanceReferralAddress()
    {
        return $this->container['consumer_assistance_referral_address'];
    }

    /**
     * Sets consumer_assistance_referral_address
     *
     * @param \OpenAPI\Client\Model\ConsumerAssistanceReferralAddress|null $consumer_assistance_referral_address consumer_assistance_referral_address
     *
     * @return $this
     */
    public function setConsumerAssistanceReferralAddress($consumer_assistance_referral_address)
    {
        $this->container['consumer_assistance_referral_address'] = $consumer_assistance_referral_address;

        return $this;
    }

    /**
     * Gets consumer_identity
     *
     * @return \OpenAPI\Client\Model\ConsumerIdentityWithoutDOB|null
     */
    public function getConsumerIdentity()
    {
        return $this->container['consumer_identity'];
    }

    /**
     * Sets consumer_identity
     *
     * @param \OpenAPI\Client\Model\ConsumerIdentityWithoutDOB|null $consumer_identity consumer_identity
     *
     * @return $this
     */
    public function setConsumerIdentity($consumer_identity)
    {
        $this->container['consumer_identity'] = $consumer_identity;

        return $this;
    }

    /**
     * Gets direct_check
     *
     * @return \OpenAPI\Client\Model\DirectCheckResp[]|null
     */
    public function getDirectCheck()
    {
        return $this->container['direct_check'];
    }

    /**
     * Sets direct_check
     *
     * @param \OpenAPI\Client\Model\DirectCheckResp[]|null $direct_check Subscriber Information of subscriber codes shown on credit profile. Present when direct check is requested on input or via subcode option.
     *
     * @return $this
     */
    public function setDirectCheck($direct_check)
    {
        $this->container['direct_check'] = $direct_check;

        return $this;
    }

    /**
     * Gets employment_information
     *
     * @return \OpenAPI\Client\Model\EmploymentInformationResp[]|null
     */
    public function getEmploymentInformation()
    {
        return $this->container['employment_information'];
    }

    /**
     * Sets employment_information
     *
     * @param \OpenAPI\Client\Model\EmploymentInformationResp[]|null $employment_information Best Consumer Employments.
     *
     * @return $this
     */
    public function setEmploymentInformation($employment_information)
    {
        $this->container['employment_information'] = $employment_information;

        return $this;
    }

    /**
     * Gets fraud_shield
     *
     * @return \OpenAPI\Client\Model\FraudShieldResp[]|null
     */
    public function getFraudShield()
    {
        return $this->container['fraud_shield'];
    }

    /**
     * Sets fraud_shield
     *
     * @param \OpenAPI\Client\Model\FraudShieldResp[]|null $fraud_shield Fraud Shield information when requested on input or via subcode.
     *
     * @return $this
     */
    public function setFraudShield($fraud_shield)
    {
        $this->container['fraud_shield'] = $fraud_shield;

        return $this;
    }

    /**
     * Gets informational_message
     *
     * @return \OpenAPI\Client\Model\InformationalMessageResp[]|null
     */
    public function getInformationalMessage()
    {
        return $this->container['informational_message'];
    }

    /**
     * Sets informational_message
     *
     * @param \OpenAPI\Client\Model\InformationalMessageResp[]|null $informational_message informational messages for request and response scenarios. e.g. if a product option requested is NOT setup for the subcode, response will reflect a warning.
     *
     * @return $this
     */
    public function setInformationalMessage($informational_message)
    {
        $this->container['informational_message'] = $informational_message;

        return $this;
    }

    /**
     * Gets inquiry
     *
     * @return \OpenAPI\Client\Model\InquiryResp[]|null
     */
    public function getInquiry()
    {
        return $this->container['inquiry'];
    }

    /**
     * Sets inquiry
     *
     * @param \OpenAPI\Client\Model\InquiryResp[]|null $inquiry Onfile Inquiries for the consumer.
     *
     * @return $this
     */
    public function setInquiry($inquiry)
    {
        $this->container['inquiry'] = $inquiry;

        return $this;
    }

    /**
     * Gets ofac
     *
     * @return \OpenAPI\Client\Model\OfacResp|null
     */
    public function getOfac()
    {
        return $this->container['ofac'];
    }

    /**
     * Sets ofac
     *
     * @param \OpenAPI\Client\Model\OfacResp|null $ofac ofac
     *
     * @return $this
     */
    public function setOfac($ofac)
    {
        $this->container['ofac'] = $ofac;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \OpenAPI\Client\Model\Summary[]|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \OpenAPI\Client\Model\Summary[]|null $summaries summaries
     *
     * @return $this
     */
    public function setSummaries($summaries)
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets public_record
     *
     * @return \OpenAPI\Client\Model\PublicRecordResp[]|null
     */
    public function getPublicRecord()
    {
        return $this->container['public_record'];
    }

    /**
     * Sets public_record
     *
     * @param \OpenAPI\Client\Model\PublicRecordResp[]|null $public_record Bankruptcy, Lien and Civil Action public records for Consumer.
     *
     * @return $this
     */
    public function setPublicRecord($public_record)
    {
        $this->container['public_record'] = $public_record;

        return $this;
    }

    /**
     * Gets ssn
     *
     * @return \OpenAPI\Client\Model\SsnResp[]|null
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     *
     * @param \OpenAPI\Client\Model\SsnResp[]|null $ssn Consumer's profile SSN.
     *
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets statement
     *
     * @return \OpenAPI\Client\Model\StatementResp[]|null
     */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
     * Sets statement
     *
     * @param \OpenAPI\Client\Model\StatementResp[]|null $statement Consumer Statements present onfile.
     *
     * @return $this
     */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;

        return $this;
    }

    /**
     * Gets tradeline
     *
     * @return \OpenAPI\Client\Model\TradelineRespEmp[]|null
     */
    public function getTradeline()
    {
        return $this->container['tradeline'];
    }

    /**
     * Sets tradeline
     *
     * @param \OpenAPI\Client\Model\TradelineRespEmp[]|null $tradeline Consumer tradeline information.
     *
     * @return $this
     */
    public function setTradeline($tradeline)
    {
        $this->container['tradeline'] = $tradeline;

        return $this;
    }

    /**
     * Gets unique_consumer_identifier
     *
     * @return \OpenAPI\Client\Model\UniqueConsumerIdentifier|null
     */
    public function getUniqueConsumerIdentifier()
    {
        return $this->container['unique_consumer_identifier'];
    }

    /**
     * Sets unique_consumer_identifier
     *
     * @param \OpenAPI\Client\Model\UniqueConsumerIdentifier|null $unique_consumer_identifier unique_consumer_identifier
     *
     * @return $this
     */
    public function setUniqueConsumerIdentifier($unique_consumer_identifier)
    {
        $this->container['unique_consumer_identifier'] = $unique_consumer_identifier;

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


