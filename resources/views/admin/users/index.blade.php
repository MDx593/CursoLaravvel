@extends('admin.layouts.app')
@section('title', 'Lista de Usuários')

@section('content')
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Adicionar Novo Usuario</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbory>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                    
                </tr>
                @empty
                    <tr>
                        <td colpsan="100">Nenhum usuário no banco</td>
                    </tr>
            @endforelse
        </tbory>
    </table>

    {{ $users->links() }}
@endsection