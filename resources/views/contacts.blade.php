@extends ('layouts.main')

@section ('container')
    <div clas="title-top mb-5">
        <h2 class="fw-bold">sugesstion</h2>
    </div>
    <form method="post" action="{{route('contacts.store')}}">
        {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placehorder="Nama" name="nama">
        <label for="text" class="form-label">Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputemail" placehorder="Email" name="email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingTextarea2" placehorder="Tinggalkan pesan disini!" name="pesan"></textarea>
        <label for="floatingTextarea2">sugesstion</label>
    </div>
    <button type="submit" class="btn btn-danger">send</button>
    </form>

@endsection