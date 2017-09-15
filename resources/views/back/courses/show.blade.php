@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ __('main.course') . ' ' . $course->present()->course_nr }}</div>

                    <div class="panel-body">
                        <h3>{{ __('main.course_details') }}</h3>
                        <table class="table table-striped">
                            <tbody>
                            <td>{{ __('main.coursetype') }}
                            <td>{{ $course->coursetype->present()->name }}
                                <tr>
                                    <td>{{ __('main.location') }}
                                    <td>{{ $course->present()->location }}
                                <tr>
                                    <td>{{ __('main.date_from') }}
                                    <td>{{ $course->present()->date_from }}
                                <tr>
                                    <td>{{ __('main.date_to') }}
                                    <td>{{ $course->present()->date_to }}
                                <tr>
                                    <td>{{ __('main.deadline') }}
                                    <td>{{ $course->present()->deadline }}
                                <tr>
                                    <td>{{ __('main.link') }}
                                    <td><a href="{{ $course->present()->link }}" target="_blank">{{__('main.open_on_js_website')}}</a>
                            </tbody>
                        </table>
                        @if (count($course->participants))
                            <h3>{{ __('main.participants') }}</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>{{__('main.name')}}
                                    <th>{{ __('main.status') }}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($course->participants as $user)
                                    <tr>
                                        <td>{{ $user->present()->name }}
                                        <td>{{ $user->status_id }}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3>{{ __('main.no_participants') }}</h3>
                        @endif
                        <a href="{{ route('courses.index') }}" class="btn btn-icon btn-primary btn-large">
                            {{__('main.back_to_overview')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
