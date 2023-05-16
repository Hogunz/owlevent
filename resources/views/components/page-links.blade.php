<nav {{ $attributes }}>
    <a href="{{ route('dashboard') }}"
        class="nav-item {{ request()->routeIs('dashboard') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
    </a>

    <a href="{{ route('categories.index') }}"
        class="nav-item {{ request()->routeIs('categories.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-user-md mr-3"></i>
        Categories
    </a>

    <a href="{{ route('occupations.index') }}"
        class="nav-item {{ request()->routeIs('occupations.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-user-md mr-3"></i>
        Occupations
    </a>

    <a href="{{ route('skills.index') }}"
        class="nav-item {{ request()->routeIs('skills.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-book mr-3"></i>
        Skills
    </a>

    <hr>

    <a href="{{ route('users.index') }}"
        class="nav-item {{ request()->routeIs('users.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-users mr-3"></i>
        Users
    </a>

    <a href="{{ route('roles.index') }}"
        class="nav-item {{ request()->routeIs('roles.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-users-cog mr-3"></i>
        Roles
    </a>

    <a href="{{ route('permissions.index') }}"
        class="nav-item {{ request()->routeIs('permissions.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-user-tag mr-3"></i>
        Permissions
    </a>

    {{ $slot }}
</nav>
