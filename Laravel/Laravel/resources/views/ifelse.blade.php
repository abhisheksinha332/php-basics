@php
$c = count($users)

@endphp

@if($c==1)
<h3>The total number of user is 1</h3>
@elseif($c>1)
<h3>The total number of users is greater than 1</h3>
@else
<h3>User list is empty</h3>
@endif


<h3>
@isset($users)
Users Exist
@endisset
</h3>
