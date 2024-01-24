@extends('admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Our Clients
        </div>
        @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Consultation Topic</th>
                            <th>Message</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Consultation Topic</th>
                            <th>Message</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($consultations as $consultation)
                            <tr>
                                <td>{{ $consultation->name }}</td>
                                <td>{{ $consultation->phone }}</td>
                                <td>{{ $consultation->topic }}</td>
                                <td>{{ $consultation->message }}</td>
                                <td>
                                    <a href="{{ route('admin.consultations.markAsCompleted', $consultation->id) }}" class="btn btn-light" title="Completed"><i class="fa fa-hourglass"></i></a>
                                    <a href="{{ route('admin.consultations.delete', $consultation->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                                <td>{{ $consultation->status }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
