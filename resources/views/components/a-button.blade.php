<a {{ $attributes->merge(['href' => '', 'class' => 'w-36 h-12 bg-terra-cotta shadow-button-light rounded-3xl
text-pale-pink text-center leading-12
hover:bg-soft-pink hover:shadow-button-dark hover:text-terra-cotta hover:font-bold duration-500']) }}>
    {{ $slot }}
</a>