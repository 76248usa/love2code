<!-- Contact Section -->
<script>
function myFunction() {
    alert("Thank you for your interest. We will connect with you via email!");
}
</script>

<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="col-md-6">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Fort Worth, Texas, US</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 682-552 3338</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: 76248usa@gmail.com</p>
      <br><br><br>



{!! Form::open(['method'=>'POST', 'action'=>'ClientsController@store'])!!}

{!! csrf_field() !!} 



<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('subject', 'Subject:') !!}
  {!! Form::text('subject', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Description:') !!}
  {!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>'5']) !!}
</div>

<!-- <div class="form-group">
  {!! Form::submit('Send Message',['class'=>'btn btn-primary']) !!}
</div>  -->

<p>
    <button onclick="myFunction()" class="w3-button w3-black" type="submit">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
</p>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::close() !!}


      <!-- <form action="/action_page.php" target="_blank">
        {{ csrf_field() }}
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form> -->

    </div>

    <div class="col-md-6 w3-grayscale-min">

      <img  src="http://localhost:8888/mysite/public/images/copy1 copy.jpg">

    </div>
    
  </div>
</div>




