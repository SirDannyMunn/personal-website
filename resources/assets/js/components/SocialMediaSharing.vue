<template>
    <social-sharing url="https://munn.pro"
                    title=""
                    description=""
                    quote=""
                    hashtags="munn,developer"
                    twitter-user="@daniel_the_munn"
                    inline-template>
        <div class="container flex flex-wrap leading-loose justify-between">
            <network network="email">
                <span data-aos="fade" data-aos-delay="0"><i class="far fa-envelope"></i> Email</span>
            </network>
            <network network="facebook">
                <span data-aos="fade" data-aos-delay="100"><i class="fab fa-facebook-f"></i> Facebook</span>
            </network>
            <network network="googleplus">
                <span data-aos="fade" data-aos-delay="200"><i class="fab fa-google-plus-g"></i> Google +</span>
            </network>
            <network network="linkedin">
                <span data-aos="fade" data-aos-delay="300"><i class="fab fa-linkedin-in"></i> LinkedIn</span>
            </network>
            <network network="pinterest">
                <span data-aos="fade" data-aos-delay="400"><i class="fab fa-pinterest-p"></i> Pinterest</span>
            </network>
            <network network="reddit">
                <span data-aos="fade" data-aos-delay="500"><i class="fab fa-reddit-alien"></i> Reddit</span>
            </network>
            <!--<network network="sms">-->
                <!--<span><i class="fa fa-commenting-o"></i> SMS</span>-->
            <!--</network>-->
            <!--<network network="telegram">-->
                <!--<span><i class="fa fa-telegram"></i> Telegram</span>-->
            <!--</network>-->
            <network network="twitter">
                <span data-aos="fade" data-aos-delay="600"><i class="fab fa-twitter"></i> Twitter</span>
            </network>
            <network network="whatsapp">
                <span data-aos="fade" data-aos-delay="700"><i class="fab fa-whatsapp"></i> Whatsapp</span>
            </network>
        </div>
    </social-sharing>
</template>

<script>
    let SocialSharing = require('vue-social-sharing');

    Vue.use(SocialSharing);

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