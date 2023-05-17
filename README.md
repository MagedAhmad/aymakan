
# Aymakan Laravel package

<p align="center">
  <img src="https://ollkom.com/wp-content/uploads/2021/11/0002_Olltek.png" width="400" alt="Olltek">
  <img src="https://ollkom.com/wp-content/uploads/2021/11/new_0001_Aymakan.png" width="400" alt="Aymakan">
</p>


A laravel package to add `aymakan` shipment method, it provides access to all it's apis with easy facade.


## Installation

you can simply run

```bash
  composer require magedahmed/aymakan
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
