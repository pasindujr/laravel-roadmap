<div class="mr-3">
    @guest
        <input type="checkbox" name="milestoneMark">

    @endguest

    @auth
        <input type="checkbox" name="milestoneMark" x-model="milestone" value="{{ $milestoneId }}" wire:model="checked"
               wire:change="processMark()" wire:loading.attr="disabled" x-data>
    @endauth
</div>
