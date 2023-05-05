<li>
    <a {{ $attributes->merge(['href' => '', 'class' => 'nav-item hover:text-pale-pink hover:font-bold duration-500']) }}>
        {{ $slot }}
    </a>
</li>