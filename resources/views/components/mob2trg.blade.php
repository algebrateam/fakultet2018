<div class="alert alert-danger">
    Ispis iz komponente mob2trg<br>
    <div class="alert-title">{{ $m->producer }}</div>
    <ol>
    @foreach ($m->trgovine()->get() as $t)
        <li><a href='{{url("/trgovine/{$t->id}")}}'> {{$t->name}}</a> 
        <i class="fas fa-arrow-circle-right"></i>
        </li>
     @endforeach
    </ol>
</div>