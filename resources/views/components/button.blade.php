<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'border rounded-lg px-8 py-2 text-white bg-[#7895B2] hover:bg-[#7895B2]/75']) }}>
    {{ $slot }}
</button>
