<h1>my name is: {{$name}}</h1>
 <h3>{{rand()}}</h3>
 <!-- random number generate karta hy rand function -->
 <h3>{{$user[3]}}</h3>

 @if($name =='maham')
 <h2>This is maham</h2>
@elseif($name =='azbiya')
<h2>This is azbiya</h2>
@else
<h2>Other user</h2>
@endif

<div>
    @for($i=1; $i<=10; $i++)
    <h4>{{$i}}</h4>
    @endfor
</div>
<div>
    @foreach($user as $user)
     <h5>{{$user}}</h5>
    @endforeach
</div>