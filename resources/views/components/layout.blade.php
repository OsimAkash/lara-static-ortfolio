<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    {{-- left side --}}
    <header class="md:h-screen bg-[#082f49] left-0 fixed top-0 w-full md:w-[20%] xl:w-[15%] z-50">
        <div class="mt-0 md:mt-10 px-5 md:px-0 flex items-center justify-between md:block">
            <h1 class="text-left md:text-center">
                <a href="{{ route('home') }}" class="inline-block text-white text-2xl md:text-3xl lg:text-4xl uppercase font-medium">Akash. <span
                        class="bg-[#1d4ed8]/90 text-slate-900 px-2 py-0">me</span></a>
            </h1>
            
            <ul class="mt-0 md:mt-10 flex flex-row md:flex-col">
                <li><a href="{{ route('home') }}"
                        class="text-white/60 text-base md:text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-4 md:px-6">Home</a>
                </li>
                <li><a href="{{ route('experience') }}"
                        class="text-white/60 text-base md:text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-4 md:px-6">Experience</a>
                </li>
                <li><a href="{{ route('projects.index') }}"
                        class="text-white/60 text-base md:text-lg uppercase tracking-wide my-3 block py-3 hover:text-white/95 transition-all px-4 md:px-6">Projects</a>
                </li>
            </ul>
        </div>
    </header>

    {{-- Right side --}}
    <section class="md:w-[80%] md:ml-[20%] xl:w-[85%] xl:ml-[15%]">
        <div
            class="min-h-screen bg-cover relative z-10 after:absolute after:w-full after:h-full after:bg-slate-900/80 after:top-0 after:left-0 after:-z-10 bg-[#1e1b4b]">
            <div {{ $attributes->merge(['class' => 'px-[10%] flex flex-col justify-center min-h-screen text-white w-4/5']) }}>

                {{ $slot }}

            </div>
        </div>
    </section>

</body>

</html>