@extends('layouts.mainheaderlayout')

@section('title','About Us')

@section('content')
<div class="container my-5">
    <h1>About Us</h1>
    <p>Autoaum Logistics is a company that specializes in the delivery of a wide range of goods, including fruits, vegetables, spices, dresses, electronics, and more. We pride ourselves on providing high-quality and reliable logistics services to our customers across the globe.</p>

        <h2>Our Mission</h2>
        <p>At Autoaum Logistics, our mission is to deliver goods to our customers quickly, efficiently, and safely. We are committed to providing the highest level of customer service and satisfaction, and we strive to exceed our customers' expectations with every delivery.</p>

        <h2>Our Services</h2>
        <ul>
            <li>Fruit and vegetable delivery</li>
            <li>Spice delivery</li>
            <li>Dress delivery</li>
            <li>Electronic delivery</li>
            <li>And much more!</li>
        </ul>

        <h2>Contact Us</h2>
        <p>If you have any questions or would like to learn more about our services, please don't hesitate to contact us. We would be happy to provide you with more information and help you get started with your delivery needs.</p>
        <a href="{{url('/contact_us')}}" class="btn btn-primary">Contact Us</a>


</div>

<!-- Include jQuery and bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
@endsection



