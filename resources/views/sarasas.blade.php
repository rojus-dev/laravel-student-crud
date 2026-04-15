<body>
    <h1>Zmoniu sarasas</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Telefonas</th>
            <th>Gim. data</th>
        </tr>

        @foreach ($vartotojai as $vartotojas)
            <tr>
                <td>{{ $vartotojas->id }}</td>
                <td>{{ $vartotojas->vardas }}</td>
                <td>{{ $vartotojas->pavarde }}</td>
                <td>{{ $vartotojas->telefonas }}</td>
                <td>{{ $vartotojas->gim_data }}</td>
            </tr>
        @endforeach
    </table>
</body>