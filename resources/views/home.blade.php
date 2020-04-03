@extends('layouts.app')

@section('content')

<b-container fluid>
    <b-row>
        <b-col></b-col>
        <b-col md="3">
            <list-contact-message></list-contact-message>
        </b-col>

        <b-col md="8" style="background: #fff;" class="mx-4">
            <message-board></message-board>
        </b-col>

        <b-col></b-col>
    </b-row>
</b-container>
@endsection
