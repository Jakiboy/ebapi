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

class ItemGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_group_id' => 'string',
'item_group_type' => 'string',
'title' => 'string',
'varies_by_localized_aspects' => 'string',
'image_url' => 'string',
'additional_image_urls' => 'string',
'image_altering_prohibited' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_group_id' => null,
'item_group_type' => null,
'title' => null,
'varies_by_localized_aspects' => null,
'image_url' => null,
'additional_image_urls' => null,
'image_altering_prohibited' => null    ];

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
        'item_group_id' => 'itemGroupId',
'item_group_type' => 'itemGroupType',
'title' => 'title',
'varies_by_localized_aspects' => 'variesByLocalizedAspects',
'image_url' => 'imageUrl',
'additional_image_urls' => 'additionalImageUrls',
'image_altering_prohibited' => 'imageAlteringProhibited'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_group_id' => 'setItemGroupId',
'item_group_type' => 'setItemGroupType',
'title' => 'setTitle',
'varies_by_localized_aspects' => 'setVariesByLocalizedAspects',
'image_url' => 'setImageUrl',
'additional_image_urls' => 'setAdditionalImageUrls',
'image_altering_prohibited' => 'setImageAlteringProhibited'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_group_id' => 'getItemGroupId',
'item_group_type' => 'getItemGroupType',
'title' => 'getTitle',
'varies_by_localized_aspects' => 'getVariesByLocalizedAspects',
'image_url' => 'getImageUrl',
'additional_image_urls' => 'getAdditionalImageUrls',
'image_altering_prohibited' => 'getImageAlteringProhibited'    ];

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
        $this->container['item_group_id'] = isset($data['item_group_id']) ? $data['item_group_id'] : null;
        $this->container['item_group_type'] = isset($data['item_group_type']) ? $data['item_group_type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['varies_by_localized_aspects'] = isset($data['varies_by_localized_aspects']) ? $data['varies_by_localized_aspects'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['additional_image_urls'] = isset($data['additional_image_urls']) ? $data['additional_image_urls'] : null;
        $this->container['image_altering_prohibited'] = isset($data['image_altering_prohibited']) ? $data['image_altering_prohibited'] : null;
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
     * Gets item_group_id
     *
     * @return string
     */
    public function getItemGroupId()
    {
        return $this->container['item_group_id'];
    }

    /**
     * Sets item_group_id
     *
     * @param string $item_group_id The unique identifier for the item group. This ID is returned in the primaryItemGroupId column of the Item Feed file.
     *
     * @return $this
     */
    public function setItemGroupId($item_group_id)
    {
        $this->container['item_group_id'] = $item_group_id;

        return $this;
    }

    /**
     * Gets item_group_type
     *
     * @return string
     */
    public function getItemGroupType()
    {
        return $this->container['item_group_type'];
    }

    /**
     * Sets item_group_type
     *
     * @param string $item_group_type The item group type. For example: SELLER_DEFINED_VARIATIONS, indicates that the item group was created by the seller. Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setItemGroupType($item_group_type)
    {
        $this->container['item_group_type'] = $item_group_type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The seller created title of the item group. This text is an escaped string when special characters are present, using the following rules: Double quotes (&quot;) and backslashes (\\) in the Title are escaped with a backslash (\\) character If there are any tabs (\\t), double quotes (&quot;), or backslashes (\\) in the Title, the entire Title will be wrapped in double quotes. For example Before: Misty Rainforest Modern Masters 2017 MTG Magic Fetch Land Free Ship W\\Tracking Marvel Legends HULK 8&quot; Figure Avengers Age of Ultron Studios 6&quot; Series After: &quot;Misty Rainforest Modern Masters 2017 MTG Magic Fetch Land Free Ship W\\\\ Tracking&quot; &quot;Marvel Legends HULK 8\\&quot; Figure Avengers Age of Ultron Studios 6\\&quot; Series&quot;
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets varies_by_localized_aspects
     *
     * @return string
     */
    public function getVariesByLocalizedAspects()
    {
        return $this->container['varies_by_localized_aspects'];
    }

    /**
     * Sets varies_by_localized_aspects
     *
     * @param string $varies_by_localized_aspects A pipe separated (|) list of the aspect (variation) names for this item group. The aspect name is BASE64 encoded. Note: This column can contain multiple values. &nbsp;&nbsp; Encoded Format: &nbsp;&nbsp;&nbsp;aspectName|aspectName &nbsp;&nbsp; Encoded Example (The delimiters are emphasized): &nbsp;&nbsp;&nbsp;Q29sb3I=|U2l6ZQ== &nbsp;&nbsp; Decoded: &nbsp;&nbsp;&nbsp;Color|Size
     *
     * @return $this
     */
    public function setVariesByLocalizedAspects($varies_by_localized_aspects)
    {
        $this->container['varies_by_localized_aspects'] = $varies_by_localized_aspects;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url The URL to the primary image of the item. The other images of the item group are returned in the additionalImageUrls column.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets additional_image_urls
     *
     * @return string
     */
    public function getAdditionalImageUrls()
    {
        return $this->container['additional_image_urls'];
    }

    /**
     * Sets additional_image_urls
     *
     * @param string $additional_image_urls A pipe separated (|) list of URLs for the additional images for the item group. These images are in addition to the primary image, which is returned in the imageUrl column. Note: This column can contain multiple values.
     *
     * @return $this
     */
    public function setAdditionalImageUrls($additional_image_urls)
    {
        $this->container['additional_image_urls'] = $additional_image_urls;

        return $this;
    }

    /**
     * Gets image_altering_prohibited
     *
     * @return bool
     */
    public function getImageAlteringProhibited()
    {
        return $this->container['image_altering_prohibited'];
    }

    /**
     * Sets image_altering_prohibited
     *
     * @param bool $image_altering_prohibited A boolean that indicates whether the images can be altered. If the value is true, you cannot modify the image. Note: Due to image licensing agreements and other legal concerns, modification (including resizing) of some images is strictly prohibited. These images are for display as-is only.
     *
     * @return $this
     */
    public function setImageAlteringProhibited($image_altering_prohibited)
    {
        $this->container['image_altering_prohibited'] = $image_altering_prohibited;

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
