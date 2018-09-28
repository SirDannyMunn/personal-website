<!-- Hero head: will stick at the top -->
<div class="hero-head">
    <nav class="navbar h-32">
        <div class="container">
            <div class="navbar-brand">
                    <span class="navbar-burger burger" @click="!burgerOpen?burgerOpen=true:burgerOpen=false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
            </div>
            <div id="navbarMenuHeroA" class="navbar-menu" :class="{'is-active' : burgerOpen}">
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