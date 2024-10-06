<select name="{{$name}}">
    <option {{$activeId == '' or $activeId == '0' ? 'selected' : ''}} >no category</option>
    @foreach($data as $dataElem)
        <option value="{{$dataElem->id}}" {{$activeId ==$dataElem->id ? 'selected' : '' }}>{{$dataElem->title}}</option>
    @endforeach
  </select>