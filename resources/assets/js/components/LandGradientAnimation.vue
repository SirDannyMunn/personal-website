<style scoped>
</style>

<template>
    <canvas class="w-full h-full absolute z-0" id="land-gradient"></canvas>
</template>

<script>
    import Granim from 'granim';

    export default {
        name: "LandGradientAnimation",
        data() {
            return {}
        },
        mounted() {
            let granimInstance = new Granim({
                element: '#land-gradient',
                name: 'basic-gradient',
                direction: 'diagonal', // 'diagonal', 'top-bottom', 'radial'
                opacity: [0.5, 0.5],
                isPausedWhenNotInView: true,
                states : {
                    "default-state": {
                        gradients: [
                            ['#fff6fc', '#312ca6'],
                            // ['#02AAB0', '#00CDAC'],
                            ['#fff6fc', '#fff6fc'],
                            ['#fff6fc', '#9733EE']
                        ]
                    }
                }
            });
        }
    }
</script>