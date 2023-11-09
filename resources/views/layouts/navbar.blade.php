<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">Movie Star</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ ($title === "Now Playing") ? 'active' : '' }}" href="/now-playing">Now Playing</a></li>
                        <li><a class="dropdown-item {{ ($title === "Popular") ? 'active' : '' }}" href="/popular">Popular</a></li>
                        <li><a class="dropdown-item {{ ($title === "Top Rated") ? 'active' : '' }}" href="/top-rated">Top Rated</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item {{ ($title === "Upcoming") ? 'active' : '' }}" href="/upcoming">Upcoming</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
