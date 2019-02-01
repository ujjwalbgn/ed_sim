<form>
<div class="form-row">
    <div class="col-md-12 mb-3 md-form">
      <label for="validationServer015">Patient Name</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
  <div class="form-row">
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer025">Simulation Level</label>
      <input type="text" class="form-control is-valid" id="validationServer025" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServerUsername55">Diagnosis</label>
      <input type="text" class="form-control is-invalid" id="validationServerUsername55" required>
      <div class="invalid-feedback">
        Please choose a Diagnosis.
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer015">Provider</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <!-- *** -->
  <div class="form-row">
    <div class="col-md-6 mb-3 md-form">
      <label for="validationServer015">Allergies</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3 md-form">
      <label for="validationServer025">Sensitivity</label>
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
    <div class="col-md-2 mb-3 md-form">
      <label for="validationServerUsername55">Age</label>
      <input type="text" class="form-control is-invalid" id="validationServerUsername55" required>
      <div class="invalid-feedback">
        Please choose a age.
      </div>
    </div>
    <div class="col-md-2 mb-3 md-form">
      <label for="validationServer015">Gender</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3 md-form">
      <label for="validationServer025">Date of Birth</label>
      <input type="text" class="form-control is-valid" id="validationServer025" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-2 mb-3 md-form">
      <label for="validationServer025">Height</label>
      <input type="text" class="form-control is-valid" id="validationServer025" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-2 mb-3 md-form text-center">
      <label for="validationServerUsername55">Weight</label>
      <input type="text" class="form-control is-invalid" id="validationServerUsername55" required>
      <div class="invalid-feedback">
        Please choose a Weight.
      </div>
    </div>
  </div>
  <!-- *** -->
  <div class="form-row">
    <div class="col-md-12 mb-3 md-form">
      <label for="validationServer015">MR# (Barcode)</label>
      <input type="text" class="form-control is-valid" id="validationServer015" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <!-- <div class="form-row">
    <div class="col-md-6 mb-3 md-form">
      <label for="validationServer035">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer035" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3 md-form">
      <label for="validationServer045">State</label>
      <input type="text" class="form-control is-invalid" id="validationServer045" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3 md-form">
      <label for="validationServer055">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer055" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check pl-0 md-form m-0">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck35" required>
      <label class="form-check-label" for="invalidCheck35">
        Agree to terms and conditions
      </label>
    </div>
    <div class="invalid-feedback mt-3 ml-4">
      You must agree before submitting.
    </div>
  </div> -->
  <button class="btn btn-info" type="submit">Submit form</button>
  <button class="btn btn-danger" type="button">Cancel</button>
</form>
<!-- **************************************************** -->
<div class="field">
    <label class="label" for="name">Patient Name</label>
    <div class="control">
        <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->name}}"@else "{{old('name')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="level">Simulation Level</label>
    <div class="control">
        <input type="text" name="level" class="input {{$errors->has('level') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->level}}"@else"{{old('level')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="diagnosis">Diagnosis</label>
    <div class="control">
        <input type="text" name="diagnosis" class="input {{$errors->has('diagnosis') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->diagnosis}}"@else"{{old('diagnosis')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="provider">Provider</label>
    <div class="control">
        <input type="text" name="provider" class="input {{$errors->has('provider') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->provider}}"@else"{{old('provider')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="dob">Date of Birth</label>
    <div class="control">
        <input type="text" name="dob" class="input {{$errors->has('dob') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->dob}}"@else"{{old('dob')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="age">Age</label>
    <div class="control">
        <input type="text" name="age" class="input {{$errors->has('age') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->age}}"@else"{{old('age')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="gender">Gender</label>
    <div class="control">
        <input type="text" name="gender" class="input {{$errors->has('gender') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->gender}}"@else"{{old('gender')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="height">Height</label>
    <div class="control">
        <input type="text" name="height" class="input {{$errors->has('height') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->height}}"@else"{{old('height')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="weight">Weight</label>
    <div class="control">
        <input type="text" name="weight" class="input {{$errors->has('weight') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->weight}}"@else"{{old('weight')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="allergies">Allergies</label>
    <div class="control">
        <input type="text" name="allergies" class="input {{$errors->has('allergies') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->allergies}}"@else"{{old('allergies')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="sensitivity">Sensitivity</label>
    <div class="control">
        <input type="text" name="sensitivity" class="input {{$errors->has('sensitivity') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->sensitivity}}"@else"{{old('sensitivity')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="description">Description</label>
    <div class="control">
        <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($patient)){{$patient->description}}@else{{old('description')}}@endif</textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="barcode">MR# (Barcode)</label>
    <div class="control">
        <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->barcode}}"@else"{{old('barcode')}}">@endif
    </div>
</div>
