<h2>Users display with for loop directive</h2>
@for($i=0; $i<count($users); $i++)
{{ $users[$i] }}
<br/>
@endfor


<h2>Users display with foreach loop directive</h2>
@foreach($users as $user)
{{ $user }}
<br/>
@endforeach


<h2>Users display with foreach empty loop directive</h2>
@forelse($users as $user)
{{ $user }}
<br/>
@empty
<p>List is empty</p>
@endforelse



<h2>Users display with while loop directive</h2>

@php
$i=0
@endphp
@while($i<count($users))
{{ $users[$i] }}
<br/>
@php
$i++
@endphp

@endwhile
