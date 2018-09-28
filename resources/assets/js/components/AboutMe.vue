<template>
    <div class="jumbotron p-10 animated bounceInLeft slow bg-white">
        <div class="flex flex-wrap">

            <!--Image-->
            <div class="lg:w-1/4 md:w-full flex content-center">
                <div class="rounded-full image is-128x128 is-rounded overflow-hidden
                 m-auto
                animated bounceIn delay-1s faster">
                    <img class="me" src="images/me.png" alt="Avatar">
                </div>
            </div>

            <!--Text-->
            <div class="lg:w-3/4 md:w-full">
                <div class="animated bounceIn delay-2s faster py-8 text-black">
                    <p class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-xl py-2">
                        <strong><a class="hover:text-blue-dark">Indie product maker</a></strong>, also available for <strong><a class="hover:text-blue-dark" @click="$emit('contactMeClicked', 'hire')"> hire!</a></strong>
                    </p>

                    <p class="xl:text-3xl lg:text-2xl md:text-xl py-2">
                        Web & mobile application developer also with experience in design and data science. Open to contract work.
                        <strong><u><a class="hover:text-blue-dark" @click="$root.$emit('contactMeClicked', 'general')">Get in touch</a></u></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AboutMe"
    }
</script>

<style scoped>

    .jumbotron {
        margin: 0 15%;
        /*background: #D3D3D3;*/
        border-radius: 314px;
    }

    .me {
        background-image: url(/images/me.png);
        background-position: center bottom;
        background-size: 100%;
        width: auto;
        height: auto;
    }

    .about-me {
        /*color: #363636;*/
        /*line-height: 1.125;*/
    }
</style>