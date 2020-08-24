<center>
  <div class="custom_mail" style="background: #dff0d8; padding: 10px">
    <h2 style="padding: 20px">Welcome {{ $user->name }}</h2>
    <p>Your Order is shipped</p>
    <hr>
    
    <address>
     
      
      <p>Total amount - <strong style="color: red">{{  $data ?? 'total_price'}}</strong>  </p>
    </address>

    <p style="padding: 20px">&copy; 2018 - <a href="{{ route('home') }}">Laravel Email sending/a></p>
  </div>
</center>
