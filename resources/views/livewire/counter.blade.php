<div>
  <p>{{$count}}</p>

  <p>{{$value}}</p><input type="text" wire:model='value' />

  <button wire:click='changeCount'>Add</button>
  <button wire:click='subtractCount'>Subtract</button>
</div>
