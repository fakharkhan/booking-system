<div class="form-group">
    <label>{{ isset($label) ? $label : $name }}</label>
    <input type="text" class="form-control"  name="{{ isset($name) ? $name : '' }}" placeholder="{{ isset($placeholder) ? $placeholder : $name }}" >
</div>