@if ($errors->any())
    <div class="alert alert-danger alert-non-dismissible">
        <span class="title">{{ trans('main.something_went_wrong') }}</span>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif