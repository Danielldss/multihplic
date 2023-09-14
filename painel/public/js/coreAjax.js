$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};


function gsAjax(_method, _url, _data, _callbackSuccess, _callbackError){

    if($('meta[name=_token]').length == 0){
        console.log('Token CSRF não definido na página');
        return false;
    }
    var _dataProcess = {
        '_url': _url,
        '_method': _method,
        '_token': $('meta[name=_token]').attr('content')
    };

    _dataProcess = $.extend(_data, _dataProcess);
    // console.log(_dataProcess);

    return $.ajax({
        method: 'POST',
        url: '/ajax',
        data: _dataProcess,
        // async: false,
        // success: _callbackSuccess,
        // error: _callbackError
    }).done(_callbackSuccess).fail(function (error) {
        gsPrintErrorPermission(error, 'ajax');
        if (typeof _callbackError == 'function') {
            _callbackError(error);
        }
    });
}

function gsPrintErrorPermission(error, type) {
    let errorList = error.responseJSON;
    errorList.forEach( function (read) {
        $.notify(`${read.msg} [${type}]`,
            {
                position:"right, bottom",
                style: 'bootstrap',
                clickToHide: true,
                autoHide: false,
                className: 'error errorPermission'
            }
        );
    });
}

//SYNC VALUE
function syncValue(){
    var element = $('#_user_value_oll');

    //SYNC VALUE
    $.ajax({
        method: 'PUT',
        url: '/syncValue',
        data: {'_token': $('[name=_token]').val()},
        success: function(total){
            $(element).text(total).removeClass('mask-points').addClass('mask-points');
        }
    });
}

//#get
function gsGet(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('GET', _url, _data, _callbackSuccess, _callbackError);
}

//#post
function gsPost(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('POST', _url, _data, _callbackSuccess, _callbackError);
}
//#put
function gsPut(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('PUT', _url, _data, _callbackSuccess, _callbackError);
}
//#delete
function gsDelete(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('DELETE', _url, _data, _callbackSuccess, _callbackError);
}
//#options
function gsOptions(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('OPTIONS', _url, _data, _callbackSuccess, _callbackError);
}
//#options
function gsPatch(_url, _data, _callbackSuccess, _callbackError){
    return gsAjax('PATCH', _url, _data, _callbackSuccess, _callbackError);
}
