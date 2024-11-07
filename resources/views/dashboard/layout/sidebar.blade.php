<style>
    .nav-link.active {
        color: white !important;
        background-color: #1f2937 !important; /* bg-gray-900 */
    }
    .nav-link {
        color: #d1d5db; /* text-gray-300 */
    }
    .nav-link:hover {
        background-color: #374151; /* hover:bg-gray-700 */
        color: white;
    }
</style>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts/">
                    <span data-feather="file-text"></span>
                    My Post
                </a>
            </li>
        </ul>
    </div>
</nav>
