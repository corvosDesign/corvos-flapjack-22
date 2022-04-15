<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-extralight inline-flex items-center text-xs text-blueline uppercase tracking-widest  disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
