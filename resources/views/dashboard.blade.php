<x-layout.layout>
    @slot('slot_main')
        <div class="card w-96 bg-base-100 shadow-xl image-full">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Rest full proyectos</h2>
                <p>Aquí gestionaremos los proyectos</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Ver proyectos</button>
                </div>
            </div>
        </div>
        @endslot
</x-layout.layout>
