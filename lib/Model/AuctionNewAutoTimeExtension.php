<?php
/**
 * AuctionNewAutoTimeExtension
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
 * AuctionNewAutoTimeExtension Class Doc Comment
 *
 * @category Class
 * @package  Jetract
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuctionNewAutoTimeExtension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuctionNew_autoTimeExtension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'float',
        'margin' => 'float',
        'duration' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'margin' => null,
        'duration' => null
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
        'type' => 'type',
        'margin' => 'margin',
        'duration' => 'duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'margin' => 'setMargin',
        'duration' => 'setDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'margin' => 'getMargin',
        'duration' => 'getDuration'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['margin']) && ($this->container['margin'] > 120)) {
            $invalidProperties[] = "invalid value for 'margin', must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['margin']) && ($this->container['margin'] < 0)) {
            $invalidProperties[] = "invalid value for 'margin', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['duration']) && ($this->container['duration'] > 120)) {
            $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 120.";
        }

        if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
            $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
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
     * Gets type
     *
     * @return float
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param float $type Set auto time extension for your auction.<br>0:Turned Off<br>1:When a new bid is placed.<br>2:When new bid is lower/higher than lowest/highest.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param float $margin Time margin in terms of minutes left for the end of auction. Auto Extension rule will only trigger if current time is in the margin.
     *
     * @return $this
     */
    public function setMargin($margin)
    {

        if (!is_null($margin) && ($margin > 120)) {
            throw new \InvalidArgumentException('invalid value for $margin when calling AuctionNewAutoTimeExtension., must be smaller than or equal to 120.');
        }
        if (!is_null($margin) && ($margin < 0)) {
            throw new \InvalidArgumentException('invalid value for $margin when calling AuctionNewAutoTimeExtension., must be bigger than or equal to 0.');
        }

        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration Amount of minutes Auto Time Extension rule will extend.
     *
     * @return $this
     */
    public function setDuration($duration)
    {

        if (!is_null($duration) && ($duration > 120)) {
            throw new \InvalidArgumentException('invalid value for $duration when calling AuctionNewAutoTimeExtension., must be smaller than or equal to 120.');
        }
        if (!is_null($duration) && ($duration < 0)) {
            throw new \InvalidArgumentException('invalid value for $duration when calling AuctionNewAutoTimeExtension., must be bigger than or equal to 0.');
        }

        $this->container['duration'] = $duration;

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


