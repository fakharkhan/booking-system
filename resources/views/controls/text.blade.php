<div class="form-group">
    <label for="fc-{{ $name }}">{{ isset($options['label']) ? $options['label'] : $name }}</label>
    <input  type="text" class="form-control" name="{{ $name }}" id="fc-{{ $name }}" placeholder="{{ isset($options['placeholder']) ? $options['placeholder'] : $name }}">
</div>