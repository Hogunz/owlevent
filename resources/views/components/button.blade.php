<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'text-xs font-semibold uppercase tracking-widest border rounded-lg px-8 py-2 text-white bg-[#7895B2] hover:bg-[#7895B2]/75']) }}>
    {{ $slot }}
</button>
