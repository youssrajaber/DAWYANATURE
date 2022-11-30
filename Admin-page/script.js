let l=document.querySelectorAll('.l')
let tc=document.querySelector('.table-c')
for(var el of l){
    el.onclick=function(){
        // document.querySelector('h2').style="display:none"
        // document.querySelector('.table-c').style="display:inline-block"
    }
    el.addEventListener('click',function(){
        // alert(tc)
        console.log(tc)
    })
}

document.querySelectorAll('.input100').each(function(){
    this.on('click', function(){
        alert(this)
        if(this.value.trim() != "") {
            this.addClass('has-val');
        }
        else {
            this.removeClass('has-val');
        }
    })    
})
alert('')
document.querySelectorAll('.input100').each(function(){
    this.addEventListener('click',function(){
        alert(this)
    })  
})
