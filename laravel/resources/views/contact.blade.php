@extends('layouts.mainheaderlayout')

@section('title','Contact Us')

@section('content')

<div class="container" style="margin-top:4em">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card">
          <div class="card-header">Contact Us</div>
          <div class="card-body">
            <form>
              <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="form-group mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer-section">
	<div class="col-md-12 text-center">
		<p class="mb-0">&copy; 2023 Autoaum Logistics. All rights reserved.</p>
	</div>
</footer>
  
@endsection



