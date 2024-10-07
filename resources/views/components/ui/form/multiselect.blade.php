<label class=" w-full flex flex-col gap-1">
<span class=" flex flex-row justify-between">
    <span>{{$title}}</span>
    <span>выбор Ctrl+ЛКМ</span>
</span>  
<select name="{{$name}}" multiple required>
    @if(isset($activeElems))
        @foreach ($data as $elem)
            <option
                @foreach ($activeElems as $activeElem)
                    {{$activeElem->id === $elem->id ? 'selected':''}}
                @endforeach
             value="{{$elem->id}}">{{$elem->title}}</option>
        @endforeach
    @else
        @foreach ($data as $elem)
            <option value="{{$elem->id}}">{{$elem->title}}</option>
        @endforeach
    @endif
    
</select>

</label>