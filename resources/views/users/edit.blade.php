<h1> USERS EDIT PAGE</h1>
<p> This is edit Page with id {{ $id }} </p>

<div class="row"> 
    <div class="col-6"> 
    <form action="{{ url('users'), $id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fullname" class="form-label">fullname</label>
            <input type="text" class="form-control" id="fullname" name="fullname"/>
</div>
<div class="form-group">
    <button class="btn btn-primary">Submit</button>
    </div>
    </form>
   </div>
</div>

    <form action="{{ url('users', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Delete</button>
</div>
</form>