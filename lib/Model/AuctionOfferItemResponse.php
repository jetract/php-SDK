<?php
/**
 * AuctionOfferItemResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JETRACT
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.9.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AuctionOfferItemResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuctionOfferItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuctionOfferItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'delivery_date' => 'string',
        'note' => 'string',
        'offer_price' => 'float',
        'offer_discount' => 'float',
        'offer_discount_type' => 'float',
        'approval_process_status' => 'float',
        'item' => 'object',
        'offer_vat_rate' => 'float',
        'offer_vat_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'delivery_date' => null,
        'note' => null,
        'offer_price' => null,
        'offer_discount' => null,
        'offer_discount_type' => null,
        'approval_process_status' => null,
        'item' => null,
        'offer_vat_rate' => null,
        'offer_vat_price' => null
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
        'id' => 'ID',
        'delivery_date' => 'deliveryDate',
        'note' => 'note',
        'offer_price' => 'offerPrice',
        'offer_discount' => 'offerDiscount',
        'offer_discount_type' => 'offerDiscountType',
        'approval_process_status' => 'approvalProcessStatus',
        'item' => 'item',
        'offer_vat_rate' => 'offerVatRate',
        'offer_vat_price' => 'offerVatPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'delivery_date' => 'setDeliveryDate',
        'note' => 'setNote',
        'offer_price' => 'setOfferPrice',
        'offer_discount' => 'setOfferDiscount',
        'offer_discount_type' => 'setOfferDiscountType',
        'approval_process_status' => 'setApprovalProcessStatus',
        'item' => 'setItem',
        'offer_vat_rate' => 'setOfferVatRate',
        'offer_vat_price' => 'setOfferVatPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'delivery_date' => 'getDeliveryDate',
        'note' => 'getNote',
        'offer_price' => 'getOfferPrice',
        'offer_discount' => 'getOfferDiscount',
        'offer_discount_type' => 'getOfferDiscountType',
        'approval_process_status' => 'getApprovalProcessStatus',
        'item' => 'getItem',
        'offer_vat_rate' => 'getOfferVatRate',
        'offer_vat_price' => 'getOfferVatPrice'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['offer_price'] = isset($data['offer_price']) ? $data['offer_price'] : null;
        $this->container['offer_discount'] = isset($data['offer_discount']) ? $data['offer_discount'] : null;
        $this->container['offer_discount_type'] = isset($data['offer_discount_type']) ? $data['offer_discount_type'] : null;
        $this->container['approval_process_status'] = isset($data['approval_process_status']) ? $data['approval_process_status'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['offer_vat_rate'] = isset($data['offer_vat_rate']) ? $data['offer_vat_rate'] : null;
        $this->container['offer_vat_price'] = isset($data['offer_vat_price']) ? $data['offer_vat_price'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the offer item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string $delivery_date Delivery date of a given item. YYYY-MM-DD HH:MM:SS format.<br>Only available if it is enabled in the auction configurations.
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Note of the offer item.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets offer_price
     *
     * @return float
     */
    public function getOfferPrice()
    {
        return $this->container['offer_price'];
    }

    /**
     * Sets offer_price
     *
     * @param float $offer_price Price given to item.
     *
     * @return $this
     */
    public function setOfferPrice($offer_price)
    {
        $this->container['offer_price'] = $offer_price;

        return $this;
    }

    /**
     * Gets offer_discount
     *
     * @return float
     */
    public function getOfferDiscount()
    {
        return $this->container['offer_discount'];
    }

    /**
     * Sets offer_discount
     *
     * @param float $offer_discount Discount given to offer price.
     *
     * @return $this
     */
    public function setOfferDiscount($offer_discount)
    {
        $this->container['offer_discount'] = $offer_discount;

        return $this;
    }

    /**
     * Gets offer_discount_type
     *
     * @return float
     */
    public function getOfferDiscountType()
    {
        return $this->container['offer_discount_type'];
    }

    /**
     * Sets offer_discount_type
     *
     * @param float $offer_discount_type Type of the offer discount.<br>1: Percent value. <br>2: Price value.
     *
     * @return $this
     */
    public function setOfferDiscountType($offer_discount_type)
    {
        $this->container['offer_discount_type'] = $offer_discount_type;

        return $this;
    }

    /**
     * Gets approval_process_status
     *
     * @return float
     */
    public function getApprovalProcessStatus()
    {
        return $this->container['approval_process_status'];
    }

    /**
     * Sets approval_process_status
     *
     * @param float $approval_process_status The status of the item to the approval process. Only used in after auction Flow Mechanisms.
     *
     * @return $this
     */
    public function setApprovalProcessStatus($approval_process_status)
    {
        $this->container['approval_process_status'] = $approval_process_status;

        return $this;
    }

    /**
     * Gets item
     *
     * @return object
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param object $item The information of the auction item.
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets offer_vat_rate
     *
     * @return float
     */
    public function getOfferVatRate()
    {
        return $this->container['offer_vat_rate'];
    }

    /**
     * Sets offer_vat_rate
     *
     * @param float $offer_vat_rate Vat rate given to item.
     *
     * @return $this
     */
    public function setOfferVatRate($offer_vat_rate)
    {
        $this->container['offer_vat_rate'] = $offer_vat_rate;

        return $this;
    }

    /**
     * Gets offer_vat_price
     *
     * @return float
     */
    public function getOfferVatPrice()
    {
        return $this->container['offer_vat_price'];
    }

    /**
     * Sets offer_vat_price
     *
     * @param float $offer_vat_price Vat price given to item.
     *
     * @return $this
     */
    public function setOfferVatPrice($offer_vat_price)
    {
        $this->container['offer_vat_price'] = $offer_vat_price;

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


