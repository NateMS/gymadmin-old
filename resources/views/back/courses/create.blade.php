@extends('spark::layouts.app')

@section('content')
    <home :course="course" inline-template>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{__('main.course_create')}}</div>

                        <div class="panel-body">
                            @include('components._errors_list')
                            {{ Form::open(array('route' => 'courses.store', 'method' => 'POST')) }}
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                        {{ Form::label('course_nr', trans('main.course_nr')) }}
                                        {{ Form::text('course_nr', old('course_nr')) }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('course_type_id') ? ' has-error' : '' }}">
                                        {{ Form::label('course_type_id', trans('main.coursetype')) }}
                                        {!! Form::select('course_type_id', $courseTypes, null, ['placeholder' => __('main.please_select')]) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('date_from') ? ' has-error' : '' }}">
                                        {{ Form::label('date_from', trans('main.date_from')) }}
                                        {{ Form::text('date_from', old('date_from'), ["data-toggle"=>"datepicker"]) }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('date_to') ? ' has-error' : '' }}">
                                        {{ Form::label('date_to', trans('main.date_to')) }}
                                        {{ Form::text('date_to', old('date_to'), ["data-toggle"=>"datepicker"]) }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('date_from') ? ' has-error' : '' }}">
                                        {{ Form::label('deadline', trans('main.deadline')) }}
                                        {{ Form::text('deadline', old('deadline'), ["data-toggle"=>"datepicker"]) }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                        {{ Form::label('location', trans('main.location')) }}
                                        {{ Form::text('location', old('location')) }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                        {{ Form::label('link', trans('main.link')) }}
                                        {{ Form::text('link', old('link')) }}
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-icon btn-success btn-large">
                                {{__('main.save')}}
                            </button>

                            <a href="{{ route('courses.index') }}" class="btn btn-icon btn-danger btn-large">
                                {{__('main.cancel')}}
                            </a>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </home>
@endsection