@extends('admin-layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Messages
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td>
                                    <a href="{{ route('message.delete', ['id' => $message->id]) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
