<div class="form-row">
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer015">Date/Time RN Verified</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer025">Medication Name</label>
      <input type="text" class="form-control is-valid" id="validationServer025" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServerUsername55">Medication Type</label>
      <input type="text" class="form-control is-invalid" id="validationServerUsername55" required>
      <div class="invalid-feedback">
        Please choose a Diagnosis.
      </div>
    </div>
  </div>
  <!-- *** -->
  <div class="form-row">
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer015">Medication Time Yesterday</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer015">Medication Time Today</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer025">Medication Time Tomorrow</label>
      <input type="text" class="form-control is-valid" id="validationServer025" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>  
  <!-- *** -->
    <div class="form-row">
        <div class="col-md-12 mb-3 md-form">
            <label for="description">Description</label>
            <textarea type="text" name="description" class="form-control" required></textarea>
        </div>
    </div>
  <!-- *** -->
  <div class="form-row">
    <div class="col-md-12 mb-3 md-form">
      <label for="validationServer015">Medication Barcode</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
<!-- **************************************************** -->
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
