<?php
/**
 * UserProfileProfileImages
 *
 * PHP version 5
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutodeskForge\Client\Model;

use \ArrayAccess;

/**
 * UserProfileProfileImages Class Doc Comment
 *
 * @category    Class
 * @description A flat JSON object of attribute-value pairs in which the attributes specify available profile image sizes in the format sizeX&lt;pixels&gt; (where &lt;pixels&gt; is an integer that represents both height and width in pixels of square profile images) and the values are URLs for downloading the images via HTTP
 * @package     AutodeskForge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserProfileProfileImages implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'userProfile_profileImages';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'size_x20' => 'string',
        'size_x40' => 'string',
        'size_x50' => 'string',
        'size_x58' => 'string',
        'size_x80' => 'string',
        'size_x120' => 'string',
        'size_x160' => 'string',
        'size_x176' => 'string',
        'size_x240' => 'string',
        'size_x360' => 'string',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'size_x20' => 'sizeX20',
        'size_x40' => 'sizeX40',
        'size_x50' => 'sizeX50',
        'size_x58' => 'sizeX58',
        'size_x80' => 'sizeX80',
        'size_x120' => 'sizeX120',
        'size_x160' => 'sizeX160',
        'size_x176' => 'sizeX176',
        'size_x240' => 'sizeX240',
        'size_x360' => 'sizeX360',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'size_x20' => 'setSizeX20',
        'size_x40' => 'setSizeX40',
        'size_x50' => 'setSizeX50',
        'size_x58' => 'setSizeX58',
        'size_x80' => 'setSizeX80',
        'size_x120' => 'setSizeX120',
        'size_x160' => 'setSizeX160',
        'size_x176' => 'setSizeX176',
        'size_x240' => 'setSizeX240',
        'size_x360' => 'setSizeX360',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'size_x20' => 'getSizeX20',
        'size_x40' => 'getSizeX40',
        'size_x50' => 'getSizeX50',
        'size_x58' => 'getSizeX58',
        'size_x80' => 'getSizeX80',
        'size_x120' => 'getSizeX120',
        'size_x160' => 'getSizeX160',
        'size_x176' => 'getSizeX176',
        'size_x240' => 'getSizeX240',
        'size_x360' => 'getSizeX360',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['size_x20'] = isset($data['size_x20']) ? $data['size_x20'] : null;
        $this->container['size_x40'] = isset($data['size_x40']) ? $data['size_x40'] : null;
        $this->container['size_x50'] = isset($data['size_x50']) ? $data['size_x50'] : null;
        $this->container['size_x58'] = isset($data['size_x58']) ? $data['size_x58'] : null;
        $this->container['size_x80'] = isset($data['size_x80']) ? $data['size_x80'] : null;
        $this->container['size_x120'] = isset($data['size_x120']) ? $data['size_x120'] : null;
        $this->container['size_x160'] = isset($data['size_x160']) ? $data['size_x160'] : null;
        $this->container['size_x176'] = isset($data['size_x176']) ? $data['size_x176'] : null;
        $this->container['size_x240'] = isset($data['size_x240']) ? $data['size_x240'] : null;
        $this->container['size_x360'] = isset($data['size_x360']) ? $data['size_x360'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets size_x20
     * @return string
     */
    public function getSizeX20()
    {
        return $this->container['size_x20'];
    }

    /**
     * Sets size_x20
     * @param string $size_x20
     * @return $this
     */
    public function setSizeX20($size_x20)
    {
        $this->container['size_x20'] = $size_x20;

        return $this;
    }

    /**
     * Gets size_x40
     * @return string
     */
    public function getSizeX40()
    {
        return $this->container['size_x40'];
    }

    /**
     * Sets size_x40
     * @param string $size_x40
     * @return $this
     */
    public function setSizeX40($size_x40)
    {
        $this->container['size_x40'] = $size_x40;

        return $this;
    }

    /**
     * Gets size_x50
     * @return string
     */
    public function getSizeX50()
    {
        return $this->container['size_x50'];
    }

    /**
     * Sets size_x50
     * @param string $size_x50
     * @return $this
     */
    public function setSizeX50($size_x50)
    {
        $this->container['size_x50'] = $size_x50;

        return $this;
    }

    /**
     * Gets size_x58
     * @return string
     */
    public function getSizeX58()
    {
        return $this->container['size_x58'];
    }

    /**
     * Sets size_x58
     * @param string $size_x58
     * @return $this
     */
    public function setSizeX58($size_x58)
    {
        $this->container['size_x58'] = $size_x58;

        return $this;
    }

    /**
     * Gets size_x80
     * @return string
     */
    public function getSizeX80()
    {
        return $this->container['size_x80'];
    }

    /**
     * Sets size_x80
     * @param string $size_x80
     * @return $this
     */
    public function setSizeX80($size_x80)
    {
        $this->container['size_x80'] = $size_x80;

        return $this;
    }

    /**
     * Gets size_x120
     * @return string
     */
    public function getSizeX120()
    {
        return $this->container['size_x120'];
    }

    /**
     * Sets size_x120
     * @param string $size_x120
     * @return $this
     */
    public function setSizeX120($size_x120)
    {
        $this->container['size_x120'] = $size_x120;

        return $this;
    }

    /**
     * Gets size_x160
     * @return string
     */
    public function getSizeX160()
    {
        return $this->container['size_x160'];
    }

    /**
     * Sets size_x160
     * @param string $size_x160
     * @return $this
     */
    public function setSizeX160($size_x160)
    {
        $this->container['size_x160'] = $size_x160;

        return $this;
    }

    /**
     * Gets size_x176
     * @return string
     */
    public function getSizeX176()
    {
        return $this->container['size_x176'];
    }

    /**
     * Sets size_x176
     * @param string $size_x176
     * @return $this
     */
    public function setSizeX176($size_x176)
    {
        $this->container['size_x176'] = $size_x176;

        return $this;
    }

    /**
     * Gets size_x240
     * @return string
     */
    public function getSizeX240()
    {
        return $this->container['size_x240'];
    }

    /**
     * Sets size_x240
     * @param string $size_x240
     * @return $this
     */
    public function setSizeX240($size_x240)
    {
        $this->container['size_x240'] = $size_x240;

        return $this;
    }

    /**
     * Gets size_x360
     * @return string
     */
    public function getSizeX360()
    {
        return $this->container['size_x360'];
    }

    /**
     * Sets size_x360
     * @param string $size_x360
     * @return $this
     */
    public function setSizeX360($size_x360)
    {
        $this->container['size_x360'] = $size_x360;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\AutodeskForge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\AutodeskForge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


