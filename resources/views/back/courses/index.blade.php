@extends('spark::layouts.app')

@section('content')
    <home :course="course" inline-template>
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{__('main.coursetypes')}}</div>

                        <div class="panel-body">
                            {{ Html::linkRoute('coursetypes.create', __('main.coursetype') . ' ' . __('main.add'), [], ['class' => 'btn btn-success']) }}
                            {{ Html::linkRoute('courses.create', __('main.course') . ' ' . __('main.add'), [], ['class' => 'btn btn-success']) }}
                        </div>
                    </div>

                    @if (!count($coursesByType))
                        <div class="panel panel-default">
                            <div class="panel-heading">{{__('main.courses')}}</div>
                            <div class="panel-body">
                                <h3 class="text-center">{{__('main.no_entries')}}</h3>
                            </div>
                        </div>
                    @else
                        @foreach($coursesByType as $courseType)
                            <div class="panel panel-default" id="coursetype-{{ $courseType->id }}">
                                <div class="panel-heading">{{ $courseType->name }}</div>
                                <div class="panel-body">
                                    @if (!count($courseType->courses))
                                        <h3 class="text-center">{{__('main.no_entries')}}</h3>
                                    @else
                                        <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th>{{__('main.course_nr')}}
                                                <th>{{__('main.date')}}
                                                <th>{{__('main.location')}}
                                                <th>{{__('main.deadline')}}
                                                <th>{{__('main.participants')}}
                                                <th>{{__('main.status')}}
                                                <th>{{ __('main.action') }}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($courseType->courses as $course)
                                                <tr class="clickable-row" data-href="{{ route('courses.show', ['course' => $course->id]) }}">
                                                    <td><a href="{{ $course->present()->link }}" target="_blank">{{ $course->present()->course_nr }}</a>
                                                    <td>{{ $course->present()->date }}
                                                    <td>{{ $course->present()->location }}
                                                    <td>{{ $course->present()->deadline }}
                                                    <td>{{ count($course->participants) }}
                                                    <td>{{ '-' }}
                                                    <td>
                                                        @can ('signup', App\Course::class)
                                                            <a href="#" class="btn btn-icon btn-success">
                                                                {{__('main.signup')}}
                                                            </a>
                                                        @endcan
                                                        <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-icon btn-primary">
                                                            {{__('main.show')}}
                                                        </a>
                                                        @can ('edit', App\Course::class)
                                                            <a href="{{ route('courses.edit', [$course->id]) }}" class="btn btn-icon btn-warning">
                                                                {{__('main.edit')}}
                                                            </a>
                                                        @endcan
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </home>
@endsection
