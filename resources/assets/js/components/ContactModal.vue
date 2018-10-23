<template>
    <div class="modal" :class="{ 'is-active' : style.visible }">
        <div class="modal-background"></div>

        <div class="modal-card rounded-full" :class="animation">
            <header class="modal-card-head text-center p-12">
                <p class="modal-card-title">
                        👍
                        <small class="break-words" v-if="data.type==='review'">Leave review below</small>
                        <span v-if="data.type!=='review'">Drop me a line</span>
                        <button class=" my-1 delete" aria-label="close"
                                @click="style.visible=false"
                        ></button>
                </p>
            </header>
            <section class="modal-card-body lg:p-16">

                <div class="notification" :class="`is-${status}`" v-show="style.sent">
                    <button class="delete" @click="style.sent=false"></button>
                    <span v-if="status==='danger'">Something happened. Please <u>check our credentials are correct</u>. I've made a log anyway just in case</span>
                    <span v-if="status==='success'">Congratulations! You're message has been successfully sent!</span>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" :class="{ 'is-danger' : errors.name }"
                               type="text" v-model="data.name"
                               placeholder="Your Name" required>
                    </div>
                    <p class="help is-danger" v-show="errors.name">Please fill in your name</p>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-rounded" :class="{ 'is-danger' : errors.email }"
                               type="email" v-model="data.email"
                               placeholder="you@example.com" required>
                    </div>
                    <p class="help is-danger" v-show="errors.email">Please fill in your email</p>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea" v-model="data.message"
                                  placeholder="Leave a message"></textarea>
                    </div>
                </div>

                <div class="field animated fadeIn fast" v-show="style.suggestion">
                    <div class="control">
                        <textarea class="textarea" v-model="data.feedback"
                                  placeholder="Thank you. Your feedback is greatly appreciated." ></textarea>
                    </div>
                </div>

                <small><span v-if="!style.suggestion">Think i could improve the website?</span>&nbsp;<u><a @click="style.suggestion=!style.suggestion">
                    <span v-if="!style.suggestion">Leave me some feedback on the website</span>
                    <span v-if="style.suggestion">Hide feedback box</span>
                </a></u>
                </small>

                <div class="pt-12">
                    <p class="control text-center">
                        <button class="button is-rounded border-purple-dark hover:bg-purple-dark hover:text-white" @click="submit"
                           :class="{ 'is-loading' : style.sending }">
                            <span>Send</span>
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
                    suggestion: false,
                    visible: false,
                    sending: false,
                    sent: false
                },
                status: '',
                data: {
                    type: String,
                    name: '',
                    email: '',
                    message: '',
                    feedback: ''
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
                    .then(r => {
                        this.status = 'success';
                        this.data.forEach(field => field=null)
                    })
                    .catch(e => this.status = 'danger')
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