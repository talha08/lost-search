/**
 * Created by talha on 9/30/2016.
 */
// var url = window.URL || window.webkitURL; // alternate use

function readImage(file) {
    var reader = new FileReader();
    var image  = new Image();

    reader.readAsDataURL(file);
    reader.onload = function(_file) {
        image.src = _file.target.result; // url.createObjectURL(file);
        image.onload = function() {
            var w = this.width,
                h = this.height,
                t = file.type, // ext only: // file.type.split('/')[1],
                n = file.name,
                s = ~~(file.size/1024) +'KB';
            $('#uploadPreview').append('<img src="' + this.src + '"> ');
            //$('#uploadPreview').append('<img src="' + this.src + '"> ' + w + 'x' + h + ' ' + s + ' ' + t + ' ' + n + '<br>');
        };

        image.onerror= function() {
            alert('Invalid file type: '+ file.type);
        };
    };

}
$("#choose").change(function (e) {
    if(this.disabled) {
        return alert('File upload not supported!');
    }

    var F = this.files;
    if (F && F[0]) {
        for (var i = 0; i < F.length; i++) {
            readImage(F[i]);
        }
    }
});