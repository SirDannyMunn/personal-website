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
            <div id="navbarMenuHeroA" class="navbar-menu px-12" :class="{'is-active' : burgerOpen}">
                <div class="navbar-start">
                    <div class="navbar-item">
                        <a href="https://github.com/danthemun">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a href="https://twitter.com/daniel_the_munn">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a href="https://www.linkedin.com/in/daniel-munn-109281159/">
                            <i class="fab fa-linkedin-in fa-2x"></i>
                        </a>
                    </div>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item">
                        Home
                    </a>
                    <a class="navbar-item">
                        Examples
                    </a>
                    <a class="navbar-item">
                        <button class="button bg-white" @click="$emit('contactMeClicked', 'hire')">
                            Let's make
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>