<center>
  <div class="custom_mail" style="background: #dff0d8; padding: 10px">
    <h2 style="padding: 20px">Welcome {{ $user->name }}</h2>
    <p>We've receiving your confirmation of a order</p>
    <hr>
    <h3>You've given the following things - </h3>
    <address>
     
      <p>Phone Number - {{ $order->phone_number }}</p>
      <p>Total amount - <strong style="color: red">{{ $order->total_price }}</strong>  </p>
    </address>

    <p style="padding: 20px">&copy; 2018 - <a href="{{ route('home') }}">Laravel Email sending/a></p>
  </div>
</center>
