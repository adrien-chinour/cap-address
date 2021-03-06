<?php
/**
 * Phonebook
 *
 * PHP version 5
 *
 * @category Class
 * @package  CapAddress\Phone
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CAP PHONE
 *
 * Cap Phone va permettre d’assister l’utilisateur lors de la validation d’un numéro de téléphone et s’assurer de la conformité syntaxique de ce dernier avant de le stocker en base de données. Le but étant de s’assurer que chaque numéro de téléphone entré en base de données est syntaxiquement correct et stocké dans un même format.
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

namespace CapAddress\Phone\Model;

use \ArrayAccess;
use \CapAddress\Phone\ObjectSerializer;

/**
 * Phonebook Class Doc Comment
 *
 * @category Class
 * @package  CapAddress\Phone
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Phonebook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'phonebook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        's_type' => 'string',
        's_score' => 'string',
        's_tel' => 'string',
        's_societe' => 'string',
        's_prenom' => 'string',
        's_nom' => 'string',
        's_l1' => 'string',
        's_l2' => 'string',
        's_l3' => 'string',
        's_l4' => 'string',
        's_l5' => 'string',
        's_l6' => 'string',
        's_cp' => 'string',
        's_loc' => 'string',
        's_typeterminal' => 'string',
        's_antiprospect' => 'string',
        's_stopinv' => 'string',
        's_chamois' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        's_type' => null,
        's_score' => null,
        's_tel' => null,
        's_societe' => null,
        's_prenom' => null,
        's_nom' => null,
        's_l1' => null,
        's_l2' => null,
        's_l3' => null,
        's_l4' => null,
        's_l5' => null,
        's_l6' => null,
        's_cp' => null,
        's_loc' => null,
        's_typeterminal' => null,
        's_antiprospect' => null,
        's_stopinv' => null,
        's_chamois' => null
    ];

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
        's_type' => 'sType',
        's_score' => 'sScore',
        's_tel' => 'sTel',
        's_societe' => 'sSociete',
        's_prenom' => 'sPrenom',
        's_nom' => 'sNom',
        's_l1' => 'sL1',
        's_l2' => 'sL2',
        's_l3' => 'sL3',
        's_l4' => 'sL4',
        's_l5' => 'sL5',
        's_l6' => 'sL6',
        's_cp' => 'sCp',
        's_loc' => 'sLoc',
        's_typeterminal' => 'sTypeterminal',
        's_antiprospect' => 'sAntiprospect',
        's_stopinv' => 'sStopinv',
        's_chamois' => 'sChamois'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        's_type' => 'setSType',
        's_score' => 'setSScore',
        's_tel' => 'setSTel',
        's_societe' => 'setSSociete',
        's_prenom' => 'setSPrenom',
        's_nom' => 'setSNom',
        's_l1' => 'setSL1',
        's_l2' => 'setSL2',
        's_l3' => 'setSL3',
        's_l4' => 'setSL4',
        's_l5' => 'setSL5',
        's_l6' => 'setSL6',
        's_cp' => 'setSCp',
        's_loc' => 'setSLoc',
        's_typeterminal' => 'setSTypeterminal',
        's_antiprospect' => 'setSAntiprospect',
        's_stopinv' => 'setSStopinv',
        's_chamois' => 'setSChamois'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        's_type' => 'getSType',
        's_score' => 'getSScore',
        's_tel' => 'getSTel',
        's_societe' => 'getSSociete',
        's_prenom' => 'getSPrenom',
        's_nom' => 'getSNom',
        's_l1' => 'getSL1',
        's_l2' => 'getSL2',
        's_l3' => 'getSL3',
        's_l4' => 'getSL4',
        's_l5' => 'getSL5',
        's_l6' => 'getSL6',
        's_cp' => 'getSCp',
        's_loc' => 'getSLoc',
        's_typeterminal' => 'getSTypeterminal',
        's_antiprospect' => 'getSAntiprospect',
        's_stopinv' => 'getSStopinv',
        's_chamois' => 'getSChamois'
    ];

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
        $this->container['s_type'] = isset($data['s_type']) ? $data['s_type'] : null;
        $this->container['s_score'] = isset($data['s_score']) ? $data['s_score'] : null;
        $this->container['s_tel'] = isset($data['s_tel']) ? $data['s_tel'] : null;
        $this->container['s_societe'] = isset($data['s_societe']) ? $data['s_societe'] : null;
        $this->container['s_prenom'] = isset($data['s_prenom']) ? $data['s_prenom'] : null;
        $this->container['s_nom'] = isset($data['s_nom']) ? $data['s_nom'] : null;
        $this->container['s_l1'] = isset($data['s_l1']) ? $data['s_l1'] : null;
        $this->container['s_l2'] = isset($data['s_l2']) ? $data['s_l2'] : null;
        $this->container['s_l3'] = isset($data['s_l3']) ? $data['s_l3'] : null;
        $this->container['s_l4'] = isset($data['s_l4']) ? $data['s_l4'] : null;
        $this->container['s_l5'] = isset($data['s_l5']) ? $data['s_l5'] : null;
        $this->container['s_l6'] = isset($data['s_l6']) ? $data['s_l6'] : null;
        $this->container['s_cp'] = isset($data['s_cp']) ? $data['s_cp'] : null;
        $this->container['s_loc'] = isset($data['s_loc']) ? $data['s_loc'] : null;
        $this->container['s_typeterminal'] = isset($data['s_typeterminal']) ? $data['s_typeterminal'] : null;
        $this->container['s_antiprospect'] = isset($data['s_antiprospect']) ? $data['s_antiprospect'] : null;
        $this->container['s_stopinv'] = isset($data['s_stopinv']) ? $data['s_stopinv'] : null;
        $this->container['s_chamois'] = isset($data['s_chamois']) ? $data['s_chamois'] : null;
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

        return true;
    }


    /**
     * Gets s_type
     *
     * @return string
     */
    public function getSType()
    {
        return $this->container['s_type'];
    }

    /**
     * Sets s_type
     *
     * @param string $s_type INV: recherche de type inversé, par numéro TELADR: recherche par nom et adresse.
     *
     * @return $this
     */
    public function setSType($s_type)
    {
        $this->container['s_type'] = $s_type;

        return $this;
    }

    /**
     * Gets s_score
     *
     * @return string
     */
    public function getSScore()
    {
        return $this->container['s_score'];
    }

    /**
     * Sets s_score
     *
     * @param string $s_score Score de vraisemblance du résultat (de 100=exact à 50=faible).
     *
     * @return $this
     */
    public function setSScore($s_score)
    {
        $this->container['s_score'] = $s_score;

        return $this;
    }

    /**
     * Gets s_tel
     *
     * @return string
     */
    public function getSTel()
    {
        return $this->container['s_tel'];
    }

    /**
     * Sets s_tel
     *
     * @param string $s_tel numéro de téléphone.
     *
     * @return $this
     */
    public function setSTel($s_tel)
    {
        $this->container['s_tel'] = $s_tel;

        return $this;
    }

    /**
     * Gets s_societe
     *
     * @return string
     */
    public function getSSociete()
    {
        return $this->container['s_societe'];
    }

    /**
     * Sets s_societe
     *
     * @param string $s_societe Raison sociale si société.
     *
     * @return $this
     */
    public function setSSociete($s_societe)
    {
        $this->container['s_societe'] = $s_societe;

        return $this;
    }

    /**
     * Gets s_prenom
     *
     * @return string
     */
    public function getSPrenom()
    {
        return $this->container['s_prenom'];
    }

    /**
     * Sets s_prenom
     *
     * @param string $s_prenom Prénom si individu.
     *
     * @return $this
     */
    public function setSPrenom($s_prenom)
    {
        $this->container['s_prenom'] = $s_prenom;

        return $this;
    }

    /**
     * Gets s_nom
     *
     * @return string
     */
    public function getSNom()
    {
        return $this->container['s_nom'];
    }

    /**
     * Sets s_nom
     *
     * @param string $s_nom Nom de famille si individu.
     *
     * @return $this
     */
    public function setSNom($s_nom)
    {
        $this->container['s_nom'] = $s_nom;

        return $this;
    }

    /**
     * Gets s_l1
     *
     * @return string
     */
    public function getSL1()
    {
        return $this->container['s_l1'];
    }

    /**
     * Sets s_l1
     *
     * @param string $s_l1 Nom individu ou raison sociale si société.
     *
     * @return $this
     */
    public function setSL1($s_l1)
    {
        $this->container['s_l1'] = $s_l1;

        return $this;
    }

    /**
     * Gets s_l2
     *
     * @return string
     */
    public function getSL2()
    {
        return $this->container['s_l2'];
    }

    /**
     * Sets s_l2
     *
     * @param string $s_l2 Complément d'adresse 1.
     *
     * @return $this
     */
    public function setSL2($s_l2)
    {
        $this->container['s_l2'] = $s_l2;

        return $this;
    }

    /**
     * Gets s_l3
     *
     * @return string
     */
    public function getSL3()
    {
        return $this->container['s_l3'];
    }

    /**
     * Sets s_l3
     *
     * @param string $s_l3 Complément d'adresse 2.
     *
     * @return $this
     */
    public function setSL3($s_l3)
    {
        $this->container['s_l3'] = $s_l3;

        return $this;
    }

    /**
     * Gets s_l4
     *
     * @return string
     */
    public function getSL4()
    {
        return $this->container['s_l4'];
    }

    /**
     * Sets s_l4
     *
     * @param string $s_l4 Voie.
     *
     * @return $this
     */
    public function setSL4($s_l4)
    {
        $this->container['s_l4'] = $s_l4;

        return $this;
    }

    /**
     * Gets s_l5
     *
     * @return string
     */
    public function getSL5()
    {
        return $this->container['s_l5'];
    }

    /**
     * Sets s_l5
     *
     * @param string $s_l5 Lieu dit.
     *
     * @return $this
     */
    public function setSL5($s_l5)
    {
        $this->container['s_l5'] = $s_l5;

        return $this;
    }

    /**
     * Gets s_l6
     *
     * @return string
     */
    public function getSL6()
    {
        return $this->container['s_l6'];
    }

    /**
     * Sets s_l6
     *
     * @param string $s_l6 Code postal et localité.
     *
     * @return $this
     */
    public function setSL6($s_l6)
    {
        $this->container['s_l6'] = $s_l6;

        return $this;
    }

    /**
     * Gets s_cp
     *
     * @return string
     */
    public function getSCp()
    {
        return $this->container['s_cp'];
    }

    /**
     * Sets s_cp
     *
     * @param string $s_cp Code postal de l’adresse.
     *
     * @return $this
     */
    public function setSCp($s_cp)
    {
        $this->container['s_cp'] = $s_cp;

        return $this;
    }

    /**
     * Gets s_loc
     *
     * @return string
     */
    public function getSLoc()
    {
        return $this->container['s_loc'];
    }

    /**
     * Sets s_loc
     *
     * @param string $s_loc Localité de l’adresse.
     *
     * @return $this
     */
    public function setSLoc($s_loc)
    {
        $this->container['s_loc'] = $s_loc;

        return $this;
    }

    /**
     * Gets s_typeterminal
     *
     * @return string
     */
    public function getSTypeterminal()
    {
        return $this->container['s_typeterminal'];
    }

    /**
     * Sets s_typeterminal
     *
     * @param string $s_typeterminal TF: téléphone TC: fax CT: cabine téléphonique.
     *
     * @return $this
     */
    public function setSTypeterminal($s_typeterminal)
    {
        $this->container['s_typeterminal'] = $s_typeterminal;

        return $this;
    }

    /**
     * Gets s_antiprospect
     *
     * @return string
     */
    public function getSAntiprospect()
    {
        return $this->container['s_antiprospect'];
    }

    /**
     * Sets s_antiprospect
     *
     * @param string $s_antiprospect O pour opposition au marketing téléphonique (liste orange).
     *
     * @return $this
     */
    public function setSAntiprospect($s_antiprospect)
    {
        $this->container['s_antiprospect'] = $s_antiprospect;

        return $this;
    }

    /**
     * Gets s_stopinv
     *
     * @return string
     */
    public function getSStopinv()
    {
        return $this->container['s_stopinv'];
    }

    /**
     * Sets s_stopinv
     *
     * @param string $s_stopinv O pour opposition à la recherche inversée.
     *
     * @return $this
     */
    public function setSStopinv($s_stopinv)
    {
        $this->container['s_stopinv'] = $s_stopinv;

        return $this;
    }

    /**
     * Gets s_chamois
     *
     * @return string
     */
    public function getSChamois()
    {
        return $this->container['s_chamois'];
    }

    /**
     * Sets s_chamois
     *
     * @param string $s_chamois O pour opposition à la parution annuaire papier mais pas au renseignement téléphonique.
     *
     * @return $this
     */
    public function setSChamois($s_chamois)
    {
        $this->container['s_chamois'] = $s_chamois;

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


