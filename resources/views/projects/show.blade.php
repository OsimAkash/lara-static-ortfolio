<x-layout class="!w-full 2xl:!w-4/5 mx-auto">

    <div class="grid grid-cols-5 gap-10 bg-slate-700 shadow-2xl p-10 rounded-md mt-32 md:mt-0">

        <div class="col-span-5 xl:col-span-2">
            <div class="h-80 xl:h-48 w-full bg-cover bg-no-repeat rounded-sm bg-center bg-[url('{{ asset("images/{$project['image']}") }}')]"></div>
            <div class="flex gap-3 mt-5">
                @foreach ($project['category'] as $category)
                    <a href="#" class="bg-slate-600 shadow-sm px-3 py-1 rounded-md text-xs hover:bg-slate-600/80 transition">{{ $category }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-span-5 xl:col-span-3">
            <h2 class="text-3xl font-medium mb-7">{{ $project['project_name'] }}</h2>
            <p class="text-slate-300/80 text-lg">{{ $project['description'] }}</p>
            <h3 class="text-slate-300 mt-4">Client Name: <span class="font-normal text-slate-300/80">{{ $project['client_name'] }}</span></h3>
            <p class="text-slate-300 mt-2">Published Date: <span class="font-normal text-slate-300/80">{{ $project['published_date'] }}</span></p>
            <p class="text-slate-300 mt-2">Live link: <a href="{{ $project['live_link'] }}" class="font-normal text-slate-300/80 inline-block underline underline-offset-2">{{ $project['live_link'] }}</a></p>
        </div>

    </div>

</x-layout>