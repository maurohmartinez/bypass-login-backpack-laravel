# Login as — Backpack for Laravel
Use a simple url to login with with users having different roles to test your application locally.

## How to install
1. Use composer to require this project **locally**
```shell
composer require maurohmartinez/login-as-backpack-laravel --dev
```

2. Publish the config file
```shell
   php artisan vendor:publish --provider="MHMartinez\LoginAs\app\Providers\LoginAsAuthServiceProvider" --tag=config
```

3. Customize the config file
```php
[
    /**
     * E.g.: for https://my-web.com/admin/login use simply "admin/login"
     */
    'login_path' => 'admin/login',   
]
```

4. [Optional] Publish config views if you need to customize them
```shell
   php artisan vendor:publish --provider="MHMartinez\LoginAs\app\Providers\LoginAsAuthServiceProvider" --tag=view
```

## Contact
Project Link: [https://github.com/maurohmartinez/two-factor-auth-laravel](https://github.com/maurohmartinez/two-factor-auth-laravel)

## Credits
- [Mauro Martinez](https://inspiredpulse.com/) Developer
- [Cristian Tabacitu](https://tabacitu.ro/) For creating [Backpack for Laravel](https://backpackforlaravel.com/)!
