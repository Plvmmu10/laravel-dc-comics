<div class="mainContainer text-white flex-wrap">
    <span class="text-uppercase fw-bold">current series</span>
    <div class="btn-container d-flex flex-column justify-content-center align-items-center w-100">

        <div class="d-flex justify-content-center p-5">
            <button class="btn btn-success"><a href="{{ route('comics.create') }}"
                    class="text-decoration-none text-white">Crea
                    il tuo
                    fumetto!</a></button>
        </div>

        <div class="row my-5">
            @foreach ($comics as $comic)
                @include('partials.card')
            @endforeach
        </div>
        <div>
            <button class="btn btn-primary text-uppercase rounded-0 fw-bold">load more</button>
        </div>
    </div>
</div>

<style lang="scss" scoped>
    .mainContainer {
        padding: 2rem 0;
        position: relative;
    }

    span {
        position: absolute;
        top: -20px;
        padding: .7rem 1.5rem;
        background-color: #0282f9;
    }
</style>
