<x-text-input name="article" label="Артикул" class="w-[472px]" x-model="product.article" />

<x-text-input name="name" label="Название" class="w-[472px]" x-model="product.name" />

<x-select-input name="status" label="Статус" class="w-[472px]" x-model="product.status" />

<h3 class="mb-[26px] font-['Roboto'] text-sm font-bold leading-[11px] text-white">
    Атрибуты
</h3>

<template x-if="product.data">
    <template x-for="(value, key) in product.data ">
        <div x-data class="mb-[2px]">
            <x-text-input label="Название" x-model="key" class="w-[219px]" />
            <x-text-input label="Значение" x-bind:name="`data[${key}]`" x-model="value" class="w-[219px]" />
            <button @click="$root.remove()" class=" inline-block">
                <x-icon::delete class=" fill-[#c4c4c4] opacity-40 w-[10px] h-[11px] " />
            </button>
        </div>
    </template>
</template>

<div x-data>
    <button type="button" @click="$el.before($refs.atribute.querySelector('[x-data]').cloneNode(true))"
        class="text-cyan-400 text-[9px] leading-[11px] underline decoration-dashed underline-offset-2 block mb-[30px]">
        + Добавить атрибут
    </button>
    <div x-ref="atribute" hidden>
        <div x-data="{ key: '' }" class="mb-[2px]">
            <x-text-input x-model="key" label="Название" class="w-[219px]" />
            <x-text-input x-bind:name="`data[${key}]`" label="Значение" class="w-[219px]" x-bind:disabled="!key"/>
            <button @click="$root.remove()" class=" inline-block">
                <x-icon::delete class=" fill-[#c4c4c4] opacity-40 w-[10px] h-[11px] " />
            </button>
        </div>
    </div>
</div>

<button
    class="text-white text-[11px] font-medium font-['Roboto'] leading-[11px] w-[139px] h-[30px] bg-cyan-400 rounded-[5px] mb-[50px]">
    Сохранить
</button>
