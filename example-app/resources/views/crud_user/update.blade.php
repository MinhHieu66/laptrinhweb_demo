@extends('dashboard')

@section('content')
  <!-- Update -->
  <div class="update">
    <form action="{{ route('user.postUpdateUser') }}" method="POST">
        @csrf
        <input name="id" type="hidden" value="{{$user->id}}">
      <div class="container-customize">
        <table
          class="table m-auto"
          style="table-layout: auto; width: auto; border: 1px solid #ccc"
        >
          <thead>
            <th colspan="2" class="text-center">Màn hình cập nhật</th>
          </thead>
          <tbody>
            <tr>
              <td>Username</td>
              <td>
                <input type="text" value="{{ $user->name }}" name="name" id="name" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>
                <input type="text" value="{{ $user->phone }}" name="phone" id="phone" />
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Address</td>
              <td>
                <input type="text" value="{{ $user->address }}" name="address" id="address" />
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Mật khẩu</td>
              <td>
                <input type="text" value="" name="password" id="password" />
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
                  value=""
                  name="confirm-password"
                  id="confirm-password"
                />
                @if ($errors->has('confirm-password'))
                    <span class="text-danger">{{ $errors->first('confirm-password') }}</span>
                @endif
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td>
                <input type="text" value="{{ $user->email }}" name="email" id="email" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </td>
            </tr>
            <tr class="pt-4">
              <td></td>
              <td>
                <span><a href="">Đã có tài khoản</a></span>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
{{-- @section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"
                                           value="{{ $user->phone }}"
                                           required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                           value="{{ $user->address }}"
                                           required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
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
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection --}}
