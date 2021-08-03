<div class="input-container">
    <input class="radio-button" type="radio" name="jenis_form" value="{{ $item->id }}" data-parsley-group="step-1" data-parsley-required="true" {{{ old('jenis_form') == $item->id ? 'checked' : '' }}} />
    <div class="radio-tile">
        <div class="icon">
            {{ $item->icon }}
        </div>
        <label class="radio-tile-label">{{ $item->name }}</label>
    </div>
</div>