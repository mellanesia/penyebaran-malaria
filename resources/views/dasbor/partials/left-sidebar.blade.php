<div class="col-md-2">
    <div class="list-group shadow">
        <a href="{{ url('dasbor') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == '') bg-success text-light @endif">
            <i class="fa-solid fa-dashboard"></i> Dasbor
        </a>
        <a href="{{ url('dasbor/distrik') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'distrik') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> Distrik 
            <span class="float-end badge bg-secondary rounded-circle">{{ $distrik }}</span>
        </a>
        <a href="{{ url('dasbor/kelurahan') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'kelurahan') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> Kelurahan
            <span class="float-end badge bg-secondary rounded-circle">{{ $kelurahan }}</span>
        </a>
        <a href="{{ url('dasbor/rw') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'rw') bg-success text-light @endif">
            <i class="fa-solid fa-table"></i> RW
            <span class="float-end badge bg-secondary rounded-circle">{{ $rw }}</span>
        </a>
    </div>
</div>
