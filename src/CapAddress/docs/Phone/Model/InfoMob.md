# InfoMob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**s_numero** | **string** | Le numéro du mobile testé. | [optional] 
**s_country_code_mcc** | **string** | Code du pays du réseau courant. | [optional] 
**s_net_work_code_mnc** | **string** | Code du réseau. | [optional] 
**s_imsi** | **string** | International Mobile Subscriber Identity, utilisé pour identifier de façon unique l’utilisateur d’un réseau mobile. | [optional] 
**s_serving_msc** | **string** | Serving mobile switching center. | [optional] 
**original_network** | [**\CapAddress\Phone\Model\Network[]**](Network.md) | Informations sur l’opérateur d’origine du mobile. | [optional] 
**is_ported** | **int** | Changement d’opérateur. 1 : Oui, 0 : Non. | [optional] 
**ported_network** | [**\CapAddress\Phone\Model\Network[]**](Network.md) | Informations sur le nouvel opérateur. | [optional] 
**is_roaming** | **int** | En déplacement à l’étranger. 1 : Oui, 0 : Non. | [optional] 
**roaming_network** | [**\CapAddress\Phone\Model\Network[]**](Network.md) | Réseau utilisé à l’étranger. | [optional] 
**status** | [**\CapAddress\Phone\Model\Status[]**](Status.md) | Informations sur l’état de la requête. | [optional] 
**error** | [**\CapAddress\Phone\Model\Error[]**](Error.md) | Informations sur l’état de la requête. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


