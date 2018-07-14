@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Active</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($links as $link)
                      <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->name }}</td>
                        <td>{{ $link->active }}</td>
                        <td><a href="">Edit</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="4">
                          {{ $links->links() }}
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  <!-- <ul>
                  @foreach ($links as $link)
                      <li>{{ $link->name }}</li>
                  @endforeach
                  </ul>
                  {{ $links->links() }}
                -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
