<?php
/**
 * InfoExtractorOptionsVm
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bytescout\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bytescout\Client\Model;

use \ArrayAccess;
/**
 * InfoExtractorOptionsVm Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Bytescout\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InfoExtractorOptionsVm implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'password' => 'string',
        'checkPermissions' => 'bool',
        'extractionAreaUsageMode' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'password' => 'password',
        'checkPermissions' => 'checkPermissions',
        'extractionAreaUsageMode' => 'extractionAreaUsageMode'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'password' => 'setPassword',
        'checkPermissions' => 'setCheckPermissions',
        'extractionAreaUsageMode' => 'setExtractionAreaUsageMode'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'password' => 'getPassword',
        'checkPermissions' => 'getCheckPermissions',
        'extractionAreaUsageMode' => 'getExtractionAreaUsageMode'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $password 
      * @var string
      */
    protected $password;
    
    /**
      * $checkPermissions Default value: True
      * @var bool
      */
    protected $checkPermissions;
    
    /**
      * $extractionAreaUsageMode Default value: UseAllIntersectingObjects
      * @var string
      */
    protected $extractionAreaUsageMode;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->password = $data["password"];
            $this->checkPermissions = $data["checkPermissions"];
            $this->extractionAreaUsageMode = $data["extractionAreaUsageMode"];
        }
    }
    
    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
  
    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        
        $this->password = $password;
        return $this;
    }
    
    /**
     * Gets checkPermissions
     * @return bool
     */
    public function getCheckPermissions()
    {
        return $this->checkPermissions;
    }
  
    /**
     * Sets checkPermissions
     * @param bool $checkPermissions Default value: True
     * @return $this
     */
    public function setCheckPermissions($checkPermissions)
    {
        
        $this->checkPermissions = $checkPermissions;
        return $this;
    }
    
    /**
     * Gets extractionAreaUsageMode
     * @return string
     */
    public function getExtractionAreaUsageMode()
    {
        return $this->extractionAreaUsageMode;
    }
  
    /**
     * Sets extractionAreaUsageMode
     * @param string $extractionAreaUsageMode Default value: UseAllIntersectingObjects
     * @return $this
     */
    public function setExtractionAreaUsageMode($extractionAreaUsageMode)
    {
        $allowed_values = array("useAllIntersectingObjects", "useObjectsCompetelyInsideAreaOnly");
        if (!in_array($extractionAreaUsageMode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'extractionAreaUsageMode', must be one of 'useAllIntersectingObjects', 'useObjectsCompetelyInsideAreaOnly'");
        }
        $this->extractionAreaUsageMode = $extractionAreaUsageMode;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Bytescout\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Bytescout\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
