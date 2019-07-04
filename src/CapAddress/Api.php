<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 2018-05-20
 * Time: 12:22
 */

namespace CapAddress;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class Api
{

    protected $config = [];

    protected $apiEmail;
    protected $apiPhone;
    protected $addressApi;
    protected $httpClient;

    public function __construct(array $config = null)
    {
        if(!empty($config['CapAddress']) && is_array($config['CapAddress'])) {
            $this->config = $config['CapAddress'];
        }
    }


    /**
     * @param array $config
     * @return $this
     */
    public function setConfig(array $config) {
        $this->config = $config;
        return $this;
    }


    /**
     * @param ClientInterface $client
     * @return $this
     */
    public function setHttpClient(ClientInterface $client) {
        $this->httpClient = $client;
        return $this;
    }


    /**
     * @return Client
     */
    public function getHttpClient() {
        if(!$this->httpClient) {
            $this->httpClient = new Client();
        }
        return $this->httpClient;
    }


    #region Address

    /**
     * @return Address\Api\DefaultApi
     */
    public function getAddressApi() {

        if(!$this->addressApi) {

            $api = new Address\Api\DefaultApi(
                $this->getHttpClient()
            );

            $configuration = $api->getConfig();

            if(!empty($this->config['address']['host'])) {
                $configuration->setHost($this->config['address']['host']);
            }

            $this->addressApi = $api;
        }

        return $this->addressApi;
    }

    #endregion



    #region Email
    /**
     * @return Email\Api\DefaultApi
     */
    public function getEmailApi() {

        if(!$this->apiEmail) {

            $api = new Email\Api\DefaultApi(
                $this->getHttpClient()
            );

            $configuration = $api->getConfig();

            if(!empty($this->config['email']['host'])) {
                $configuration->setHost($this->config['email']['host']);
            }

            $this->apiEmail = $api;
        }

        return $this->apiEmail;
    }

    /**
     * @param $email
     * @param string $lang
     * @return Email\Model\CheckMailPropResponse
     * @throws Email\ApiException
     */
    public function checkMailProp($email, $lang = null) {

        return $this->getEmailApi()
            ->checkMailPropGet('CheckMailProp', $email, $lang);

    }

    /**
     * @param $input
     * @param $name
     * @param $surname
     * @param null $pays
     * @param null $lang
     * @return Email\Model\SearchMailCivWSResponse
     * @throws Email\ApiException
     */
    public function searchMailCivWS($input, $name = null, $surname = null, $pays = null, $lang = null) {
        return $this->getEmailApi()
            ->searchMailCivWSGet('SearchMailCivWS', $input, $name, $surname, $pays, $lang)
            ;
    }


    /**
     * @param $email
     * @param null $language
     * @return Email\Model\CheckMailSrvWSResponse
     * @throws Email\ApiException
     */
    public function checkMailSrvWS($email, $language = null) {
        return $this->getEmailApi()
            ->checkMailSrvWSGet('CheckMailSrvWS', $email, $language);
    }

    #endregion;

    #region Phone

    /**
     * @return Phone\Api\DefaultApi
     */
    public function getPhoneApi() {

        if(!$this->apiPhone) {

            $api = new Phone\Api\DefaultApi(
                $this->getHttpClient()
            );

            $configuration = $api->getConfig();

            if(!empty($this->config['phone']['host'])) {
                $configuration->setHost($this->config['phone']['host']);
            }

            $this->apiPhone = $api;
        }

        return $this->apiPhone;

    }


    /**
     * @param $tel
     * @param $iso
     * @param string $sCaret
     * @param int $iFormat
     * @param int $iSearchType
     * @return Phone\Model\SearchPhoneResponse
     * @throws Phone\ApiException
     *
     */
    public function searchPhone($tel, $iso, $sCaret = '', $iFormat = 1, $iSearchType = 1) {
        return $this->getPhoneApi()
            ->searchPhoneGet('SearchPhone', $iso, $sCaret, $iFormat, $iSearchType, $tel);
    }

    #endregion

}