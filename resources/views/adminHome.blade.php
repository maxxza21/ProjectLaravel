@extends('layouts.app')

@section('content')
<script type="text/javascript">
    setTimeout(function() {
        window.location='Anipost/admin';
    }, 2000);
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    You are Admin user.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
