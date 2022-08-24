@extends('layout.main')



@section('content')

<div class="page-heading">
    <h3>Bridge List</h3>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                Bridge
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <input type="date" class="form-control" name="date">
                        <tr>
                            <td>1</td>
                            <td>Generate Data Siswa</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione, quas?</td>
                            <td>
                              <a href="#" class="btn icon icon-left btn-success"><i class="bi bi-list"></i>
                              Generate</a>
                              {{-- /generate_siswa --}}
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Generate Data KIKPPC</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione, quas?</td>
                            <td>
                              <a href="{{ url('/dbf_wokikppc') }}" class="btn icon icon-left btn-success"><i class="bi bi-list"></i>
                              Generate</a>
                            </td>
                        </tr>
                      
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endpush
