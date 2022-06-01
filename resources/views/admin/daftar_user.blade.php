@extends('admin.template.main')
@section('script_atas')
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    {{-- <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari .... " aria-label="Cari"
                                aria-describedby="Cari">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </form> --}}
                    <div class="basic-form float-right">

                        <form class="form-inline" action="{{ route('daftar_user') }}">
                            <a href="{{ route('tambah_user') }}" class="btn btn-primary form-inline mb-2">Tambah Akun</a>
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" placeholder="Cari .... " name="cari"
                                    value="{{ request('cari') }}">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-xs mb-0">
                    <thead>
                        <tr>
                            <td>User</td>
                            <td>Email</td>
                            <td>Kedudukan</td>
                            <td>Dibuat</td>
                            <td>Verifikasi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_user as $users)
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            @if ($users->photo_profile)
                                                <img src="{{ asset($users->photo_profile) }}" class=" rounded-circle mr-3"
                                                    alt="" style="width: 40px">
                                            @else
                                                <img src="{{ asset('profile_image/default.png') }}"
                                                    class=" rounded-circle mr-3" alt="" style="width: 40px">
                                            @endif
                                        </div>
                                        <div class="col">
                                            {{ $users->name }}
                                        </div>
                                    </div>

                                    
                                </td>
                                <td>{{ $users->email }}</td>
                                <td>
                                    <span @if ($users->roles[0]->name == 'admin') class="badge badge-primary" @endif @if ($users->roles[0]->name == 'guru') class="badge
                                        badge-success"
                        @endif
                        @if ($users->roles[0]->name == 'siswa') class="badge badge-warning"
                        @endif>
                        {{ $users->roles[0]->name }}
                        </span>

                        </td>
                        <td>{{ $users->created_at->diffForHumans() }}</td>
                        <td>
                            @if ($users->email_verified_at != null)
                                <i class="fa fa-check text-primary"></i>
                            @else
                                <i class="fa fa-times text-danger"></i>
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col mt-2">
                                    <form action="{{ route('akun_verifikasi') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $users->id }}" name="id">
                                        <button type="submit" class="btn btn-success">Verifikasi</button>
                                    </form>
                                </div>
                                <div class="col mt-2">
                                    <a href="{{ route('edit_user', $users->id) }}" class="btn btn-primary">Edit</a>
                                </div>
                                <div class="col mt-2">
                                    {{-- <a href="{{ route('delete_acount') }}" onclick="nanya(event)"
                                                class="btn btn-danger">Hapus</a> --}}
                                    <form action="{{ route('delete_acount') }}" method="POST"
                                        onsubmit="return submission(this)">
                                        @csrf
                                        <input type="hidden" value="{{ $users->id }}" name="id">
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                            {{-- <form action="">
                                        <input type="hidden" value="{{$users->id}}">
                                        <button type="submit" class="btn btn-success">Verifikasi</button>
                                    </form>
                                    <a href="{{ route('edit_user', $users->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('dashboard_admin') }}" onclick="nanya(event)"
                                        class="btn btn-danger">Hapus</a> --}}
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $data_user->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
