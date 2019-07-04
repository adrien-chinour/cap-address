# CapAddress\Email\DefaultApi

All URIs are relative to *http://dev.capadresse.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkMailPropGet**](DefaultApi.md#checkMailPropGet) | **GET** /CheckMailProp | Validation de l&#39;adresse email (avec proposition)
[**checkMailSrvWSGet**](DefaultApi.md#checkMailSrvWSGet) | **GET** /CheckMailSrvWS | Validation de l&#39;adresse email (sans proposition)
[**searchMailCivWSGet**](DefaultApi.md#searchMailCivWSGet) | **GET** /SearchMailCivWS | Aide à la saisie d&#39;adresses emails


# **checkMailPropGet**
> \CapAddress\Email\Model\CheckMailPropResponse checkMailPropGet($request, $s_mail, $s_langue)

Validation de l'adresse email (avec proposition)

Fonction alternative à CheckMailSrvWS, permet de tester la syntaxe de l'adresse email et de se connecter au serveur d'email (nom de domaine) afin de valider son existence sur le réseau.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Email\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "CheckMailProp"; // string | 
$s_mail = "s_mail_example"; // string | L'adresse e-mail à tester.
$s_langue = "s_langue_example"; // string | Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français).

try {
    $result = $apiInstance->checkMailPropGet($request, $s_mail, $s_langue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkMailPropGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to CheckMailProp]
 **s_mail** | **string**| L&#39;adresse e-mail à tester. | [optional]
 **s_langue** | **string**| Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français). | [optional]

### Return type

[**\CapAddress\Email\Model\CheckMailPropResponse**](../Model/CheckMailPropResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkMailSrvWSGet**
> \CapAddress\Email\Model\CheckMailSrvWSResponse checkMailSrvWSGet($request, $s_mail, $s_langue)

Validation de l'adresse email (sans proposition)

Permet de tester la syntaxe de l'adresse email et de se connecter au serveur d'email (nom de domaine) afin de valider son existence sur le réseau.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Email\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "CheckMailSrvWS"; // string | 
$s_mail = "s_mail_example"; // string | L'adresse e-mail à tester.
$s_langue = "s_langue_example"; // string | Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français).

try {
    $result = $apiInstance->checkMailSrvWSGet($request, $s_mail, $s_langue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkMailSrvWSGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to CheckMailSrvWS]
 **s_mail** | **string**| L&#39;adresse e-mail à tester. | [optional]
 **s_langue** | **string**| Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français). | [optional]

### Return type

[**\CapAddress\Email\Model\CheckMailSrvWSResponse**](../Model/CheckMailSrvWSResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMailCivWSGet**
> \CapAddress\Email\Model\SearchMailCivWSResponse searchMailCivWSGet($request, $s_input, $s_nom, $s_prenom, $s_pays, $s_langue)

Aide à la saisie d'adresses emails

Permet d'afficher des propositions à l'utilisateur (à partir de la civilité qu'il a renseignée et d'une base de données contenant plus de 25000 noms de domaine), tout en lui indiquant si l'adresse saisie contient des erreurs de syntaxe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CapAddress\Email\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = "SearchMailCivWS"; // string | 
$s_input = "s_input_example"; // string | La saisie en cours de l'adresse email.
$s_nom = "s_nom_example"; // string | Nom saisi (peut être vide).
$s_prenom = "s_prenom_example"; // string | Prénom saisi (peut être vide).
$s_pays = "s_pays_example"; // string | Code ISO 3166-1 alpha-3 du pays pour lequel proposer les noms de domaine.
$s_langue = "s_langue_example"; // string | Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français).

try {
    $result = $apiInstance->searchMailCivWSGet($request, $s_input, $s_nom, $s_prenom, $s_pays, $s_langue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchMailCivWSGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | **string**|  | [default to SearchMailCivWS]
 **s_input** | **string**| La saisie en cours de l&#39;adresse email. | [optional]
 **s_nom** | **string**| Nom saisi (peut être vide). | [optional]
 **s_prenom** | **string**| Prénom saisi (peut être vide). | [optional]
 **s_pays** | **string**| Code ISO 3166-1 alpha-3 du pays pour lequel proposer les noms de domaine. | [optional]
 **s_langue** | **string**| Code ISO 639-1 de la langue dans laquelle seront affichés les messages (si omis, les messages seront affichés en français). | [optional]

### Return type

[**\CapAddress\Email\Model\SearchMailCivWSResponse**](../Model/SearchMailCivWSResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

