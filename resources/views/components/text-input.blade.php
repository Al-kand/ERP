@props([
    'label' => null,
    'name',
])

<label class="mb-[13px] inline-block mr-[6px]">
    @isset($label)
        <span class="text-white text-[9px] leading-[11px] first-letter:uppercase block font-normal mb-[8px]">
            {{ $label }}
        </span>
    @endisset
    <input type="text" name="{{ $name }}" {{ $attributes->merge([
        'class' => 'h-[30px] rounded-[5px] px-[9px] text-[11px] ',
    ]) }} />
    @error($name)
        <span class="text-red_500 font-ubuntu block ml-3 -mt-4 text-sm font-normal leading-none">{{ $message }}</span>
    @enderror
</label>
