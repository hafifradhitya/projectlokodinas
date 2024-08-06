@extends('administrator.dashboard')

@section('content')

<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Identitas Website</h3>
  </div>
  <div class="table-responsive py-4">
    <table class="table table-bordered" id="datatable-buttons">
      <tbody>
        <tr>
          <th>Nama Website</th>
          <td>nama_website</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>Accountant</td>
        </tr>
        <tr>
          <th>Domain</th>
          <td>Junior Technical Author</td>
        </tr>
        <tr>
          <th>Soisal Media</th>
          <td>Senior Javascript Developer</td>
        </tr>
        <tr>
          <th>No Rekening</th>
          <td>Accountant</td>
        </tr>
        <tr>
          <th>No Telpon</th>
          <td>Integration Specialist</td>
        </tr>
        <tr>
          <th>Meta Deskripsi</th>
          <td>Integration Specialist</td>
        </tr>
        <tr>
          <th>Meta Keyword</th>
          <td>Integration Specialist</td>
        </tr>
        <tr>
          <th>Google Maps</th>
          <td>Integration Specialist</td>
        </tr>
        <tr>
          <th>Favicon</th>
          <td>Integration Specialist</td>
        </tr>
      </tbody>
    </table>
    <br>
    <div class='box-footer'>
      <button type='submit' name='submit' class='btn btn-info'>Update</button>
      <a href="{{ url('administrator/dashboard')}}"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
    </div>
  </div>
</div>

@endsection