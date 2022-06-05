@extends('Layout.app') 
@section('content')

<div class="container">  
    <div id="contact">
      <h3>Colorlib Contact Form</h3>
      <h4>Contact us for custom quote</h4>
      <fieldset>
        <input placeholder="Your name" type="text" id="name" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" type="email" id="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number (optional)" type="tel" id="phone" tabindex="3" required>
      </fieldset> 
      <fieldset>
        <textarea placeholder="Type your message here...." id="message" tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <input type="file" id="image" tabindex="6">
      </fieldset>
      <fieldset> 
        <input type="submit" onclick="formData()" id="contact-submit" name="submit" class="btn btn-primary" value="Submit">
      </fieldset>
      <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
    </div>
  </div>

@endsection

