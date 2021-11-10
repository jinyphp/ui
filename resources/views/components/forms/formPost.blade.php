<form method="POST" {{$attributes}}>
    @csrf
    {{$slot}}
</form>
