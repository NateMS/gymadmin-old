@extends('spark::layouts.app')

@section('content')
    <home :course="course" inline-template>
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{__('main.courses')}}</div>

                        <div class="panel-body">
                            @if (!count($courses))
                                <h3 class="text-center">{{__('main.no_entries')}}</h3>
                            @else

                                <table class="table table-striped ">
                                    <thead>
                                    <tr>
                                        <th>{{__('main.course_nr')}}
                                        <th>{{__('main.date_from')}}
                                        <th>{{__('main.date_to')}}
                                        <th>{{__('main.location')}}
                                        <th>{{__('main.deadline')}}
                                        <th>{{__('main.status')}}
                                        <th>{{ __('main.action') }}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($courses as $course)
                                        <tr class="clickable-row" data-href="{{ route('courses.show', ['course' => $course->id]) }}">
                                            <td><a href="{{ $course->link }}" target="_blank">{{ $course->course_nr }}</a>
                                            <td>{{ $course->date_from->format(config('app.date_format')) }}
                                            <td>{{ $course->date_to->format(config('app.date_format')) }}
                                            <td>{{ $course->location }}
                                            <td>{{ $course->deadline->format(config('app.date_format')) }}
                                            <td>{{ $user->courseStatus() }}
                                            <td><a href="#" class="btn btn-icon btn-success">
                                                    {{__('main.signup')}}
                                                </a>
                                                <a href="{{ route('courses.edit', [$course->id]) }}" class="btn btn-icon btn-warning">
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
