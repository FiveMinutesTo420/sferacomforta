@extends('layout')
@section('title','Главная | Сфера комфорта')
@section('content')
@php
$days = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
@endphp
<div class="flex flex-col space-y-4 ">
    <header class="border-b-2 ">
        <p class="text-2xl font-semibold">Форма учета работ</p>
        <div class="flex flex-col font-semibold">
            {{date('d.m.Y')}}, {{$days[date("w", mktime(0,0,0,date("m"),date("d"),date("Y")))]}}, {{auth()->user()->surname}} {{mb_substr(auth()->user()->name,0,1)}}.{{mb_substr(auth()->user()->patronymic,0,1)}}.
        </div>
    </header>
    <form action="" class="flex space-y-3 flex-col">
        <div>
            <p>Выберите время суток</p>
            <select name="" id="" class="bg-none outline-none w-44 p-1 ">
                <option value="">День</option>
                <option value="">Ночь</option>
            </select>
        </div>
        <div>
        <p>Введите баланс телефона</p>
            <input type="text">
        </div>

    </form>
</div>
@endsection