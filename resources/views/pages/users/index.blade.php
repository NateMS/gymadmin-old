@extends('spark::layouts.app')

@section('content')
    <home :user="user" inline-template>
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">users</div>

                        <div class="panel-body">
                            @foreach ($users as $user)
                                {{ $user->email }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection
