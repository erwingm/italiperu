@extends('admin.layout')
@section('title','Contactos')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Todos Los Contactos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-responsive">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>nombre</th>
                      <th>Programa</th>
                      <th>Sede</th>
                      <th>Numero</th>
                      <th>E-mail</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                    <tr>
                      <td>{{ $contact->id}}</td>
                      <td>{{ $contact->nombre}}</td>
                      <td>{{ $contact->sede}}</td>
                      <td>{{ $contact->programa}}</td>
                      <td>{{ $contact->celular}}</td>
                      <td>{{ $contact->email}}</td>
                    </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                {{ $contacts->links() }}
                </ul>
              </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection