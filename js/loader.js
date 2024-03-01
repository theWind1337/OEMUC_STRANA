window.onload = function(){
    document.getElementById('loader').className = 'loader active';
    setTimeout(function(){
        document.getElementById('loader').style.display='none'
    },20000)
}