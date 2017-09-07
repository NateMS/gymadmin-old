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
                            {{ Form::model($course, array('route' => ['courses.update', $course->id], 'method' => 'PUT')) }}
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">{{ trans('main.course') }}</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group{{ $errors->has('date_from') ? ' has-error' : '' }}">
                                                            {{ Form::label('date_from', trans('main.date_from')) }}
                                                            {{ Form::text('date_from', $course->date_from->format(config('app.date_format')), ["data-toggle"=>"datepicker"]) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group{{ $errors->has('date_to') ? ' has-error' : '' }}">
                                                            {{ Form::label('date_to', trans('main.date_to')) }}
                                                            {{ Form::text('date_to', $course->date_to->format(config('app.date_format')), ["data-toggle"=>"datepicker"]) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <div class="input-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                                            {{ Form::label('location', trans('main.location')) }}
                                                            {{ Form::text('location', old('location')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-icon btn-success btn-large">
                                    {!! svg('save') !!}
                                    {{ 'blah' }}
                                </button>

                                <a href="{{ route('courses.show', [$course->id]) }}" class="btn btn-icon btn-danger btn-large">
                                    {!! svg('cross-circle') !!}
                                    {{ trans('main.cancel') }}
                                </a>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection
