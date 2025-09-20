@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h2>Contact Us</h2>
<p>Address: Avenida Abílio Machado, 2147, Bairro Alípio de Melo</p>
<p>Phone: (31) 3474-3444</p>
<p>Email: contact@dicks-trailler.com</p>

<h3>Send us a message:</h3>
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-warning">Send</button>
</form>
@endsection
