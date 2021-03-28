<table>
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
        <tr>
            <td>
                {{ $aluno->nome }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>