@extends ('layouts.app', ['portal' => 'kiosk'])

@section ('content')
    <div class="container-fluid my-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fontw-eight-bold" aria-current="page">
                    <a href="{{ route('welcome') }}" class="text-muted">
                        <x-heroicon-o-home class="icon icon-brand"/>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('kiosk.dashboard') }}" class="text-muted">
                        {{ __('Kiosk') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('kiosk.user-management.index') }}" class="text-muted">
                        {{  __('User management') }}
                    </a>
                </li>
            </ol>
        </nav>
        <div class="page-header">
            <h2 class="page-title pt-0">{{  __('Register user') }}</h2>

            <div class="page-options">
                <a href="{{ url()->previous() }}" class="btn btn-reset shadow-sm border-0">
                    <x-heroicon-o-x-circle class="icon text-danger mr-1"/> {{ __('cancel') }}
                </a>
                <button type="submit" form="createForm" class="ml-2 btn btn-submit border-0 shadow-sm">
                    <x-heroicon-o-user-plus class="icon mr-1"/> {{ __('submit') }}
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr class="mt-0">

        <div class="row mt-1">
            <div class="col-4">
                <h5 class="form-section-title">{{  __('General information') }}</h5>
                <p class="text-muted">{{  __('All the essential information to create an account in :app', ['app' => config('app.name', 'Laravel')]) }}</p>
            </div>

            <div class="offset-1 col-md-7">
                <x-form id="createForm" action="" class="card card-body shadow-sm border-0">
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="firstName">{{ __('First name') }} <span class="text-danger font-weight-bold">*</span></label>
                            
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstName" name="firstName" value="{{ old('firstName') }}">
                            <x-error field="first_name" class="invalid-feedback font-weight-bold"/>
                        </div>

                        <div class="form-group col-7">

                        </div>

                        <div class="form-group col-6 mb-0">

                        </div>

                        <div class="form-group col-6 mb-0">

                        </div>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
