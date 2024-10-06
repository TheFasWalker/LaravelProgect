<div class="p-5 rounded-lg shadow-md aspect-square">
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
</div>