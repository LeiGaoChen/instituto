<x-layouts.layout>
    <div class="flex justify-center items-center min-h-[70vh] bg-base-200 text-base-content">
        <form action="{{route("alumnos.store")}}" class="card w-96 bg-base-100 shadow-xl p-6 space-y-4" method="POST">
            @csrf
            <h2 class="text-xl font-bold text-center">Registro</h2>

            <label class="form-control w-full">
                <span class="label-text">Nombre</span>
                <input type="text" id="nombre" name="nombre" class="input input-bordered w-full" value="{{old("nombre")}}"/>
                <div class="text-red-600 text-sm">
                {{$errors->first("nombre")}}
                </div>
            </label>

            <label class="form-control w-full">
                <span class="label-text">Apellido</span>
                <input type="text" id="apellido" name="apellido" class="input input-bordered w-full" value="{{old("apellido")}}"/>
            </label>

            <label class="form-control w-full">
                <span class="label-text">Fecha de nacimiento</span>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="input input-bordered w-full" value="{{old("fecha_nacimiento")}}"/>
            </label>

            <label class="form-control w-full">
                <span class="label-text">Email</span>
                <input type="email" id="email" name="email" class="input input-bordered w-full" value="{{old("email")}}"/>
            </label>

            <button type="submit" class="btn btn-primary w-full">Guardar</button>
            <button type="submit" class="btn btn-primary w-full">Cancelar</button>

        </form>
    </div>
</x-layouts.layout>
