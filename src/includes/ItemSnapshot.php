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

class ItemSnapshot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemSnapshot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_id' => 'string',
'availability' => 'string',
'title' => 'string',
'image_url' => 'string',
'category' => 'string',
'category_id' => 'string',
'buying_options' => 'string',
'seller_username' => 'string',
'seller_feedback_percentage' => 'string',
'seller_feedback_score' => 'string',
'gtin' => 'string',
'brand' => 'string',
'mpn' => 'string',
'epid' => 'string',
'condition_id' => 'string',
'condition' => 'string',
'price_value' => 'string',
'price_currency' => 'string',
'primary_item_group_id' => 'string',
'primary_item_group_type' => 'string',
'item_end_date' => 'string',
'seller_item_revision' => 'string',
'item_location_country' => 'string',
'localized_aspects' => 'string',
'seller_trust_level' => 'string',
'image_altering_prohibited' => 'bool',
'estimated_available_quantity' => 'int',
'availability_threshold_type' => 'string',
'availability_threshold' => 'int',
'item_snapshot_date' => 'string',
'original_price_value' => 'string',
'original_price_currency' => 'string',
'discount_amount' => 'string',
'discount_percentage' => 'string',
'returns_accepted' => 'bool',
'return_period_value' => 'int',
'return_period_unit' => 'string',
'refund_method' => 'string',
'return_method' => 'string',
'return_shipping_cost_payer' => 'string',
'energy_efficiency_class' => 'string',
'additional_image_urls' => 'string',
'delivery_options' => 'string',
'ship_to_included_regions' => 'string',
'ship_to_excluded_regions' => 'string',
'accepted_payment_methods' => 'string',
'qualified_programs' => 'string',
'lot_size' => 'int',
'shipping_cost_type' => 'string',
'shipping_cost' => 'string',
'additional_shipping_cost_per_unit' => 'string',
'quantity_used_for_estimate' => 'int',
'shipping_carrier_code' => 'string',
'shipping_service_code' => 'string',
'shipping_type' => 'string',
'unit_price' => 'string',
'unit_pricing_measure' => 'string',
'inferred_epid' => 'string',
'item_creation_date' => 'string',
'legacy_item_id' => 'string',
'alerts' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_id' => null,
'availability' => null,
'title' => null,
'image_url' => null,
'category' => null,
'category_id' => null,
'buying_options' => null,
'seller_username' => null,
'seller_feedback_percentage' => null,
'seller_feedback_score' => null,
'gtin' => null,
'brand' => null,
'mpn' => null,
'epid' => null,
'condition_id' => null,
'condition' => null,
'price_value' => null,
'price_currency' => null,
'primary_item_group_id' => null,
'primary_item_group_type' => null,
'item_end_date' => null,
'seller_item_revision' => null,
'item_location_country' => null,
'localized_aspects' => null,
'seller_trust_level' => null,
'image_altering_prohibited' => null,
'estimated_available_quantity' => 'int32',
'availability_threshold_type' => null,
'availability_threshold' => 'int32',
'item_snapshot_date' => null,
'original_price_value' => null,
'original_price_currency' => null,
'discount_amount' => null,
'discount_percentage' => null,
'returns_accepted' => null,
'return_period_value' => 'int32',
'return_period_unit' => null,
'refund_method' => null,
'return_method' => null,
'return_shipping_cost_payer' => null,
'energy_efficiency_class' => null,
'additional_image_urls' => null,
'delivery_options' => null,
'ship_to_included_regions' => null,
'ship_to_excluded_regions' => null,
'accepted_payment_methods' => null,
'qualified_programs' => null,
'lot_size' => 'int32',
'shipping_cost_type' => null,
'shipping_cost' => null,
'additional_shipping_cost_per_unit' => null,
'quantity_used_for_estimate' => 'int32',
'shipping_carrier_code' => null,
'shipping_service_code' => null,
'shipping_type' => null,
'unit_price' => null,
'unit_pricing_measure' => null,
'inferred_epid' => null,
'item_creation_date' => null,
'legacy_item_id' => null,
'alerts' => null    ];

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
        'item_id' => 'itemId',
'availability' => 'availability',
'title' => 'title',
'image_url' => 'imageUrl',
'category' => 'category',
'category_id' => 'categoryId',
'buying_options' => 'buyingOptions',
'seller_username' => 'sellerUsername',
'seller_feedback_percentage' => 'sellerFeedbackPercentage',
'seller_feedback_score' => 'sellerFeedbackScore',
'gtin' => 'gtin',
'brand' => 'brand',
'mpn' => 'mpn',
'epid' => 'epid',
'condition_id' => 'conditionId',
'condition' => 'condition',
'price_value' => 'priceValue',
'price_currency' => 'priceCurrency',
'primary_item_group_id' => 'primaryItemGroupId',
'primary_item_group_type' => 'primaryItemGroupType',
'item_end_date' => 'itemEndDate',
'seller_item_revision' => 'sellerItemRevision',
'item_location_country' => 'itemLocationCountry',
'localized_aspects' => 'localizedAspects',
'seller_trust_level' => 'sellerTrustLevel',
'image_altering_prohibited' => 'imageAlteringProhibited',
'estimated_available_quantity' => 'estimatedAvailableQuantity',
'availability_threshold_type' => 'availabilityThresholdType',
'availability_threshold' => 'availabilityThreshold',
'item_snapshot_date' => 'itemSnapshotDate',
'original_price_value' => 'originalPriceValue',
'original_price_currency' => 'originalPriceCurrency',
'discount_amount' => 'discountAmount',
'discount_percentage' => 'discountPercentage',
'returns_accepted' => 'returnsAccepted',
'return_period_value' => 'returnPeriodValue',
'return_period_unit' => 'returnPeriodUnit',
'refund_method' => 'refundMethod',
'return_method' => 'returnMethod',
'return_shipping_cost_payer' => 'returnShippingCostPayer',
'energy_efficiency_class' => 'energyEfficiencyClass',
'additional_image_urls' => 'additionalImageUrls',
'delivery_options' => 'deliveryOptions',
'ship_to_included_regions' => 'shipToIncludedRegions',
'ship_to_excluded_regions' => 'shipToExcludedRegions',
'accepted_payment_methods' => 'acceptedPaymentMethods',
'qualified_programs' => 'qualifiedPrograms',
'lot_size' => 'lotSize',
'shipping_cost_type' => 'shippingCostType',
'shipping_cost' => 'shippingCost',
'additional_shipping_cost_per_unit' => 'additionalShippingCostPerUnit',
'quantity_used_for_estimate' => 'quantityUsedForEstimate',
'shipping_carrier_code' => 'shippingCarrierCode',
'shipping_service_code' => 'shippingServiceCode',
'shipping_type' => 'shippingType',
'unit_price' => 'unitPrice',
'unit_pricing_measure' => 'unitPricingMeasure',
'inferred_epid' => 'inferredEpid',
'item_creation_date' => 'itemCreationDate',
'legacy_item_id' => 'legacyItemId',
'alerts' => 'alerts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
'availability' => 'setAvailability',
'title' => 'setTitle',
'image_url' => 'setImageUrl',
'category' => 'setCategory',
'category_id' => 'setCategoryId',
'buying_options' => 'setBuyingOptions',
'seller_username' => 'setSellerUsername',
'seller_feedback_percentage' => 'setSellerFeedbackPercentage',
'seller_feedback_score' => 'setSellerFeedbackScore',
'gtin' => 'setGtin',
'brand' => 'setBrand',
'mpn' => 'setMpn',
'epid' => 'setEpid',
'condition_id' => 'setConditionId',
'condition' => 'setCondition',
'price_value' => 'setPriceValue',
'price_currency' => 'setPriceCurrency',
'primary_item_group_id' => 'setPrimaryItemGroupId',
'primary_item_group_type' => 'setPrimaryItemGroupType',
'item_end_date' => 'setItemEndDate',
'seller_item_revision' => 'setSellerItemRevision',
'item_location_country' => 'setItemLocationCountry',
'localized_aspects' => 'setLocalizedAspects',
'seller_trust_level' => 'setSellerTrustLevel',
'image_altering_prohibited' => 'setImageAlteringProhibited',
'estimated_available_quantity' => 'setEstimatedAvailableQuantity',
'availability_threshold_type' => 'setAvailabilityThresholdType',
'availability_threshold' => 'setAvailabilityThreshold',
'item_snapshot_date' => 'setItemSnapshotDate',
'original_price_value' => 'setOriginalPriceValue',
'original_price_currency' => 'setOriginalPriceCurrency',
'discount_amount' => 'setDiscountAmount',
'discount_percentage' => 'setDiscountPercentage',
'returns_accepted' => 'setReturnsAccepted',
'return_period_value' => 'setReturnPeriodValue',
'return_period_unit' => 'setReturnPeriodUnit',
'refund_method' => 'setRefundMethod',
'return_method' => 'setReturnMethod',
'return_shipping_cost_payer' => 'setReturnShippingCostPayer',
'energy_efficiency_class' => 'setEnergyEfficiencyClass',
'additional_image_urls' => 'setAdditionalImageUrls',
'delivery_options' => 'setDeliveryOptions',
'ship_to_included_regions' => 'setShipToIncludedRegions',
'ship_to_excluded_regions' => 'setShipToExcludedRegions',
'accepted_payment_methods' => 'setAcceptedPaymentMethods',
'qualified_programs' => 'setQualifiedPrograms',
'lot_size' => 'setLotSize',
'shipping_cost_type' => 'setShippingCostType',
'shipping_cost' => 'setShippingCost',
'additional_shipping_cost_per_unit' => 'setAdditionalShippingCostPerUnit',
'quantity_used_for_estimate' => 'setQuantityUsedForEstimate',
'shipping_carrier_code' => 'setShippingCarrierCode',
'shipping_service_code' => 'setShippingServiceCode',
'shipping_type' => 'setShippingType',
'unit_price' => 'setUnitPrice',
'unit_pricing_measure' => 'setUnitPricingMeasure',
'inferred_epid' => 'setInferredEpid',
'item_creation_date' => 'setItemCreationDate',
'legacy_item_id' => 'setLegacyItemId',
'alerts' => 'setAlerts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
'availability' => 'getAvailability',
'title' => 'getTitle',
'image_url' => 'getImageUrl',
'category' => 'getCategory',
'category_id' => 'getCategoryId',
'buying_options' => 'getBuyingOptions',
'seller_username' => 'getSellerUsername',
'seller_feedback_percentage' => 'getSellerFeedbackPercentage',
'seller_feedback_score' => 'getSellerFeedbackScore',
'gtin' => 'getGtin',
'brand' => 'getBrand',
'mpn' => 'getMpn',
'epid' => 'getEpid',
'condition_id' => 'getConditionId',
'condition' => 'getCondition',
'price_value' => 'getPriceValue',
'price_currency' => 'getPriceCurrency',
'primary_item_group_id' => 'getPrimaryItemGroupId',
'primary_item_group_type' => 'getPrimaryItemGroupType',
'item_end_date' => 'getItemEndDate',
'seller_item_revision' => 'getSellerItemRevision',
'item_location_country' => 'getItemLocationCountry',
'localized_aspects' => 'getLocalizedAspects',
'seller_trust_level' => 'getSellerTrustLevel',
'image_altering_prohibited' => 'getImageAlteringProhibited',
'estimated_available_quantity' => 'getEstimatedAvailableQuantity',
'availability_threshold_type' => 'getAvailabilityThresholdType',
'availability_threshold' => 'getAvailabilityThreshold',
'item_snapshot_date' => 'getItemSnapshotDate',
'original_price_value' => 'getOriginalPriceValue',
'original_price_currency' => 'getOriginalPriceCurrency',
'discount_amount' => 'getDiscountAmount',
'discount_percentage' => 'getDiscountPercentage',
'returns_accepted' => 'getReturnsAccepted',
'return_period_value' => 'getReturnPeriodValue',
'return_period_unit' => 'getReturnPeriodUnit',
'refund_method' => 'getRefundMethod',
'return_method' => 'getReturnMethod',
'return_shipping_cost_payer' => 'getReturnShippingCostPayer',
'energy_efficiency_class' => 'getEnergyEfficiencyClass',
'additional_image_urls' => 'getAdditionalImageUrls',
'delivery_options' => 'getDeliveryOptions',
'ship_to_included_regions' => 'getShipToIncludedRegions',
'ship_to_excluded_regions' => 'getShipToExcludedRegions',
'accepted_payment_methods' => 'getAcceptedPaymentMethods',
'qualified_programs' => 'getQualifiedPrograms',
'lot_size' => 'getLotSize',
'shipping_cost_type' => 'getShippingCostType',
'shipping_cost' => 'getShippingCost',
'additional_shipping_cost_per_unit' => 'getAdditionalShippingCostPerUnit',
'quantity_used_for_estimate' => 'getQuantityUsedForEstimate',
'shipping_carrier_code' => 'getShippingCarrierCode',
'shipping_service_code' => 'getShippingServiceCode',
'shipping_type' => 'getShippingType',
'unit_price' => 'getUnitPrice',
'unit_pricing_measure' => 'getUnitPricingMeasure',
'inferred_epid' => 'getInferredEpid',
'item_creation_date' => 'getItemCreationDate',
'legacy_item_id' => 'getLegacyItemId',
'alerts' => 'getAlerts'    ];

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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['buying_options'] = isset($data['buying_options']) ? $data['buying_options'] : null;
        $this->container['seller_username'] = isset($data['seller_username']) ? $data['seller_username'] : null;
        $this->container['seller_feedback_percentage'] = isset($data['seller_feedback_percentage']) ? $data['seller_feedback_percentage'] : null;
        $this->container['seller_feedback_score'] = isset($data['seller_feedback_score']) ? $data['seller_feedback_score'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        $this->container['epid'] = isset($data['epid']) ? $data['epid'] : null;
        $this->container['condition_id'] = isset($data['condition_id']) ? $data['condition_id'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['price_value'] = isset($data['price_value']) ? $data['price_value'] : null;
        $this->container['price_currency'] = isset($data['price_currency']) ? $data['price_currency'] : null;
        $this->container['primary_item_group_id'] = isset($data['primary_item_group_id']) ? $data['primary_item_group_id'] : null;
        $this->container['primary_item_group_type'] = isset($data['primary_item_group_type']) ? $data['primary_item_group_type'] : null;
        $this->container['item_end_date'] = isset($data['item_end_date']) ? $data['item_end_date'] : null;
        $this->container['seller_item_revision'] = isset($data['seller_item_revision']) ? $data['seller_item_revision'] : null;
        $this->container['item_location_country'] = isset($data['item_location_country']) ? $data['item_location_country'] : null;
        $this->container['localized_aspects'] = isset($data['localized_aspects']) ? $data['localized_aspects'] : null;
        $this->container['seller_trust_level'] = isset($data['seller_trust_level']) ? $data['seller_trust_level'] : null;
        $this->container['image_altering_prohibited'] = isset($data['image_altering_prohibited']) ? $data['image_altering_prohibited'] : null;
        $this->container['estimated_available_quantity'] = isset($data['estimated_available_quantity']) ? $data['estimated_available_quantity'] : null;
        $this->container['availability_threshold_type'] = isset($data['availability_threshold_type']) ? $data['availability_threshold_type'] : null;
        $this->container['availability_threshold'] = isset($data['availability_threshold']) ? $data['availability_threshold'] : null;
        $this->container['item_snapshot_date'] = isset($data['item_snapshot_date']) ? $data['item_snapshot_date'] : null;
        $this->container['original_price_value'] = isset($data['original_price_value']) ? $data['original_price_value'] : null;
        $this->container['original_price_currency'] = isset($data['original_price_currency']) ? $data['original_price_currency'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['returns_accepted'] = isset($data['returns_accepted']) ? $data['returns_accepted'] : null;
        $this->container['return_period_value'] = isset($data['return_period_value']) ? $data['return_period_value'] : null;
        $this->container['return_period_unit'] = isset($data['return_period_unit']) ? $data['return_period_unit'] : null;
        $this->container['refund_method'] = isset($data['refund_method']) ? $data['refund_method'] : null;
        $this->container['return_method'] = isset($data['return_method']) ? $data['return_method'] : null;
        $this->container['return_shipping_cost_payer'] = isset($data['return_shipping_cost_payer']) ? $data['return_shipping_cost_payer'] : null;
        $this->container['energy_efficiency_class'] = isset($data['energy_efficiency_class']) ? $data['energy_efficiency_class'] : null;
        $this->container['additional_image_urls'] = isset($data['additional_image_urls']) ? $data['additional_image_urls'] : null;
        $this->container['delivery_options'] = isset($data['delivery_options']) ? $data['delivery_options'] : null;
        $this->container['ship_to_included_regions'] = isset($data['ship_to_included_regions']) ? $data['ship_to_included_regions'] : null;
        $this->container['ship_to_excluded_regions'] = isset($data['ship_to_excluded_regions']) ? $data['ship_to_excluded_regions'] : null;
        $this->container['accepted_payment_methods'] = isset($data['accepted_payment_methods']) ? $data['accepted_payment_methods'] : null;
        $this->container['qualified_programs'] = isset($data['qualified_programs']) ? $data['qualified_programs'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['shipping_cost_type'] = isset($data['shipping_cost_type']) ? $data['shipping_cost_type'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['additional_shipping_cost_per_unit'] = isset($data['additional_shipping_cost_per_unit']) ? $data['additional_shipping_cost_per_unit'] : null;
        $this->container['quantity_used_for_estimate'] = isset($data['quantity_used_for_estimate']) ? $data['quantity_used_for_estimate'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['shipping_type'] = isset($data['shipping_type']) ? $data['shipping_type'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['unit_pricing_measure'] = isset($data['unit_pricing_measure']) ? $data['unit_pricing_measure'] : null;
        $this->container['inferred_epid'] = isset($data['inferred_epid']) ? $data['inferred_epid'] : null;
        $this->container['item_creation_date'] = isset($data['item_creation_date']) ? $data['item_creation_date'] : null;
        $this->container['legacy_item_id'] = isset($data['legacy_item_id']) ? $data['legacy_item_id'] : null;
        $this->container['alerts'] = isset($data['alerts']) ? $data['alerts'] : null;
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
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id The unique identifier of an item in eBay RESTful format. An example would be v1|162846450672|461882996982.
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability An enumeration value representing the item's availability (possibility of being purchased). Values: AVAILABLE TEMPORARILY_UNAVAILABLE UNAVAILABLE Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/AvailabilityEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

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
     * @param string $title The seller created title of the item. This text is an escaped string when special characters are present, using the following rules: Double quotes (&quot;) and backslashes (\\) in the Title are escaped with a backslash (\\) character If there are any tabs (\\t), double quotes (&quot;), or backslashes (\\) in the Title, the entire Title will be wrapped in double quotes. For example Before: Misty Rainforest Modern Masters 2017 MTG Magic Fetch Land Free Ship W\\Tracking Marvel Legends HULK 8&quot; Figure Avengers Age of Ultron Studios 6&quot; Series After: &quot;Misty Rainforest Modern Masters 2017 MTG Magic Fetch Land Free Ship W\\\\ Tracking&quot; &quot;Marvel Legends HULK 8\\&quot; Figure Avengers Age of Ultron Studios 6\\&quot; Series&quot;
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $image_url The URL to the primary image of the item. This is the URL of the largest image available based on what the seller submitted.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
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
     * @param string $category The label of the category of the item. For example: Toys &amp; Hobbies|Action Figures|Comic Book Heroes .
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id The ID of the category of the item. For example: The ID for Toys &amp; Hobbies|Action Figures|Comic Book Heroes is 158671.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets buying_options
     *
     * @return string
     */
    public function getBuyingOptions()
    {
        return $this->container['buying_options'];
    }

    /**
     * Sets buying_options
     *
     * @param string $buying_options A comma separated list of the purchase options available for the item, such as FIXED_PRICE, AUCTION. Code so that your app gracefully handles any future changes to this list. Note: This column can contain multiple values.
     *
     * @return $this
     */
    public function setBuyingOptions($buying_options)
    {
        $this->container['buying_options'] = $buying_options;

        return $this;
    }

    /**
     * Gets seller_username
     *
     * @return string
     */
    public function getSellerUsername()
    {
        return $this->container['seller_username'];
    }

    /**
     * Sets seller_username
     *
     * @param string $seller_username The seller's eBay user name.
     *
     * @return $this
     */
    public function setSellerUsername($seller_username)
    {
        $this->container['seller_username'] = $seller_username;

        return $this;
    }

    /**
     * Gets seller_feedback_percentage
     *
     * @return string
     */
    public function getSellerFeedbackPercentage()
    {
        return $this->container['seller_feedback_percentage'];
    }

    /**
     * Sets seller_feedback_percentage
     *
     * @param string $seller_feedback_percentage The percentage of the seller's total positive feedback.
     *
     * @return $this
     */
    public function setSellerFeedbackPercentage($seller_feedback_percentage)
    {
        $this->container['seller_feedback_percentage'] = $seller_feedback_percentage;

        return $this;
    }

    /**
     * Gets seller_feedback_score
     *
     * @return string
     */
    public function getSellerFeedbackScore()
    {
        return $this->container['seller_feedback_score'];
    }

    /**
     * Sets seller_feedback_score
     *
     * @param string $seller_feedback_score The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller.
     *
     * @return $this
     */
    public function setSellerFeedbackScore($seller_feedback_score)
    {
        $this->container['seller_feedback_score'] = $seller_feedback_score;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin The unique Global Trade Item Number of the item as defined by https://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value.
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand The name brand of the item, such as Nike, Apple, etc.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string $mpn The manufacturer part number, which is a number that is used in combination with brand to identify a product.
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets epid
     *
     * @return string
     */
    public function getEpid()
    {
        return $this->container['epid'];
    }

    /**
     * Sets epid
     *
     * @param string $epid The eBay product identifier of a product from the eBay product catalog. You can use this value in the Browse API search method to retrieve items for this product and in the Marketing API methods to retrieve 'also viewed' and 'also bought' products to encourage up-selling and cross-selling.
     *
     * @return $this
     */
    public function setEpid($epid)
    {
        $this->container['epid'] = $epid;

        return $this;
    }

    /**
     * Gets condition_id
     *
     * @return string
     */
    public function getConditionId()
    {
        return $this->container['condition_id'];
    }

    /**
     * Sets condition_id
     *
     * @param string $condition_id The identifier of the condition of the item. For example, 1000 is the identifier for NEW. For a list of condition names and IDs, see Item Condition IDs and Names. Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setConditionId($condition_id)
    {
        $this->container['condition_id'] = $condition_id;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The text describing the condition of the item, such as New or Used. For a list of condition names, see Item Condition IDs and Names. Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets price_value
     *
     * @return string
     */
    public function getPriceValue()
    {
        return $this->container['price_value'];
    }

    /**
     * Sets price_value
     *
     * @param string $price_value The price of the item. Note: This price can be a discounted price.
     *
     * @return $this
     */
    public function setPriceValue($price_value)
    {
        $this->container['price_value'] = $price_value;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param string $price_currency The currency used for the price of the item. Generally, this is the currency used by the country of the eBay site offering the item. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/CurrencyCodeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPriceCurrency($price_currency)
    {
        $this->container['price_currency'] = $price_currency;

        return $this;
    }

    /**
     * Gets primary_item_group_id
     *
     * @return string
     */
    public function getPrimaryItemGroupId()
    {
        return $this->container['primary_item_group_id'];
    }

    /**
     * Sets primary_item_group_id
     *
     * @param string $primary_item_group_id The unique identifier for the item group that contains this item. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return $this
     */
    public function setPrimaryItemGroupId($primary_item_group_id)
    {
        $this->container['primary_item_group_id'] = $primary_item_group_id;

        return $this;
    }

    /**
     * Gets primary_item_group_type
     *
     * @return string
     */
    public function getPrimaryItemGroupType()
    {
        return $this->container['primary_item_group_type'];
    }

    /**
     * Sets primary_item_group_type
     *
     * @param string $primary_item_group_type The item group type. Supported value: SELLER_DEFINED_VARIATIONS, indicates that the item group was created by the seller. Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setPrimaryItemGroupType($primary_item_group_type)
    {
        $this->container['primary_item_group_type'] = $primary_item_group_type;

        return $this;
    }

    /**
     * Gets item_end_date
     *
     * @return string
     */
    public function getItemEndDate()
    {
        return $this->container['item_end_date'];
    }

    /**
     * Sets item_end_date
     *
     * @param string $item_end_date A timestamp indicating when the item's sale period will end based on its start date and duration. For Good 'Tail Cancelled items, no value is returned in this column. Format: UTC (yyyy-MM-ddThh:mm:ss.sssZ).
     *
     * @return $this
     */
    public function setItemEndDate($item_end_date)
    {
        $this->container['item_end_date'] = $item_end_date;

        return $this;
    }

    /**
     * Gets seller_item_revision
     *
     * @return string
     */
    public function getSellerItemRevision()
    {
        return $this->container['seller_item_revision'];
    }

    /**
     * Sets seller_item_revision
     *
     * @param string $seller_item_revision An identifier generated/incremented when a seller revises the item. There are two types of item revisions: Seller changes, such as changing the title eBay system changes, such as changing the quantity when an item is purchased This ID is changed only when the seller makes a change to the item.
     *
     * @return $this
     */
    public function setSellerItemRevision($seller_item_revision)
    {
        $this->container['seller_item_revision'] = $seller_item_revision;

        return $this;
    }

    /**
     * Gets item_location_country
     *
     * @return string
     */
    public function getItemLocationCountry()
    {
        return $this->container['item_location_country'];
    }

    /**
     * Sets item_location_country
     *
     * @param string $item_location_country The country where the item is physically located.
     *
     * @return $this
     */
    public function setItemLocationCountry($item_location_country)
    {
        $this->container['item_location_country'] = $item_location_country;

        return $this;
    }

    /**
     * Gets localized_aspects
     *
     * @return string
     */
    public function getLocalizedAspects()
    {
        return $this->container['localized_aspects'];
    }

    /**
     * Sets localized_aspects
     *
     * @param string $localized_aspects A semicolon separated list of the name/value pairs for the aspects of the item, which are BASE64 encoded. The aspect label is separated by a pipe (|), the aspect name and value are separated by a colon (:) and the name/value pairs are separated by a semicolon (;). Example without Label &nbsp;&nbsp; Encoded Format: &nbsp;&nbsp;&nbsp;encodedName:encodedValue;encodedName:encodedValue;encodedName:encodedValue &nbsp;&nbsp; Encoded Example (The delimiters are emphasized): &nbsp;&nbsp;&nbsp;U2l6ZQ==:WEw=;Q29sb3I=:UmVk;U2xlZXZlcw==:TG9uZw== &nbsp;&nbsp; Decoded: &nbsp;&nbsp;&nbsp;Size:XL;Color:Red;Sleeves:Long Example with Label &nbsp;&nbsp; Encoded Format: &nbsp;&nbsp;&nbsp;encodedLabel|encodedName:encodedValue;encodedName:encodedValue;encodedLabel| &nbsp;&nbsp; Encoded Example (The delimiters are emphasized): &nbsp;&nbsp;&nbsp;UHJvZHVjdCBJZGVudGlmaWVycw==|R1RJTg==:MDE5MDE5ODA2NjYzMw==;QlJBTkQ=:QXBwbGU=;UHJvZHVjdCBLZXkgRmVhdHVyZXM=|TW9kZWw=:aVBob25lIDc= &nbsp;&nbsp; Decoded: &nbsp;&nbsp;&nbsp;Product Identifiers|GTIN:0190198066633;BRAND:Apple;Product Key Features|Model:iPhone 7 Note: The separators ( | : ; ) are not encoded. You must decode each label, name, and value separately. You cannot decode the entire string. For more information, see Encoded Aspects in the Buying Integration Guide.
     *
     * @return $this
     */
    public function setLocalizedAspects($localized_aspects)
    {
        $this->container['localized_aspects'] = $localized_aspects;

        return $this;
    }

    /**
     * Gets seller_trust_level
     *
     * @return string
     */
    public function getSellerTrustLevel()
    {
        return $this->container['seller_trust_level'];
    }

    /**
     * Sets seller_trust_level
     *
     * @param string $seller_trust_level An enumeration value representing the eBay status of the seller. Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/SellerTrustLevelEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setSellerTrustLevel($seller_trust_level)
    {
        $this->container['seller_trust_level'] = $seller_trust_level;

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
     * Gets estimated_available_quantity
     *
     * @return int
     */
    public function getEstimatedAvailableQuantity()
    {
        return $this->container['estimated_available_quantity'];
    }

    /**
     * Sets estimated_available_quantity
     *
     * @param int $estimated_available_quantity The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned.
     *
     * @return $this
     */
    public function setEstimatedAvailableQuantity($estimated_available_quantity)
    {
        $this->container['estimated_available_quantity'] = $estimated_available_quantity;

        return $this;
    }

    /**
     * Gets availability_threshold_type
     *
     * @return string
     */
    public function getAvailabilityThresholdType()
    {
        return $this->container['availability_threshold_type'];
    }

    /**
     * Sets availability_threshold_type
     *
     * @param string $availability_threshold_type This column has a value only when the seller sets their Display Item Quantity preference to Display &quot;More than 10 available&quot; in your listing (if applicable). The value of this column will be MORE_THAN. This indicates that the seller has more than the 'Display Item Quantity', which is 10, in stock for this item. The following are the Display Item Quantity preferences the seller can set. Display &quot;More than 10 available&quot; in your listing (if applicable) If the seller enables this preference, this column will have a value as long as there are more than 10 of this item in inventory. If the quantity is equal to 10 or drops below 10, this column will be null and the estimated quantity of the item is returned in the estimatedAvailableQuantity column. Display the exact quantity in your items If the seller enables this preference, the availabilityThresholdType and availabilityThreshold columns will be null and the estimated quantity of the item is returned in the estimatedAvailableQuantity column. Note: Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. Code so that your app gracefully handles any future changes to these preferences. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/AvailabilityThresholdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAvailabilityThresholdType($availability_threshold_type)
    {
        $this->container['availability_threshold_type'] = $availability_threshold_type;

        return $this;
    }

    /**
     * Gets availability_threshold
     *
     * @return int
     */
    public function getAvailabilityThreshold()
    {
        return $this->container['availability_threshold'];
    }

    /**
     * Sets availability_threshold
     *
     * @param int $availability_threshold This column has a value only when the seller sets their 'display item quantity' preference to Display &quot;More than 10 available&quot; in your listing (if applicable). The value of this column will be &quot;10&quot;, which is the threshold value. Code so that your app gracefully handles any future changes to this value.
     *
     * @return $this
     */
    public function setAvailabilityThreshold($availability_threshold)
    {
        $this->container['availability_threshold'] = $availability_threshold;

        return $this;
    }

    /**
     * Gets item_snapshot_date
     *
     * @return string
     */
    public function getItemSnapshotDate()
    {
        return $this->container['item_snapshot_date'];
    }

    /**
     * Sets item_snapshot_date
     *
     * @param string $item_snapshot_date This timestamp denotes the date and time the changes for that item were picked up and added to the snapshot feed file. For example, let's say you have a snapshot feed file and also ran the getItem method. When you compare the same item information from the two sources, you see that the price in the getItem method response is different from the price in the snapshot feed file. By knowing the date and time you submitted the getItem method, you can use the itemSnapshotDate data to determine which price is the most current for this item.
     *
     * @return $this
     */
    public function setItemSnapshotDate($item_snapshot_date)
    {
        $this->container['item_snapshot_date'] = $item_snapshot_date;

        return $this;
    }

    /**
     * Gets original_price_value
     *
     * @return string
     */
    public function getOriginalPriceValue()
    {
        return $this->container['original_price_value'];
    }

    /**
     * Sets original_price_value
     *
     * @param string $original_price_value The original selling price of the item. This lets you surface a strikethrough price for the item.
     *
     * @return $this
     */
    public function setOriginalPriceValue($original_price_value)
    {
        $this->container['original_price_value'] = $original_price_value;

        return $this;
    }

    /**
     * Gets original_price_currency
     *
     * @return string
     */
    public function getOriginalPriceCurrency()
    {
        return $this->container['original_price_currency'];
    }

    /**
     * Sets original_price_currency
     *
     * @param string $original_price_currency The currency of the originalPriceValue of the item and the discountAmount. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/CurrencyCodeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setOriginalPriceCurrency($original_price_currency)
    {
        $this->container['original_price_currency'] = $original_price_currency;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param string $discount_amount The calculated amount of the discount (originalPriceValue - priceValue). For example, if originalPriceValue is 70 and priceValue is 56, this value would be 14. Note: The currency shown in originalPriceCurrency is used for both discountAmount and originalPriceCurrency.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param string $discount_percentage The calculated discount percentage. For example, if originalPriceValue is 70 and discountAmount is 14, this value will be 20.
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets returns_accepted
     *
     * @return bool
     */
    public function getReturnsAccepted()
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted
     *
     * @param bool $returns_accepted Indicates whether the seller accepts returns for the item.
     *
     * @return $this
     */
    public function setReturnsAccepted($returns_accepted)
    {
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_period_value
     *
     * @return int
     */
    public function getReturnPeriodValue()
    {
        return $this->container['return_period_value'];
    }

    /**
     * Sets return_period_value
     *
     * @param int $return_period_value The amount of days that the buyer has to return the item after the purchase date. For example, if this value is 30, the return period is 30 days.
     *
     * @return $this
     */
    public function setReturnPeriodValue($return_period_value)
    {
        $this->container['return_period_value'] = $return_period_value;

        return $this;
    }

    /**
     * Gets return_period_unit
     *
     * @return string
     */
    public function getReturnPeriodUnit()
    {
        return $this->container['return_period_unit'];
    }

    /**
     * Sets return_period_unit
     *
     * @param string $return_period_unit An enumeration value that indicates the period of time being used to measure the duration, such as business days, months, or years. TimeDurationUnitEnum is a common type shared by multiple eBay APIs and fields to express the time unit, but for return period duration, this value will always be DAY. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/TimeDurationUnitEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReturnPeriodUnit($return_period_unit)
    {
        $this->container['return_period_unit'] = $return_period_unit;

        return $this;
    }

    /**
     * Gets refund_method
     *
     * @return string
     */
    public function getRefundMethod()
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method
     *
     * @param string $refund_method An enumeration value representing how a buyer is refunded when an item is returned. Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/RefundMethodEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setRefundMethod($refund_method)
    {
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets return_method
     *
     * @return string
     */
    public function getReturnMethod()
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method
     *
     * @param string $return_method An enumeration value that indicates the alternative methods for a full refund when an item is returned. This column will have data if the seller offers the buyer an item replacement or exchange instead of a monetary refund. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/ReturnMethodEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReturnMethod($return_method)
    {
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer
     *
     * @return string
     */
    public function getReturnShippingCostPayer()
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer
     *
     * @param string $return_shipping_cost_payer An enumeration value that indicates the party responsible for the return shipping costs when an item is returned. Valid Values: BUYER or SELLER Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/ReturnShippingCostPayerEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReturnShippingCostPayer($return_shipping_cost_payer)
    {
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

        return $this;
    }

    /**
     * Gets energy_efficiency_class
     *
     * @return string
     */
    public function getEnergyEfficiencyClass()
    {
        return $this->container['energy_efficiency_class'];
    }

    /**
     * Sets energy_efficiency_class
     *
     * @param string $energy_efficiency_class Indicates the European energy efficiency rating (EEK) of the item. This field is returned only if the seller specified the energy efficiency rating. The rating is a set of energy efficiency classes from A to G, where 'A' is the most energy efficient and 'G' is the least efficient. This rating helps buyers choose between various models. To retrieve the manufacturer's specifications for this item, when they are available, use the getItem method in the Browse API. The information is returned in the productFicheWebUrl field.
     *
     * @return $this
     */
    public function setEnergyEfficiencyClass($energy_efficiency_class)
    {
        $this->container['energy_efficiency_class'] = $energy_efficiency_class;

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
     * @param string $additional_image_urls A pipe separated (|) list of URLs for the additional images of the item. These images are in addition to the primary image, which is returned in the imageUrl column. Note: This column can contain multiple values.
     *
     * @return $this
     */
    public function setAdditionalImageUrls($additional_image_urls)
    {
        $this->container['additional_image_urls'] = $additional_image_urls;

        return $this;
    }

    /**
     * Gets delivery_options
     *
     * @return string
     */
    public function getDeliveryOptions()
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     *
     * @param string $delivery_options A comma separated list of delivery options for the item, such as SHIP_TO_HOME and SELLER_ARRANGED_LOCAL_PICKUP. This column lets you filter out items that cannot be shipped to the buyer. Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/feed/types/DeliveryOptionsEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setDeliveryOptions($delivery_options)
    {
        $this->container['delivery_options'] = $delivery_options;

        return $this;
    }

    /**
     * Gets ship_to_included_regions
     *
     * @return string
     */
    public function getShipToIncludedRegions()
    {
        return $this->container['ship_to_included_regions'];
    }

    /**
     * Sets ship_to_included_regions
     *
     * @param string $ship_to_included_regions A pipe (|) separated alphabetical list of the geographic countries and regions where the seller will ship the item. If a region is specified, you will need to subtract any countries and regions returned in the shipToExcludedRegions column to fully understand where the seller will ship. The COUNTRY: list is separated from the REGION: list with a semicolon (;). Format Example: COUNTRY:US|BM|GL|MX|PM;REGION:AFRICA|ASIA|CENTRAL_AMERICA_AND_CARIBBEAN|EUROPE|MIDDLE_EAST|OCEANIA|SOUTH_AMERICA|SOUTHEAST_ASIA; Country Values: The two-letter ISO 3166 standard code of the country. Region Values: AFRICA, AMERICAS, ANTARCTIC, ARCTIC, ASIA, AUSTRALIA, CENTRAL_AMERICA_AND_CARIBBEAN, EUROPE, EURO_UNION, GREATER_CHINA, MIDDLE_EAST, NORTH_AMERICA, OCEANIA, REST_OF_ASIA, SOUTHEAST_ASIA, SOUTH_AMERICA, WORLDWIDE Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setShipToIncludedRegions($ship_to_included_regions)
    {
        $this->container['ship_to_included_regions'] = $ship_to_included_regions;

        return $this;
    }

    /**
     * Gets ship_to_excluded_regions
     *
     * @return string
     */
    public function getShipToExcludedRegions()
    {
        return $this->container['ship_to_excluded_regions'];
    }

    /**
     * Sets ship_to_excluded_regions
     *
     * @param string $ship_to_excluded_regions A pipe (|) separated alphabetical list of the geographic countries and regions where the item cannot be shipped. These countries and regions refine (restrict) the shipToIncludedRegions list. The COUNTRY: list is separated from the REGION: list with a semicolon (;). Format Example: COUNTRY:US|BM|GL|MX|PM;REGION:AFRICA|ASIA|CENTRAL_AMERICA_AND_CARIBBEAN|EUROPE|MIDDLE_EAST|OCEANIA|SOUTH_AMERICA|SOUTHEAST_ASIA; Country Values: The two-letter ISO 3166 standard code of the country. Region Values: AFRICA, AMERICAS, ANTARCTIC, ARCTIC, ASIA, AUSTRALIA, CENTRAL_AMERICA_AND_CARIBBEAN, EUROPE, EURO_UNION, GREATER_CHINA, MIDDLE_EAST, NORTH_AMERICA, OCEANIA, REST_OF_ASIA, SOUTHEAST_ASIA, SOUTH_AMERICA, WORLDWIDE Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setShipToExcludedRegions($ship_to_excluded_regions)
    {
        $this->container['ship_to_excluded_regions'] = $ship_to_excluded_regions;

        return $this;
    }

    /**
     * Gets accepted_payment_methods
     *
     * @return string
     */
    public function getAcceptedPaymentMethods()
    {
        return $this->container['accepted_payment_methods'];
    }

    /**
     * Sets accepted_payment_methods
     *
     * @param string $accepted_payment_methods Indicates the credit card service that will be used to process the transaction. If this column contains PAYPAL, you can use the Buy Order API to checkout and purchase the item. If this column is empty, you must use another method for checkout.
     *
     * @return $this
     */
    public function setAcceptedPaymentMethods($accepted_payment_methods)
    {
        $this->container['accepted_payment_methods'] = $accepted_payment_methods;

        return $this;
    }

    /**
     * Gets qualified_programs
     *
     * @return string
     */
    public function getQualifiedPrograms()
    {
        return $this->container['qualified_programs'];
    }

    /**
     * Sets qualified_programs
     *
     * @param string $qualified_programs A pipe separated list of the qualified programs available for the item, such as EBAY_PLUS. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. Note: eBay Plus is available only to buyers in Germany, Austria, and Australia marketplaces.
     *
     * @return $this
     */
    public function setQualifiedPrograms($qualified_programs)
    {
        $this->container['qualified_programs'] = $qualified_programs;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int $lot_size The number of items in a lot. In other words, a lot size is the number of items that are being sold together. A lot is a set of two or more items included in a single listing that must be purchased together in a single order line item. All the items in the lot are the same but there can be multiple items in a single lot, such as the package of batteries shown in the example below. Item Lot Definition Lot Size A package of 24 AA batteries A box of 10 packages 10 A P235/75-15 Goodyear tire 4 tires 4 Fashion Jewelry Rings Package of 100 assorted rings 100 Note: Lots are not supported in all categories.
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets shipping_cost_type
     *
     * @return string
     */
    public function getShippingCostType()
    {
        return $this->container['shipping_cost_type'];
    }

    /**
     * Sets shipping_cost_type
     *
     * @param string $shipping_cost_type Indicates the class of the shipping cost. Valid Values: FIXED or CALCULATED Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setShippingCostType($shipping_cost_type)
    {
        $this->container['shipping_cost_type'] = $shipping_cost_type;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return string
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param string $shipping_cost The final shipping cost for all the items after all discounts are applied.
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets additional_shipping_cost_per_unit
     *
     * @return string
     */
    public function getAdditionalShippingCostPerUnit()
    {
        return $this->container['additional_shipping_cost_per_unit'];
    }

    /**
     * Sets additional_shipping_cost_per_unit
     *
     * @param string $additional_shipping_cost_per_unit Any per item additional shipping costs for a multi-item purchase. For example, let's say the shipping cost for a power cord is $3. But for an additional cord, the shipping cost is only $1. So if you bought 3 cords, the shippingCost would be $3 and this value would be $2 ($1 for each additional item).
     *
     * @return $this
     */
    public function setAdditionalShippingCostPerUnit($additional_shipping_cost_per_unit)
    {
        $this->container['additional_shipping_cost_per_unit'] = $additional_shipping_cost_per_unit;

        return $this;
    }

    /**
     * Gets quantity_used_for_estimate
     *
     * @return int
     */
    public function getQuantityUsedForEstimate()
    {
        return $this->container['quantity_used_for_estimate'];
    }

    /**
     * Sets quantity_used_for_estimate
     *
     * @param int $quantity_used_for_estimate The number of items used when calculating the shipping estimation information.
     *
     * @return $this
     */
    public function setQuantityUsedForEstimate($quantity_used_for_estimate)
    {
        $this->container['quantity_used_for_estimate'] = $quantity_used_for_estimate;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string $shipping_carrier_code The name of the shipping provider, such as FedEx, or USPS.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string $shipping_service_code The type of shipping service. For example, USPS First Class.
     *
     * @return $this
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets shipping_type
     *
     * @return string
     */
    public function getShippingType()
    {
        return $this->container['shipping_type'];
    }

    /**
     * Sets shipping_type
     *
     * @param string $shipping_type The type of a shipping option, such as EXPEDITED, ONE_DAY, STANDARD, ECONOMY, PICKUP, etc.
     *
     * @return $this
     */
    public function setShippingType($shipping_type)
    {
        $this->container['shipping_type'] = $shipping_type;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price This is the price per unit for the item. Some European countries require listings for certain types of products to include the price per unit so buyers can accurately compare prices. For example: &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_pricing_measure
     *
     * @return string
     */
    public function getUnitPricingMeasure()
    {
        return $this->container['unit_pricing_measure'];
    }

    /**
     * Sets unit_pricing_measure
     *
     * @param string $unit_pricing_measure The designation, such as size, weight, volume, count, etc., that was used to specify the quantity of the item. This helps buyers compare prices. For example, the following tells the buyer that the item is 7.99 per 100 grams. &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;
     *
     * @return $this
     */
    public function setUnitPricingMeasure($unit_pricing_measure)
    {
        $this->container['unit_pricing_measure'] = $unit_pricing_measure;

        return $this;
    }

    /**
     * Gets inferred_epid
     *
     * @return string
     */
    public function getInferredEpid()
    {
        return $this->container['inferred_epid'];
    }

    /**
     * Sets inferred_epid
     *
     * @param string $inferred_epid The ePID (eBay Product ID of a product in the eBay product catalog) for the item, which has been programmatically determined by eBay using the item's title, aspects, and other data. If the seller actually provided an ePID at listing time for the item, the ePID value is returned in the epid column instead.
     *
     * @return $this
     */
    public function setInferredEpid($inferred_epid)
    {
        $this->container['inferred_epid'] = $inferred_epid;

        return $this;
    }

    /**
     * Gets item_creation_date
     *
     * @return string
     */
    public function getItemCreationDate()
    {
        return $this->container['item_creation_date'];
    }

    /**
     * Sets item_creation_date
     *
     * @param string $item_creation_date A timestamp indicating when the item was created. The format is yyyy-mm-dd.
     *
     * @return $this
     */
    public function setItemCreationDate($item_creation_date)
    {
        $this->container['item_creation_date'] = $item_creation_date;

        return $this;
    }

    /**
     * Gets legacy_item_id
     *
     * @return string
     */
    public function getLegacyItemId()
    {
        return $this->container['legacy_item_id'];
    }

    /**
     * Sets legacy_item_id
     *
     * @param string $legacy_item_id The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.
     *
     * @return $this
     */
    public function setLegacyItemId($legacy_item_id)
    {
        $this->container['legacy_item_id'] = $legacy_item_id;

        return $this;
    }

    /**
     * Gets alerts
     *
     * @return string
     */
    public function getAlerts()
    {
        return $this->container['alerts'];
    }

    /**
     * Sets alerts
     *
     * @param string $alerts A pipe-separated list of the alerts available for the item, such as DELAYED_DELIVERY.
     *
     * @return $this
     */
    public function setAlerts($alerts)
    {
        $this->container['alerts'] = $alerts;

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
