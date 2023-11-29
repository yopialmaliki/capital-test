@extends('front-end._layout', [
    'pageTitle' => 'Profile'
])


@push('head')

<style>

.profile-page {
    min-height: 250px;
    margin: 20px 0;
}

/* .point-page {
    min-height: 285px;
    margin: 80px 0;
} */

</style>
@endpush


@section('content')
<div class="container-fluid">
    <div class="row g-3 justify-content-center" style="padding: 10px 0">

        <div class="col-md-8">
            {{-- <div class="card"> --}}
                {{-- <div class="card-body profile-page"> --}}
                    <div class="container mb-5">
                        <div class="row">

                            <h2 class="fs-4 mb-4 pb-0">
                                Welcome <strong>{{ Auth::user()->name }}</strong>
                            </h2> </br>
    
        
                            <div class="row">
        
                                <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control " name="nama" value="{{ $member->name }}" readonly>
                                </div>
                                </div>
        
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                    <label for="no_ktp">No KTP</label>
                                        <input type="text" class="form-control " name="no_ktp" value="{{ $member->identity_number }}" readonly>
                                    </div>
                                </div>
        
                            </div>
                            
                            <div class="row">
        
                                <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id='jenis_kelamin' name='jenis_kelamin' class='form-control chosen jenis_kelamin' disabled>;
                                    <option value='male' {{ $member->gender == 'male' ? 'selected': '' }} > Laki-Laki </option>;
                                    <option value='female' {{ $member->gender == 'female' ? 'selected' : '' }} > Perempuan </option>;
                                    </select>
                                </div>
                                </div>
                                
                                <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="number" class="form-control " name="no_hp" value="{{ $member->phone_number }}" readonly>
                                </div>
                                </div>
        
                            </div>
        
                            <div class="row">
        
                                <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control " name="email" value="{{ $member->email }}" readonly>
                                </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="kota">Kota</label>
                                    <input type="text" class="form-control " name="city" value="{{ $member->city }}" readonly>
                                </div>
                                </div>
        
                            </div>
                            
                            <div class="row">
        
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kode_refferal">Kode Referal</label>
                                    <input type="text" class="form-control " name="kode_refferal" value="{{ $member->refferal_code }}" readonly>
                                </div>
                                </div>
        
                            </div>

                        </div>
                    </div>
                {{-- </div> --}}
            {{-- </div> --}}
        </div>

         <div class="col-md-4">

            @include('front-end.inc.point-page')

        </div>

    </div>
</div>

@endsection
