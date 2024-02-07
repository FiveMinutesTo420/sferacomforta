<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <section class="flex h-[100vh]">
        <div class="flex flex-col justify-between w-56 font-medium bg-indigo-500 text-gray-900">
            <div class="flex flex-col  ">
            
                <a class="cursor-pointer p-4 flex space-x-5 @if(Route::current()->getName() == "") bg-indigo-200  @endif hover:bg-indigo-200" href="/">
                    <img src="{{url('/images/svg/plus.svg')}}" class="w-4 " alt="">
                    <p class="">Добавить запись</p>
                </a>
                <a class="cursor-pointer p-4 flex space-x-5 hover:bg-indigo-200 @if(Route::current()->getName() == "history") bg-indigo-200  @endif transition-all duration-200" href="/">
                    <img src="{{url('/images/svg/history3.svg')}}" class="w-4 " alt="">
                    <p class="">История</p>
                </a>
            </div>
            <a href="{{route('logout')}}" class="p-4 flex space-x-5 text-center cursor-pointer hover:bg-indigo-400">
                <img src="{{url('/images/svg/logout.svg')}}" class="w-4 " alt="">
                <p>Выйти</p>
            </a>
        </div>
        <section class="p-4 ">
            @yield('content')
        </section>
    </section>
</body>
</html>