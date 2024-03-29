@extends('multiauth::layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card-box">
            <form action="{{ route('admin.general.store') }}" enctype="multipart/form-data" class="text-capitalize row" method="post">
                @csrf


                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->logo_sm.'') }}" height="50" class="img-shadow" alt="">
                    </div>
                    <label>Logo sm</label>
                    <input type="file" name="logo_sm" placeholder="logo_sm" class="form-control" value="{{ $general->logo_sm }}">
                </div>
                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->logo_light.'') }}" class="img-shadow" height="50" alt="">
                    </div>
                    <label>Logo light</label>
                    <input type="file" name="logo_light" placeholder="logo_light" class="form-control" value="{{ $general->logo_light }}">
                </div>
                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->logo_dark.'') }}" class="img-shadow" height="50" alt="">
                    </div>
                    <label>logo dark</label>
                    <input type="file" name="logo_dark" placeholder="logo_dark" class="form-control" value="{{ $general->logo_dark }}">
                </div>

                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->coin_args.'') }}" class="img-shadow" height="50" alt="">
                    </div>
                    <label>coin args</label>
                    <input type="file" name="coin_args" placeholder="coin_args" class="form-control" value="{{ $general->coin_args }}">
                </div>

                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->coin_gast.'') }}" class="img-shadow" height="50" alt="">
                    </div>
                    <label>coin gast</label>
                    <input type="file" name="coin_gast" placeholder="coin_gast" class="form-control" value="{{ $general->coin_gast }}">
                </div>

                <div class="form-group col-md-4">
                    <div class="text-center p-2">
                        <img src="{{ asset('img/'.$general->coin_ttg.'') }}" class="img-shadow" height="50" alt="">
                    </div>
                    <label>coin ttg</label>
                    <input type="file" name="coin_ttg" placeholder="coin_ttg" class="form-control" value="{{ $general->coin_ttg }}">
                </div>

                <div class="form-group col-md-6">
                    <label>title</label>
                    <input type="text" name="title" placeholder="title" class="form-control" value="{{ $general->title }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Social URL</label>
                    <input type="text" name="social" placeholder="Social URL" class="form-control" value="{{ $general->social }}">
                </div>
                <div class="form-group col-md-6">
                    <label>transfer tax</label>
                    <input type="text" name="transfer_tax" placeholder="transfer tax" class="form-control" value="{{ $general->transfer_tax }}">
                </div>

                <div class="form-group col-md-6">
                    <label>transfer ttg</label>
                    <input type="text" name="transfer_ttg" placeholder="transfer ttg" class="form-control" value="{{ $general->transfer_ttg }}">
                </div>

                <div class="form-group col-md-6">
                    <label>topUp tax</label>
                    <input type="text" name="topUp_tax" placeholder="topUp tax" class="form-control" value="{{ $general->topUp_tax }}">
                </div>

                <div class="form-group col-md-6">
                    <label>payout tax</label>
                    <input type="text" name="payout_tax" placeholder="payout tax" class="form-control" value="{{ $general->payout_tax }}">
                </div>

                <div class="form-group col-md-4">
                    <label>energy exchange</label>
                    <input type="text" name="energy_exchange" placeholder="energy exchange" class="form-control" value="{{ $general->energy_exchange }}">
                </div>
                <div class="form-group col-md-4">
                    <label>energy exchange coin</label>
                    <input type="text" name="energy_exchange_coin" placeholder="energy exchange coin" class="form-control" value="{{ $general->energy_exchange_coin }}">
                </div>
                <div class="form-group col-md-4">
                    <label>boost percentage</label>
                    <input type="text" name="boost_percentage" placeholder="energy exchange coin" class="form-control" value="{{ $general->boost_percentage }}">
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-primary btn-block" type="submit">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
