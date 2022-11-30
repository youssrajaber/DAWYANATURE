
let mobile=document.querySelector(".mobile-nav")
let icon=document.querySelector(".icon")
icon.addEventListener('click',()=>{
    icon.classList.toggle("fa-xmark")
    mobile.classList.toggle('n')
    document.querySelector(".log").classList.toggle('b')
})

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
})

p=document.querySelectorAll('.plus')
for(el of p){
    el.addEventListener('click',()=>{
        icon.classList.toggle("moins")
    })
}

let en=document.querySelectorAll('.english')
for(el of en){
    el.onclick=function(){
        document.querySelector('.f-p').innerHTML="<i> - </i> Are you looking for a completely new and unique experience in the great outdoors? <br> So let yourself be carried away by 100% nature experiences with Dawya Natures for the pleasure of going back to the source by enjoying intelligently and with respect the hinterland Jbala and its spaces! A treasures of the rural world, the douar Boujmil is a picturesque village available to you; These exceptional natural spaces, these al-houz inhabitants remained traditionally peasants and simple, these limestone montages billed and majestic"
        document.querySelector('.s-p').innerHTML="Its source (s) of clear water and permanent resurgences (s), these rocks like millennial statutes, its fauna - mangot monkey, crow, hawk and other raptors, its luxuriant flora in spring and these giant olive trees, its unique panorama of the Mediterranean and the mountains of the Rif! In the extension of the Monte Blanco chain, Boujmil is 150 meters above sea level and the Pic du Mont Boujmil at 681 m with a magnificent view of the Mediterranean Sea. The douar Boujmil, a site that is still unknown and to be preserved, is an ideal space for a return to nature that we all need!"
        document.querySelector('.f-p').style="direction: ltr !important;"
        document.querySelector('.s-p').style="direction: ltr !important;"
        document.querySelector('.l-p').innerHTML="<i> - </i> Are you looking for a completely new and unique experience in the great outdoors? <br> So let yourself be carried away by 100% nature experiences with Dawya Natures for the pleasure of going back to the source by enjoying intelligently and with respect the hinterland Jbala and its spaces! A treasures of the rural world, the douar Boujmil is a picturesque village available to you; These exceptional natural spaces, these al-houz inhabitants remained traditionally peasants and simple, these limestone montages billed and majestic Its source (s) of clear water and permanent resurgences (s), these rocks like millennial statutes, its fauna - mangot monkey, crow, hawk and other raptors, its luxuriant flora in spring and these giant olive trees, its unique panorama of the Mediterranean and the mountains of the Rif! In the extension of the Monte Blanco chain, Boujmil is 150 meters above sea level and the Pic du Mont Boujmil at 681 m with a magnificent view of the Mediterranean Sea. The douar Boujmil, a site that is still unknown and to be preserved, is an ideal space for a return to nature that we all need!"
        document.querySelector('.l-p').style="direction: ltr !important;"
    }
}  
let  en2=document.querySelectorAll('.arabic')
for(el of en2){
    el.onclick=function(){
    document.querySelector('.s-p').innerHTML="هل تبحث عن تجربة جديدة وفريدة تمامًا في الهواء الطلق الرائع؟ <br>لذا اسمح لنفسك أن تنفذ من خلال تجارب الطبيعة بنسبة 100٪  مع 'DAWYA'  من أجل العودة إلى المصدر من خلال الاستمتاع بذكاء واحترام 'جبالا' النائية ومساحاته! كنوز العالم الريفي ، قرية بوجميل هي قرية خلابة متاحة لك؛ هذه المساحات الطبيعية الاستثنائية ، ظل سكان الحوز  فلاحين تقليديين وبسيطين ، هذه التجمعات  من الحجر الجيري المهيبة"
    document.querySelector('.f-p').innerHTML="مصدرها (مصادرها) للمياه الصافية والانبعاثات الدائمة (الصخور) ، هذه الصخور مثل قوانين الألفية ، والحيوانات - قرد مانجوت ، الغراب ، الصقور وغيرها من الطيور الجارحة ، النباتات الفخمة في الربيع وأشجار الزيتون العملاقة هذه ، بانوراما فريدة من نوعها للبحر الأبيض المتوسط وجبال ريف! في امتداد سلسلة مونتي بلانكو ، يقع بوجميل على ارتفاع 150 مترًا فوق مستوى سطح البحر ، بينما يبلغ ارتفاع بيك دو مونت بوجميل على ارتفاع 681 مترًا مع منظر رائع للبحر الأبيض المتوسط. يعد دوار بوجميل ، وهو موقع لا يزال مجهولًا ويحفظه ، مكانًا مثاليًا للعودة إلى الطبيعة التي نحتاجها جميعًا!"
    document.querySelector('.f-p').style="direction: rtl !important;"
    document.querySelector('.s-p').style="direction: rtl !important;"
    document.querySelector('.l-p').innerHTML="هل تبحث عن تجربة جديدة وفريدة تمامًا في الهواء الطلق الرائع؟ <br>لذا اسمح لنفسك أن تنفذ من خلال تجارب الطبيعة بنسبة 100٪  مع 'DAWYA'  من أجل العودة إلى المصدر من خلال الاستمتاع بذكاء واحترام 'جبالا' النائية ومساحاته! كنوز العالم الريفي ، قرية بوجميل هي قرية خلابة متاحة لك؛ هذه المساحات الطبيعية الاستثنائية ، ظل سكان الحوز  فلاحين  مصدرها (مصادرها) للمياه الصافية والانبعاثات الدائمة (الصخور) ، هذه الصخور مثل قوانين الألفية ، والحيوانات - قرد مانجوت ، الغراب ، الصقور وغيرها من الطيور الجارحة ، النباتات الفخمة في الربيع وأشجار الزيتون العملاقة هذه ، بانوراما فريدة من نوعها للبحر الأبيض المتوسط وجبال ريف! في امتداد سلسلة مونتي بلانكو ، يقع بوجميل على ارتفاع 150 مترًا فوق مستوى سطح البحر ، بينما يبلغ ارتفاع بيك دو مونت بوجميل على ارتفاع 681 مترًا مع منظر رائع للبحر الأبيض المتوسط. يعد دوار بوجميل ، وهو موقع لا يزال مجهولًا ويحفظه ، مكانًا مثاليًا للعودة إلى الطبيعة التي نحتاجها جميعًا!"
    document.querySelector('.l-p').style="direction: rtl !important;"
    }
}
let en3=document.querySelectorAll('.spanish')
for(el of en3){
    el.onclick=function(){
    document.querySelector('.f-p').innerHTML="<i>—</i>Estás buscando una experiencia completamente nueva y única en medio denaturaleza? <br>Así que déjate llevar por experiencias 100% naturales con DAWYA NATURES por el placer de volver a la fuente mientras se disfruta inteligentemente y con respeto el interior de Jbala y sus espacios! Tesoro del mundo rural, el Douar Boujmil es un pueblo pintoresco que disponible para ti; estos espacios naturales excepcionales, estos habitantes de Al-Houz permanecieron tradicionalmente campesinos y simples, estos ensamblajes calcáreos facturaron y majestuoso"
    document.querySelector('.s-p').innerHTML="su(s) fuente(s) de agua clara y resurgimiento(s) permanente(s), estas rocas como estatutos milenarios, su fauna - mono Mangot, corneja, gavilán y otras rapaces, su exuberante flora en primavera y estas olivo gigante multicentenario, su panorama único del Mediterráneo y las montañas del Rif! En la prolongación de la cadena de Monte Blanco, Boujmil se encuentra a 150 metros altitud y la cima del monte Boujmil a 681 m con una magnífica vista de la Mar Mediterráneo. El Douar Boujmil, un sitio aún desconocido y por preservar, es ideal para la vuelta a la naturaleza que todos tenemos ar !"
    document.querySelector('.f-p').style="direction: ltr !important;"
    document.querySelector('.s-p').style="direction: ltr !important;"
    document.querySelector('.l-p').innerHTML="<i>—</i>Estás buscando una experiencia completamente nueva y única en medio denaturaleza? <br>Así que déjate llevar por experiencias 100% naturales con DAWYA NATURES por el placer de volver a la fuente mientras se disfruta inteligentemente y con respeto el interior de Jbala y sus espacios! Tesoro del mundo rural, el Douar Boujmil es un pueblo pintoresco que disponible para ti; estos espacios naturales excepcionales, estos habitantes de Al-Houz permanecieron tradicionalmente campesinos y simples, estos ensamblajes calcáreos facturaron y majestuoso su(s) fuente(s) de agua clara y resurgimiento(s) permanente(s), estas rocas como estatutos milenarios, su fauna - mono Mangot, corneja, gavilán y otras rapaces, su exuberante flora en primavera y estas olivo gigante multicentenario, su panorama único del Mediterráneo y las montañas del Rif! En la prolongación de la cadena de Monte Blanco, Boujmil se encuentra a 150 metros altitud y la cima del monte Boujmil a 681 m con una magnífica vista de la Mar Mediterráneo. El Douar Boujmil, un sitio aún desconocido y por preservar, es ideal para la vuelta a la naturaleza que todos tenemos ar !"
    document.querySelector('.l-p').style="direction: ltr !important;"
    }
}

document.querySelector(".b-hide").addEventListener('click',()=>{
    pp=document.querySelectorAll('.blob')
    for(el of pp){
            el.classList.toggle("bb")
    }
})

