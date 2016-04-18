<?php
/**
 * BarcodeReaderRequestVm
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
 * BarcodeReaderRequestVm Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Bytescout\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BarcodeReaderRequestVm implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'properties' => '\Bytescout\Client\Model\BarcodeReaderOptionsVm',
        'outputType' => 'string',
        'input' => 'string',
        'inputType' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'properties' => 'properties',
        'outputType' => 'outputType',
        'input' => 'input',
        'inputType' => 'inputType'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'properties' => 'setProperties',
        'outputType' => 'setOutputType',
        'input' => 'setInput',
        'inputType' => 'setInputType'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'properties' => 'getProperties',
        'outputType' => 'getOutputType',
        'input' => 'getInput',
        'inputType' => 'getInputType'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $properties 
      * @var \Bytescout\Client\Model\BarcodeReaderOptionsVm
      */
    protected $properties;
    
    /**
      * $outputType Type in which you want to get result of extracting (optional). Default value: Content. \r\n            IMPORTANT: \r\n            Link type generates public unique link to download, file is removed after default StorageTime(see File API). \r\n            LinkPrivate generates private unique link which should NOT be shared as it can be accessed with your api key only!
      * @var string
      */
    protected $outputType;
    
    /**
      * $input Input Data
      * @var string
      */
    protected $input;
    
    /**
      * $inputType Type of Input Data
      * @var string
      */
    protected $inputType;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->properties = $data["properties"];
            $this->outputType = $data["outputType"];
            $this->input = $data["input"];
            $this->inputType = $data["inputType"];
        }
    }
    
    /**
     * Gets properties
     * @return \Bytescout\Client\Model\BarcodeReaderOptionsVm
     */
    public function getProperties()
    {
        return $this->properties;
    }
  
    /**
     * Sets properties
     * @param \Bytescout\Client\Model\BarcodeReaderOptionsVm $properties 
     * @return $this
     */
    public function setProperties($properties)
    {
        
        $this->properties = $properties;
        return $this;
    }
    
    /**
     * Gets outputType
     * @return string
     */
    public function getOutputType()
    {
        return $this->outputType;
    }
  
    /**
     * Sets outputType
     * @param string $outputType Type in which you want to get result of extracting (optional). Default value: Content. \r\n            IMPORTANT: \r\n            Link type generates public unique link to download, file is removed after default StorageTime(see File API). \r\n            LinkPrivate generates private unique link which should NOT be shared as it can be accessed with your api key only!
     * @return $this
     */
    public function setOutputType($outputType)
    {
        $allowed_values = array("link", "linkPrivate", "content", "contentBase64", "fileId");
        if (!in_array($outputType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'outputType', must be one of 'link', 'linkPrivate', 'content', 'contentBase64', 'fileId'");
        }
        $this->outputType = $outputType;
        return $this;
    }
    
    /**
     * Gets input
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }
  
    /**
     * Sets input
     * @param string $input Input Data
     * @return $this
     */
    public function setInput($input)
    {
        
        $this->input = $input;
        return $this;
    }
    
    /**
     * Gets inputType
     * @return string
     */
    public function getInputType()
    {
        return $this->inputType;
    }
  
    /**
     * Sets inputType
     * @param string $inputType Type of Input Data
     * @return $this
     */
    public function setInputType($inputType)
    {
        $allowed_values = array("auto", "value", "valueBase64", "link", "fileID");
        if (!in_array($inputType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'inputType', must be one of 'auto', 'value', 'valueBase64', 'link', 'fileID'");
        }
        $this->inputType = $inputType;
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
