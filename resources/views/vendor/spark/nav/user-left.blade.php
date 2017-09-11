<!-- Left Side Of Navbar -->
<li>{{ Html::linkRoute('users.index', __('main.coaches')) }}</li>

@can ('view', App\Course::class)
    <li>{{ Html::linkRoute('courses.index', __('main.courses')) }}</li>
@endcan