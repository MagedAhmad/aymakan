
# Aymakan Laravel package

A laravel package to add `aymakan` shipment method, it provides access to all it's apis with easy facade.


## Installation

you can simply run

```bash
  composer require MagedAhmad/aymakan
```

in `.env` file add these

```

AYMAKAN_API_URL=https://dev-api.aymakan.com.sa/v2
AYMAKAN_SECRET_API_KEY=
```

place your secret api key, and you are ready to go.
## Authors

- [maged raslan](https://www.github.com/MagedAhmad)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Usage/Examples

```php
use MagedAhmad\Aymakan\Facades\Aymakan;

Aymakan::pingApi();
```

you can check all available functions in aymakan php sdk.
