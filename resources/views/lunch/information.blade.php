{{csrf_field()}}

@foreach($data as $information)
    {{$information->Information}}
@endforeach