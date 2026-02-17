<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ __('ui.workRequestMessage') }}</title>
</head>

<body>

<div class="mail-wrapper">

    <div class="mail-header">
        <h1>{{ __('ui.workRequestMessage') }}</h1>
    </div>

    <div class="mail-content">

        <h2>{{ __('ui.userDetailsLabel') }}</h2>

        <div class="mail-box">
            <p><strong>{{ __('ui.firstName') }}:</strong> {{ $name }}</p>
            <p><strong>{{ __('ui.emailLabel') }}:</strong> {{ $email }}</p>
        </div>

        <p>{{ __('ui.makeRevisor', ['name' => $name]) }}</p>

        @if($user)
            <a href="{{ route('make.revisor', $user) }}" class="mail-button">
                {{ __('ui.grantRevisorRole') }}
            </a>
        @endif

        <div class="mail-footer">
            CV allegato a questa email.
        </div>

    </div>

</div>

</body>
</html>
