<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>Products</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Roboto'] relative flex items-stretch min-h-screen text-[11px] leading-none">
    <aside class="text-white w-[181px] bg-gray-700 flex-none font-normal leading-none">
        <div class="flex">
            <x-logo class="bg-white w-[79px] h-[59px] px-[12px] py-[18px] rounded-br-[20px]" />
            <div class=" pl-[12px] pt-[7px] ">
                Enterprise<br />
                Resource<br />
                Planning
            </div>
        </div>
        <nav class="pl-[34px] pt-[11px] text-white/[.7] text-xs leading-none">
            <ul>
                <li>Продукты</li>
            </ul>
        </nav>
    </aside>
    <div class="bg-slate-100 grow">
        <header class=" flex items-center h-[59px] px-[18px] relative  bg-white">
            <h1 class="left-[197px] top-[25px]  text-red-600  flex-auto ">
                ПРОДУКТЫ
            </h1>
            <div class=" absolute left-[18px] bottom-0 w-[60px] h-[3px]  bg-red-600"></div>
            <div class=" text-gray-400 text-[11px] w-[136px]">
                Иванов Иван Иванович
            </div>
        </header>
        <main x-data="showModals" class="flex">
            <table class="w-[629px] text-neutral-500 table-fixed">
                <thead>
                    <tr class="h-[29px] text-[9px]">
                        <th>АРТИКУЛ</th>
                        <th>НАЗВАНИЕ</th>
                        <th>СТАТУС</th>
                        <th>АТРИБУТЫ</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($products as $product)
                        <tr class="h-[56px]">
                            <td><button type="button"
                                    @click="showProduct({{ $product->id }})">{{ $product->article }}</button></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->status }}</td>
                            <td>
                                @foreach ($product->data as $k => $v)
                                    {{ $k }}: {{ $v }}
                                    @if (!$loop->last)
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-[18px] grow text-right">
                <button @click="showCreate"
                    class=" bg-cyan-400 rounded-md px-[43px] py-[9px] text-white text-[11px] font-medium ">
                    Добавить
                </button>
            </div>
            <div x-cloak x-show="modal" class=" fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                <div class="flex items-center justify-center min-h-screen px-4 text-center">
                    <div @click="hide" class="bg-opacity-40 fixed inset-0 transition-opacity bg-gray-500"></div>

                    <div x-cloak x-show="create"
                        class="px-[12px] py-[27px] w-[630px] relative bg-gray-700 border border-black font-['Roboto'] shadow-xl transition-all transform inline-block my-20 text-left ">
                        <h2 class="mb-[21px] text-white text-xl font-bold font-['Roboto'] leading-none ">
                            Добавить продукт
                        </h2>
                        <button @click="hide" class="w-[30px] h-[30px] right-[5px] top-[18px] absolute ">
                            <x-icon::close />
                        </button>
                        <form action="{{ route('products.store') }}" method="post" x-on:submit.prevent="submitForm">
                            @csrf
                            <x-product-form />
                        </form>
                    </div>

                    <div x-cloak x-show="edit"
                        class="px-[12px] py-[27px] w-[630px] relative bg-gray-700 border border-black font-['Roboto'] shadow-xl transition-all transform inline-block my-20 text-left">
                        <h2 class="mb-[21px] text-white text-xl font-bold font-['Roboto'] leading-none "
                            x-text="'Редактировать ' + product.name">
                        </h2>
                        <button @click="hide" class="w-[30px] h-[30px] right-[5px] top-[18px] absolute ">
                            <x-icon::close />
                        </button>
                        <form x-bind:action="`api/products/${product.id}`" method="post" x-on:submit.prevent="submitForm">
                            @csrf
                            @method('put')
                            <x-product-form />
                        </form>
                    </div>
                    
                    <div x-cloak x-show="show">
                        <x-product-show />
                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>
