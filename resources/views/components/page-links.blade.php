<nav {{ $attributes }}>
    <a href="{{ route('dashboard') }}"
        class="nav-item {{ request()->routeIs('dashboard') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
    </a>
    @if (auth()->user()->hasRole('Admin'))
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
    @endif
    <hr>
    @if (auth()->user()->hasRole(['Admin', 'Operations']))
        <button type="button"
            class="nav-item {{ request()->routeIs('approvals.*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} flex items-center pl-6 text-white"
            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <i class="fas fa-users-cog mr-3"></i>
            <span
                class="flex w-full flex-1 items-center whitespace-nowrap text-left text-white opacity-75 hover:opacity-100"
                sidebar-toggle-item>Approval</span>
            <svg sidebar-toggle-item class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <ul id="dropdown-example" class="hidden space-y-2 py-2 pl-6">
            <li>
                <a href="/admin/service/user/index"
                    class="group flex w-full items-center rounded-lg p-2 text-white opacity-75 hover:opacity-100">Services</a>
            </li>
            <li>
                <a href="/admin/supplier/user/index"
                    class="group flex w-full items-center rounded-lg p-2 text-white opacity-75 hover:opacity-100">
                    Suppliers</a>
            </li>
            <li>
                <a href="/admin/blog/user/index"
                    class="group flex w-full items-center rounded-lg p-2 text-white opacity-75 hover:opacity-100">Blogs</a>
            </li>

        </ul>
    @endif
    @if (auth()->user()->hasRole('Admin'))
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
    @endif
    {{ $slot }}
</nav>
