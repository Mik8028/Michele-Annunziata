<table class="table table-striped table-hover  border">
    <thead class="background-form ">
        <tr>
            <th class="th-hashtag" scope="col">#</th>
            <th class="th-name" scope="col">Nome</th>
            <th class="th-emai" scope="col">Email</th>
            <th class="th-azione" scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="th-azione">
                    @switch($role)
                        @case('amministratore')
                            <form action="{{ route('admin.setAdmin', compact('user')) }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning btn-login text-white">Attiva
                                    {{ $role }}</button>
                            </form>
                        @break

                        @case('revisore')
                            <form action="{{ route('admin.setRevisor', compact('user')) }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning btn-login text-white">Attiva
                                    {{ $role }}</button>
                            </form>
                        @break

                        @case('redattore')
                            <form action="{{ route('admin.setWriter', compact('user')) }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning  btn-login text-white">Attiva
                                    {{ $role }}</button>
                            </form>
                        @break
                    @endswitch

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
