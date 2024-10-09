@extends('Layouts.mainLayout')

@section('content')


<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
  <h1 class=" text-2xl text-bold">PostsPage</h1>
  @if(!count($posts))
  <div class=" w-[500px] pt-7 flex flex-col gap-10 text-center">
    <h2 class=" font-black text-3xl">Постов несуществует</h2>
    <x-ui.button-link
    title='Создать Пост'
    link='/data/post/create'/></div>
  @else
  <div class="flex justify-between w-full py-5">
    <div class="flex flex-row gap-4">
      <a class="{{ request('is_published') == '' ? 'bg-slate-500 text-white' : ' text-black bg-slate-200 hover:bg-slate-400' }} shadow-xl h-fit p-2 rounded-lg " href="?is_published">all</a>
      <a class="{{ request('is_published') == 'yes' ? 'bg-slate-500 text-white' : ' text-black bg-slate-200 hover:bg-slate-400' }} shadow-xl h-fit p-2 rounded-lg " href="?is_published=yes">Published</a>
      <a class="{{ request('is_published') == 'no' ? 'bg-slate-500 text-white' : ' text-black bg-slate-200 hover:bg-slate-400' }} shadow-xl h-fit p-2 rounded-lg " href="?is_published=no">Not Published</a>
    </div>
    <div class=" w-64">
      <x-ui.button-link
      title='Создать Пост'
      link='/data/post/create'/>
    </div>
</div>
<div class="grid grid-cols-2 w-full gap-5 xl:grid-cols-3">
    @foreach ($posts as $post)
    <x-postPreview
        :title='$post->title'
        :description='$post->content'
        :image='$post->image'
        :published='$post->is_published'
        :postId='$post->id'
        :category="$post->category ? $post->category->title : ''"
        :tags='$post->tags'/>
    @endforeach


</div>
<div class="w-full mt-5">
  {{ $posts->links() }}
</div>
  @endif

        </div>


@endsection