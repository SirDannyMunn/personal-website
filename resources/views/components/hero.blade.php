<section class="hero is-medium bg-yellow-light">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        <nav class="navbar h-32">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item">
                            Home
                        </a>
                        <a class="navbar-item">
                            Examples
                        </a>
                        <a class="navbar-item">
                            Documentation
                        </a>
                        <span class="navbar-item">
                            <a class="button is-primary is-inverted">
                                <span class="icon">
                                   <i class="fab fa-github"></i>
                                </span>
                                <span>Download</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            {{--<h1 class="title">
                Title
            </h1>
            <h2 class="subtitle">
                Subtitle
            </h2>--}}
            <about-me></about-me>
        </div>
    </div>
</section>