{{--
  Laravel Boost third-party package AI guideline for realrashid/laravel-zoho-cliq
  Provides concise instructions and examples for AI agents to integrate this package.
--}}

# Zoho Cliq (realrashid/laravel-zoho-cliq)

A Laravel package for integrating with Zoho Cliq, allowing you to send messages, notifications, and rich content (cards) seamlessly from your Laravel application using Incoming Webhooks.

## Features

- **Simple Messaging**: Send plain text messages to Zoho Cliq channels or buddies.
- **Rich Cards**: Send complex card messages with titles, descriptions, and images.
- **Multiple Recipients**: Send the same message to multiple channel webhooks at once.
- **Fluent API**: Easy-to-use syntax via the `Cliq` facade.

## Publishable tags

- `cliq-config` — publishes `config/cliq.php`

Example: `php artisan vendor:publish --provider="RealRashid\Cliq\CliqServiceProvider" --tag="cliq-config"`

## Typical usage

1. **Send Text Message**:
```php
use RealRashid\Cliq\Facades\Cliq;

Cliq::message('Hello from Laravel 13!')
    ->to('https://cliq.zoho.com/company/hooks/...)
    ->send();
```

2. **Send Card Message**:
```php
Cliq::card('New Feature Released', 'Our latest update is now live on production.')
    ->image('https://example.com/logo.png')
    ->to('https://cliq.zoho.com/company/hooks/...)
    ->send();
```

3. **Send to Multiple Channels**:
```php
Cliq::message('Server Alert!')
    ->to([
        'https://cliq.zoho.com/company/hooks/channel_1',
        'https://cliq.zoho.com/company/hooks/channel_2',
    ])
    ->send();
```

## Configuration hints

- Configure your default webhooks in `config/cliq.php` (or via `.env`).
- Ensure Zoho Cliq Incoming Webhooks are correctly set up and active.

## Notes for Laravel 13

- Fully compatible with Laravel 13 and PHP 8.2+.
- Designed for simplicity and minimal overhead in notification workflows.
