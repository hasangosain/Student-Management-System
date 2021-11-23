<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('css/adminhome.css')}}" rel="stylesheet">
    <link href="{{asset('css/table.css')}}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Page</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{url('/signout')}}">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/adminhome') }}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/studentadd')}}">
                  <span data-feather="users"></span>
                  Add Student
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/teacheradd')}}">
                  <span data-feather="users"></span>
                  Add Teacher
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/classadd')}}">
                  <span data-feather="home"></span>
                  Add Class
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/routineadd')}}">
                  <span data-feather="file-plus"></span>
                  Create Routine
                </a>
              </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/studentrecord')}}">
                  <span data-feather="file-text"></span>
                  Student Records
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/teacherrecord')}}">
                  <span data-feather="file-text"></span>
                  Teacher Records
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/classrecord')}}">
                  <span data-feather="file-text"></span>
                  Class Records
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/routinerecord')}}">
                  <span data-feather="file-text"></span>
                  Routine Details
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-transform:uppercase;">WELCOME Admin </h1>
          </div>
          <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <tr>
                        <th>FirstName</th>
                        <th>MiddleName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Profile_Picture</th>
                        <th colspan="2">Action</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                      <td>{{$teacher->firstname}}</td>
                      <td>{{$teacher->middlename}}</td>
                      <td>{{$teacher->lastname}}</td>
                      <td>{{$teacher->email}}</td>
                      <td>{{$teacher->password}}</td>
                      <td>
                        <img src="{{ asset('uploads/timages/' . $teacher->image) }}"
                        width="100px" height="100px" position="cover"  alt="teacher"/>
                      </td>
                      <td>
                          <a href="{{ url('/teacher/delete/') }}/{{ $teacher->tid }} ">
                            <button class="btn-delete">Delete</button>
                          </a>
                        </td>
                      <td>
                        <a href="{{ url('/teacher/update/') }}/{{ $teacher->tid }} ">
                          <button class="btn-edit">Edit</button>
                        </a>
                      </td>
                  @endforeach 
                <tbody>
            </table>
        </div>
        </main>
      </div>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
