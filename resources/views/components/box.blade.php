@push('styles-bottom')
    <style>
        .test:hover {
            cursor: pointer;
            transform: scale(2, 2);
        }
    </style>
@endpush

<div class="flex-1 px-4 py-2 m-2">
    <div class="box p-2 shadow-md {{$colour}}">
        <h2>{{$title}}</h2>
    </div>
</div>
