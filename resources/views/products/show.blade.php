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

<div
    class="w-[630px] h-[387px] relative bg-gray-700 border border-black px-[12px] py-[27px] text-white font-normal text-[11px]  font-['Roboto'] leading-[11px]">
    <h2 class="leading-[11px] text-xl font-bold mb-[30px]">MTOK-B3/216-1KT3645-K</h2>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Артикул</span>
        mtokb3
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Название</span>
        MTOK-B3/216-1KT3645-K
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Статус</span>
        доступен
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] align-top inline-block">Статус</span>
        <span class="inline-block leading-[13px]">Цвет: серый<br />Размер: ХL</span>
    </div>
    <div class="w-[30px] h-[30px] right-[5px] top-[18px] absolute">
        <x-icon::close />
    </div>
    <div class="w-[20px] h-[20px] right-[63px] top-[23px] absolute p-[4px] bg-black bg-opacity-40">
        <x-icon::edit class="fill-stone-300 w-[12px] h-[12px]" />
    </div>
    <div class="w-[20px] h-[20px] right-[41px] top-[23px] p-[4px] absolute bg-black bg-opacity-40">
        <x-icon::delete class="fill-stone-300 w-[12px] h-[12px]" />
    </div>
    <div class="left-[12px] top-[27px] absolute text-white text-xl font-bold font-['Roboto'] leading-[11px]">
        MTOK-B3/216-1KT3645-K
    </div>
    <div class="w-[30px] h-[30px] left-[595px] top-[18px] absolute"></div>
</div>

</html>
