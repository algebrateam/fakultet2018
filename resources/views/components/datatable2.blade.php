<div class="container-fluid">
    <table class="data-table">
        <thead>
            <tr>
                @foreach (array_keys($data->first()->toArray()) as $key)
                <th>{{$key}}</th>
                @endforeach 
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                @foreach (array_keys($data->first()->toArray()) as $key)
                <td>{{$d->$key}}</td>
                @endforeach 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@section('js')
    <script> console.log('Hi!'); </script>
          <script>
        $(document).ready(function () {
            $('.data-table').dataTable({
        "paging":   true,
        "ordering": false,
        "info":     false
    });
        });
    </script>  
@stop
