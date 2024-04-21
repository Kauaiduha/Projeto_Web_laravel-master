@section('content')

<h2>Cursos</h2>


<ul>
@foreach($cursos as $curso)
    <li>{{ $curso->nome }} | <a href="{{ route('cursos.edit', ['curso' => $curso->id]) }}">Edit</a></li>
@endforeach

</ul>