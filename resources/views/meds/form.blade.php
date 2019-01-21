<div class="field">
    <label class="label" for="dateTimeRNVerified">Date/Time RN Verified</label>
    <div class="control">
        <input type="text" name="dateTimeRNVerified" class="input {{$errors->has('dateTimeRNVerified') ? 'is-danger' : ''}}"
               value= @if(isset($med))"{{$med->dateTimeRNVerified}}"@else"{{old('dateTimeRNVerified')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="name">Medication Name</label>
    <div class="control">
        <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required
               value= @if(isset($med))"{{$med->name}}"@else "{{old('name')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="type">Medication Type</label>
    <div class="select">
        <select type="text" name="type" class="input {{$errors->has('type') ? 'is-danger' : ''}}" required>
            <option></option>
            <option value="Scheduled Medication" @if(isset($med)){{old('type',$med->type)=="Scheduled Medication"? 'selected':''}}@endif>Scheduled Medication</option>
            <option value="PRN Medication" @if(isset($med)){{old('type',$med->type)=="PRN Medication"? 'selected':''}}@endif>PRN Medication</option>
]
        </select>
    </div>
</div>
<div class="field">
    <label class="label" for="timeYesterday">Medication Time Yesterday</label>
    <div class="control">
        <input type="text" name="timeYesterday" class="input {{$errors->has('timeYesterday') ? 'is-danger' : ''}}"
               value= @if(isset($med))"{{$med->timeYesterday}}"@else"{{old('timeYesterday')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="timeToday">Medication Time Today</label>
    <div class="control">
        <input type="text" name="timeToday" class="input {{$errors->has('timeToday') ? 'is-danger' : ''}}"
               value= @if(isset($med))"{{$med->timeToday}}"@else"{{old('timeToday')}}"@endif>
    </div>
</div><div class="field">
    <label class="label" for="timeTomorrow">Medication Time Tomorrow</label>
    <div class="control">
        <input type="text" name="timeTomorrow" class="input {{$errors->has('timeTomorrow') ? 'is-danger' : ''}}"
               value= @if(isset($med))"{{$med->timeTomorrow}}"@else"{{old('timeTomorrow')}}"@endif>
    </div>
</div>

<div class="field">
    <label class="label" for="description">Description</label>
    <div class="control">
        <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($med)){{$med->description}}@else{{old('description')}}@endif</textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="barcode">Medication Barcode</label>
    <div class="control">
        <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
               value= @if(isset($med))"{{$med->barcode}}"@else"{{old('barcode')}}">@endif
    </div>
</div>
