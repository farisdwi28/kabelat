    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold lg:text-5xl py-2 w-3/4">{{ $title }}</h2>
        <p class="font-bold py-2">Penulis : {{ $author }}</p>
        <p class="font-bold text-primary">{{ $date }}</p>
        <figure>
            <img class="w-[20rem] object-cover rounded-xl py-2" src="{{ asset($img) }}" alt="Blog Image">
        </figure>
        <p class="py-2 pb-3 w-3/4 text-xl">{{ $isi }}</p>
    </div>
