@extends('dashboard')

{{-- @section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Create User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"
                                           required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                           required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
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
  <!-- Register -->
  <div class="register">
    <form action="{{ route('user.postUser') }}" method="POST">
        @csrf
      <div class="container-customize">
        <table
          class="table m-auto"
          style="table-layout: auto; width: auto; border: 1px solid #ccc"
        >
          <thead>
            <th colspan="2" class="text-center">Màn hình đăng ký</th>
          </thead>
          <tbody>
            <tr>
              <td>Username</td>
              <td>
                <input type="text" name="name" id="name" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>
                <input type="text" name="phone" id="phone" />
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Address</td>
              <td>
                <input type="text" name="address" id="address" />
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Mật khẩu</td>
              <td>
                <input type="text" name="password" id="password" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Nhập lại mật khẩu</td>
              <td>
                <input
                  type="text"
                  name="confirm-passwrod"
                  id="confirm-passwrod"
                />
                @if ($errors->has('confirm-passwrod'))
                    <span class="text-danger">{{ $errors->first('confirm-passwrod') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td>
                <input type="text" name="email" id="email" />
              </td>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </tr>
            <tr class="pt-4">
              <td></td>
              <td>
                <span><a href="">Đã có tài khoản</a></span>
                <button type="submit" class="btn btn-primary">Đăng ký</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <!-- Footer -->
  {{-- <footer class="border pt-2 text-center mb-1">
    <p>Lập trình web @01/2025</p>
  </footer> --}}
@endsection
