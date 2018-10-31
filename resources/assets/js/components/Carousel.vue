<style scoped>

</style>

<template>
    <div class="flex justify-center">
        <div class='carousel carousel-animated carousel-animate-slide w-1/2'>
            <div class='carousel-container'>
                <slot name="slides"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    import 'bulma-carousel';

    export default {
        name: "Carousel",
        data() {
            return {}
        },
        mounted() {
        }
    }
</script>