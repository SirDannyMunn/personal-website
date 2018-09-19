<nav class="navbar bg-brown h-48" role="navigation" aria-label="main navigation">
    <div class="navbar-brand h-full">
        @include('elements.contact_button',
        ['text' => 'Hire me now',
         'class' => 'navbar-item my-auto mx-8 md:text-2xl sm:text-sm',
          'type' => 'hire'])

        <a role="button" class="navbar-burger w-1/4 text-grey-light my-auto" @click="!burgerOpen?burgerOpen=true:burgerOpen=false" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div class="navbar-menu bg-brown" :class="{'is-active' : burgerOpen}">
        <div class="navbar-start text-lg">
            <a class="navbar-item text-cream hover:underline no-underline" href="{{url('/mywork')}}">
                Things I did
            </a>

            <a class="navbar-item text-cream hover:underline no-underline" href="{{url('/mywork')}}">
                Tools of choice
            </a>

            <a class="navbar-item text-cream hover:underline no-underline" @click="$root.$emit('contactMeClicked')">
                Get in touch
            </a>
        </div>
    </div>
</nav>