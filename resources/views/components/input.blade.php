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
</div>
