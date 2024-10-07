<label class=" w-full flex flex-col gap-1">
<span class=" flex flex-row justify-between">
    <span>{{$title}}</span>
    <span>выбор Ctrl+ЛКМ</span>
</span>
    

<select name="{{$name}}" multiple>
    @foreach ($data as $elem)
        <option value="{{$elem->id}}">{{$elem->title}}</option>
    @endforeach
    
</select>

</label>