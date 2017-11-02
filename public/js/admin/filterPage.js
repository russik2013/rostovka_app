$('.add--newFilter').on('click', function () {
    var lastElem = $(this)[0].parentElement.children[1],
        inputValue = $(this)[0].parentNode.children[2].value,
        input = $(this)[0].parentNode.children[2];

        if(inputValue !== ''){
            $(lastElem).append('' +
                '<li> '+ inputValue +' <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="" data-original-title="Удалить"></i></a><li></li></li>');

            $(this)[0].parentNode.children[2].value = '';
            $(input).css('border', '1px solid #CCC5B9')
        }
        else{
            console.log();
            $(input).css('border', '1px solid red')
            // [0].parentNode.children[2]
        }
});

function remFilter(event) {
    console.log(event);
    var filterName = event.currentTarget.parentNode.textContent,
        filterID = event.currentTarget.parentNode.dataset.id,
        elemDelete = event.currentTarget.parentNode;

    swal({
        title: 'Удалить фильтр <u>'+ filterName +'</u>',
        type: 'info',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Да',
        cancelButtonText: 'Нет'
    }).then(function() {
        $(elemDelete).remove();
        console.log(filterName, filterID)
    });
}

$(document).on('click', '.remove__Filter',function (event) {
    remFilter(event)
});