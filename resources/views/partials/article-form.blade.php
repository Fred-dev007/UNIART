<div class="mb-3">
    <label for="{{ $id ?? $name }}" class="form-label">{{ $label }}</label>
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        class="{{ $class }}" 
        value="{{ old($name, $value ?? '') }}" 
    >
    <br>
    @error($name)
        <span class="text-red-600">{{ $message }}</span>
    @enderror
</div>
