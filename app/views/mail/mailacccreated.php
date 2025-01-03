<!doctype html>
<html lang="{{ getLocale() }}">
    <head>
        <meta charset="utf-8"/>

		<title>{{ __('app.account_created') }}</title>

        @if (ThemeModule::hasMailStyles())
        <style>
            {{ ThemeModule::getMailStyles() }}
        </style>
        @endif
    </head>

    <body>
        <h1>{{ __('app.account_created') }}</h1>

        <p>
            {!! __('app.account_created_hint', ['workspace' => $workspace, 'url' => workspace_url('/auth'), 'password' => $password]) !!}
        </p>

        <p>
            <small>Powered by {{ env('APP_NAME') }}</small>
        </p>
    </body>
</html>