<form action="{{$route}}" method="POST">
    @csrf
    @method('DELETE')
    <button  class="text-left w-full block py-2 px-4 text-sm text-gray-700  dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white hover:bg-red-500 hover:text-white hover:font-bold">Delete</a>
</form>