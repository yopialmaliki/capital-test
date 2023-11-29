<div class="card">
    <div class="card-body point-page">

        <h4>
            <strong>INFORMASI POINT :</strong>
        </h4>

        <P class="mt-0">POINT : <span id="point" style="font-weight: 500">{{ number_format($point->point ?? 0) }}</span></P>
        <P class="mt-0">KONVERSI POINT : Rp. <span id="point_convert" style="font-weight: 500">{{ number_format($point->convert_amount ?? 0) }}</span></P>
        <P class="mt-0">POINT EXPIRED DATE : </P>

        <a id="input-submit" class="btn reedem" role="button" style="width: 100%;" href=" {{ route('public.point.reedem') }} ">WITHDRAW</a>

    </div>
</div>
