<form method="POST" {{$attributes}}>
    @csrf
    @method('PATCH')
    {{$slot}}
</form>
