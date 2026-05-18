@extends('layouts.layout')

@section('title', 'Studentų sąrašas')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Studentų sąrašas</h2>

        @auth
            <a href="{{ route('students.create') }}" class="btn btn-success">
                Pridėti studentą
            </a>
        @endauth
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Asmens kodas</th>
                <th>Gimimo data</th>
                <th>Telefonas</th>
                <th>Adresas</th>
                <th>Miestas</th>
                <th>Grupė</th>

                @auth
                    <th>Veiksmai</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->asmens_kodas }}</td>
                    <td>{{ $student->gim_data }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->city ? $student->city->name : '' }}</td>
                    <td>{{ $student->grupe ? $student->grupe->kodas : '' }}</td>

                    @auth
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">
                            Redaguoti
                        </a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Ar tikrai norite ištrinti?')">
                                Ištrinti
                            </button>
                        </form>
                    </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $students->links() }}
@endsection