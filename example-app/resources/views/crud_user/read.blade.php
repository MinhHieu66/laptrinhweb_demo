@extends('dashboard')

{{-- @section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection --}}
@section('content')
  <!-- View -->
  <div class="view">
      <form action="">
        <div class="container-customize">
          <table
            class="table m-auto"
            style="table-layout: auto; width: auto; border: 1px solid #ccc"
          >
            <thead>
              <th colspan="2" class="text-center">Màn hình chi tiết</th>
            </thead>
            <tbody>
              <tr>
                <td>Username</td>
                <td>
                  <input
                    type="text"
                    value="{{$messi->name}}"
                    name="name"
                    id="name"
                  />
                </td>
              </tr>
              <tr>
                <td>Email</td>
                <td>
                  <input
                    type="text"
                    value="{{$messi->email}}"
                    name="email"
                    id="email"
                  />
                </td>
              </tr>
              <tr class="pt-4">
                <td></td>
                <td class="text-right">
                  <button type="submit" class="btn btn-primary">
                    Chỉnh sửa
                  </button>
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
