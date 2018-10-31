
<div class="card">
    <div class="card-image">
        <figure class="image max-w-sm max-h-sm m-auto">
            <img src='{{url("images/{$image}")}}' >
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src='{{url("images/{$image}")}}' class="is-rounded"
                         style="object-fit: cover">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">{{$name}}</p>
                <p class="subtitle is-6"><a target="_blank"
                                            href="https://twitter.com/PrintedCupCo">{{$twitter}}</a>
                </p>
            </div>
        </div>

        <div class="content">
            {!! $content !!}
        </div>
    </div>
    </div>