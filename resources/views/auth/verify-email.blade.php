<h1>Email Verification Mail</h1>
Please verify your email with bellow link:
<form action="{{ route('verification.send') }}" method="post">
    @csrf
    <p>برای ادامه پست الکترونیک خود را تایید کنید</p>
    {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
    <button type="submit">ارسال</button>
</form>