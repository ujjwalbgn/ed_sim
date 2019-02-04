<!-- **************************************************** -->
  <form>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="name">Patient Name</label>
        <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required
          value= @if(isset($patient))"{{$patient->name}}"@else "{{old('name')}}"@endif>
      </div>
      <div class="form-group col-md-3">
        <label for="level">Simulation Level</label>
        <input type="text" name="level" class="input {{$errors->has('level') ? 'is-danger' : ''}}" required
          value= @if(isset($patient))"{{$patient->level}}"@else"{{old('level')}}"@endif>
      </div>
      <div class="form-group col-md-6">
        <label for="provider">Provider</label>
        <input type="text" name="provider" class="input {{$errors->has('provider') ? 'is-danger' : ''}}" required
          value= @if(isset($patient))"{{$patient->provider}}"@else"{{old('provider')}}"@endif>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="diagnosis">Diagnosis</label>
          <input type="text" name="diagnosis" class="input {{$errors->has('diagnosis') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->diagnosis}}"@else"{{old('diagnosis')}}"@endif>
      </div>
      <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="text" name="dob" class="input {{$errors->has('dob') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->dob}}"@else"{{old('dob')}}"@endif>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label class="label" for="age">Age</label>
        <input type="text" name="age" class="input {{$errors->has('age') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->age}}"@else"{{old('age')}}"@endif>
      </div>
      <div class="form-group col-md-3">
        <label for="gender">Gender</label>
        <input type="text" name="gender" class="input {{$errors->has('gender') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->gender}}"@else"{{old('gender')}}"@endif>
      </div>
      <div class="form-group col-md-3">
        <label class="label" for="height">Height</label>
        <input type="text" name="height" class="input {{$errors->has('height') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->height}}"@else"{{old('height')}}"@endif>
      </div>
      <div class="form-group col-md-3">
        <label class="label" for="weight">Weight</label>
        <input type="text" name="weight" class="input {{$errors->has('weight') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->weight}}"@else"{{old('weight')}}"@endif>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="label" for="allergies">Allergies</label>
        <input type="text" name="allergies" class="input {{$errors->has('allergies') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->allergies}}"@else"{{old('allergies')}}"@endif>
      </div>
      <div class="form-group col-md-6">
        <label class="label" for="sensitivity">Sensitivity</label>
        <input type="text" name="sensitivity" class="input {{$errors->has('sensitivity') ? 'is-danger' : ''}}"
          value= @if(isset($patient))"{{$patient->sensitivity}}"@else"{{old('sensitivity')}}"@endif>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($patient)){{$patient->description}}@else{{old('description')}}@endif</textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="barcode">MR# (Barcode)</label>
        <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
          value= @if(isset($patient))"{{$patient->barcode}}"@else"{{old('barcode')}}">@endif  
      </div>
    </div>
  </form>
<!-- **************************************************** -->
<!-- <div class="field">
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
</div> -->
