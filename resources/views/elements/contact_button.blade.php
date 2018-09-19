<a
        @if(isset($aos))data-aos="fade-up"@endif

        class="button is-red p-12 {{$class}}"

        @click="$emit('contactMeClicked', '{{$type}}')">

    <span @if(isset($text_size)) class="{{$text_size}}" @endif>
        {{$text}}
    </span>
</a>