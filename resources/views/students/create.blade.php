@extends('layouts.layout')

@section('title', 'Pridėti studentą')

@section('content')
<div class="container mt-4">
    <h2>Pridėti naują studentą</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Vardas</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pavardė</label>
            <input type="text" name="surname" class="form-control" value="{{ old('surname') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Asmens kodas</label>
            <input type="text" name="asmens_kodas" class="form-control" value="{{ old('asmens_kodas') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gimimo data</label>
            <input type="date" name="gim_data" class="form-control" value="{{ old('gim_data') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Adresas</label>
            <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefonas</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Miestas</label>
            <select name="city_id" class="form-control" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}"
                        {{ old('city_id') == $city->id ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Grupė</label>
            <select name="grupe_id" class="form-control" required>
                @foreach($grupes as $grupe)
                    <option value="{{ $grupe->id }}"
                        {{ old('grupe_id') == $grupe->id ? 'selected' : '' }}>
                        {{ $grupe->kodas }} - {{ $grupe->pavadinimas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Išsaugoti</button>
    </form>
</div>
@endsection