<!-- Hero head: will stick at the top -->
<div class="hero-head">
    <nav class="navbar shadow-md py-2">
        <div class="container" style="padding: 0 2rem;">
            <div class="navbar-brand">
                <span class="navbar-burger burger" @click="!burgerOpen?burgerOpen=true:burgerOpen=false">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div class="navbar-menu " :class="{'is-active' : burgerOpen}">
                <div class="navbar-start">
                    <div class="navbar-item">
                        <a href="https://github.com/danthemun">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a href="https://twitter.com/daniel_the_munn">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                    <div class="navbar-item">
                        <a href="https://www.linkedin.com/in/daniel-munn-109281159/">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                    </div>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item" @click="$emit('contactMeClicked', 'review')">
                        Leave a review
                    </a>
                    <a class="navbar-item" href="{{url('blog')}}">
                        Blog
                    </a>
                    <a class="navbar-item" @click="scroll('services')">
                        Services
                    </a>
                    <a class="navbar-item"  @click="$emit('contactMeClicked', 'hire')">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>