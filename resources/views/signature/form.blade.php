<div class="form-row">
    <div class="form-group col-md-12">
        <label for="initials">Initials</label>
        <input type="text" name="initials" class="input {{$errors->has('initials') ? 'is-danger' : ''}}"
            value= @if(isset($signature))"{{$signature->initials}}"@else"{{old('initials')}}"@endif>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="initials">Initials</label>
        <input type="text" name="printName" class="input {{$errors->has('printName') ? 'is-danger' : ''}}"
            value= @if(isset($signature))"{{$signature->printName}}"@else"{{old('printName')}}"@endif>
    </div>
</div>

<!-- 
<div class="field">
    <label class="label" for="printName">Print Name</label>
    <div class="control">
        <input type="text" name="initials" class="input {{$errors->has('initials') ? 'is-danger' : ''}}"
               value= @if(isset($signature))"{{$signature->initials}}"@else"{{old('initials')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="printName">Print Name</label>
    <div class="control">
        <input type="text" name="printName" class="input {{$errors->has('printName') ? 'is-danger' : ''}}"
               value= @if(isset($signature))"{{$signature->printName}}"@else"{{old('printName')}}"@endif>
    </div>
</div> -->

