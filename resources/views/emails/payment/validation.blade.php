@component('mail::message')
    Please Check Your account to verify the payment below:<br>
    <h3>Application no:</h3> {{ $data['application_id'] }} <br>
    <h3>Depositor's Name:</h3> {{ $data['name'] }} <br>
    <h3>Teller no / Reference ID:</h3> {{ $data['reference'] }} <br>
    <h3>Account no paid to:</h3> {{ $data['account'] }} <br>
    <h3>Amount paid:</h3> {{ $data['amount'] }} <br>
    <h3>Phone no:</h3> {{ $data['phone'] }} <br>
    @component('mail::button', ['url' => ''])
        Login to Approve
    @endcomponent

    Thanks,<br>
    Omisteck Design
@endcomponent
