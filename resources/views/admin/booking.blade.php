@extends('admin-layout')
@section('content')

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Bookings
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
                            <th>Service</th>
                            <th>Paid</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                            <th>Action Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Paid</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                            <th>Action Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->services }}</td>
                                <td>
                                    <a href="{{ route('booking.markAsFullyPaid', ['id' => $booking->id]) }}" class="btn btn-light" title="Fully Paid"><i class="fa fa-credit-card"></i></a>
                                    <a href="{{ route('booking.markAsPaidDeposit', ['id' => $booking->id]) }}" class="btn btn-light" title="Paid Deposit"><i class="fa fa-hourglass-start"></i></a>
                                </td>   
                                <td>{{ $booking->paid_status }}</td>   
                                <td>
                                    <a href="{{ route('booking.markAsCompleted', ['id' => $booking->id]) }}" class="btn btn-light" title="Completed"><i class="fa fa-hourglass"></i></a>
                                    <a href="{{ route('booking.markAsInProgress', ['id' => $booking->id]) }}" class="btn btn-light" title="In Progress"><i class="fa fa-spinner"></i></a>
                                    <a href="{{ route('booking.cancelService', ['id' => $booking->id]) }}" class="btn btn-outline-dark" title="Cancel Service"><i class="fa fa-times"></i></a>
                                    <a href="{{ route('booking.delete', ['id' => $booking->id]) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>       
                                <td>{{ $booking->action_status }}</td>                    
                             </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
