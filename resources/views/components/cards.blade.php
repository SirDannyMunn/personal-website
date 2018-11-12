<div class="flex flex-wrap">
    <div class="flex flex-wrap content-center justify-center items-center sm:mb-16 md:mb-0" style="align-items: center">
        @foreach($options as $option)
            <div class="md:w-1/2 p-4"
                 @click="showCardInfo('{{camel_case($option['title'])}}')"
                 data-aos="fade-right"
                 @if(isset($option['delay']))
                    data-aos-delay="{{$option['delay']}}"
                 @endif
            >
                <div class="box text-black text-center bg-white hover:shadow-lg p-12 tilt hover:z-10 z-0 cursor-pointer">
                    <img src='{{url("/svgs/{$option['svg']}")}}' class="w-24 " alt="">
                    <h3 class="my-4">{{$option['title']}}</h3>
                    {{--<button class="sm:text-sm my-4 button is-rounded bg-white border-2 border-blue-dark hover:bg-blue-dark hover:text-white" @click="$emit('contactMeClicked', 'general')">More info</button>--}}
                </div>
            </div>
        @endforeach
    </div>
</div>