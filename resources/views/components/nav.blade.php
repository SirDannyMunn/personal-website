<!-- Hero head: will stick at the top -->
<hover-effect inline-template>
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
                <div class="navbar-menu " :class="{'is-active' : $root.burgerOpen}">
                    <div class="navbar-start">
                        {{--<div class="navbar-item">--}}
                        {{--</div>--}}
                        {{--<div class="navbar-item">--}}
                        {{--</div>--}}
                        {{--<div class="navbar-item">--}}
                        {{--</div>--}}
                    </div>

                    <div class="navbar-end">
                        {{--<a class="navbar-item" @click="click">--}}
                        <a class="navbar-item" @click="$root.$emit('contactMeClicked', 'review')">
                            <span>Leave a review</span>
                        </a>
                        <a class="navbar-item no-underline" href="{{url('blog')}}">
                            <span>Blog</span>
                        </a>
                        <a class="navbar-item" @click="$root.scroll('services')">
                            <span>Services</span>
                        </a>
                        <a class="navbar-item"  @click="$root.$emit('contactMeClicked', 'hire')">
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</hover-effect>
