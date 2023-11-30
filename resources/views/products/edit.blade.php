<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="px-[12px] py-[27px] w-[630px] h-[594px] relative bg-gray-700 border border-black  font-['Roboto']">
    <h2 class="mb-[21px] text-white text-xl font-bold font-['Roboto'] leading-none">
        Редактировать MTOK-B3/216-1KT3645-K
    </h2>
    <div class="w-[30px] h-[30px] right-[5px] top-[18px] absolute">
        <x-icon::close />
    </div>
    <x-text-input name="art" label="Артикул" class="w-[472px]" value="MTOK-B3/216-1KT3645-K" />

    <x-text-input name="art" label="Название" class="w-[472px]" />

    <x-select-input name="art" label="Статус" class="w-[472px]" />

    <h3 class="mb-[26px] font-['Roboto'] text-sm font-bold leading-[11px] text-white">Атрибуты</h3>

    <div class="mb-[2px]">
        <x-text-input name="art" label="Название" class="w-[219px]" />
        <x-text-input name="art" label="Значение" class="w-[219px]" />
        <button class=" inline-block">
            <x-icon::delete class=" fill-[#c4c4c4] opacity-40 w-[10px] h-[11px] " />
        </button>
    </div>
    <div class="mb-[2px]">
        <x-text-input name="art" label="Название" class="w-[219px]" />
        <x-text-input name="art" label="Значение" class="w-[219px]" />
        <button class=" inline-block">
            <x-icon::delete class=" fill-[#c4c4c4] opacity-40 w-[10px] h-[11px] " />
        </button>
    </div>
    <div class="mb-[2px]">
        <x-text-input name="art" label="Название" class="w-[219px]" />
        <x-text-input name="art" label="Значение" class="w-[219px]" />
        <button class=" inline-block">
            <x-icon::delete class=" fill-[#c4c4c4] opacity-40 w-[10px] h-[11px] " />
        </button>
    </div>
    <button
        class="text-cyan-400 text-[9px] leading-[11px] underline decoration-dashed underline-offset-2 block mb-[30px]">
        + Добавить атрибут
    </button>
    <button
        class="text-white text-[11px] font-medium font-['Roboto'] leading-[11px] w-[139px] h-[30px] bg-cyan-400 rounded-[5px] ">
        Сохранить
    </button>
</div>
</html>
