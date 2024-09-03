<x-layout class="!w-full py-28">
    <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 w-full gap-8">
    
        @foreach ($projects ?? [] as $project)
        <div class="bg-slate-700 rounded-sm overflow-hidden shadow-2xl group">
            <div class="relative">
                <div class="h-80 relative bg-cover bg-center after:absolute after:bg-slate-900/70 group-hover:after:w-full after:duration-300 transition-all after:w-0 duration-300 z-10 after:h-full bg-[url('{{ asset("/images/{$project['image']}") }}')]"></div>
                <a href="{{ route('projects.show', ['project' => $project['id']]) }}" class="absolute bg-white/90 text-slate-900 px-10 py-3 top-1/2 left-0 z-20 transition-all duration-300 group-hover:-translate-x-1/2 group-hover:left-1/2 -translate-x-full -translate-y-1/2 capitalize font-medium shadow-lg rounded-sm">See details</a>
            </div>
            
            <div class="bg-slate-700 px-5 pt-4 pb-8 flex flex-col gap-4">
                <a href=" {{ route('projects.show', ['project' => $project['id']]) }}" class="text-2xl font-semibold block">{{ $project['project_name'] }}</a>
                <div class="flex gap-3">
                    @foreach ($project['category'] as $category)
                       <a href="#" class="bg-slate-600 shadow-sm px-3 py-1 rounded-md text-xs hover:bg-slate-600/80 transition">{{ $category }}</a>
                    @endforeach
                </div>
                <p class="text-slate-200">{{ $project['short_description'] }}</p>
                <a href="{{ $project['live_link'] }}" target="_blank" class="inline-block capitalize px-5 py-1 rounded-md bg-slate-300 text-slate-900 font-medium self-start text-sm transition-all duration-300 shadow-sm hover:shadow-2xl hover:bg-slate-200">see live</a>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>