<div class="mainSection_card d-none d-sm-block">
    <div class="row">
        <div class="col-md-3">
            <!-- <div class="text-nowrap">{{ __('department.department-name') }}: </div> -->
            <div class="text-nowrap">Giáo viên: {{ session('name') }}</div>

        </div>
    </div>
</div>

{{-- Date Time Picker --}}
<div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden d-none d-sm-block">
    <input class="form-control" type="text" readonly value="{{ now()->timezone('Asia/Ho_Chi_Minh')->format('H:m - d/m/Y') }}"/>
</div>