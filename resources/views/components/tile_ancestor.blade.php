<div class="tile is-ancestor bg-white box shadow-lg">
    <div class="tile is-parent p-8 bg-white">
        <div class="is-child text-center">
            @if(isset($part_one)){{ $part_one }}@endif
            @if(isset($part_two)){{ $part_two }}@endif
            @if(isset($part_three)){{ $part_three }}@endif
        </div>
    </div>
</div>