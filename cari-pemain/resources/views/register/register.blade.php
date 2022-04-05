@extends('partials.navbar')

@section('content')
<div class = "row justify-content-center">
    <div class = "col-md-4">
        <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form>
            <div class="form-floating mt-5 mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Pelatih</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Asisten Pelatih</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Pemain</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Orang Tua</label>
                </div>
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mt-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Register</button>
        </form>
        </main>
    </div>
</div>
@endsection