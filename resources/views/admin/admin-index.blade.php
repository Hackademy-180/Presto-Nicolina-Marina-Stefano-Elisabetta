<x-layout>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <h1 class="text-center pt-3 pb-5">{{ __('ui.adminPanel') }}</h1>
    <div class="container-admin">
        <div class="container text-center">
            {{-- <div class="col-12"> --}}
                
                @foreach($users as $user)
                <h4 class="mb-3">{{ __('ui.userRequest') }} <strong>{{$user->name}}</strong></h4>
                <a class="btn btn-success mb-5" href="{{route("make.revisor", compact("user") )}}">
                    {{ __('ui.accept') }}
                </a>
                {{-- <form action="{{ route('reject.revisor', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger mb-5">
                        {{ __('ui.reject') }}
                    </button>
                </form> --}}
                @endforeach
            </div>
        </div>
    </div>
</x-layout>