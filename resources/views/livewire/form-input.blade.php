<div>
{{$message}}
@foreach($animals as $key)
  {{$key->name." "}}
@endforeach
@if($errors->any())

<div>This has errors</div>
  
@endif
<div>
<div>The name of the animal is: {{$name}}</div>
<div>Notes: {{$notes}}</div>
</div>

<form>
@csrf
<div class="mb-3">
  <label for="animaldata" class="form-label">Animal Name</label>
  <input type="text" wire:model="name"
   class="form-control" name="name" id="name" placeholder="">
</div>
<textarea rows="3" wire:model="notes" name="notes" class="form-control"> </textarea>
<button type="button" wire:click="store" class="btn btn-primary m-1">Add Data</button>
    </form>

</div>
