<?php
/**
 * CreateUserVm
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
 * CreateUserVm Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Bytescout\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateUserVm implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'apiKey' => 'string',
        'permissions' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'apiKey' => 'apiKey',
        'permissions' => 'permissions'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'apiKey' => 'setApiKey',
        'permissions' => 'setPermissions'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'apiKey' => 'getApiKey',
        'permissions' => 'getPermissions'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $apiKey ApiKey of a new user which will be used for access to the service.
      * @var string
      */
    protected $apiKey;
    
    /**
      * $permissions Permissions of a new user. Without them he will not be able to use features of the service.\r\n            ['PDFExtractor', 'HTMLToPDF', 'BarcodeReader', 'Barcode', 'PDFRenderer', 'PDFToHTML', 'Spreadsheet']
      * @var string[]
      */
    protected $permissions;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->apiKey = $data["apiKey"];
            $this->permissions = $data["permissions"];
        }
    }
    
    /**
     * Gets apiKey
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
  
    /**
     * Sets apiKey
     * @param string $apiKey ApiKey of a new user which will be used for access to the service.
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        
        $this->apiKey = $apiKey;
        return $this;
    }
    
    /**
     * Gets permissions
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
  
    /**
     * Sets permissions
     * @param string[] $permissions Permissions of a new user. Without them he will not be able to use features of the service.\r\n            ['PDFExtractor', 'HTMLToPDF', 'BarcodeReader', 'Barcode', 'PDFRenderer', 'PDFToHTML', 'Spreadsheet']
     * @return $this
     */
    public function setPermissions($permissions)
    {
        
        $this->permissions = $permissions;
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
