<h4>Dados pessoais</h4>
<ul>
    <li>{{ $user->id }}</li>
    <li>{{ $user->name }}</li>
    <li>{{ $user->phone }}</li>
    <li>{{ $user->mobile_phone }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->church->name }}</li>
    <li><a href="{{ route('user.index') }}">Índice</a></li>
    <li><a href="{{ route('user.edit',$user->id) }}">Edit</a></li>
    <li>
        <form action="{{ route('user.destroy_show',$user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="X">
        </form>
    </li>
</ul>

<h4>Treinamentos como professor titular</h4>
<ul>
    @foreach($teacherMain as $teacher)
        <li>{{ $teacher->tool->title }}</li>
    @endforeach
</ul>

<h4>Treinamentos como professor auxiliar</h4>
<ul>
    @foreach($teacherAux as $teacher)
        <li>{{ $teacher->tool->title }}</li>
    @endforeach
</ul>

<h4>Treinamentos como aluno</h4>
<ul>
    @foreach($student as $event)
        <li>{{ $event->tool->title }}</li>
    @endforeach
</ul>

<h4>Funções que exerce</h4>
<ul>
    @foreach($roles as $role)
        <li>{{ $role->name }}</li>
    @endforeach
</ul>
