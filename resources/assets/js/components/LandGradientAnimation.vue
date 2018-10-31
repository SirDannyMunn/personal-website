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
                direction: 'top-bottom', // 'diagonal', 'top-bottom', 'radial'
                opacity: [0.75, 0.75],
                isPausedWhenNotInView: true,
                transitionSpeed: 100,
                states : {
                    "default-state": {
                        gradients: [
                            ['#504DF2', '#2624A5'],
                            ['#6D6BFF', '#A58C14'],
                            ['#F2D54D', '#2624A5'],
                            // ['#67ff56', '#312ca6'],
                            // ['#02AAB0', '#00CDAC'],
                            // ['#fff6fc', '#fff6fc'],
                            // ['#fff6fc', '#9733EE']
                        ]
                    }
                }
            });
        }
    }
</script>