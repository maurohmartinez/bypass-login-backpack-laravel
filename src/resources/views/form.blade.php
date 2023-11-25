@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4 display-6 auth-logo-container">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card card-md">
                <div class="card-body text-center">
                    <h2 class="h2 text-center my-4">Login as</h2>
                    <p class="mb-0">We will login the first active user with this role.</p>
                    <p class="m-0 text-danger">
                        <small><i class="la la-warning"></i> This is only meant to be used locally!</small>
                    </p>
                    <form method="POST" action="">
                        @csrf
                        <label for="role_id" class="form-label"></label>
                        <select name="role_id" id="role_id" class="form-control mb-3 {{ $errors->has('role_id') ? 'is-invalid' : '' }}">
                            @foreach($roles as $roleId => $role)
                                <option value="{{ $roleId }}">{{ $role }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role_id'))
                            <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>
                        @endif
                        <div class="form-footer">
                            <button tabindex="5" type="submit" class="btn btn-primary w-100">Login as</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
