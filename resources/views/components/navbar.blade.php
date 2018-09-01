<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item button is-large is-red" @click="$emit('contactMeClicked')">
            Hire me now
        </a>

        <a role="button" class="navbar-burger" data-target="burgers" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="burgers" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                Things I did
            </a>

            <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                Tools of choice
            </a>

            <a class="navbar-item has-text-light hover-underline" href="{{url('/mywork')}}">
                Get in touch
            </a>

            <a class="navbar-item has-text-light hover-underline" href="{{url('/about-me')}}">
                About me
            </a>
        </div>
    </div>
</nav>