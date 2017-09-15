@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (!count($courses))
                            <h3 class="text-center">{{__('main.no_entries')}}</h3>
                        @else
                            <h3>{{__('main.my_courses')}}</h3>
                            <table class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>{{__('main.course_nr')}}
                                    <th>{{__('main.date_from')}}
                                    <th>{{__('main.date_to')}}
                                    <th>{{__('main.duration')}}
                                    <th>{{__('main.location')}}
                                    <th>{{__('main.deadline')}}
                                    <th>{{__('main.status')}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                        <tr class="clickable-row" data-href="{{ route('courses.show', ['course' => $course->id]) }}">
                                            <td><a href="{{ $course->present()->link }}" target="_blank">{{ $course->present()->course_nr }}</a>
                                            <td>{{ $course->present()->date_from }}
                                            <td>{{ $course->present()->date_to }}
                                            <td>{{ $course->present()->duration }}
                                            <td>{{ $course->present()->location }}
                                            <td>{{ $course->present()->deadline }}
                                            <td>{{ $course->pivot->status_id }}
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
