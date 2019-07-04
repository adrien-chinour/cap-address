# cap-address 

copy project from https://github.com/pawella/cap-address (removed)

Usage
--

```php

<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$config = [
    'CapAddress' => [
        'email' => [
            'host' => 'http://localhost:8080/'
        ],
        'phone' => [
            'host' => 'http://localhost:8080/'
        ]
    ]
]; 

$api = new \CapAddress\Api($config);

?>
```


