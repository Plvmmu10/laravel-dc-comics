<div class="col-3 p-2 ">
    <div class="card border-0">
        <div class="card-header border-0">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid w-100 h-100">
        </div>

        <div class="card-body position-relative">
            <h4>{{ $comic['title'] }}</h4>
            <div class="position-absolute bottom-0 w-100 d-flex">
                <button class="btn btn-primary"><a href="{{ route('comics.show', $comic->id) }}"
                        class="text-decoration-none text-white">Info</a></button>
                <div class="px-2">
                    <button class="btn btn-warning"><a href="{{ route('comics.edit', $comic->id) }}"
                            class="text-decoration-none text-white">Modifica</a></button>
                </div>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
