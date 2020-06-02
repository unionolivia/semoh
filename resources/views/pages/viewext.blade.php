<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Extension List')

@section('content')

<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">GLT Extensions</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p class="card-text">Global List of GLT Extenions.</p>
                </div>
                <div class="table-responsive">
                  @if(  count($extensions) > 0 )
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Extension ID</th>                                
                                <th scope="col">Extension Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">SMR</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Action</th>
                                <th scope="col"></th>
                            </tr>
                      </thead>
                      <tbody>
                        @foreach ($extensions as $extension)
                        <tr>
                          <th scope="row">{{ $extension->id }}</th>
                          <td><a href="/showext/{{ $extension->id }}">{{ $extension->extname }}</a></td>
                          <td>{{ $extension->extlocation }}</td>
                          <td>{{ $extension->extsmr }}</td>
                          <td>{{ $extension->extemail }}</td>
                          <td>{{ $extension->extemail }}</td>
                          <td>
                             <a href="{{ route('pages.editext', ['id' => $extension->id])}}" class="btn btn-primary mt-2">Edit</a>
                          </td>
                          <td>
                              <form method="POST" action="/addexts/{{ $extension->id }}">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger mt-2 float-right">DELETE</button>
                               </form>
                          </td>
                        </tr>
                        @endforeach                                                     
                      </tbody>
                    </table>
                    @else 

                    <p> No Extension found </p>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Description -->
@endsection
