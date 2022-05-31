@extends('admin.template.main')
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="text-primary font-weight-bold">Edit data {{ $data_user->name }}</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $data_user->name }}" placeholder="Nama" id="name"
                            name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $data_user->email }}" placeholder="Email"
                            id="email" name="email">
                    </div>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Kirim</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>

            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="text-primary font-weight-bold">Reset Password</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" value="{{ $data_user->id }}">
                <div class="form-group">
                    <span class="form-text text-muted">Akun {{ $data_user->name }} akan di reset <span
                            class="font-italic ">(<span class="text-primary">password</span> akan disamakan dengan <span
                                class="text-danger">alamat email</span> )</span> </span>
                </div>
                <button type="submit" class="btn btn-danger">Reset Password</button>
            </form>
        </div>
    </div>
@endsection
