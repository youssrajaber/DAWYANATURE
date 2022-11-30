
window.addEventListener('scroll',()=>{

    let c=document.querySelector('.c-a')
    let cposition=c.getBoundingClientRect().top
    let screenposition=window.innerHeight
    if(cposition<screenposition){
        c.classList.add('upw1')
    }else{
        c.classList.remove('upw1')
    }

    let gc=document.querySelectorAll('.up')
    for(el of gc){
        let elposition=el.getBoundingClientRect().top
        if(elposition<screenposition){
            el.classList.add('up1')
        }
        else{
            el.classList.remove('up1')
        }
    }

    let lc=document.querySelectorAll('.fr')
    for(el of lc){
        let elposition=el.getBoundingClientRect().top
        if(elposition<screenposition){
            el.classList.add('fr1')
        }
        else{
            el.classList.remove('fr1')
        }
    }

    let rc=document.querySelectorAll('.fl')
    for(el of rc){
        let elposition=el.getBoundingClientRect().top
        if(elposition<screenposition){
            el.classList.add('fl1')
        }
        else{
            el.classList.remove('fl1')
        }
    }

    let uc=document.querySelectorAll('.upw')
    for(el of uc){
        let elposition=el.getBoundingClientRect().top
        if(elposition<screenposition){
            el.classList.add('upw1')
        }
        else{
            el.classList.remove('upw1')
        }
    }

    let ucl=document.querySelectorAll('.underline-hover-effect')
    for(el of ucl){
        let elposition=el.getBoundingClientRect().top
        if(elposition<screenposition){
            el.classList.add('underline-hover-effectA')
        }
        else{
            el.classList.remove('underline-hover-effectA')
        }
    }
})

// p=document.querySelectorAll('.plus')
// for(el of p){
//     el.addEventListener('click',()=>{
//         icon.classList.toggle("moins")
//     })
// }



document.querySelector(".b-hide").addEventListener('click',()=>{
    pp=document.querySelectorAll('.blob')
    for(el of pp){
            el.classList.toggle("bb")
    }
})

setTimeout(window.onload=function(){
    document.querySelector('.underline-A').classList.add('underline-Al')
},800)

