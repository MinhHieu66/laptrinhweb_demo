@extends('dashboard')

{{-- @section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection --}}


@section('content')
  <div class="login">
    <div class="container">
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
        <table
          class="table m-auto"
          style="table-layout: auto; width: auto; border: 1px solid #ccc"
        >
          <thead>
            <th colspan="2" class="text-center">Màn hình đăng nhập</th>
          </thead>
          <tbody>
            <tr>
              <td>Username</td>
              <td>
                <input type="text" name="name" id="name" placeholder="Name"/>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Mật khẩu</td>
              <td>
                <input type="text" name="password" id="password" placeholder="Password"/>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="checkbox" /> Ghi nhớ mật khẩu</td>
            </tr>
            <tr class="pt-4">
              <td></td>
              <td>
                <span><a href="">Quên mật khẩu</a></span>
                <button type="submit" class="btn btn-primary">
                  Đăng nhập
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <!-- Footer -->
  {{-- <footer class="border pt-2 text-center mb-1">
    <p>Lập trình web @01/2025</p>
  </footer> --}}
@endsection 