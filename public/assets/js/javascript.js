(function(win,doc){
 'use strict';

function confirmDel(event){

    event.preventDefault();
    console.log(event);
}

if(doc.querySelector('.js-delete')){
    let btn=doc.querySelectorAll('.js-delete');
    for(let i=0; i<btn.length; i++){
        btn[i].addEventListener('click' , confirmDel,false)
    }
}

})(window,document);
