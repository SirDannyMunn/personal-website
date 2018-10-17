<h1>New {{ucfirst($data->type)}} Enquiry</h1>
<hr>
<h2>{{$data->name}}</h2>
<h2>{{$data->email}}</h2>
<p>{{$data->message}}</p>

@if(isset($data->feedback))
    <h5>You have been left some feedback"</h5>
    <p>{{$data->feedback}}</p>
@endif|