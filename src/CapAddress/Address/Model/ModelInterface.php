<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  CapAddress\Address\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CAP ADDRESS
 *
 * CAP ADDRESS permet, en temps réel, d'assister l'utilisateur lors de la saisie d'une adresse et de s'assurer de la validité de cette dernière avant de la stocker en base de données. Ainsi que de vérifier l'intégralité d'une adresse, en temps réel, lors de la validation.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@capadresse.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CapAddress\Address\Model;

/**
 * Interface abstracting model access.
 *
 * @package CapAddress\Address\Model
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
