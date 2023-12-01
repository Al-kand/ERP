<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <main class="flex">
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
                            <td>{{ $product->article }}</td>
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
                <button class=" bg-cyan-400 rounded-md px-[43px] py-[9px] text-white text-[11px] font-medium ">
                    Добавить
                </button>
            </div>
        </main>
    </div>
</body>

</html>
