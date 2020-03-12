$('#add-image').click(function () {
    //Je recupère le numéro des futurs champs que je vais créer
    const index = +$('#widget-counter').val();

    //je récupère le prototype des entrées
    const tmpl = $('#annonce_images').data('prototype').replace(/__name__/g, index);

    //j'injecte ce code au sein de la div
    $('#annonce_images').append(tmpl);

    $('#widget-counter').val(index + 1);

    //je gère le bouton supprimer
    handleDeleteButtons();
});

function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter(){
    const count = +$('#annonce_images div.form-group').length;
    $('#widget-counter').val(count);
}

updateCounter()

handleDeleteButtons();