@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ __('main.course_edit', ['number' => $course->course_nr]) }}</div>

                    <div class="panel-body">
                        {{ Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}
                                <div class="form-group{{ $errors->has('date_from') ? ' has-error' : '' }}">
                                    {{ Form::label('date_from', __('main.date_from'), ['class' => 'col-md-4 control-label']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('date_from', $course->date_from->format(config('app.date_format')), ["data-toggle"=>"datepicker", 'class' => 'form-control']) }}

                                        @if ($errors->has('date_from'))
                                        <span class="help-block">
                                            @{{ form.errors.get('date_from') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('date_to') ? ' has-error' : '' }}">
                                    {{ Form::label('date_to', __('main.date_to'), ['class' => 'col-md-4 control-label']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('date_to', $course->date_to->format(config('app.date_format')), ["data-toggle"=>"datepicker", 'class' => 'form-control']) }}

                                        @if ($errors->has('date_to'))
                                            <span class="help-block">
                                                    @{{ form.errors.get('date_to') }}
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                                    {{ Form::label('deadline', __('main.deadline'), ['class' => 'col-md-4 control-label']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('deadline', $course->deadline->format(config('app.date_format')), ["data-toggle"=>"datepicker", 'class' => 'form-control']) }}

                                        @if ($errors->has('deadline'))
                                            <span class="help-block">
                                                            @{{ form.errors.get('deadline') }}
                                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    {{ Form::label('location', __('main.location'), ['class' => 'col-md-4 control-label']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('location', $course->location, ['class' => 'form-control']) }}

                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                                            @{{ form.errors.get('location') }}
                                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                    {{ Form::label('link', __('main.link'), ['class' => 'col-md-4 control-label']) }}
                                    <div class="col-md-6">
                                        {{ Form::text('link', $course->link, ['class' => 'form-control']) }}

                                        @if ($errors->has('link'))
                                            <span class="help-block">
                                                    @{{ form.errors.get('link') }}
                                                </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-icon btn-success btn-large" value="{{ __('main.save') }}">

                                <a href="{{ route('courses.index') }}" class="btn btn-icon btn-danger btn-large">
                                    {{ __('main.cancel') }}
                                </a>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
