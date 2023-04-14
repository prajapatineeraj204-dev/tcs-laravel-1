@extends('layouts.admin')

@section('content')
  <div class="container-fluid py-6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0 d-flex justify-content-between">
              <h3 class="mb-0">USERS</h3>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                Add User    
                </button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                   
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLongTitle">Add User</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="{{ route('adduser') }}">
                           @csrf
                          <div class="mb-3">
                                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name">

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                          <div class="mb-3">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                           <div class="mb-3">
                              <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter phone">

                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                          <div class="mb-3">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">

                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                          </div>
                          <div class="mb-3">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                              <label for="role">Add Role</label>
                              <select class="form-select" name="role">
                                <option>Choose Role</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>
                              </select>
                            </div>
                          </div>
                          <div class="text-center">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Create') }}
                               </button>
                          </div>
                        </form>
                      </div>                     
                    </div>
                  </div>
                </div>
            </div>
            <!-- Light table -->
             <div class="card-body table-responsive">
                  <table id="userdetails" class="table table-striped" style="width:100%">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="email">Email</th>
                        <th scope="col" class="sort" data-sort="purchaeses">Phone</th>
                        <th scope="col" class="sort" data-sort="purchaeses">Role</th>
                        <th scope="col" class="sort" data-sort="last-seen">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                      @if(isset($userlist)) 
                      @foreach($userlist as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                          {{($user->role)==1?"Super Admin":""}}
                          {{($user->role)==2?"Admin":""}}
                          {{($user->role)==3?"User":""}}
                        </td>
                        <td>
                          <a href="" class="me-2 btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                          </a>
                          <a href="{{ route('userdelete',base64_encode($user->id)) }}"  class="btn btn-danger me-2 btn-sm"><i class="fas fa-trash"></i>
                          </a>
                          <!-- <a href="javascript:void(0)" data-token="{{ csrf_token() }}" onClick="deleteuser('{{ $user->id }}')" class="btn btn-danger me-2 btn-sm"><i  class="fas fa-trash"></i>
                          </a> -->

                          <a href="{{ route('useredit',base64_encode($user->id)) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                          </a>
                        </td>                   
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
          </div>
        </div>
      </div>
  </div>
@endsection

<script type="text/javascript">

  // function deleteuser(id) {
  //    $.ajaxSetup({
  //         headers: {
  //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //         }
  //    });
  //   $.ajax({
  //     type: "POST",
  //     url: '/admin/userdelete/',
  //     data: { id: id }
  //   }).done(function( response ) {

  //   });
  // }
</script>