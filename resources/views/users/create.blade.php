<h1> Users Create Page</h1>
<p> This is create Page </p>

<div class="row"> 
    <div class="col-6"> 
    <form action="{{ url('users')}}" method="POST">
        @csrf
        <div class="form-group">
            <labbel for="fullname" class="form-label">fullname</label>
            <input type="text" class="form-control" id="fullname" name="fullname"/>
</div>
<div class="form-group">
    <button class="btn btn-primary">Submit</button>
    </div>
</div>