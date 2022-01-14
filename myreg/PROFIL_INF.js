function addck(id){
    let tovar = $.cookie('tovar')
    if(tovar){ 
        tovar += `','${id}`
        $.cookie('tovar', tovar, {expires: 364, path: '/'});
    }else{
        $.cookie('tovar', `','${id}`, {expires: 364, path: '/'});
    }
};