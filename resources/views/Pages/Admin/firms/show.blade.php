@extends('Layouts.AdminLayout')
@section('content')
<div class="antialiased bg-gray-50 dark:bg-gray-900">
<x-admin.general.header/>

<x-admin.general.sidebar/>

    <main class="p-4 md:ml-64 h-auto pt-20">
      <h1 class="mx-auto text-center text-5xl font-bold pb-10">Полные данные для фирмы {{ $firm->name }}</h1>


        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
            <div class="grid grid-cols-[500px_1fr] gap-7">
                @if(isset($firm->logo))
                <div class="">
                    Логотип фирмы

                    <img class="w-full h-auto" src="{{ $firm->logo }}" alt="">
                </div>
                @else
                <div class=" flex h-full justify-center items-center min-h-36">

                    <span class=" font-extrabold text-black text-3xl bg-slate-500 w-full h-full flex items-center justify-center">NoImage</span>


                    
                </div>
                @endif
                <div class="flex flex-col gap-3">
                    <div class="">
                        <span>Название: </span>
                        <span>{{ $firm->name }}</span>
                    </div>
                    @if(isset($firm->registration_sity))
                    <div class="">
                        <span>Город регистрации: </span>
                        <span>{{ $firm->registration_sity }}</span>
                    </div>
                    @endif  
                    {{ $firm->sity->sity }}                  
                    @if(isset($firm->index))
                    <div class="">
                        <span>Индекс фирмы: </span>
                        <span>{{ $firm->index }}</span>
                    </div>
                    @endif
                    @if(isset($firm->real_adress))
                    <div class="">
                        <span>Реальный адрес: </span>
                        <span>{{ $firm->real_adress }}</span>
                    </div>
                    @endif
                    @if(isset($firm->legal_adress))
                    <div class="">
                        <span>Юридический адрес: </span>
                        <span>{{ $firm->legal_adress }}</span>
                    </div>
                    @endif
                    @if(isset($firm->phone))
                    <div class="">
                        <span>Телефон:</span>
                        <span>{{ $firm->phone }}</span>
                    </div>
                    @endif
                    @if(isset($firm->website))
                    <div class="">
                        <span>вебсайт:</span>
                        <a class=" text-blue-600" href="{{ $firm->website }}">{{ $firm->website }}</a>
                    </div>
                    @endif
                </div>
            </div>
            @if($firm->direction || $firm->values)
                <div class=" pt-4 flex flex-col gap-5">
                    <div class="">
                        <span class="font-bold">Направление фирмы:</span>
                        <div class="">
                            {{ $firm->direction }}
                        </div>
                    </div>
                    <div class="">
                        <span class="font-bold">Ценности фирмы:</span>
                        <div class="">
                            {{ $firm->values }}
                        </div>
                    </div>
                    
                </div>
            @endif
            <div class=" flex flex-row gap-4 pt-9 w-full justify-end">
                <a class=" bg-slate-400 px-4 py-2 rounded-xl hover:text-white hover:shadow-lg" href="{{ route('admin.firms') }}">К списку категорий</a>
                <a class=" bg-slate-400 px-4 py-2 rounded-xl hover:text-white hover:shadow-lg" href="{{ route('admin.firm.edit', $firm->id) }}">Редактирвоать</a>
                <form action="{{ route('admin.firm.delete', $firm->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class=" bg-slate-400 px-4 py-2 rounded-xl hover:bg-red-400  hover:shadow-lg hover:shadow-red-500 hover:text-white">Удалить</button>
                </form>
            </div>

  
    
    </section>
    @endsection