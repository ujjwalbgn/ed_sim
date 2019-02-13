<div class="field">
    <label class="label" for="initials">Initials</label>
    <div class="control">
        <input type="text" name="initials" class="input {{$errors->has('initials') ? 'is-danger' : ''}}" required
               value= @if(isset($signature))"{{$signature->initials}}"@else"{{old('initials')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="printName">Print Name</label>
    <div class="control">
        <input type="text" name="printName" class="input {{$errors->has('printName') ? 'is-danger' : ''}}" required
               value= @if(isset($signature))"{{$signature->printName}}"@else"{{old('printName')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="signature">Signature</label>
    <div class="control">
        <input type="text" name="signature" class="input {{$errors->has('signature') ? 'is-danger' : ''}}" required
               value= @if(isset($signature))"{{$signature->signature}}"@else"{{old('signature')}}"@endif>
    </div>
</div>
