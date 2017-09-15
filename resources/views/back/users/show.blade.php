@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->present()->name }}</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>{{ __('main.email') }}
                                <td>{{ $user->present()->email }}
                            <tr>
                                <td>{{ __('main.address') }}
                                <td>{{ $user->present()->fullAddress }}
                            <tr>
                                <td>{{ __('main.js_number') }}
                                <td>{{ $user->present()->js_number }}
                            <tr>
                                <td>{{ __('main.stv_number') }}
                                <td>{{ $user->present()->stv_number }}
                            <tr>
                                <td>{{ __('main.iban') }}
                                <td>{{ $user->present()->iban }}
                            <tr>
                                <td>{{ __('main.phone') }}
                                <td>{{ $user->present()->phone }}
                            </tbody>
                        </table>
                        <a href="{{ route('users.index') }}" class="btn btn-icon btn-primary btn-large">
                            {{__('main.back_to_overview')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
