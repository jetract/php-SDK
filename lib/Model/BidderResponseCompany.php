<?php
/**
 * BidderResponseCompany
 *
 * PHP version 5
 *
 * @category Class
 * @package  Jetract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JETRACT
 *
 * <b>Main API (Application Programming Interface) of Jetract E-Auction and E-Procurement solutions.</b><br><i>Property of INARTS YAZILIM BILISIM INSAAT SAN. VE TIC. A.Ş.</i>
 *
 * OpenAPI spec version: 0.9.4
 * Contact: support-api@jetract.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Jetract\Model;

use \ArrayAccess;
use \Jetract\ObjectSerializer;

/**
 * BidderResponseCompany Class Doc Comment
 *
 * @category Class
 * @description Company information of this bidder.
 * @package  Jetract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidderResponseCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BidderResponse_company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iD' => 'string',
        'name' => 'string',
        'taxOffice' => 'string',
        'taxNumber' => 'string',
        'numberOfWorkers' => 'float',
        'phone' => '\Jetract\Model\BidderResponseCompanyPhone',
        'foundationYear' => 'float',
        'address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iD' => null,
        'name' => null,
        'taxOffice' => null,
        'taxNumber' => null,
        'numberOfWorkers' => null,
        'phone' => null,
        'foundationYear' => null,
        'address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'iD' => 'ID',
        'name' => 'name',
        'taxOffice' => 'taxOffice',
        'taxNumber' => 'taxNumber',
        'numberOfWorkers' => 'numberOfWorkers',
        'phone' => 'phone',
        'foundationYear' => 'foundationYear',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iD' => 'setID',
        'name' => 'setName',
        'taxOffice' => 'setTaxOffice',
        'taxNumber' => 'setTaxNumber',
        'numberOfWorkers' => 'setNumberOfWorkers',
        'phone' => 'setPhone',
        'foundationYear' => 'setFoundationYear',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iD' => 'getID',
        'name' => 'getName',
        'taxOffice' => 'getTaxOffice',
        'taxNumber' => 'getTaxNumber',
        'numberOfWorkers' => 'getNumberOfWorkers',
        'phone' => 'getPhone',
        'foundationYear' => 'getFoundationYear',
        'address' => 'getAddress'
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
        return self::$swaggerModelName;
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
        $this->container['iD'] = isset($data['iD']) ? $data['iD'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taxOffice'] = isset($data['taxOffice']) ? $data['taxOffice'] : null;
        $this->container['taxNumber'] = isset($data['taxNumber']) ? $data['taxNumber'] : null;
        $this->container['numberOfWorkers'] = isset($data['numberOfWorkers']) ? $data['numberOfWorkers'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['foundationYear'] = isset($data['foundationYear']) ? $data['foundationYear'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->container['iD'];
    }

    /**
     * Sets iD
     *
     * @param string $iD ID of the company.
     *
     * @return $this
     */
    public function setID($iD)
    {
        $this->container['iD'] = $iD;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the company.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets taxOffice
     *
     * @return string
     */
    public function getTaxOffice()
    {
        return $this->container['taxOffice'];
    }

    /**
     * Sets taxOffice
     *
     * @param string $taxOffice Tax Office of the company.
     *
     * @return $this
     */
    public function setTaxOffice($taxOffice)
    {
        $this->container['taxOffice'] = $taxOffice;

        return $this;
    }

    /**
     * Gets taxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->container['taxNumber'];
    }

    /**
     * Sets taxNumber
     *
     * @param string $taxNumber Tax Number of the company.
     *
     * @return $this
     */
    public function setTaxNumber($taxNumber)
    {
        $this->container['taxNumber'] = $taxNumber;

        return $this;
    }

    /**
     * Gets numberOfWorkers
     *
     * @return float
     */
    public function getNumberOfWorkers()
    {
        return $this->container['numberOfWorkers'];
    }

    /**
     * Sets numberOfWorkers
     *
     * @param float $numberOfWorkers Number of workers in this company.
     *
     * @return $this
     */
    public function setNumberOfWorkers($numberOfWorkers)
    {
        $this->container['numberOfWorkers'] = $numberOfWorkers;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Jetract\Model\BidderResponseCompanyPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Jetract\Model\BidderResponseCompanyPhone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets foundationYear
     *
     * @return float
     */
    public function getFoundationYear()
    {
        return $this->container['foundationYear'];
    }

    /**
     * Sets foundationYear
     *
     * @param float $foundationYear Year when this company was founded.
     *
     * @return $this
     */
    public function setFoundationYear($foundationYear)
    {
        $this->container['foundationYear'] = $foundationYear;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address of the company.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

