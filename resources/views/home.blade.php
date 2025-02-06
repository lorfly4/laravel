@extends('layouts.app')
@section('content')
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="{{ asset('image/gambar.jpg') }}"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="fUser" class="form-label">User</label>
                        <input type="text" name="fusername" value="{{old('user')}}" class="form-control form-control-md"
                            placeholder="Username" />
                    </div>
                    <div class="mb-3">
                        <label for="fPass" class="form-label">Password</label>
                        <input type="password" name="fpassword" class="form-control form-control-md"
                            placeholder="password" />
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-md">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="#!"
                            class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
