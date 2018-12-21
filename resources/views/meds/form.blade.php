<div class="field">
    <label class="label" for="name">Medication Name</label>
    <div class="control">
        <input type="text" name="name" class="input {{$errors->has('name') ? 'is-danger' : ''}}" required
               value= @if(isset($med))"{{$med->name}}"@else "{{old('name')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="time">Medication Time</label>
    <div class="control">
        <input type="text" name="time" class="input {{$errors->has('time') ? 'is-danger' : ''}}"
               value= @if(isset($med))"{{$med->time}}"@else"{{old('time')}}"@endif>
    </div>
</div>
<div class="field">
    <label class="label" for="description">Description</label>
    <div class="control">
        <textarea type="text" name="description" class="textarea {{$errors->has('description') ? 'is-danger' : ''}}">@if(isset($med)){{$med->description}}@else{{old('description')}}@endif</textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="barcode">Barcode</label>
    <div class="control">
        <input type="text" name="barcode" class="input {{$errors->has('barcode') ? 'is-danger' : ''}}" required
               value= @if(isset($med))"{{$med->barcode}}"@else"{{old('barcode')}}">@endif
    </div>
</div>


