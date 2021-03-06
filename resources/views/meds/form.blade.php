    <div class="form-row text-left">
        <label for="dateTimeRNVerified" class="col-md-6">Date/Time RN Verified</label>
        <div class="col-md-6">
            <input type="text" name="dateTimeRNVerified" class="input {{$errors->has('dateTimeRNVerified') ? 'is-danger' : ''}}"
            value= @if(isset($med))"{{$med->dateTimeRNVerified}}"@else"{{old('dateTimeRNVerified')}}"@endif>
        </div>
        <label for="name" class="col-md-6">Medication Name</label>
        <div class="col-md-6">
            <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required
                value= @if(isset($med))"{{$med->name}}"@else "{{old('name')}}"@endif>
        </div>
    </div>
    <div class="form-row text-left">
        <label for="name" class="col-md-6">Medication Type</label>
        <div class="col-md-6">
            <div class="select">
                <select type="text" name="type" class="input {{$errors->has('type') ? 'is-danger' : ''}}" required>
                    <option></option>
                    <option value="Scheduled Medication" @if(isset($med)){{old('type',$med->type)=="Scheduled Medication"? 'selected':''}}@endif>Scheduled Medication</option>
                    <option value="PRN Medication" @if(isset($med)){{old('type',$med->type)=="PRN Medication"? 'selected':''}}@endif>PRN Medication</option>
                </select>
            </div>
        </div>
        <label for="timeYesterday" class="col-md-6">Medication Time Yesterday</label>
        <div class="col-md-6">
            <input type="text" name="timeYesterday" class="input {{$errors->has('timeYesterday') ? 'is-danger' : ''}}"
                value= @if(isset($med))"{{$med->timeYesterday}}"@else"{{old('timeYesterday')}}"@endif>
        </div>
    </div>
    <div class="form-row text-left">
        <label for="timeToday" class="col-md-6">Medication Time Today</label>
        <div class="col-md-6">
            <input type="text" name="timeToday" class="input {{$errors->has('timeToday') ? 'is-danger' : ''}}"
                value= @if(isset($med))"{{$med->timeToday}}"@else"{{old('timeToday')}}"@endif>
        </div>
            <label for="timeTomorrow" class="col-md-6">Medication Time Tomorrow</label>
        <div class="col-md-6">
        <input type="text" name="timeTomorrow" class="input {{$errors->has('timeTomorrow') ? 'is-danger' : ''}}"
                value= @if(isset($med))"{{$med->timeTomorrow}}"@else"{{old('timeTomorrow')}}"@endif>
        </div>
    </div>
    <div class="form-row text-left">
        <div class="form-group col-md-12">
            <label for="description">Description</label>
            <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($med)){{$med->description}}@else{{old('description')}}@endif</textarea>
        </div>
    </div>
    <div class="form-row text-left">
    <label for="barcode" class="col-md-6">Medication Barcode</label>
        <div class="form-group col-md-6">
            <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
                value= @if(isset($med))"{{$med->barcode}}"@else"{{old('barcode')}}">@endif
    </div>
    </div>

