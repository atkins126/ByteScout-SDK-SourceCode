<?php
/**
 * XMLExtractorOptionsVm
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
 * XMLExtractorOptionsVm Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Bytescout\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class XMLExtractorOptionsVm implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'startPageIndex' => 'int',
        'endPageIndex' => 'int',
        'xCoordinateToleranceFactor' => 'double',
        'yCoordinateToleranceFactor' => 'double',
        'tableXMinIntersectionRequiredInPercents' => 'int',
        'tableYMinIntersectionRequiredInPercents' => 'int',
        'rtlTextAutoDetectionEnabled' => 'bool',
        'extractInvisibleText' => 'bool',
        'extractShadowLikeText' => 'bool',
        'unwrap' => 'bool',
        'removeHyphenation' => 'bool',
        'autoAlignColumnsToHeader' => 'bool',
        'preserveFormattingOnTextExtraction' => 'bool',
        'detectLinesInsteadOfParagraphs' => 'bool',
        'trimSpaces' => 'bool',
        'extractColumnByColumn' => 'bool',
        'detectNewColumnBySpacesRatio' => 'float',
        'ocrMode' => 'string',
        'lineGroupingMode' => 'string',
        'columnDetectionMode' => 'string',
        'ocrCacheMode' => 'string',
        'ocrLanguage' => 'string',
        'ocrResolution' => 'float',
        'textEncodingCodePage' => 'int',
        'considerFontNames' => 'bool',
        'considerFontSizes' => 'bool',
        'considerFontColors' => 'bool',
        'considerVerticalBorders' => 'bool',
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
        'startPageIndex' => 'startPageIndex',
        'endPageIndex' => 'endPageIndex',
        'xCoordinateToleranceFactor' => 'xCoordinateToleranceFactor',
        'yCoordinateToleranceFactor' => 'yCoordinateToleranceFactor',
        'tableXMinIntersectionRequiredInPercents' => 'tableXMinIntersectionRequiredInPercents',
        'tableYMinIntersectionRequiredInPercents' => 'tableYMinIntersectionRequiredInPercents',
        'rtlTextAutoDetectionEnabled' => 'rtlTextAutoDetectionEnabled',
        'extractInvisibleText' => 'extractInvisibleText',
        'extractShadowLikeText' => 'extractShadowLikeText',
        'unwrap' => 'unwrap',
        'removeHyphenation' => 'removeHyphenation',
        'autoAlignColumnsToHeader' => 'autoAlignColumnsToHeader',
        'preserveFormattingOnTextExtraction' => 'preserveFormattingOnTextExtraction',
        'detectLinesInsteadOfParagraphs' => 'detectLinesInsteadOfParagraphs',
        'trimSpaces' => 'trimSpaces',
        'extractColumnByColumn' => 'extractColumnByColumn',
        'detectNewColumnBySpacesRatio' => 'detectNewColumnBySpacesRatio',
        'ocrMode' => 'ocrMode',
        'lineGroupingMode' => 'lineGroupingMode',
        'columnDetectionMode' => 'columnDetectionMode',
        'ocrCacheMode' => 'ocrCacheMode',
        'ocrLanguage' => 'ocrLanguage',
        'ocrResolution' => 'ocrResolution',
        'textEncodingCodePage' => 'textEncodingCodePage',
        'considerFontNames' => 'considerFontNames',
        'considerFontSizes' => 'considerFontSizes',
        'considerFontColors' => 'considerFontColors',
        'considerVerticalBorders' => 'considerVerticalBorders',
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
        'startPageIndex' => 'setStartPageIndex',
        'endPageIndex' => 'setEndPageIndex',
        'xCoordinateToleranceFactor' => 'setXCoordinateToleranceFactor',
        'yCoordinateToleranceFactor' => 'setYCoordinateToleranceFactor',
        'tableXMinIntersectionRequiredInPercents' => 'setTableXMinIntersectionRequiredInPercents',
        'tableYMinIntersectionRequiredInPercents' => 'setTableYMinIntersectionRequiredInPercents',
        'rtlTextAutoDetectionEnabled' => 'setRtlTextAutoDetectionEnabled',
        'extractInvisibleText' => 'setExtractInvisibleText',
        'extractShadowLikeText' => 'setExtractShadowLikeText',
        'unwrap' => 'setUnwrap',
        'removeHyphenation' => 'setRemoveHyphenation',
        'autoAlignColumnsToHeader' => 'setAutoAlignColumnsToHeader',
        'preserveFormattingOnTextExtraction' => 'setPreserveFormattingOnTextExtraction',
        'detectLinesInsteadOfParagraphs' => 'setDetectLinesInsteadOfParagraphs',
        'trimSpaces' => 'setTrimSpaces',
        'extractColumnByColumn' => 'setExtractColumnByColumn',
        'detectNewColumnBySpacesRatio' => 'setDetectNewColumnBySpacesRatio',
        'ocrMode' => 'setOcrMode',
        'lineGroupingMode' => 'setLineGroupingMode',
        'columnDetectionMode' => 'setColumnDetectionMode',
        'ocrCacheMode' => 'setOcrCacheMode',
        'ocrLanguage' => 'setOcrLanguage',
        'ocrResolution' => 'setOcrResolution',
        'textEncodingCodePage' => 'setTextEncodingCodePage',
        'considerFontNames' => 'setConsiderFontNames',
        'considerFontSizes' => 'setConsiderFontSizes',
        'considerFontColors' => 'setConsiderFontColors',
        'considerVerticalBorders' => 'setConsiderVerticalBorders',
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
        'startPageIndex' => 'getStartPageIndex',
        'endPageIndex' => 'getEndPageIndex',
        'xCoordinateToleranceFactor' => 'getXCoordinateToleranceFactor',
        'yCoordinateToleranceFactor' => 'getYCoordinateToleranceFactor',
        'tableXMinIntersectionRequiredInPercents' => 'getTableXMinIntersectionRequiredInPercents',
        'tableYMinIntersectionRequiredInPercents' => 'getTableYMinIntersectionRequiredInPercents',
        'rtlTextAutoDetectionEnabled' => 'getRtlTextAutoDetectionEnabled',
        'extractInvisibleText' => 'getExtractInvisibleText',
        'extractShadowLikeText' => 'getExtractShadowLikeText',
        'unwrap' => 'getUnwrap',
        'removeHyphenation' => 'getRemoveHyphenation',
        'autoAlignColumnsToHeader' => 'getAutoAlignColumnsToHeader',
        'preserveFormattingOnTextExtraction' => 'getPreserveFormattingOnTextExtraction',
        'detectLinesInsteadOfParagraphs' => 'getDetectLinesInsteadOfParagraphs',
        'trimSpaces' => 'getTrimSpaces',
        'extractColumnByColumn' => 'getExtractColumnByColumn',
        'detectNewColumnBySpacesRatio' => 'getDetectNewColumnBySpacesRatio',
        'ocrMode' => 'getOcrMode',
        'lineGroupingMode' => 'getLineGroupingMode',
        'columnDetectionMode' => 'getColumnDetectionMode',
        'ocrCacheMode' => 'getOcrCacheMode',
        'ocrLanguage' => 'getOcrLanguage',
        'ocrResolution' => 'getOcrResolution',
        'textEncodingCodePage' => 'getTextEncodingCodePage',
        'considerFontNames' => 'getConsiderFontNames',
        'considerFontSizes' => 'getConsiderFontSizes',
        'considerFontColors' => 'getConsiderFontColors',
        'considerVerticalBorders' => 'getConsiderVerticalBorders',
        'password' => 'getPassword',
        'checkPermissions' => 'getCheckPermissions',
        'extractionAreaUsageMode' => 'getExtractionAreaUsageMode'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $startPageIndex Index of page (zero-based) of PDF file from which data will be extracted.\r\n            Default value: all pages
      * @var int
      */
    protected $startPageIndex;
    
    /**
      * $endPageIndex Index of a page (zero-based) on which extracting of data will be finished.\r\n            Default value: all pages
      * @var int
      */
    protected $endPageIndex;
    
    /**
      * $xCoordinateToleranceFactor Default value: 20
      * @var double
      */
    protected $xCoordinateToleranceFactor;
    
    /**
      * $yCoordinateToleranceFactor Default value: 30
      * @var double
      */
    protected $yCoordinateToleranceFactor;
    
    /**
      * $tableXMinIntersectionRequiredInPercents Default value: 49
      * @var int
      */
    protected $tableXMinIntersectionRequiredInPercents;
    
    /**
      * $tableYMinIntersectionRequiredInPercents Default value: 50
      * @var int
      */
    protected $tableYMinIntersectionRequiredInPercents;
    
    /**
      * $rtlTextAutoDetectionEnabled Default value: False
      * @var bool
      */
    protected $rtlTextAutoDetectionEnabled;
    
    /**
      * $extractInvisibleText Default value: True
      * @var bool
      */
    protected $extractInvisibleText;
    
    /**
      * $extractShadowLikeText Default value: True
      * @var bool
      */
    protected $extractShadowLikeText;
    
    /**
      * $unwrap Default value: False
      * @var bool
      */
    protected $unwrap;
    
    /**
      * $removeHyphenation Default value: True
      * @var bool
      */
    protected $removeHyphenation;
    
    /**
      * $autoAlignColumnsToHeader Default value: True
      * @var bool
      */
    protected $autoAlignColumnsToHeader;
    
    /**
      * $preserveFormattingOnTextExtraction Value indicating whether to preserve the text formatting on the extraction.\r\n            Default value: True
      * @var bool
      */
    protected $preserveFormattingOnTextExtraction;
    
    /**
      * $detectLinesInsteadOfParagraphs Default value: True
      * @var bool
      */
    protected $detectLinesInsteadOfParagraphs;
    
    /**
      * $trimSpaces Default value: True
      * @var bool
      */
    protected $trimSpaces;
    
    /**
      * $extractColumnByColumn Default value: False
      * @var bool
      */
    protected $extractColumnByColumn;
    
    /**
      * $detectNewColumnBySpacesRatio Space ratio between words.\r\n            Default value: 1
      * @var float
      */
    protected $detectNewColumnBySpacesRatio;
    
    /**
      * $ocrMode Default value: Off
      * @var string
      */
    protected $ocrMode;
    
    /**
      * $lineGroupingMode Default value: None
      * @var string
      */
    protected $lineGroupingMode;
    
    /**
      * $columnDetectionMode Default value: ContentGroupsAndBorders
      * @var string
      */
    protected $columnDetectionMode;
    
    /**
      * $ocrCacheMode Recognize text on embedded images using Optical Character Recognition (OCR). Set the language using OCRLanguage property.\r\n            Default value: Off
      * @var string
      */
    protected $ocrCacheMode;
    
    /**
      * $ocrLanguage Default value: eng
      * @var string
      */
    protected $ocrLanguage;
    
    /**
      * $ocrResolution Default value: 300
      * @var float
      */
    protected $ocrResolution;
    
    /**
      * $textEncodingCodePage Default value: 1252
      * @var int
      */
    protected $textEncodingCodePage;
    
    /**
      * $considerFontNames Default value: False
      * @var bool
      */
    protected $considerFontNames;
    
    /**
      * $considerFontSizes Default value: False
      * @var bool
      */
    protected $considerFontSizes;
    
    /**
      * $considerFontColors Default value: False
      * @var bool
      */
    protected $considerFontColors;
    
    /**
      * $considerVerticalBorders Default value: True
      * @var bool
      */
    protected $considerVerticalBorders;
    
    /**
      * $password Default value:
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
            $this->startPageIndex = $data["startPageIndex"];
            $this->endPageIndex = $data["endPageIndex"];
            $this->xCoordinateToleranceFactor = $data["xCoordinateToleranceFactor"];
            $this->yCoordinateToleranceFactor = $data["yCoordinateToleranceFactor"];
            $this->tableXMinIntersectionRequiredInPercents = $data["tableXMinIntersectionRequiredInPercents"];
            $this->tableYMinIntersectionRequiredInPercents = $data["tableYMinIntersectionRequiredInPercents"];
            $this->rtlTextAutoDetectionEnabled = $data["rtlTextAutoDetectionEnabled"];
            $this->extractInvisibleText = $data["extractInvisibleText"];
            $this->extractShadowLikeText = $data["extractShadowLikeText"];
            $this->unwrap = $data["unwrap"];
            $this->removeHyphenation = $data["removeHyphenation"];
            $this->autoAlignColumnsToHeader = $data["autoAlignColumnsToHeader"];
            $this->preserveFormattingOnTextExtraction = $data["preserveFormattingOnTextExtraction"];
            $this->detectLinesInsteadOfParagraphs = $data["detectLinesInsteadOfParagraphs"];
            $this->trimSpaces = $data["trimSpaces"];
            $this->extractColumnByColumn = $data["extractColumnByColumn"];
            $this->detectNewColumnBySpacesRatio = $data["detectNewColumnBySpacesRatio"];
            $this->ocrMode = $data["ocrMode"];
            $this->lineGroupingMode = $data["lineGroupingMode"];
            $this->columnDetectionMode = $data["columnDetectionMode"];
            $this->ocrCacheMode = $data["ocrCacheMode"];
            $this->ocrLanguage = $data["ocrLanguage"];
            $this->ocrResolution = $data["ocrResolution"];
            $this->textEncodingCodePage = $data["textEncodingCodePage"];
            $this->considerFontNames = $data["considerFontNames"];
            $this->considerFontSizes = $data["considerFontSizes"];
            $this->considerFontColors = $data["considerFontColors"];
            $this->considerVerticalBorders = $data["considerVerticalBorders"];
            $this->password = $data["password"];
            $this->checkPermissions = $data["checkPermissions"];
            $this->extractionAreaUsageMode = $data["extractionAreaUsageMode"];
        }
    }
    
    /**
     * Gets startPageIndex
     * @return int
     */
    public function getStartPageIndex()
    {
        return $this->startPageIndex;
    }
  
    /**
     * Sets startPageIndex
     * @param int $startPageIndex Index of page (zero-based) of PDF file from which data will be extracted.\r\n            Default value: all pages
     * @return $this
     */
    public function setStartPageIndex($startPageIndex)
    {
        
        $this->startPageIndex = $startPageIndex;
        return $this;
    }
    
    /**
     * Gets endPageIndex
     * @return int
     */
    public function getEndPageIndex()
    {
        return $this->endPageIndex;
    }
  
    /**
     * Sets endPageIndex
     * @param int $endPageIndex Index of a page (zero-based) on which extracting of data will be finished.\r\n            Default value: all pages
     * @return $this
     */
    public function setEndPageIndex($endPageIndex)
    {
        
        $this->endPageIndex = $endPageIndex;
        return $this;
    }
    
    /**
     * Gets xCoordinateToleranceFactor
     * @return double
     */
    public function getXCoordinateToleranceFactor()
    {
        return $this->xCoordinateToleranceFactor;
    }
  
    /**
     * Sets xCoordinateToleranceFactor
     * @param double $xCoordinateToleranceFactor Default value: 20
     * @return $this
     */
    public function setXCoordinateToleranceFactor($xCoordinateToleranceFactor)
    {
        
        $this->xCoordinateToleranceFactor = $xCoordinateToleranceFactor;
        return $this;
    }
    
    /**
     * Gets yCoordinateToleranceFactor
     * @return double
     */
    public function getYCoordinateToleranceFactor()
    {
        return $this->yCoordinateToleranceFactor;
    }
  
    /**
     * Sets yCoordinateToleranceFactor
     * @param double $yCoordinateToleranceFactor Default value: 30
     * @return $this
     */
    public function setYCoordinateToleranceFactor($yCoordinateToleranceFactor)
    {
        
        $this->yCoordinateToleranceFactor = $yCoordinateToleranceFactor;
        return $this;
    }
    
    /**
     * Gets tableXMinIntersectionRequiredInPercents
     * @return int
     */
    public function getTableXMinIntersectionRequiredInPercents()
    {
        return $this->tableXMinIntersectionRequiredInPercents;
    }
  
    /**
     * Sets tableXMinIntersectionRequiredInPercents
     * @param int $tableXMinIntersectionRequiredInPercents Default value: 49
     * @return $this
     */
    public function setTableXMinIntersectionRequiredInPercents($tableXMinIntersectionRequiredInPercents)
    {
        
        $this->tableXMinIntersectionRequiredInPercents = $tableXMinIntersectionRequiredInPercents;
        return $this;
    }
    
    /**
     * Gets tableYMinIntersectionRequiredInPercents
     * @return int
     */
    public function getTableYMinIntersectionRequiredInPercents()
    {
        return $this->tableYMinIntersectionRequiredInPercents;
    }
  
    /**
     * Sets tableYMinIntersectionRequiredInPercents
     * @param int $tableYMinIntersectionRequiredInPercents Default value: 50
     * @return $this
     */
    public function setTableYMinIntersectionRequiredInPercents($tableYMinIntersectionRequiredInPercents)
    {
        
        $this->tableYMinIntersectionRequiredInPercents = $tableYMinIntersectionRequiredInPercents;
        return $this;
    }
    
    /**
     * Gets rtlTextAutoDetectionEnabled
     * @return bool
     */
    public function getRtlTextAutoDetectionEnabled()
    {
        return $this->rtlTextAutoDetectionEnabled;
    }
  
    /**
     * Sets rtlTextAutoDetectionEnabled
     * @param bool $rtlTextAutoDetectionEnabled Default value: False
     * @return $this
     */
    public function setRtlTextAutoDetectionEnabled($rtlTextAutoDetectionEnabled)
    {
        
        $this->rtlTextAutoDetectionEnabled = $rtlTextAutoDetectionEnabled;
        return $this;
    }
    
    /**
     * Gets extractInvisibleText
     * @return bool
     */
    public function getExtractInvisibleText()
    {
        return $this->extractInvisibleText;
    }
  
    /**
     * Sets extractInvisibleText
     * @param bool $extractInvisibleText Default value: True
     * @return $this
     */
    public function setExtractInvisibleText($extractInvisibleText)
    {
        
        $this->extractInvisibleText = $extractInvisibleText;
        return $this;
    }
    
    /**
     * Gets extractShadowLikeText
     * @return bool
     */
    public function getExtractShadowLikeText()
    {
        return $this->extractShadowLikeText;
    }
  
    /**
     * Sets extractShadowLikeText
     * @param bool $extractShadowLikeText Default value: True
     * @return $this
     */
    public function setExtractShadowLikeText($extractShadowLikeText)
    {
        
        $this->extractShadowLikeText = $extractShadowLikeText;
        return $this;
    }
    
    /**
     * Gets unwrap
     * @return bool
     */
    public function getUnwrap()
    {
        return $this->unwrap;
    }
  
    /**
     * Sets unwrap
     * @param bool $unwrap Default value: False
     * @return $this
     */
    public function setUnwrap($unwrap)
    {
        
        $this->unwrap = $unwrap;
        return $this;
    }
    
    /**
     * Gets removeHyphenation
     * @return bool
     */
    public function getRemoveHyphenation()
    {
        return $this->removeHyphenation;
    }
  
    /**
     * Sets removeHyphenation
     * @param bool $removeHyphenation Default value: True
     * @return $this
     */
    public function setRemoveHyphenation($removeHyphenation)
    {
        
        $this->removeHyphenation = $removeHyphenation;
        return $this;
    }
    
    /**
     * Gets autoAlignColumnsToHeader
     * @return bool
     */
    public function getAutoAlignColumnsToHeader()
    {
        return $this->autoAlignColumnsToHeader;
    }
  
    /**
     * Sets autoAlignColumnsToHeader
     * @param bool $autoAlignColumnsToHeader Default value: True
     * @return $this
     */
    public function setAutoAlignColumnsToHeader($autoAlignColumnsToHeader)
    {
        
        $this->autoAlignColumnsToHeader = $autoAlignColumnsToHeader;
        return $this;
    }
    
    /**
     * Gets preserveFormattingOnTextExtraction
     * @return bool
     */
    public function getPreserveFormattingOnTextExtraction()
    {
        return $this->preserveFormattingOnTextExtraction;
    }
  
    /**
     * Sets preserveFormattingOnTextExtraction
     * @param bool $preserveFormattingOnTextExtraction Value indicating whether to preserve the text formatting on the extraction.\r\n            Default value: True
     * @return $this
     */
    public function setPreserveFormattingOnTextExtraction($preserveFormattingOnTextExtraction)
    {
        
        $this->preserveFormattingOnTextExtraction = $preserveFormattingOnTextExtraction;
        return $this;
    }
    
    /**
     * Gets detectLinesInsteadOfParagraphs
     * @return bool
     */
    public function getDetectLinesInsteadOfParagraphs()
    {
        return $this->detectLinesInsteadOfParagraphs;
    }
  
    /**
     * Sets detectLinesInsteadOfParagraphs
     * @param bool $detectLinesInsteadOfParagraphs Default value: True
     * @return $this
     */
    public function setDetectLinesInsteadOfParagraphs($detectLinesInsteadOfParagraphs)
    {
        
        $this->detectLinesInsteadOfParagraphs = $detectLinesInsteadOfParagraphs;
        return $this;
    }
    
    /**
     * Gets trimSpaces
     * @return bool
     */
    public function getTrimSpaces()
    {
        return $this->trimSpaces;
    }
  
    /**
     * Sets trimSpaces
     * @param bool $trimSpaces Default value: True
     * @return $this
     */
    public function setTrimSpaces($trimSpaces)
    {
        
        $this->trimSpaces = $trimSpaces;
        return $this;
    }
    
    /**
     * Gets extractColumnByColumn
     * @return bool
     */
    public function getExtractColumnByColumn()
    {
        return $this->extractColumnByColumn;
    }
  
    /**
     * Sets extractColumnByColumn
     * @param bool $extractColumnByColumn Default value: False
     * @return $this
     */
    public function setExtractColumnByColumn($extractColumnByColumn)
    {
        
        $this->extractColumnByColumn = $extractColumnByColumn;
        return $this;
    }
    
    /**
     * Gets detectNewColumnBySpacesRatio
     * @return float
     */
    public function getDetectNewColumnBySpacesRatio()
    {
        return $this->detectNewColumnBySpacesRatio;
    }
  
    /**
     * Sets detectNewColumnBySpacesRatio
     * @param float $detectNewColumnBySpacesRatio Space ratio between words.\r\n            Default value: 1
     * @return $this
     */
    public function setDetectNewColumnBySpacesRatio($detectNewColumnBySpacesRatio)
    {
        
        $this->detectNewColumnBySpacesRatio = $detectNewColumnBySpacesRatio;
        return $this;
    }
    
    /**
     * Gets ocrMode
     * @return string
     */
    public function getOcrMode()
    {
        return $this->ocrMode;
    }
  
    /**
     * Sets ocrMode
     * @param string $ocrMode Default value: Off
     * @return $this
     */
    public function setOcrMode($ocrMode)
    {
        $allowed_values = array("off", "auto", "textFromImagesAndVectorsAndFonts", "textFromImagesAndVectorsAndRepairedFonts", "textFromRepairedFontsOnly", "textFromImagesAndRepairedFonts", "textFromImagesAndFonts", "textFromImagesOnly", "textFromVectorsOnly", "textFromImagesAndVectorsOnly");
        if (!in_array($ocrMode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ocrMode', must be one of 'off', 'auto', 'textFromImagesAndVectorsAndFonts', 'textFromImagesAndVectorsAndRepairedFonts', 'textFromRepairedFontsOnly', 'textFromImagesAndRepairedFonts', 'textFromImagesAndFonts', 'textFromImagesOnly', 'textFromVectorsOnly', 'textFromImagesAndVectorsOnly'");
        }
        $this->ocrMode = $ocrMode;
        return $this;
    }
    
    /**
     * Gets lineGroupingMode
     * @return string
     */
    public function getLineGroupingMode()
    {
        return $this->lineGroupingMode;
    }
  
    /**
     * Sets lineGroupingMode
     * @param string $lineGroupingMode Default value: None
     * @return $this
     */
    public function setLineGroupingMode($lineGroupingMode)
    {
        $allowed_values = array("none", "groupByRows", "groupByColumns");
        if (!in_array($lineGroupingMode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'lineGroupingMode', must be one of 'none', 'groupByRows', 'groupByColumns'");
        }
        $this->lineGroupingMode = $lineGroupingMode;
        return $this;
    }
    
    /**
     * Gets columnDetectionMode
     * @return string
     */
    public function getColumnDetectionMode()
    {
        return $this->columnDetectionMode;
    }
  
    /**
     * Sets columnDetectionMode
     * @param string $columnDetectionMode Default value: ContentGroupsAndBorders
     * @return $this
     */
    public function setColumnDetectionMode($columnDetectionMode)
    {
        $allowed_values = array("contentGroupsAndBorders", "contentGroups", "borders", "borderedTables");
        if (!in_array($columnDetectionMode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'columnDetectionMode', must be one of 'contentGroupsAndBorders', 'contentGroups', 'borders', 'borderedTables'");
        }
        $this->columnDetectionMode = $columnDetectionMode;
        return $this;
    }
    
    /**
     * Gets ocrCacheMode
     * @return string
     */
    public function getOcrCacheMode()
    {
        return $this->ocrCacheMode;
    }
  
    /**
     * Sets ocrCacheMode
     * @param string $ocrCacheMode Recognize text on embedded images using Optical Character Recognition (OCR). Set the language using OCRLanguage property.\r\n            Default value: Off
     * @return $this
     */
    public function setOcrCacheMode($ocrCacheMode)
    {
        $allowed_values = array("off", "wholePage");
        if (!in_array($ocrCacheMode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ocrCacheMode', must be one of 'off', 'wholePage'");
        }
        $this->ocrCacheMode = $ocrCacheMode;
        return $this;
    }
    
    /**
     * Gets ocrLanguage
     * @return string
     */
    public function getOcrLanguage()
    {
        return $this->ocrLanguage;
    }
  
    /**
     * Sets ocrLanguage
     * @param string $ocrLanguage Default value: eng
     * @return $this
     */
    public function setOcrLanguage($ocrLanguage)
    {
        
        $this->ocrLanguage = $ocrLanguage;
        return $this;
    }
    
    /**
     * Gets ocrResolution
     * @return float
     */
    public function getOcrResolution()
    {
        return $this->ocrResolution;
    }
  
    /**
     * Sets ocrResolution
     * @param float $ocrResolution Default value: 300
     * @return $this
     */
    public function setOcrResolution($ocrResolution)
    {
        
        $this->ocrResolution = $ocrResolution;
        return $this;
    }
    
    /**
     * Gets textEncodingCodePage
     * @return int
     */
    public function getTextEncodingCodePage()
    {
        return $this->textEncodingCodePage;
    }
  
    /**
     * Sets textEncodingCodePage
     * @param int $textEncodingCodePage Default value: 1252
     * @return $this
     */
    public function setTextEncodingCodePage($textEncodingCodePage)
    {
        
        $this->textEncodingCodePage = $textEncodingCodePage;
        return $this;
    }
    
    /**
     * Gets considerFontNames
     * @return bool
     */
    public function getConsiderFontNames()
    {
        return $this->considerFontNames;
    }
  
    /**
     * Sets considerFontNames
     * @param bool $considerFontNames Default value: False
     * @return $this
     */
    public function setConsiderFontNames($considerFontNames)
    {
        
        $this->considerFontNames = $considerFontNames;
        return $this;
    }
    
    /**
     * Gets considerFontSizes
     * @return bool
     */
    public function getConsiderFontSizes()
    {
        return $this->considerFontSizes;
    }
  
    /**
     * Sets considerFontSizes
     * @param bool $considerFontSizes Default value: False
     * @return $this
     */
    public function setConsiderFontSizes($considerFontSizes)
    {
        
        $this->considerFontSizes = $considerFontSizes;
        return $this;
    }
    
    /**
     * Gets considerFontColors
     * @return bool
     */
    public function getConsiderFontColors()
    {
        return $this->considerFontColors;
    }
  
    /**
     * Sets considerFontColors
     * @param bool $considerFontColors Default value: False
     * @return $this
     */
    public function setConsiderFontColors($considerFontColors)
    {
        
        $this->considerFontColors = $considerFontColors;
        return $this;
    }
    
    /**
     * Gets considerVerticalBorders
     * @return bool
     */
    public function getConsiderVerticalBorders()
    {
        return $this->considerVerticalBorders;
    }
  
    /**
     * Sets considerVerticalBorders
     * @param bool $considerVerticalBorders Default value: True
     * @return $this
     */
    public function setConsiderVerticalBorders($considerVerticalBorders)
    {
        
        $this->considerVerticalBorders = $considerVerticalBorders;
        return $this;
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
     * @param string $password Default value:
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
