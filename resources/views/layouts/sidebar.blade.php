<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQPsAdNm7ZdvT66PT2jHlCniOYI0FmnGaqImZOPhxJvJgicYKXgDB2QGYeOPuJGZy8vCg&usqp=CAU"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
