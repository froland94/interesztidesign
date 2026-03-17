<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; font-size: 15px; color: #333; background: #f9f9f9; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #fff; border-radius: 8px; border: 1px solid #e5e5e5; padding: 36px; }
        h1 { font-size: 20px; font-weight: 600; margin-bottom: 24px; color: #111; border-bottom: 1px solid #eee; padding-bottom: 16px; }
        .field { margin-bottom: 16px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #888; margin-bottom: 4px; }
        .value { color: #222; }
        ul { margin: 4px 0 0 0; padding-left: 20px; }
        li { margin-bottom: 4px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>{{ __('contact.mail.heading') }}</h1>

        <div class="field">
            <div class="label">{{ __('contact.mail.fields.name') }}</div>
            <div class="value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="label">{{ __('contact.mail.fields.email') }}</div>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        @if($data['phone'])
            <div class="field">
                <div class="label">{{ __('contact.mail.fields.phone') }}</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
        @endif

        <div class="field">
            <div class="label">{{ __('contact.mail.fields.property') }}</div>
            <div class="value">{{ $data['property'] }}</div>
        </div>

        <div class="field">
            <div class="label">{{ __('contact.mail.fields.services') }}</div>
            <ul>
                @foreach($data['services'] as $service)
                    <li>{{ $service }}</li>
                @endforeach
            </ul>
        </div>

        @if($data['description'])
            <div class="field">
                <div class="label">{{ __('contact.mail.fields.description') }}</div>
                <div class="value">{{ $data['description'] }}</div>
            </div>
        @endif
    </div>
</body>
</html>
