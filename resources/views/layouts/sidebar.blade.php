<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">WeSmart</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>

        <!-- Sidebar -->
        <ul class="sidebar-menu">

            <!-- Dashboard -->
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('dashboard')}}">Dashboard Front</a></li>
                    <li><a class="nav-link" href="index-0.html">Index Baca</a></li>
                </ul>
            </li>


            <li class="menu-header">Starter</li>
            <!-- Manage Akun -->
            @if (auth()->user()->level == "admin")
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-cog"></i> <span>Manage Akun</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('users.index')}}">Akun</a></li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Manage Profile TBM</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('tbm.index')}}">Profile</a></li>
                </ul>
            </li>
            @endif


            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Manage Digital Reads</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('digital_reads.index')}}">Reads Student</a></li>
                </ul>
                @if (auth()->user()->level == "admin")
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('categories.index')}}">Category</a></li>
                </ul>
                @endif
            </li>

            @if (auth()->user()->level == "admin")
            <li class=" menu-header">PAGES</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hands-helping"></i> <span>Manage Help Facilities</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('book.index')}}">Book</a></li>
                    <li><a class="nav-link" href="#">Digital Modul</a></li>
                    <li><a class="nav-link" href="{{route('bookshelves.index')}}">Bookshelves</a></li>
                    <li><a class="nav-link" href="components-user.html">Donation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-info-circle"></i> <span>Manage Information Center</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('event.index')}}">Information</a></li>
                    <li><a class="nav-link" href="components-table.html">Article</a></li>
                </ul>
            </li>
            @endif
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Donation here
            </a>
        </div>
    </aside>
</div>