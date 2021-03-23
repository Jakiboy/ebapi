<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : Ebapi
 * @version   : 0.0.1
 * @copyright : (c) 2021 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/ebapi/
 * @license   : MIT
 *
 * This file if a part of Ebapi Lib
 * Based on Swagger API
 */

namespace Ebapi\includes;

use \ArrayAccess;
use \Ebapi\ObjectSerializer;
use \Ebapi\interfaces\ModelInterface;

class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
'domain' => 'string',
'error_id' => 'int',
'input_ref_ids' => 'string[]',
'long_message' => 'string',
'message' => 'string',
'output_ref_ids' => 'string[]',
'parameters' => '\Swagger\Client\Model\ErrorParameter[]',
'subdomain' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
'domain' => null,
'error_id' => 'int32',
'input_ref_ids' => null,
'long_message' => null,
'message' => null,
'output_ref_ids' => null,
'parameters' => null,
'subdomain' => null    ];

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
        'category'       => 'category',
        'domain'         => 'domain',
        'error_id'       => 'errorId',
        'input_ref_ids'  => 'inputRefIds',
        'long_message'   => 'longMessage',
        'message'        => 'message',
        'output_ref_ids' => 'outputRefIds',
        'parameters'     => 'parameters',
        'subdomain'      => 'subdomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
'domain' => 'setDomain',
'error_id' => 'setErrorId',
'input_ref_ids' => 'setInputRefIds',
'long_message' => 'setLongMessage',
'message' => 'setMessage',
'output_ref_ids' => 'setOutputRefIds',
'parameters' => 'setParameters',
'subdomain' => 'setSubdomain'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
'domain' => 'getDomain',
'error_id' => 'getErrorId',
'input_ref_ids' => 'getInputRefIds',
'long_message' => 'getLongMessage',
'message' => 'getMessage',
'output_ref_ids' => 'getOutputRefIds',
'parameters' => 'getParameters',
'subdomain' => 'getSubdomain'    ];

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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['error_id'] = isset($data['error_id']) ? $data['error_id'] : null;
        $this->container['input_ref_ids'] = isset($data['input_ref_ids']) ? $data['input_ref_ids'] : null;
        $this->container['long_message'] = isset($data['long_message']) ? $data['long_message'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['output_ref_ids'] = isset($data['output_ref_ids']) ? $data['output_ref_ids'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Identifies the type of erro.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Name for the primary system where the error occurred. This is relevant for application errors.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets error_id
     *
     * @return int
     */
    public function getErrorId()
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param int $error_id A unique number to identify the error.
     *
     * @return $this
     */
    public function setErrorId($error_id)
    {
        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets input_ref_ids
     *
     * @return string[]
     */
    public function getInputRefIds()
    {
        return $this->container['input_ref_ids'];
    }

    /**
     * Sets input_ref_ids
     *
     * @param string[] $input_ref_ids An array of request elements most closely associated to the error.
     *
     * @return $this
     */
    public function setInputRefIds($input_ref_ids)
    {
        $this->container['input_ref_ids'] = $input_ref_ids;

        return $this;
    }

    /**
     * Gets long_message
     *
     * @return string
     */
    public function getLongMessage()
    {
        return $this->container['long_message'];
    }

    /**
     * Sets long_message
     *
     * @param string $long_message A more detailed explanation of the error.
     *
     * @return $this
     */
    public function setLongMessage($long_message)
    {
        $this->container['long_message'] = $long_message;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Information on how to correct the problem, in the end user's terms and language where applicable.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets output_ref_ids
     *
     * @return string[]
     */
    public function getOutputRefIds()
    {
        return $this->container['output_ref_ids'];
    }

    /**
     * Sets output_ref_ids
     *
     * @param string[] $output_ref_ids An array of request elements most closely associated to the error.
     *
     * @return $this
     */
    public function setOutputRefIds($output_ref_ids)
    {
        $this->container['output_ref_ids'] = $output_ref_ids;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Swagger\Client\Model\ErrorParameter[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Swagger\Client\Model\ErrorParameter[] $parameters An array of name/value pairs that describe details the error condition. These are useful when multiple errors are returned.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string $subdomain Further helps indicate which subsystem the error is coming from. System subcategories include: Initialization, Serialization, Security, Monitoring, Rate Limiting, etc.
     *
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

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
