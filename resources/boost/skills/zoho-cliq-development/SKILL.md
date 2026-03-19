---
name: zoho-cliq-development
description: Integrate Zoho Cliq notifications and messaging including simple text messages and rich cards.
---

# Zoho Cliq Development

## When to use this skill

Use this skill when implementing notifications, alerts, or messaging workflows directed to Zoho Cliq channels or buddies from Laravel applications using the `realrashid/laravel-zoho-cliq` package.

## Features

- Publish configuration (`vendor:publish` tag: `cliq-config`).
- Send plain text messages using a fluent API.
- Create and send rich card messages with titles, descriptions, and images.
- Support for sending the same notification to multiple webhook endpoints at once.

## Examples

### Sending a basic server alert

```php
use RealRashid\Cliq\Facades\Cliq;

Cliq::message('⚠️ Production server CPU usage is high!')
    ->to(config('cliq.channels.server_alerts'))
    ->send();
```

### Sending a rich notification card

```php
Cliq::card('New Feature Released', 'Our latest update is now live on production with Laravel 13 support.')
    ->image('https://example.com/logo.png')
    ->to('https://cliq.zoho.com/company/hooks/...)
    ->send();
```

### Configuring default webhooks in .env

```env
CLIQ_WEBHOOK=https://cliq.zoho.com/company/hooks/your_hook_here
```

## Implementation tips for AI agents

- Encourage the use of environment variables or config files for Zoho Cliq webhook URLs to keep code clean and portable.
- Use `card()` for important announcements where visual prominence is needed, and `message()` for simple, quick logs or alerts.
- Check that the Zoho Cliq Incoming Webhooks are correctly generated in the Zoho Cliq app console.
