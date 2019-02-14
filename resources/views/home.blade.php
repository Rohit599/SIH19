@if($service == 'facebook')
<div class="title m-b-md">
    Welcome {{ $user->getName() }} ! <br> .
</div>
@endif

@if($service == 'twitter')
<div class="title m-b-md">
    Welcome {{ $user->getName() }} ! <br> 
    {{-- Your username is : {{ $details->nickname }}<br>
    Total Tweets : {{ $details->user['statuses_count']}}<br>
    Followers : {{ $details->user['followers_count']}}<br>
    Following : {{ $details->user['friends_count']}} --}}
</div>
@endif