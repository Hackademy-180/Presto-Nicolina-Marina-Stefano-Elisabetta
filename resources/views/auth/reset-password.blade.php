<x-layout>
  <h1 class="text-center mt-5"> {{ __('ui.auth.reset_password_title') }}</h1>
  <div>
    <form method="POST" action="{{ route('password.update') }}">
      @csrf

      <input type="hidden" name="token" value="{{ $token ?? $request->route('token') ?? $request->token }}">

      <div class="mb-3 mt-5 d-flex justify-content-center flex-column align-items-center">
        <label>Email</label>
        <input type="email" name="email" class="form-control w-25" required readonly value="{{ old('email', $request->email) }}">
        @error('email') <p class="error-message">{{ $message }}</p> @enderror
      </div>

      <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
        <label>Password</label>
        <input type="password" name="password" class="form-control w-25 @error('password') is-invalid @enderror" required autofocus>
        @error('password') <p class="error-message">{{ $message }}</p> @enderror
      </div>

      <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
        <label class="mb-2">{{ __('ui.auth.confirm_password') }}</label>
        <input type="password" name="password_confirmation" class="form-control w-25" required>
      </div>

      <div class="col-auto box-buttons">
        <button type="submit" class="mb-3 form-button">{{ __('ui.auth.update_password') }}</button>
      </div>
    </form>
  </div>
</x-layout>