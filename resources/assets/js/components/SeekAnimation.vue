<template>
    <div class="text-center flex items-center flex-wrap-reverse">

        <slot name="text"></slot>

        <slot name="animation"></slot>
    </div>
</template>

<script>
    import anime from 'animejs';

    export default {
        name: "animation",
        data() {
            return {
                elements: [],
                stage: 0
            }
        },
        mounted() {
            this.initAnimation(
                document.querySelectorAll('path')
            );

            let options = {
                root: null,
                rootMargin: '-100px',
                threshold: Array(100).fill().map((e,i)=>i/100)
            };

            let observer = new IntersectionObserver(([entry]) => {
                /*
                * Observes scroll amount over specified element (animation)
                */

                console.log(entry.boundingClientRect.height);
                console.log(entry.intersectionRect.height);
                window.rect = entry.intersectionRect.height;
                window.client = entry.boundingClientRect.height;
                console.log(rect/client*100);
                console.log((Math.floor(entry.intersectionRatio * 100)));

                this.elements.forEach( e => {
                    e.seek(e.duration * ((Math.floor(entry.intersectionRatio * 100)) / 100));
                });
            }, options);

            let target = document.querySelector('#messSection');
            observer.observe(target);
        },
        methods: {
            initAnimation(elements) {
                for (let i = 0; i < elements.length; i++) {

                    let el = elements[i];
                    let offset = anime.setDashoffset(el);
                    el.setAttribute('stroke-dashoffset', offset);

                    if (!this.elements[i]) {
                        this.elements[i] = anime({
                            targets: el,
                            strokeDashoffset: [offset, 0],
                            loop: false,
                            direction: 'alternate',
                            easing: 'linear',
                            autoplay: false,
                        });
                    }
                }
            },
        }
    }
</script>

<style scoped>

</style>