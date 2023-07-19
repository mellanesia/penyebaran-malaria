<div class="col-md-2">
    <div class="list-group">
        <a href="{{ url('dasbor') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == '') bg-success text-light @endif">
            <i class="fa-solid fa-dashboard"></i> Dasbor
        </a>
        <a href="{{ url('dasbor/distrik') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'distrik') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> Distrik
        </a>
        <a href="{{ url('dasbor/kelurahan') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'kelurahan') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> Kelurahan
        </a>
        <a href="{{ url('dasbor/rw') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'rw') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> RW
        </a>
        <a href="{{ url('dasbor/pengguna') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'pengguna') bg-success text-light @endif">
            <i class="fa-solid fa-users"></i> Pengguna
        </a>
    </div>
</div>