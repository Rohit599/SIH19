@if (session('msg'))
    <div class="alert {{ session('class') }}">
        {{ session('msg') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        There is/are error(s) in some feild(s).
    </div>
@endif