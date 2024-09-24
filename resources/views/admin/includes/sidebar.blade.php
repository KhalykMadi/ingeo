<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Ingeo.kz</li>
        <li class="nav-item">
            <a href="{{route('admin.region.index')}}" class="nav-link">
                <i class="nav-icon fas fa-map"></i>
                <p>
                    Регионы
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.coordinate.index')}}" class="nav-link">
                <i class="nav-icon fas fa-map-marker-alt"></i>
                <p>
                    Кординаты
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.image.index')}}" class="nav-link">
                <i class="fas fa-image"></i>
                <p>
                    Картинки
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.review.index')}}" class="nav-link">
                <i class="fas fa-comments"></i>
                <p>
                    Отзывы
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link">
                <i class="fas fa-users"></i>
                <p>
                    Пользователи
                </p>
            </a>
        </li>
    </ul>
</nav>
