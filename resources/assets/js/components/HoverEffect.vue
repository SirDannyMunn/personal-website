<script>
    export default {
        name: "HoverEffect",
        data() {
            return {}
        },
        mounted() {
            // document.querySelector('.navbar').onmousemove = (e) => {
            this.$refs.hover.onmousemove = (e) => {
                const x = e.pageX - e.target.offsetLeft;
                const y = e.pageY - e.target.offsetTop;
                if (Math.abs(x) < 50 && Math.abs(y) < 50) {
                    e.target.style.setProperty('--x', `${ x }px`);
                    e.target.style.setProperty('--y', `${ y }px`);
                }
            }
        },
    }
</script>

<style lang="scss" scoped>
    .hover-container {
        overflow: hidden;
    }

    .hover-effect {
        position: relative;

        span {
            position: relative;
        }

        &::before {
             --size: 0;
             content: '';
             position: absolute;
             left: var(--x);
             top: var(--y);
             width: var(--size);
             height: var(--size);
             background: radial-gradient(circle closest-side, rgb(46, 46, 170), transparent);
             opacity: 0.5;
             transform: translate(-50%, -50%);
             transition: width .2s ease, height .2s ease;
        }

        &:hover::before {
             --size: 200px;
        }
    }
</style>