<label class=" cursor-pointer flex flex-row items-center gap-3">
    <span class=" text-xl font-semibold">{{$title}}</span>
    
    <input type="checkbox" name="{{$name}}" {{ isset($checked) && $checked ? 'checked' : ''}}>
</label>