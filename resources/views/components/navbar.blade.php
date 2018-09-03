<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item button is-large is-red m-8 p-12" @click="$emit('contactMeClicked')">
            Hire me now
        </a>

        <a role="button" class="navbar-burger" data-target="burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div class="navbar-menu" id="burger">
        <div class="navbar-start">
            <a class="navbar-item text-grey-light hover:underline no-underline" href="{{url('/mywork')}}">
                Things I did
            </a>

            <a class="navbar-item text-grey-light hover:underline no-underline" href="{{url('/mywork')}}">
                Tools of choice
            </a>

            <a class="navbar-item text-grey-light hover:underline no-underline" @click="$root.$emit('contactMeClicked')">
                Get in touch
            </a>
        </div>
    </div>
</nav>