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
                                            <th>{{__('main.name')}}
                                            <th>{{__('main.name')}}
                                            <th>{{ __('main.action') }}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="clickable-row" data-href="{{ route('users.show', ['$user' => $user->id]) }}">
                                            <td>{{ $user->email }}
                                            <td>{{ $user->email }}
                                            <td>{{ $user->email }}
                                            <td><a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-icon btn-warning">
                                                    {{__('main.edit')}}
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
