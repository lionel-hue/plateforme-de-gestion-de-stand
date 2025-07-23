<<<<<<< HEAD
=======

>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
@props(['label' => '',
'name' => '',
'type' => '',
'placeholder' => '',
])
<div class="mb-3 form-group">
    <label for="name" class="form-label">{{ $label }} </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control" value="{{ old($name) }}" placeholder="{{ $placeholder }}" required>
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
