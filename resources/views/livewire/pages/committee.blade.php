<div class="w-full">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0059A8]/10 to-[#0059A8]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Organizing Committee
            </h2>
        </div>
    </section>

    <section class="mx-auto w-full px-5 pt-16 pb-28 bg-competition">
        <div class="flex flex-wrap gap-4 justify-evenly">
            @foreach ($uniqueCategories as $category)
            <div class="card shadow-sm w-full max-w-md">
                <div class="card-body">
                    <h2 class="card-title uppercase text-[#c01e8f]">{{$category}}</h2>
                    @foreach ($committees as $committee)
                    @if ($committee->category == $category)
                    <ul class= "list-disc list-inside">
                        <li class="mb-2 text-gray-500">{{ $committee->name }}
                            @if ($committee->title != null)
                            <br>
                            <span class="font-semibold ml-3">({{ $committee->title }})</span>
                            @endif
                        </li>
                    </ul>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>