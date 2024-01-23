<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Models\Client;
use App\Models\Message;


use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking', compact('bookings'));
    }

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->name = $request->input('user_name');
        $booking->email = $request->input('address');
        $booking->phone = $request->input('phone');
        $booking->event = $request->input('event');
        $booking->services = $request->input('selectedServices');
        $booking->subject = $request->input('subject');
        $booking->message = $request->input('message');
        $booking->action_status = 'Not Yet'; 
        $booking->paid_status = 'Not Paid'; 
        $booking->save();

        // Save client details to clients table
        $client = new Client();
        $client->name = $request->input('user_name');
        $client->email = $request->input('address');
        $client->phone = $request->input('phone');
        $client->save();

        $message = new Message();
        $message->name = $request->input('user_name');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();


        // Send email notification to the admin
        $adminEmail = 'wedco212@gmail.com';
        $adminSubject = 'New Booking';
        $adminMessage = "A new booking has been submitted. Check the admin panel for details.";
        
        Mail::raw($adminMessage, function ($mail) use ($adminEmail, $adminSubject) {
            $mail->to($adminEmail)->subject($adminSubject);
        });

        // Send email confirmation to the user
        $userSubject = "Love in the inbox! We're ready to chat about your wedding . Let's make it magical!✨";
        $userMessage = "Hey {$request->input('user_name')},\n\nThank you for choosing Wedco to be a part of your wedding journey! We've received your message/booking and will be in touch shortly to discuss your vision and make your wedding planning a breeze.\n\nYours sincerely, \n The Wedco Team";

        Mail::raw($userMessage, function ($mail) use ($request, $userSubject) {
            $mail->to($request->input('address'))->subject($userSubject);
        });


        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }

    public function markAsFullyPaid($id)
    {
        // Logic to mark booking as fully paid
        $booking = Booking::find($id);
        $booking->paid_status = 'Fully Paid';
        $booking->save();

            // Send email notification to the user
            $booking = Booking::find($id);
            $userSubject = '💲Champagne corks popping! Your dream wedding is paid for!💸';

            // Append the selected services to the user message
            $selectedServices = $booking->services;
            $userMessage = "Hey {$booking->name},\n\n Paid in full, love sealed!  Your wedding dream is taking flight! ✨ Next steps & call coming soon. Can't wait to chat!\nQuestions? We're just a message away! Your happily ever after starts now!
            \n\nSelected Services: {$selectedServices}\n\nThe Wedco Team.";

            Mail::raw($userMessage, function ($mail) use ($booking, $userSubject) {
                $mail->to($booking->email)->subject($userSubject);
            });

        return redirect()->back()->with('success', 'Booking marked as fully paid!');
    }

    public function markAsPaidDeposit($id)
    {
        // Logic to mark booking as paid deposit
        $booking = Booking::find($id);
        $booking->paid_status = 'Paid Deposit';
        $booking->save();

            // Send email notification to the user
            $userSubject = "Let's plan your epic love story! Deposit down, wedding dreams on! ✈️";
            $userMessage = "Hey {$booking->name}, \n\nHold onto your hats! Deposit received, and your epic love story is ready for takeoff! ✨ Buckle up for a call soon where we'll chat vision, preferences, and make your dream wedding soar. Info about next steps coming your way too! Don't hesitate to reach out - we're here to make your journey smooth as a cloud. Happy planning!
            \n\nSelected Services: {$booking->services}\n\nCheers🥂,\nThe Wedco Team.";

            Mail::raw($userMessage, function ($mail) use ($booking, $userSubject) {
                $mail->to($booking->email)->subject($userSubject);
            });

        return redirect()->back()->with('success', 'Booking marked as paid deposit!');
    }

    public function markAsCompleted($id)
    {
        // Logic to mark booking as completed
        $booking = Booking::find($id);
        $booking->action_status = 'Successfully Completed';
        $booking->save();


            // Send email notification to the user
            $userSubject = 'We did it! Your wedding was a masterpiece. Thank you!';
            $userMessage = "Dear {$booking->name},\n\n Drumroll please! Your wedding was a masterpiece, and we're still swooning over every detail! It was an honor to be a part of your love story and witness your happily ever after unfold. ✨
            Whether it was the tears of joy during your vows, the laughter on the dance floor, or the twinkle in your eyes as you said I do, we captured it all!\nBut your happily ever after doesn't end here! We're always here to celebrate your love story. Share your favorite wedding moments with us on social media, tag us in your photos, and keep the magic alive!
            From the bottom of our hearts, thank you for trusting us with your special day. It was an absolute joy to be a part of your love story!
            \n\nSelected Services: {$booking->services}\n\nWishing you a lifetime of laughter, love, and happily ever after!
            \n\nCheers🥂,\nThe Wedco Team.";
        
            Mail::raw($userMessage, function ($mail) use ($booking, $userSubject) {
                $mail->to($booking->email)->subject($userSubject);
            });

        return redirect()->back()->with('success', 'Booking marked as a success!');
    }

    public function markAsInProgress($id)
    {
        // Logic to mark booking as in progress
        $booking = Booking::find($id);
        $booking->action_status = 'In Progress';
        $booking->save();

            // Send email notification to the user
            $userSubject = 'Happily ever after in progress! Your wedding magic is unfolding.';
            $userMessage = "Dear {$booking->name}, \n\nJust a quick update to let you know your wedding planning is in full swing and your dream day is getting closer every second! We're thrilled with the progress we've made so far, and we can't wait to share all the exciting developments with you.
            \nRemember, we're here every step of the way to answer your questions, address your concerns, and make sure your wedding planning journey is as smooth and stress-free as possible. Don't hesitate to reach out if you need anything at all!
            \n\nSelected Services: {$booking->services}\n\nWe can't wait to see your love story unfold in all its magical glory!
            \n\nWarmly,\nThe Wedco Team.";

            Mail::raw($userMessage, function ($mail) use ($booking, $userSubject) {
                $mail->to($booking->email)->subject($userSubject);
            });

        return redirect()->back()->with('success', 'Booking marked as in progress!');
    }

    public function cancelService($id)
    {
        // Logic to cancel service
        $booking = Booking::find($id);
        $booking->action_status = 'Cancelled';
        $booking->save();

                // Send email notification to the user
                $booking = Booking::find($id);
                $userSubject = 'We understand - A change in plans for your wedding.';
                $userMessage = "Hey {$booking->name}, \n\nWe understand your wedding plans have changed, and we're here for you. Your love story matters, and we respect your decision completely. If you need support, questions answered, or just someone to listen, please don't hesitate to reach out. We wish you all the best, always.
                \n\nSelected Services: {$booking->services}\n\nWarmly,\nThe Wedco Team.";
        
                Mail::raw($userMessage, function ($mail) use ($booking, $userSubject) {
                    $mail->to($booking->email)->subject($userSubject);
                });

        return redirect()->back()->with('success', 'Service cancelled!');
    }

    public function delete($id)
    {
        // Logic to delete booking
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully!');
    }
}

