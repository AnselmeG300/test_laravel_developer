function readURL(input) {
    console.log('toto');
    if (input.files && input.files[0]) {
            var reg = /jpeg$/;
            console.log(input.files[0].name);
            if(!reg.test(input.files[0].name) &&  input.files[0].size <= 5000000)
            {
                var reader = new FileReader();
                $('#id_oldFile').val("");
                $('.add').hide(); 
                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();
                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();
                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);
            }else{
                if(reg.test(input.files[0].name))
                    md.showNotification('top','center', 'Le format du fichier n\'est pas pris en compte!','warning',2);
                else if(input.files[0].size > 8000000)
                    md.showNotification('top','center', 'La taille du fichier est grande, choisir un fichier de taille inferieure à 5 megaoctet(mo)!','warning',2);

            removeUpload(); 
    }
    } else {
        console.log('suprime');
        removeUpload(); 
    }
}

function removeUpload() {   
    $('#id_oldFile').val("");
    $('.add').show();
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    $('#id_valueImage').val(null);
    $('#id_file-upload-input').val(null);  
}

$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
  
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});