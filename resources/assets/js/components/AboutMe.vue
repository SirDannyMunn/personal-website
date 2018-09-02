<template>
    <div class="jumbotron p-10 animated bounceInLeft slow">
        <div class="me-container">
            <div class="columns">
                <div class="column
                            is-one-quarter-desktop is-offset-1-desktop
                            is-full-mobile
                        ">
                    <div class="me-image-container animated bounceIn delay-1s faster">
                        <img class="me" src="images/me.png" alt="Avatar">
                    </div>
                </div>

                <div class="column is-desktop animated bounceIn delay-2s faster">
                    <div class="about-me py-8">

                        <p class="xl:text-4xl lg:text-3xl md:text-2xl py-2">
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
        margin: 7% 15% 3% 15%;
        background: #D3D3D3;
        border-radius: 314px;
    }

    .me-container {
        margin: 2%;
    }

    .me-image-container {
        position: relative;
        height: 138px;
        width: 138px;
        overflow: hidden;
        border-radius: 50%;
        margin: 10% auto;
    }

    .me {
        background-image: url(/images/me.png);
        background-position: center bottom;
        background-size: 100%;
        width: auto;
        height: auto;
    }

    .text-large {
        font-size: 2rem;
        font-weight: 600;
    }

    .about-me {
        color: #363636;
        line-height: 1.125;
    }
</style>