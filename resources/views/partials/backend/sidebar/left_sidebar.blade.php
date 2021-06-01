<div class="sidebar-inner leftscroll">
    <div id="sidebar-menu">
        <ul>
            <li class="submenu">
                <a class="{{ request()->is('backend') ? 'active' : '' }}" href="{{ route('backend.dashboard') }}">
                    <i class="fas fa-bars"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="submenu">
                <a id="tables" class="{{ request()->is('backend/blogs/*') ? 'active' : '' }}" href="#">
                    <i class="far fa-file-alt"></i>
                    <span> Blogs </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li class="{{ request()->is('backend/blogs/posts') ? 'active' : '' }}">
                        <a href="{{ route('backend.blogs.posts.list') }}">Posts</a>
                    </li>
                    <li class="{{ request()->is('backend/blogs/categories') ? 'active' : '' }}">
                        <a href="{{ route('backend.blogs.categories.list') }}">Categories</a>
                    </li>
                </ul>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
