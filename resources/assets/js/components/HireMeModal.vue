<template>
    <div class="modal" :class="{ 'is-active' : style.visible }">
        <div class="modal-background"></div>

        <div class="modal-card" :class="animation">
            <header class="modal-card-head">
                <p class="modal-card-title">Drop me a line 👍 </p>
                <button class="delete" aria-label="close"
                        @click="style.visible=false"
                ></button>
            </header>
            <section class="modal-card-body">

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" type="text" v-model="data.name"
                               placeholder="Your Name" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" type="email" v-model="data.email"
                               placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea" v-model="data.message"
                                  placeholder="Not too long please, i don't have all day. (only joking 😉)" ></textarea>
                    </div>
                </div>

                <div class="field is-grouped is-grouped-right">
                    <p class="control">
                        <a class="button is-primary" @click="submit"
                           :class="{ 'is-loading' : style.sending }">
                            <span v-show="!style.sent">Send</span>
                            <span v-show="style.sent">Sent!</span>
                        </a>
                    </p>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HireMeModal",
        props: {
            animation: ''
        },
        data() {
            return {
                style: {
                    visible: false,
                    sending: false,
                    sent: false
                },
                data: {
                    name: '',
                    email: '',
                    message: ''
                }
            }
        },
        mounted() {
            this.$root.$on('hireMeClicked', data => {
                !this.style.visible
                    ? this.style.visible = true
                    : this.style.visible = false;
            });
        },
        methods: {
            submit() {
                this.style.sending=true;

                this.$root.axios.post('message', this.data);
            }
        }
    }
</script>

<style scoped>

</style>