<template>
    <div class="modal" :class="{ 'is-active' : style.visible }">
        <div class="modal-background"></div>

        <div class="modal-card rounded-full" :class="animation">
            <header class="modal-card-head text-center p-12">
                <p class="modal-card-title">
                    <span class="">
                        👍 Drop me a line
                    </span>

                    <button class=" my-1 delete" aria-label="close"
                            @click="style.visible=false"
                    ></button>
                </p>
            </header>
            <section class="modal-card-body p-8">

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" :class="{ 'is-danger' : errors.name }"
                               type="text" v-model="data.name"
                               placeholder="Your Name" required>
                    </div>
                    <p class="help is-danger" v-show="errors.name">This name is invalid</p>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" :class="{ 'is-danger' : errors.email }"
                               type="email" v-model="data.email"
                               placeholder="you@example.com" required>
                    </div>
                    <p class="help is-danger" v-show="errors.email">This email is invalid</p>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea" v-model="data.message"
                                  placeholder="Not too long please, i don't have all day. (only joking 😉)" ></textarea>
                    </div>
                </div>

                <div class="py-4">
                    <p class="control text-center">
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
                errors: {
                    name: false,
                    email: false
                },
                style: {
                    visible: false,
                    sending: false,
                    sent: false
                },
                data: {
                    type: String,
                    name: '',
                    email: '',
                    message: ''
                }
            }
        },
        mounted() {
            this.$root.$on('contactMeClicked', type => {
                !this.style.visible
                    ? this.style.visible = true
                    : this.style.visible = false;
                this.data.type = !!type ? type : 'General';
            });
        },
        methods: {
            submit() {
                if (!this.checkData()) {
                    return;
                }

                this.style.sending=true;

                this.$root.axios.post('message', this.data)
                    .finally(r => {
                        this.style.sent = true;
                        this.style.sending = false;
                    })
                ;
            },
            checkData() {
                // Check fields
                !this.data.email ? this.errors.email = true : this.errors.email = false;
                !this.data.name ? this.errors.name = true : this.errors.name = false;

                return !!this.data.email || !!this.data.name;
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