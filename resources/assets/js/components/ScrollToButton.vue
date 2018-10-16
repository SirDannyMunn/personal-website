<template>
    <div class="container">
        <a @click="scroll()">
            <h1 class="title">{{title}}</h1>
            <svg width="174" height="68" viewBox="0 0 174 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="-0.5" x2="108.231" y2="-0.5" transform="translate(0 1) rotate(38.2464)" stroke="#363636"/>
                <line y1="-0.5" x2="111.4" y2="-0.5" transform="translate(85 68) rotate(-36.9728)" stroke="#363636"/>
            </svg>
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            title: '',
            element: ''
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            scroll() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(`#${this.element}`).offset().top
                }, 1000);
            }
        }
    }
</script>
