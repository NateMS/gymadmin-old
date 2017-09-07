@extends('spark::layouts.app')

@section('content')
    <home :user="usr" inline-template>
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{__('main.coaches')}}</div>

                        <div class="panel-body">
                            @if (!count($users))
                                <h3 class="text-center">{{__('main.no_entries')}}</h3>
                            @else
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>{{__('main.name')}}
                                            <th>{{__('main.email')}}
                                            <th>{{ __('main.action') }}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->present()->name }}
                                            <td>{{ $user->present()->email }}
                                            <td><a href="{{ route('users.show', [$user->id]) }}" class="btn btn-icon btn-primary">
                                                    {{__('main.show')}}
                                                </a>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection
