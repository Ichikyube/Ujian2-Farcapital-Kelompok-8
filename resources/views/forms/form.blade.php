<form enctype="multipart/form-data">
    @csrf
    <x-input-error/>
    <div class="field">
        <label for="documents">
            <span class="label">Choose file</span>
        </label>
        <input class="field-file" type="file" id="file" name="file">
    </div>
    <input type="submit" value="Upload" name="upload">
</form>
