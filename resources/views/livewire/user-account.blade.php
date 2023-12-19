<div>
    <form wire:submit="save">
        <span>Create Account</span>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name" wire:model.live="name"/>
          @error('name')
          <p class="text-danger">{{$message}}</p>
              
          @enderror
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address" wire:model.live="email" />
           @error('email')
          <p class="text-danger">{{$message}}</p>
              
          @enderror
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Mobile No" wire:model.live="mobile_no" />
           @error('mobile_no')
          <p class="text-danger">{{$message}}</p>
              
          @enderror
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" wire:model.live="password" />
           @error('password')
          <p class="text-danger">{{$message}}</p>
              
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
</div>
