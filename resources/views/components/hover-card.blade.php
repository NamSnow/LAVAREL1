<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" {{ $attributes->merge(['class' => 'relative w-fit']) }}>
    <div @click="open = !open">
        {{ $trigger }}
    </div>
    <div x-show="open" x-transition:enter="transition ease-in duration-[300ms]"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-out duration-200"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         class="absolute z-10 w-80 p-4 shadow-lg rounded-lg bg-slate-800 border border-[#515275]">
        {{ $content }}
    </div>
</div>