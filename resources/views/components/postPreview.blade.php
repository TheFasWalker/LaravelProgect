<div class="p-5 rounded-lg shadow-md aspect-square relative">
    <div class=" aspect-video w-full bg-slate-600">
    @if ($image !== '')
            <img class="w-full h-full object-cover" src="{{$image}}" alt="">
    @else
    <img class="w-full h-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1200px-No_image_available.svg.png" alt="">
    @endif
    </div>
    <div class="flex flex-col gap-5 pt-10 overflow-hidden">
        <span>{{$title}}</span>
        <p>{{$description}}</p>
    </div>
    @if($published == true)
        <span class="block p-2 bg-gray-700 w-fit text-white rounded-lg absolute top-4 right-4 rotate-12 text-lg">Published</span>
    @endif
    <div class="grid grid-cols-2 gap-2">
        
        <x-ui.button-link
            title="Подробнее"
            link='/data/post/{{$postId}}'
        />
        <x-ui.button-link
        title="Редактировать"
        link='/data/post/{{$postId}}/edit'
    />
    </div>
</div>