{{--<form>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="name" class="col-md-3">Patient Name</label>--}}
    {{--<div class="col-md-3">--}}
      {{--<input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required--}}
        {{--value= @if(isset($patient))"{{$patient->name}}"@else "{{old('name')}}"@endif>--}}
    {{--</div>--}}
    {{--<label for="level"  class="col-md-3">Simulation Level</label>--}}
    {{--<div class="col-md-3">--}}
      {{--<input type="text" name="level" class="input {{$errors->has('level') ? 'is-danger' : ''}}" required--}}
        {{--value= @if(isset($patient))"{{$patient->level}}"@else"{{old('level')}}"@endif>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="provider" class="col-md-3">Provider</label>--}}
    {{--<div class="col-md-3">--}}
      {{--<input type="text" name="provider" class="input {{$errors->has('provider') ? 'is-danger' : ''}}" required--}}
        {{--value= @if(isset($patient))"{{$patient->provider}}"@else"{{old('provider')}}"@endif>--}}
    {{--</div>--}}
    {{--<label for="diagnosis" class="col-md-3">Diagnosis</label>--}}
    {{--<div class="col-md-3">--}}
      {{--<input type="text" name="diagnosis" class="input {{$errors->has('diagnosis') ? 'is-danger' : ''}}" required--}}
        {{--value= @if(isset($patient))"{{$patient->diagnosis}}"@else"{{old('diagnosis')}}"@endif>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="dob" class="col-md-3">Date of Birth</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="dob" class="input {{$errors->has('dob') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->dob}}"@else"{{old('dob')}}"@endif>--}}
    {{--</div>--}}
    {{--<label for="age" class="col-md-3">Age</label>--}}
    {{--<div class="col-md-3">--}}
        {{--<input type="text" name="age" class="input {{$errors->has('age') ? 'is-danger' : ''}}"--}}
               {{--value= @if(isset($patient))"{{$patient->age}}"@else"{{old('age')}}"@endif>--}}
      {{----}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="gender" class="col-md-3">Gender</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="gender" class="input {{$errors->has('gender') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->gender}}"@else"{{old('gender')}}"@endif>--}}
    {{--</div>--}}
    {{--<label for="height" class="col-md-3">Height</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="height" class="input {{$errors->has('height') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->height}}"@else"{{old('height')}}"@endif>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="weight" class="col-md-3">Weight</label>--}}
    {{--<div class="col-md-3">--}}
        {{--<input type="text" name="weight" class="input {{$errors->has('weight') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->weight}}"@else"{{old('weight')}}"@endif>     --}}
    {{--</div>--}}
    {{--<label for="allergies" class="col-md-3">Allergies</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="allergies" class="input {{$errors->has('allergies') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->allergies}}"@else"{{old('allergies')}}"@endif>--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="sensitivity" class="col-md-3">Sensitivity</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="sensitivity" class="input {{$errors->has('sensitivity') ? 'is-danger' : ''}}"--}}
          {{--value= @if(isset($patient))"{{$patient->sensitivity}}"@else"{{old('sensitivity')}}"@endif>--}}
    {{--</div>--}}
    {{--<label for="barcode" class="col-md-3">MR# (Barcode)</label>--}}
    {{--<div class="col-md-3">--}}
    {{--<input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required--}}
          {{--value= @if(isset($patient))"{{$patient->barcode}}"@else"{{old('barcode')}}">@endif--}}
    {{--</div>--}}
  {{--</div>--}}
  {{--<!-- <div class="form-row">--}}
    {{--<label for="description" class="col-md-6">Description</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($patient)){{$patient->description}}@else{{old('description')}}@endif</textarea>--}}
    {{--</div>--}}
  {{--</div> -->--}}
  {{--<div class="form-row text-left">--}}
    {{--<label for="description" class="col-md-6">Description</label>    --}}
  {{--</div>--}}
  {{--<div class="col-md-12">--}}
    {{--<textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($patient)){{$patient->description}}@else{{old('description')}}@endif</textarea>--}}
  {{--</div>--}}
{{--</form>--}}


{{--Bulma Form--}}

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
