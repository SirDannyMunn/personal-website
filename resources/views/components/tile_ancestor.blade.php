<div class="tile is-ancestor bg-white box shadow-lg is-bordered rounded-half">
    <div class="tile is-parent notification bg-white rounded-half">
        <div class="is-child text-center">
            @if(isset($part_one)){{ $part_one }}@endif
            @if(isset($part_two)){{ $part_two }}@endif
            @if(isset($part_three)){{ $part_three }}@endif
        </div>
    </div>
</div>