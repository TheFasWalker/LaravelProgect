<form action="{{$route}}" method="POST">
    @csrf
    @method('DELETE')
    <button class=" w-full p-3 shadow-sm rounded-xl flex items-center justify-center bg-red-500 text-white font-bold hover:bg-red-800"> delete</button>
</form>