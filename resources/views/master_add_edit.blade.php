@extends('common_template')
@section('content')
<section class="pc-container">
    <div class="pcoded-content">
        <form id="save_master" action="javascript:void(0)">
            <x-master-components :page="$page"/>
        </form>
    </div>
</section>
@endsection