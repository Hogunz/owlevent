<nav {{ $attributes }}>
    <a href="{{ route('dashboard') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('dashboard') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
    </a>

    <a href="{{ route('occupations.index') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('occupations.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-user-md mr-3"></i>
        Occupations
    </a>

    <a href="{{ route('skills.index') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('skills.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-book mr-3"></i>
        Skills
    </a>

    <hr>

    <a href="{{ route('users.index') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('users.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-users mr-3"></i>
        Users
    </a>

    <a href="{{ route('roles.index') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('roles.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-users-cog mr-3"></i>
        Roles
    </a>

    <a href="{{ route('permissions.index') }}"
        class="flex items-center text-white pl-6 nav-item {{ request()->routeIs('permissions.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}">
        <i class="fas fa-user-tag mr-3"></i>
        Permissions
    </a>

    {{ $slot }}
</nav>
