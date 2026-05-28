<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Dokumentas</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .header { text-align: center; font-size: 24px; font-weight: bold; }
        .content { margin-top: 20px; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th { background-color: #333; color: #fff; padding: 6px; text-align: left; }
        td { padding: 5px; border-bottom: 1px solid #ccc; }
    </style>
</head>
<body>
    <div class="header">{{ $title }}</div>
    <div class="content">
        <p>Data: {{ $date }}</p>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Vardas</th>
                    <th>Pavardė</th>
                    <th>Asmens kodas</th>
                    <th>Gimimo data</th>
                    <th>Telefonas</th>
                    <th>Miestas</th>
                    <th>Grupė</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->name }}</td>
                        <td>{{ $s->surname }}</td>
                        <td>{{ $s->asmens_kodas }}</td>
                        <td>{{ $s->gim_data }}</td>
                        <td>{{ $s->phone }}</td>
                        <td>{{ $s->city ? $s->city->name : '—' }}</td>
                        <td>{{ $s->grupe ? $s->grupe->kodas : '—' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>