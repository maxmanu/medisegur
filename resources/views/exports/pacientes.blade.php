<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Sede</th>
        <th>Empresa</th>
        <th>Nombre</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->sede_id }}</td>
            <td>{{ $paciente->empresa_id }}</td>
            <td>{{ $paciente->nombre }}</td>
        </tr>
    @endforeach
    </tbody>
</table>