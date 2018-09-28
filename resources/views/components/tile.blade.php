<div class="tile is-ancestor bg-white px-32">
    <seek-animation>
        <div class="xl:w-1/2 sm:w-full sm:p-12" slot="text">
            <h1
                    data-aos="fade-up"

                    class="
                xxl:text-7xl lg:text-6xl md:text-5xl sm:text-3xl">
                <span>
                Complex Problems, <br>
                </span><span>
                Simple Solutions.
                </span>
            </h1>
            <h1
                    data-aos="fade-up"

                    class="animated fadeIn slower
                lg:text-3xl md:text-2xl sm:text-sm">
                Custom Web and Mobile Applications.
            </h1>
            @include('elements.contact_button',
            ['text' => 'Get in touch',
             'text_size' => 'md:text-3xl sm:text-sm',
             'class' => 'animated fadeIn slower my-4',
             'type' => 'general',
             'aos' => true])
        </div>
        <div class="
            xl:w-1/2 sm:w-full m-auto" slot="animation" id="animation">
            <!--lg:p-12-->
            <div id="messAnimation" class="md:max-w-md m-auto">
                @include('svgs.mess')
            </div>
        </div>
    </seek-animation>


    <article class="tile is-child notification is-primary">
        <p class="title">Vertical...</p>
        <p class="subtitle">Top tile</p>
    </article>
</div>