@extends('layouts.layout')

@section('title', 'Ištrinti studentai')

@section('content')
<h2>Ištrinti studentai</h2>

<a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">Grįžti</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Grupė</th>
            <th>Veiksmai</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->surname }}</td>
                <td>{{ $student->grupe?->kodas }}</td>
                <td>
                    <form action="{{ route('students.restore', $student->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-success btn-sm">Atkurti</button>
                    </form>

                    <form action="{{ route('students.forceDelete', $student->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Ištrinti visam laikui</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $students->links() }}
@endsection