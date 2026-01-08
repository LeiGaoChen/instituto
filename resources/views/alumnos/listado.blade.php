<x-layouts.layout >
    <a href="/alumnos/create"><button class="btn btn-neutral">Add</button></a>
    <div class="h-122 overflow-x-auto">
    <table class="table table-pin-rows bg-base-200">
        <tr>
            @foreach($campos as $campo)
                <th>{{$campo}}</th>
            @endforeach
            <th></th>
            <th></th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->fecha_nacimiento}}</td>
            <td>{{$alumno->updated_at}}</td>
            <td>{{$alumno->created_at}}</td>
            <td>
                <a href="/alumnos/{{$alumno->id}}/edit">
                    <button class="btn btn-neutral">Edit</button>
                </a>
            </td>
            <td>
                <form action="/alumnos/{{$alumno->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                <button  type="submit" class="btn btn-neutral hover:bg-red-600">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
    </div>
</x-layouts.layout>
