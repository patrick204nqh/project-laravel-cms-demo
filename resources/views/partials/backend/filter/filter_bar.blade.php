<!-- Actions list -->
<div class="dropdown">
    <button class="btn btn-secondary btn-sm dropdown-toggle" id="actionDropdownAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fab fa-elementor mr-2"></i> Actions
    </button>
    <ul class="dropdown-menu" aria-labelledby="actionDropdownAction">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <div class="dropdown-divider"></div>
        <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Orther actions</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Submenu</a></li>
                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- Filter options -->
<div class="dropdown ml-2">
    <button class="btn btn-secondary btn-sm dropdown-toggle" id="actionDropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-filter mr-2"></i> Filter options
    </button>
    <ul class="dropdown-menu" aria-labelledby="actionDropdownFilter">
        <li><a class="dropdown-item">Reset filter</a></li>
        <li class="dropdown-submenu filter__per-page">
            <a class="dropdown-item dropdown-toggle" href="#">Per page</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item filter__per-page--option" data-per-page="10" href="#">10</a></li>
                <li><a class="dropdown-item filter__per-page--option" data-per-page="20" href="#">20</a></li>
                <li><a class="dropdown-item filter__per-page--option" data-per-page="40" href="#">40</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu filter__sort-by">
            <a class="dropdown-item dropdown-toggle" href="#">Sort by</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item filter__sort-by--option" data-sort-by="id" href="#">Id</a></li>
                <li><a class="dropdown-item filter__sort-by--option" data-sort-by="name" href="#">Name</a></li>
                <li><a class="dropdown-item filter__sort-by--option" data-sort-by="price" href="#">Price</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu filter__sort-direction">
            <a class="dropdown-item dropdown-toggle" href="#">Sort direction</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item filter__sort-direction--option" data-sort-direction="asc" href="#">Increase</a></li>
                <li><a class="dropdown-item filter__sort-direction--option" data-sort-direction="desc" href="#">Decrease</a></li>
            </ul>
        </li>
    </ul>
</div>
