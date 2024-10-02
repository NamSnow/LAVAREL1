<div {{ $attributes->merge(['class' => 'flex items-start justify-center w-[100px] aspect-square bg-transparent']) }}>
    @if ($src)
        <img src="{{ $src }}" class="w-full rounded-[100%] object-cover aspect-square" />
    @else
        <span class="text-sm font-semibold">{{ $fallback }}</span>
    @endif
</div>