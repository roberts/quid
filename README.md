# Quidpixels Code Repository

This [GitHub Repository](https://github.com/roberts/quid) contains the code behind the smart contract & website of Quidpixels - [Quidpixels.com](https://quidpixels.com "Quidpixels")

## $QUID on Base

Contract Address: 0x01cb9c83aeC45b7cf6dD5ae6FE0cEB614bBDCE70

## Connect with QuidPixels

- [t.me/Quidpixels](https://t.me/Quidpixels)
- [X.com/Quidpixels](https://X.com/Quidpixels)
- [YouTube.com/Quidpixels](https://youtube.com/Quidpixels)

## LitePaper

Coming Soon..

## Token Contract

The token contract for $QUID on Base uses the [Drew Roberts Contract Standard](https://github.com/roberts/standard) and brands it for this project on Base. [View the Quidpixels contract here](https://github.com/roberts/quid/blob/main/contracts/Quidpixels.sol).

## Website Installation

After setting up local dev environment with PHP 8, you will launch this Laravel 8 app by copying the ``.env.example`` file to ``.env``

From there, create the ``quid`` database in MySQL and from the command line run the following commands:

```bash
composer install
php artisan migrate
php artisan key:generate
npm install
npm run dev
```

You can then view the homepage if you're using Laravel Homestead at https://quid.test and can access Laravel Nova at http://quid.test/admin

## Packages

- [tipoff/support](https://github.com/tipoff/support)
- [tipoff/authorization](https://github.com/tipoff/authorization)
- [tipoff/addresses](https://github.com/tipoff/addresses)
- [tipoff/laravel-google-api](https://github.com/tipoff/laravel-google-api)
- [tipoff/laravel-serpapi](https://github.com/tipoff/laravel-serpapi)
- [tipoff/seo](https://github.com/tipoff/seo)
- [drewroberts/media](https://github.com/drewroberts/media)
- [drewroberts/blog](https://github.com/drewroberts/blog)

## Frameworks

- Laravel
- Laravel Nova
- Laravel Socialite

## Contributing

Feel free to send a feature request or submit pull requests to improve the website where you see opportunities for improvement. We appreciate the help..
