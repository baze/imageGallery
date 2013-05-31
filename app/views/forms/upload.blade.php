<div class="control-group {{ $errors->first('image') ? 'error' : '' }}">
	<div class="controls">
		<div class="">
            {{ Form::file('image', array('accept' => 'image/*')) }}
            Bild auswählen
        </div>
		<span class="help-inline">{{ $errors->first('image') }}</span>
	</div>
</div>

<button type="submit" id="upload-button" class="btn">Hochladen</button>