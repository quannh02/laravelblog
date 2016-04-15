<!DOCTYPE html>
<html>
<body>

{!! Form::open(array('route' => 'upload.post', 'files' => true)) !!}
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
{!! Form::close() !!}

</body>
</html>