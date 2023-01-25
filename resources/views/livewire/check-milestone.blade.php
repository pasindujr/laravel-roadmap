<div class="mr-3">
    @guest
        <div>
        <input wire:click="$emit('openModal', 'redirect-to-login-modal')" type="checkbox" name="milestoneMark">

        </div>

    @endguest

    @auth
        <input type="checkbox" name="milestoneMark" x-model="milestone" value="{{ $milestoneId }}" wire:model="checked"
               wire:change="processMark()" wire:loading.attr="disabled" x-data>
    @endauth
</div>
