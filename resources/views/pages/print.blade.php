@extends('layouts.print')

@section('topName')
PrEP Lists
@endsection

@section('content')
    <section class="sheet padding-10mm">
        <div class="text-center" style="padding-top:140px">
            <img src="../assets/img/file/file0.jpg" alt="" width="300px">
        </div>
    </section>
    <section class="sheet" style="padding:2mm">
        <div class="text-center">
            <img src="../assets/img/file/file2.png" alt="">
        </div>
    </section>
    <section class="sheet" style="padding:2mm">
        <div class="text-center">
            <img src="../assets/img/file/file1.png" alt="">
        </div>
    </section>
@endsection

@section('script')

@endsection

@section('style')
<style>
    @page { size: A4 }
    .sheet{
        margin:auto;
    }
</style>
@endsection
