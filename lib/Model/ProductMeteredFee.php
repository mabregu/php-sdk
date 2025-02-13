<?php
/**
 * Trust Payments SDK
 *
 * This library allows to interact with the Trust Payments payment service.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace TrustPayments\Sdk\Model;

use \ArrayAccess;
use \TrustPayments\Sdk\ObjectSerializer;

/**
 * ProductMeteredFee model
 *
 * @category    Class
 * @description 
 * @package     TrustPayments\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ProductMeteredFee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductMeteredFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'component' => '\TrustPayments\Sdk\Model\SubscriptionProductComponent',
        'description' => '\TrustPayments\Sdk\Model\DatabaseTranslatedString',
        'id' => 'int',
        'linked_space_id' => 'int',
        'metric' => '\TrustPayments\Sdk\Model\SubscriptionMetric',
        'name' => '\TrustPayments\Sdk\Model\DatabaseTranslatedString',
        'tier_pricing' => '\TrustPayments\Sdk\Model\ProductMeteredTierPricing',
        'type' => '\TrustPayments\Sdk\Model\ProductFeeType',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'component' => null,
        'description' => null,
        'id' => 'int64',
        'linked_space_id' => 'int64',
        'metric' => null,
        'name' => null,
        'tier_pricing' => null,
        'type' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'component' => 'component',
        'description' => 'description',
        'id' => 'id',
        'linked_space_id' => 'linkedSpaceId',
        'metric' => 'metric',
        'name' => 'name',
        'tier_pricing' => 'tierPricing',
        'type' => 'type',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'component' => 'setComponent',
        'description' => 'setDescription',
        'id' => 'setId',
        'linked_space_id' => 'setLinkedSpaceId',
        'metric' => 'setMetric',
        'name' => 'setName',
        'tier_pricing' => 'setTierPricing',
        'type' => 'setType',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'component' => 'getComponent',
        'description' => 'getDescription',
        'id' => 'getId',
        'linked_space_id' => 'getLinkedSpaceId',
        'metric' => 'getMetric',
        'name' => 'getName',
        'tier_pricing' => 'getTierPricing',
        'type' => 'getType',
        'version' => 'getVersion'
    ];

    

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
        
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['tier_pricing'] = isset($data['tier_pricing']) ? $data['tier_pricing'] : null;
        
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
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
     * Gets component
     *
     * @return \TrustPayments\Sdk\Model\SubscriptionProductComponent
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param \TrustPayments\Sdk\Model\SubscriptionProductComponent $component 
     *
     * @return $this
     */
    public function setComponent($component)
    {
        $this->container['component'] = $component;

        return $this;
    }
    

    /**
     * Gets description
     *
     * @return \TrustPayments\Sdk\Model\DatabaseTranslatedString
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \TrustPayments\Sdk\Model\DatabaseTranslatedString $description The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The linked space id holds the ID of the space to which the entity belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets metric
     *
     * @return \TrustPayments\Sdk\Model\SubscriptionMetric
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param \TrustPayments\Sdk\Model\SubscriptionMetric $metric 
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return \TrustPayments\Sdk\Model\DatabaseTranslatedString
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \TrustPayments\Sdk\Model\DatabaseTranslatedString $name The name of the fee should describe for the subscriber in few words for what the fee is for.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets tier_pricing
     *
     * @return \TrustPayments\Sdk\Model\ProductMeteredTierPricing
     */
    public function getTierPricing()
    {
        return $this->container['tier_pricing'];
    }

    /**
     * Sets tier_pricing
     *
     * @param \TrustPayments\Sdk\Model\ProductMeteredTierPricing $tier_pricing The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
     *
     * @return $this
     */
    public function setTierPricing($tier_pricing)
    {
        $this->container['tier_pricing'] = $tier_pricing;

        return $this;
    }
    

    /**
     * Gets type
     *
     * @return \TrustPayments\Sdk\Model\ProductFeeType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TrustPayments\Sdk\Model\ProductFeeType $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


