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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection  --}}
@section('content')
  <!-- List -->
  <div class="list-users">
    <form action="">
      <div class="container-customize mt-5">
        <h3 class="text-center">Danh sách User</h3>
        <table
          class="table table-bordered m-auto"
          style="table-layout: auto; width: auto"
        >
          <thead>
            <tr class="text-center">
              <th>#</th>
              <th>Username</th>
              <th>Email</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> | 
                  <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                  <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                </td>
              </tr>
        @endforeach
          </tbody>
        </table>
        <ul class="pagination justify-content-center mt-5">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>
    </form>
  </div>
  <!-- Footer -->
  {{-- <footer class="border pt-2 text-center mb-1">
    <p>Lập trình web @01/2025</p>
  </footer> --}}

@endsection
