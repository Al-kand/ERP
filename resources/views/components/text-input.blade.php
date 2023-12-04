@props([
    'label' => null,
    
])

<label class="mb-[13px] inline-block mr-[6px]">
    @isset($label)
        <span class="text-white text-[9px] leading-[11px] first-letter:uppercase block font-normal mb-[8px]">
            {{ $label }}
        </span>
    @endisset
    <input type="text" {{ $attributes->merge([
        'class' => 'h-[30px] rounded-[5px] px-[9px] text-[11px] ',
    ]) }} />
    
</label>
