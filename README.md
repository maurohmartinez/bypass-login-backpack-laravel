# Bypass Login — Backpack for Laravel
Use a simple url to login with users having different roles to test your application locally.

⚠️ DO NOT install in production! ⚠️

<img width="796" alt="bypass-login" src="https://github.com/maurohmartinez/bypass-login-backpack-laravel/assets/33960976/edae8441-280f-44cf-ba57-37f922f72046">

## Requirements
This packages depends on:
1. [backpack/crud: ^6.0](https://backpackforlaravel.com/)
2. [backpack/permissionmanager: ^7.0](https://github.com/Laravel-Backpack/PermissionManager)
3. [laravel/framework: ^10.0.0](https://laravel.com/)

## How to install
1. Use composer to require this project **locally**
```shell
composer require maurohmartinez/bypass-login-backpack-laravel --dev
```

2. Add in your .env file the login path relative to your project url, like this...
```dotenv
LOGIN_URL=admin/login
```

3. [Optional] Publish config views if you need to customize them
```shell
   php artisan vendor:publish --provider="MHMartinez\BypassLogin\app\Providers\BypassLoginServiceProvider" --tag=view
```

### That's it!
You have now two new ways to login:
1. Go to your login page, add `/as` at the end and pick a user's role to login.
2. In case you just want to pass a user id, go to your login page, and add `/as/{id}` to login.

## Contact
Project Link: [https://github.com/maurohmartinez/bypass-login-backpack-laravel](https://github.com/maurohmartinez/bypass-login-backpack-laravel)

## Credits
- [Mauro Martinez](https://inspiredpulse.com/) Developer
- [Cristian Tabacitu](https://tabacitu.ro/) For creating [Backpack for Laravel](https://backpackforlaravel.com/)!
