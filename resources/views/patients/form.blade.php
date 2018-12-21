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
    <label class="label" for="dob">Date of Birth</label>
    <div class="control">
        <input type="text" name="dob" class="input {{$errors->has('dob') ? 'is-danger' : ''}}"
               value= @if(isset($patient))"{{$patient->dob}}"@else"{{old('dob')}}"@endif>
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
    <label class="label" for="description">Description</label>
    <div class="control">
        <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($patient)){{$patient->description}}@else{{old('description')}}@endif</textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="barcode">Barcode</label>
    <div class="control">
        <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
               value= @if(isset($patient))"{{$patient->barcode}}"@else"{{old('barcode')}}">@endif
    </div>
</div>
