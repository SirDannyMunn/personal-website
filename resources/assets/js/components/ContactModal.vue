<template>
    <div class="modal" :class="{ 'is-active' : style.visible }">
        <div class="modal-background"></div>

        <div class="modal-card rounded-full" :class="animation">
            <header class="modal-card-head text-center py-8">
                <p class="modal-card-title">
                    <span class="mx-6">
                        Drop me a line 👍
                    </span>

                    <button class="mx-6 my-1 delete" aria-label="close"
                            @click="style.visible=false"
                    ></button>
                </p>
            </header>
            <section class="modal-card-body p-8">

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

                <div class="field is-grouped is-grouped-right
                    text-center py-4 mx-64
                ">
                    <p class="control">
                        <button class="button is-primary" @click="submit"
                           :class="{ 'is-loading' : style.sending }">
                            <span v-show="!style.sent">Send</span>
                            <span v-show="style.sent">Sent!</span>
                        </button>
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
            this.$root.$on('contactMeClicked', data => {
                !this.style.visible
                    ? this.style.visible = true
                    : this.style.visible = false;
            });
        },
        methods: {
            submit() {
                this.style.sending=true;

                this.$root.axios.post('message', this.data)
                    .then(r => {
                        this.style.sent = true;
                        this.style.sending = false;
                    })
                ;
            }
        }
    }
</script>

<style scoped>

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #363636  ;
        opacity: 1; /* Firefox */
    }

</style>