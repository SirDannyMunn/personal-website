<template>
    <social-sharing url="https://vuejs.org/"
                    title="The Progressive JavaScript Framework"
                    description="Intuitive, Fast and Composable MVVM for building interactive interfaces."
                    quote="Vue is a progressive framework for building user interfaces."
                    hashtags="vuejs,javascript,framework"
                    twitter-user="vuejs"
                    inline-template>
        <div>
            <network network="email">
                <span><i class="fa fa-envelope"></i> Email</span>
            </network>
            <network network="facebook">
                <span><i class="fa fa-facebook"></i> Facebook</span>
            </network>
            <network network="googleplus">
                <span><i class="fa fa-google-plus"></i> Google +</span>
            </network>
            <network network="linkedin">
                <span><i class="fa fa-linkedin"></i> LinkedIn</span>
            </network>
            <network network="pinterest">
                <span><i class="fa fa-pinterest"></i> Pinterest</span>
            </network>
            <network network="reddit">
                <span><i class="fa fa-reddit"></i> Reddit</span>
            </network>
            <network network="sms">
                <span><i class="fa fa-commenting-o"></i> SMS</span>
            </network>
            <network network="telegram">
                <span><i class="fa fa-telegram"></i> Telegram</span>
            </network>
            <network network="twitter">
                <span><i class="fa fa-twitter"></i> Twitter</span>
            </network>
            <network network="whatsapp">
                <span><i class="fa fa-whatsapp"></i> Whatsapp</span>
            </network>
        </div>
    </social-sharing>
</template>

<script>
    export default {
        name: "Polygon",
        data() {
            return {

            }
        },
        mounted() {
            // if (window.innerWidth>=786)
            //     this.scale.x = 1.0; this.scale.y = 1.75;
            // if (window.innerWidth>=1024)
            //     this.scale.x = 1.25; this.scale.y = 1.75;
            // if (window.innerWidth>=1280)
            //     this.scale.x = 1; this.scale.y = 1;

        }
    }
</script>

<style scoped>

span:hover {
  cursor:pointer;
}

</style>