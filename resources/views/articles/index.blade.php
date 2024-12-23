
<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <div class="relative">
        <img class="w-full h-48 object-cover" src="{{ 'storage/'.$article->image!=='NULL' ?'storage/'.$article->image : 'storage/app/public/img/images.jpg' }}">
        <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md"><a href="/article/{{ $article->id }}">Lire l'article</a>
        </div>
        <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">{{ $article->created_at->diffForHumans() }}
        </div>
    </div>
    <div class="p-4">
        <div class="text-lg font-medium text-gray-800 mb-2">{{ $article->title }}</div>
        <p class="text-gray-500 text-sm">{!! $article->description !!}</p>
    </div>
</div>
