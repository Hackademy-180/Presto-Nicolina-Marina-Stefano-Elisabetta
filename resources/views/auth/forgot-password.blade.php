<x-layout>
<h1 class="text-center mt-5">{{ __('ui.auth.forgot_password') }}</h1>

@if (session('status'))
<div class="status-message-resend-password text-center bg-success text-dark">
    {{ __('ui.auth.reset_link_sent') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="mb-3 mt-5 d-flex justify-content-center flex-column align-items-center">
        <label for="email" class="form-label">{{ __('ui.auth.email_label') }}</label>
        <input type="email" class="form-control text-center w-25" id="email" placeholder="mario@rossi.com" name="email" >
    </div>

    @error('email')
        <div class="text-center text-danger">{{ $message }}</div>
    @enderror
    <div class="col-auto box-buttons">
        <button type="submit" class="mb-3 form-button w-25">{{ __('ui.login') }}</button>
    </div>
</form>

<div class="mt-3 mb-5 text-center">
    <a href="{{ route('login') }}"><i class="bi bi-arrow-return-left me-1"></i> {{ __('ui.auth.back_to_login') }}</a>
  </div>


</x-layout>