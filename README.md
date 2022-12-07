# Epic Games

```bash
composer require voval921/socialiteproviders-epicgames
```


## Add configuration to `config/services.php`

```php
'epicgames' => [
  'client_id' => null,
  'client_secret' => env('EPICGAMES_CLIENT_SECRET'),
  'redirect' => env('EPICGAMES_REDIRECT_URI'),
  'allowed_hosts' => [
    'example.com',
  ]
],
```


## Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. 

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        \Voval\Socialite\EpicGames\EpicGamesExtendSocialite::class.'@handle',
    ],
];
```

## Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('epicgames')->redirect();
```
