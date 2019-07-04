# CapAddress\DefaultApi

All URIs are relative to *http://dev.capadresse.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPhoneBookGet**](DefaultApi.md#checkPhoneBookGet) | **GET** /CheckPhoneBook | Permet d’obtenir les informations du propriétaire du numéro de téléphone.
[**getInfoMobileGet**](DefaultApi.md#getInfoMobileGet) | **GET** /GetInfoMobile | Permet de rechercher des informations concernant un numéro de téléphone.
[**getMessageCPGet**](DefaultApi.md#getMessageCPGet) | **GET** /GetMessageCP | Gestion des messages
[**searchPhoneGet**](DefaultApi.md#searchPhoneGet) | **GET** /SearchPhone | Permet de valider la syntaxe d&#39;un numéro de téléphone d&#39;un pays.
[**validatePhoneMobGet**](DefaultApi.md#validatePhoneMobGet) | **GET** /ValidatePhoneMob | Permet de valider l&#39;existence d&#39;un numéro de téléphone mobile français.


# **checkPhoneBookGet**
> \CapAddress\Phone\Model\CheckPhoneBookResponse checkPhoneBookGet($request, $s_tel, $s_l1, $s_l2, $s_l3, $s_l4, $s_l5, $s_l6, $s_cp, $s_loc)

Permet d’obtenir les informations du propriétaire du numéro de téléphone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "CheckPhoneBook"; // string | 
$s_tel = "s_tel_example"; // string | Chaîne de caractères représentant le numéro de téléphone à rechercher.
$s_l1 = "s_l1_example"; // string | Nom individu ou raison sociale si société.
$s_l2 = "s_l2_example"; // string | Complément d'adresse 1.
$s_l3 = "s_l3_example"; // string | Complément d'adresse 2.
$s_l4 = "s_l4_example"; // string | Voie.
$s_l5 = "s_l5_example"; // string | Lieu dit.
$s_l6 = "s_l6_example"; // string | Code postal et localité.
$s_cp = "s_cp_example"; // string | Code postal de l'adresse.
$s_loc = "s_loc_example"; // string | Localité de l'adresse.

try {
    $result = $apiInstance->checkPhoneBookGet($request, $s_tel, $s_l1, $s_l2, $s_l3, $s_l4, $s_l5, $s_l6, $s_cp, $s_loc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkPhoneBookGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to CheckPhoneBook]
 **s_tel** | **string**| Chaîne de caractères représentant le numéro de téléphone à rechercher. | [optional]
 **s_l1** | **string**| Nom individu ou raison sociale si société. | [optional]
 **s_l2** | **string**| Complément d&#39;adresse 1. | [optional]
 **s_l3** | **string**| Complément d&#39;adresse 2. | [optional]
 **s_l4** | **string**| Voie. | [optional]
 **s_l5** | **string**| Lieu dit. | [optional]
 **s_l6** | **string**| Code postal et localité. | [optional]
 **s_cp** | **string**| Code postal de l&#39;adresse. | [optional]
 **s_loc** | **string**| Localité de l&#39;adresse. | [optional]

### Return type

[**\CapAddress\Phone\Model\CheckPhoneBookResponse**](../Model/CheckPhoneBookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInfoMobileGet**
> \CapAddress\Phone\Model\GetInfoMobResponse getInfoMobileGet($request, $s_iso_pays, $s_tel, $s_indicatif_out, $s_indice_int, $i_format, $s_code_retour)

Permet de rechercher des informations concernant un numéro de téléphone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "GetInfoMobile"; // string | 
$s_iso_pays = "s_iso_pays_example"; // string | Chaîne de caractères représentant le code ISO3 du pays. (voir annexe pour la liste des codes pays).
$s_tel = "s_tel_example"; // string | Chaîne de caractères représentant le numéro de téléphone à rechercher.
$s_indicatif_out = "s_indicatif_out_example"; // string | Chaîne de caractères représentant l'indicatif international.
$s_indice_int = "s_indice_int_example"; // string | Chaîne de caractères représentant l'indice téléphonique national.
$i_format = "i_format_example"; // string | Entier représentant le type de format à afficher. 1 pour format international, ou 0 pour format nationa.
$s_code_retour = "s_code_retour_example"; // string | Code retour résultant de la fonction SearchPhone.

try {
    $result = $apiInstance->getInfoMobileGet($request, $s_iso_pays, $s_tel, $s_indicatif_out, $s_indice_int, $i_format, $s_code_retour);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInfoMobileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to GetInfoMobile]
 **s_iso_pays** | **string**| Chaîne de caractères représentant le code ISO3 du pays. (voir annexe pour la liste des codes pays). |
 **s_tel** | **string**| Chaîne de caractères représentant le numéro de téléphone à rechercher. | [optional]
 **s_indicatif_out** | **string**| Chaîne de caractères représentant l&#39;indicatif international. | [optional]
 **s_indice_int** | **string**| Chaîne de caractères représentant l&#39;indice téléphonique national. | [optional]
 **i_format** | **string**| Entier représentant le type de format à afficher. 1 pour format international, ou 0 pour format nationa. | [optional]
 **s_code_retour** | **string**| Code retour résultant de la fonction SearchPhone. | [optional]

### Return type

[**\CapAddress\Phone\Model\GetInfoMobResponse**](../Model/GetInfoMobResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageCPGet**
> \CapAddress\Phone\Model\InlineResponse200 getMessageCPGet($request, $s_code_pays_iso3, $i_return_value)

Gestion des messages

La fonction « GetMessageCP » doit être appelée après chacune des étapes décrites dans ce document si ces dernières renvoient une valeur différente de 0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "GetMessageCP"; // string | 
$s_code_pays_iso3 = "FRA"; // string | Code Iso 3 de la langue de message (défaut: FRA).
$i_return_value = 56; // int | Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les messages.

try {
    $result = $apiInstance->getMessageCPGet($request, $s_code_pays_iso3, $i_return_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessageCPGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to GetMessageCP]
 **s_code_pays_iso3** | **string**| Code Iso 3 de la langue de message (défaut: FRA). | [default to FRA]
 **i_return_value** | **int**| Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les messages. |

### Return type

[**\CapAddress\Phone\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPhoneGet**
> \CapAddress\Phone\Model\SearchPhoneResponse searchPhoneGet($request, $s_iso_pays, $s_caractere_sep, $i_format, $i_type_search, $s_tel)

Permet de valider la syntaxe d'un numéro de téléphone d'un pays.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "SearchPhone"; // string | 
$s_iso_pays = "s_iso_pays_example"; // string | Chaîne de caractères représentant le code ISO3 du pays. (voir annexe pour la liste des codes pays).
$s_caractere_sep = "s_caractere_sep_example"; // string | Caractère représentant le séparateur à inclure entre les chiffres du numéro de téléphone.
$i_format = 56; // int | Entier représentant le type de format à afficher.
$i_type_search = 56; // int | Entier représentant le type de recherche.
$s_tel = "s_tel_example"; // string | Chaîne de caractères représentant le numéro de téléphone à valider.

try {
    $result = $apiInstance->searchPhoneGet($request, $s_iso_pays, $s_caractere_sep, $i_format, $i_type_search, $s_tel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchPhoneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to SearchPhone]
 **s_iso_pays** | **string**| Chaîne de caractères représentant le code ISO3 du pays. (voir annexe pour la liste des codes pays). |
 **s_caractere_sep** | **string**| Caractère représentant le séparateur à inclure entre les chiffres du numéro de téléphone. |
 **i_format** | **int**| Entier représentant le type de format à afficher. |
 **i_type_search** | **int**| Entier représentant le type de recherche. |
 **s_tel** | **string**| Chaîne de caractères représentant le numéro de téléphone à valider. | [optional]

### Return type

[**\CapAddress\Phone\Model\SearchPhoneResponse**](../Model/SearchPhoneResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePhoneMobGet**
> \CapAddress\Phone\Model\ValidatePhoneMobResponse validatePhoneMobGet($request, $s_iso_pays, $s_indice_int, $s_indicatif_out, $i_format, $s_code_retour, $s_tel)

Permet de valider l'existence d'un numéro de téléphone mobile français.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "ValidatePhoneMob"; // string | 
$s_iso_pays = "s_iso_pays_example"; // string | Chaîne de caractères représentant le code ISO3 du pays.
$s_indice_int = "s_indice_int_example"; // string | Chaîne de caractères représentant l'indice téléphonique national.
$s_indicatif_out = "s_indicatif_out_example"; // string | Chaîne de caractères représentant l'indicatif international.
$i_format = 56; // int | Entier représentant le type de format à afficher. 1 pour format international, ou 0 pour format national.
$s_code_retour = "s_code_retour_example"; // string | Code retour résultant de la fonction SearchPhone.
$s_tel = "s_tel_example"; // string | Chaîne de caractères représentant le numéro de téléphone à valider.

try {
    $result = $apiInstance->validatePhoneMobGet($request, $s_iso_pays, $s_indice_int, $s_indicatif_out, $i_format, $s_code_retour, $s_tel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validatePhoneMobGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to ValidatePhoneMob]
 **s_iso_pays** | **string**| Chaîne de caractères représentant le code ISO3 du pays. |
 **s_indice_int** | **string**| Chaîne de caractères représentant l&#39;indice téléphonique national. |
 **s_indicatif_out** | **string**| Chaîne de caractères représentant l&#39;indicatif international. |
 **i_format** | **int**| Entier représentant le type de format à afficher. 1 pour format international, ou 0 pour format national. |
 **s_code_retour** | **string**| Code retour résultant de la fonction SearchPhone. |
 **s_tel** | **string**| Chaîne de caractères représentant le numéro de téléphone à valider. | [optional]

### Return type

[**\CapAddress\Phone\Model\ValidatePhoneMobResponse**](../Model/ValidatePhoneMobResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

