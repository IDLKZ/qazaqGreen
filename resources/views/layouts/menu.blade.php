<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p><i class="fas fa-users ml-2"></i>Пользователи</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('sliders.index') }}"
       class="nav-link {{ Request::is('sliders*') ? 'active' : '' }}">
        <p><i class="fas fa-image ml-2"></i>Слайдеры</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tasks.index') }}"
       class="nav-link {{ Request::is('tasks*') ? 'active' : '' }}">
        <p><i class="fas fa-list ml-2"></i>Ключевые задачи</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('partners.index') }}"
       class="nav-link {{ Request::is('partners*') ? 'active' : '' }}">
        <p><i class="fas fa-users ml-2"></i>Члены ассоциации</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('abouts.index') }}"
       class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <p><i class="fas fa-building ml-2"></i>О компании</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('positions.index') }}"
       class="nav-link {{ Request::is('positions*') ? 'active' : '' }}">
        <p><i class="fas fa-toolbox ml-2"></i>Проф позиции</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teams.index') }}"
       class="nav-link {{ Request::is('teams*') ? 'active' : '' }}">
        <p><i class="fas fa-users ml-2"></i>Сотрудники</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('news.index') }}"
       class="nav-link {{ Request::is('news*') ? 'active' : '' }}">
        <p><i class="fas fa-newspaper ml-2"></i>Новости</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('aboutuses.index') }}"
       class="nav-link {{ Request::is('aboutuses*') ? 'active' : '' }}">
        <p><i class="fas fa-newspaper ml-2"></i>О нас в СМИ</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('magazines.index') }}"
       class="nav-link {{ Request::is('magazines*') ? 'active' : '' }}">
        <p><i class="fas fa-newspaper ml-2"></i>Журналы</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('events.index') }}"
       class="nav-link {{ Request::is('events*') ? 'active' : '' }}">
        <p><i class="fas fa-calendar ml-2"></i>События</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('documents.index') }}"
       class="nav-link {{ Request::is('documents*') ? 'active' : '' }}">
        <p><i class="fas fa-file-pdf ml-2"></i>Документы</p>
    </a>
</li>




{{--<li class="nav-item">--}}
{{--    <a href="{{ route('contacts.index') }}"--}}
{{--       class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">--}}
{{--        <p><i class="fas fa-envelope ml-2"></i>Контакты</p>--}}
{{--    </a>--}}
{{--</li>--}}





