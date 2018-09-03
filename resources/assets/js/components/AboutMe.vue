<template>
    <div class="jumbotron p-10 animated bounceInLeft slow">
        <div class="me-container">
            <div class="columns">

                <!--Image-->
                <div class="column flex content-center
                            is-one-quarter-desktop is-offset-1-desktop
                            is-full-mobile">
                    <div class="rounded-full image is-128x128 is-rounded overflow-hidden
                     m-auto
                    animated bounceIn delay-1s faster">
                        <img class="me" src="images/me.png" alt="Avatar">
                    </div>
                </div>

                <!--Text-->
                <div class="column is-desktop animated bounceIn delay-2s faster">
                    <div class="about-me py-8">

                        <p class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-xl py-2">
                            <strong><a >Indie product maker</a></strong>, also available for <strong><a> hire!</a></strong>
                        </p>

                        <p class="xl:text-3xl lg:text-2xl md:text-xl py-2">
                            Web & mobile application developer also with experience in design and data science. Open to contract work.
                            <strong><u><a @click="$root.$emit('contactMeClicked')">Get in touch</a></u></strong>
                        </p>
                    </div>
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
        /*margin: 7% 15% 3% 15%;*/
        margin: 0 15%;
        background: #D3D3D3;
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