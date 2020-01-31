var cropper = new Slim(document.getElementById('myCropper'), {
    ratio: '4:3',

    minSize: {
        width: 300,
        height: 250,
    },
    size: {
        width: 300,
        height: 250,
    },
    download: false,
    willSave: function (data, ready) {
        toastr.success('Vous avez ajouté votre demande avec succès');
        ready(data);
        $('#x').val(data.actions.crop['x']);
        $('#y').val(data.actions.crop['y']);
        $('#width').val(data.actions.crop['width']);
        $('#height').val(data.actions.crop['height']);
    },
    label: 'Image.',
    buttonConfirmLabel: 'Ok',
});
