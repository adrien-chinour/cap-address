# CapAddress\Address\DefaultApi

All URIs are relative to *http://dev.capadresse.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessageGet**](DefaultApi.md#getMessageGet) | **GET** /GetMessage | Gestion des messages
[**searchAddressGet**](DefaultApi.md#searchAddressGet) | **GET** /SearchAddress | Aide à la saisie d&#39;adresses en temps réel
[**searchLineGet**](DefaultApi.md#searchLineGet) | **GET** /SearchLine | Aide à la saisie d&#39;adresses en temps réel
[**verifyAddressGet**](DefaultApi.md#verifyAddressGet) | **GET** /VerifyAddress | Vérification de l&#39;adresse après validation


# **getMessageGet**
> \CapAddress\Address\Model\InlineResponse200 getMessageGet($request, $message_code, $language_code)

Gestion des messages

La fonction « GetMessage » doit être appelée après chacune des étapes décrites dans ce document si ces dernières renvoient une valeur différente de 0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Address\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "GetMessage"; // string | 
$message_code = "message_code_example"; // string | Valeur retournée par la fonction appelée précédemment.
$language_code = "fr"; // string | Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les messages.

try {
    $result = $apiInstance->getMessageGet($request, $message_code, $language_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMessageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to GetMessage]
 **message_code** | **string**| Valeur retournée par la fonction appelée précédemment. |
 **language_code** | **string**| Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les messages. | [default to fr]

### Return type

[**\CapAddress\Address\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAddressGet**
> \CapAddress\Address\Model\SearchAddressResponse searchAddressGet($request, $step, $country_code, $language_code, $input_output, $quality_code, $locality_synonym, $locality_id, $locality, $postal_code, $locality_flags, $street_id, $street_name, $street_flags, $street_type, $street_synonym, $street_info_1, $street_info_2, $street_info_5, $street_number, $street_number_id, $street_number_ext, $building_id, $building_name, $building_info_1, $company_id, $company, $company_info_1, $company_info_2, $additional_info_7)

Aide à la saisie d'adresses en temps réel

Chaque caractère saisi engendre un appel à la fonction « SearchAddress » avec la variable « step » initialisée à l'étape correspondante à la recherche.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Address\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "SearchAddress"; // string | 
$step = "step_example"; // string | L'étape correspondante à la recherche.
$country_code = "FRA"; // string | Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche.
$language_code = "fr"; // string | Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions.
$input_output = "input_output_example"; // string | Chaîne de caractères saisie par l'utilisateur.
$quality_code = "quality_code_example"; // string | Code qualité adresse, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_synonym = "locality_synonym_example"; // string | Lieu dit postal ou INSEE, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_id = "locality_id_example"; // string | Identifiant de localité (Code INSEE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality = "locality_example"; // string | Localité, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$postal_code = "postal_code_example"; // string | Code Postal, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_flags = 56; // int | Type de couple Code Postal Localité, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_id = "street_id_example"; // string | Identifiant de voie (Matricule HEXAVIA), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_name = "street_name_example"; // string | Ligne 4 postale (voie), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_flags = 56; // int | Type de synonyme de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_type = "street_type_example"; // string | Type de voie abrégé, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_synonym = "street_synonym_example"; // string | Ancienne dénomination de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_1 = "street_info_1_example"; // string | Mot directeur de la voie (dernier mot), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_2 = "street_info_2_example"; // string | Reste voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_5 = "street_info_5_example"; // string | Identifiant de la voie (Code HEXACLE VOIE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number = "street_number_example"; // string | Numéro de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number_id = "street_number_id_example"; // string | Identifiant du numéro de voie (Code HEXACLE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number_ext = "street_number_ext_example"; // string | Complément du numéro, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_id = "building_id_example"; // string | Identifiant du bâtiment (Code HEXALIGNE3), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_name = "building_name_example"; // string | Libellé du complément d'adresse, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_info_1 = "building_info_1_example"; // string | Informations additionnelles du bâtiment, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_id = "company_id_example"; // string | Numéro de dossier cedexa, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company = "company_example"; // string | Nom de la société, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_info_1 = "company_info_1_example"; // string | Ligne 2 société, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_info_2 = "company_info_2_example"; // string | Boite Postale, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$additional_info_7 = "additional_info_7_example"; // string | Ligne 5 postale, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.

try {
    $result = $apiInstance->searchAddressGet($request, $step, $country_code, $language_code, $input_output, $quality_code, $locality_synonym, $locality_id, $locality, $postal_code, $locality_flags, $street_id, $street_name, $street_flags, $street_type, $street_synonym, $street_info_1, $street_info_2, $street_info_5, $street_number, $street_number_id, $street_number_ext, $building_id, $building_name, $building_info_1, $company_id, $company, $company_info_1, $company_info_2, $additional_info_7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to SearchAddress]
 **step** | **string**| L&#39;étape correspondante à la recherche. |
 **country_code** | **string**| Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche. | [default to FRA]
 **language_code** | **string**| Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions. | [default to fr]
 **input_output** | **string**| Chaîne de caractères saisie par l&#39;utilisateur. | [optional]
 **quality_code** | **string**| Code qualité adresse, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_synonym** | **string**| Lieu dit postal ou INSEE, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_id** | **string**| Identifiant de localité (Code INSEE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality** | **string**| Localité, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **postal_code** | **string**| Code Postal, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_flags** | **int**| Type de couple Code Postal Localité, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_id** | **string**| Identifiant de voie (Matricule HEXAVIA), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_name** | **string**| Ligne 4 postale (voie), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_flags** | **int**| Type de synonyme de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_type** | **string**| Type de voie abrégé, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_synonym** | **string**| Ancienne dénomination de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_1** | **string**| Mot directeur de la voie (dernier mot), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_2** | **string**| Reste voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_5** | **string**| Identifiant de la voie (Code HEXACLE VOIE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number** | **string**| Numéro de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number_id** | **string**| Identifiant du numéro de voie (Code HEXACLE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number_ext** | **string**| Complément du numéro, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_id** | **string**| Identifiant du bâtiment (Code HEXALIGNE3), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_name** | **string**| Libellé du complément d&#39;adresse, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_info_1** | **string**| Informations additionnelles du bâtiment, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_id** | **string**| Numéro de dossier cedexa, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company** | **string**| Nom de la société, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_info_1** | **string**| Ligne 2 société, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_info_2** | **string**| Boite Postale, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **additional_info_7** | **string**| Ligne 5 postale, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]

### Return type

[**\CapAddress\Address\Model\SearchAddressResponse**](../Model/SearchAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLineGet**
> \CapAddress\Address\Model\SearchLineResponse searchLineGet($request, $step, $country_code, $language_code, $input_output, $quality_code, $locality_synonym, $locality_id, $locality, $postal_code, $locality_flags, $street_id, $street_name, $street_flags, $street_type, $street_synonym, $street_info_1, $street_info_2, $street_info_5, $street_number, $street_number_id, $street_number_ext, $building_id, $building_name, $building_info_1, $company_id, $company, $company_info_1, $company_info_2, $additional_info_7)

Aide à la saisie d'adresses en temps réel

Chaque caractère saisi engendre un appel à la fonction « SearchLine » avec la variable « step » initialisée à l'étape correspondante à la recherche.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Address\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "SearchLine"; // string | 
$step = "step_example"; // string | L'étape correspondante à la recherche.
$country_code = "FRA"; // string | Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche.
$language_code = "fr"; // string | Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions.
$input_output = "input_output_example"; // string | Chaîne de caractères saisie par l'utilisateur.
$quality_code = "quality_code_example"; // string | Code qualité adresse, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_synonym = "locality_synonym_example"; // string | Lieu dit postal ou INSEE, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_id = "locality_id_example"; // string | Identifiant de localité (Code INSEE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality = "locality_example"; // string | Localité, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$postal_code = "postal_code_example"; // string | Code Postal, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$locality_flags = 56; // int | Type de couple Code Postal Localité, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_id = "street_id_example"; // string | Identifiant de voie (Matricule HEXAVIA), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_name = "street_name_example"; // string | Ligne 4 postale (voie), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_flags = 56; // int | Type de synonyme de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_type = "street_type_example"; // string | Type de voie abrégé, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_synonym = "street_synonym_example"; // string | Ancienne dénomination de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_1 = "street_info_1_example"; // string | Mot directeur de la voie (dernier mot), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_2 = "street_info_2_example"; // string | Reste voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_info_5 = "street_info_5_example"; // string | Identifiant de la voie (Code HEXACLE VOIE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number = "street_number_example"; // string | Numéro de voie, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number_id = "street_number_id_example"; // string | Identifiant du numéro de voie (Code HEXACLE), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$street_number_ext = "street_number_ext_example"; // string | Complément du numéro, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_id = "building_id_example"; // string | Identifiant du bâtiment (Code HEXALIGNE3), élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_name = "building_name_example"; // string | Libellé du complément d'adresse, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$building_info_1 = "building_info_1_example"; // string | Informations additionnelles du bâtiment, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_id = "company_id_example"; // string | Numéro de dossier cedexa, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company = "company_example"; // string | Nom de la société, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_info_1 = "company_info_1_example"; // string | Ligne 2 société, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$company_info_2 = "company_info_2_example"; // string | Boite Postale, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.
$additional_info_7 = "additional_info_7_example"; // string | Ligne 5 postale, élément récupéré lors de l'étape de recherche précédente via le tableau de sortie adresses.

try {
    $result = $apiInstance->searchLineGet($request, $step, $country_code, $language_code, $input_output, $quality_code, $locality_synonym, $locality_id, $locality, $postal_code, $locality_flags, $street_id, $street_name, $street_flags, $street_type, $street_synonym, $street_info_1, $street_info_2, $street_info_5, $street_number, $street_number_id, $street_number_ext, $building_id, $building_name, $building_info_1, $company_id, $company, $company_info_1, $company_info_2, $additional_info_7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchLineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to SearchLine]
 **step** | **string**| L&#39;étape correspondante à la recherche. |
 **country_code** | **string**| Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche. | [default to FRA]
 **language_code** | **string**| Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions. | [default to fr]
 **input_output** | **string**| Chaîne de caractères saisie par l&#39;utilisateur. | [optional]
 **quality_code** | **string**| Code qualité adresse, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_synonym** | **string**| Lieu dit postal ou INSEE, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_id** | **string**| Identifiant de localité (Code INSEE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality** | **string**| Localité, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **postal_code** | **string**| Code Postal, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **locality_flags** | **int**| Type de couple Code Postal Localité, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_id** | **string**| Identifiant de voie (Matricule HEXAVIA), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_name** | **string**| Ligne 4 postale (voie), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_flags** | **int**| Type de synonyme de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_type** | **string**| Type de voie abrégé, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_synonym** | **string**| Ancienne dénomination de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_1** | **string**| Mot directeur de la voie (dernier mot), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_2** | **string**| Reste voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_info_5** | **string**| Identifiant de la voie (Code HEXACLE VOIE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number** | **string**| Numéro de voie, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number_id** | **string**| Identifiant du numéro de voie (Code HEXACLE), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **street_number_ext** | **string**| Complément du numéro, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_id** | **string**| Identifiant du bâtiment (Code HEXALIGNE3), élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_name** | **string**| Libellé du complément d&#39;adresse, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **building_info_1** | **string**| Informations additionnelles du bâtiment, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_id** | **string**| Numéro de dossier cedexa, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company** | **string**| Nom de la société, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_info_1** | **string**| Ligne 2 société, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **company_info_2** | **string**| Boite Postale, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]
 **additional_info_7** | **string**| Ligne 5 postale, élément récupéré lors de l&#39;étape de recherche précédente via le tableau de sortie adresses. | [optional]

### Return type

[**\CapAddress\Address\Model\SearchLineResponse**](../Model/SearchLineResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAddressGet**
> \CapAddress\Address\Model\VerifyAddressResponse verifyAddressGet($request, $country_code, $language_code, $step, $locality_synonym, $locality, $postal_code, $street_name, $street_number, $street_number_ext, $building_name, $building_info1)

Vérification de l'adresse après validation

La vérification d'une adresse s'effectue lors de la validation du formulaire. Le service web renvoie deux codes qualités permettant d'identifier le niveau de fiabilité de l'adresse vérifiée. Pour vérifier une adresse, il faut appeler la fonction « VerifyAddress » avec, en paramètre d'entrée, un élément input.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Address\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "VerifyAddress"; // string | 
$country_code = "FRA"; // string | Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche.
$language_code = "fr"; // string | Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions.
$step = ""; // string | 
$locality_synonym = "locality_synonym_example"; // string | Lieu dit postal ou INSEE.
$locality = "locality_example"; // string | Localité.
$postal_code = "postal_code_example"; // string | Code Postal.
$street_name = "street_name_example"; // string | Ligne 4 postale (voie).
$street_number = "street_number_example"; // string | Numéro de voie.
$street_number_ext = "street_number_ext_example"; // string | Complément du numéro.
$building_name = "building_name_example"; // string | Libellé du complément d'adresse (Complément d'adresse 1).
$building_info1 = "building_info1_example"; // string | Informations additionnelles du bâtiment (Complément d'adresse 2).

try {
    $result = $apiInstance->verifyAddressGet($request, $country_code, $language_code, $step, $locality_synonym, $locality, $postal_code, $street_name, $street_number, $street_number_ext, $building_name, $building_info1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to VerifyAddress]
 **country_code** | **string**| Chaîne de caractères représentant le code ISO 3166-1 alpha-3 sur trois caractères du pays pour lequel faire la recherche. | [default to FRA]
 **language_code** | **string**| Chaîne de caractères représentant le code ISO 639-1 identifiant la langue dans laquelle renvoyer les propositions. | [default to fr]
 **step** | **string**|  | [optional] [default to ]
 **locality_synonym** | **string**| Lieu dit postal ou INSEE. | [optional]
 **locality** | **string**| Localité. | [optional]
 **postal_code** | **string**| Code Postal. | [optional]
 **street_name** | **string**| Ligne 4 postale (voie). | [optional]
 **street_number** | **string**| Numéro de voie. | [optional]
 **street_number_ext** | **string**| Complément du numéro. | [optional]
 **building_name** | **string**| Libellé du complément d&#39;adresse (Complément d&#39;adresse 1). | [optional]
 **building_info1** | **string**| Informations additionnelles du bâtiment (Complément d&#39;adresse 2). | [optional]

### Return type

[**\CapAddress\Address\Model\VerifyAddressResponse**](../Model/VerifyAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

