import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var navigation = document.querySelectorAll('#navigation')
var nav = document.querySelectorAll('#navigation')
var navonglet = document.querySelectorAll('#navonglet')
var navsvg = document.querySelectorAll('#navsvg')

for (let a = 0; a < navigation.length; a++) {
    const element = navigation[a];
    element.addEventListener('click', function(e) {
        e.preventDefault()

        if (element.classList.contains('font-bold')) {
          return

        } else {
            element.classList.add('font-bold')
            element.classList.add('bg-[#8259fd]')
            element.classList.add('text-white')
            element.classList.remove('text-black')
        }

        const d = element.getAttribute('data')
                onglet(d)
                $('div#menu').children().eq(0).toggleClass('hidden')
                $('div#menu').children().eq(1).toggleClass('hidden')
                $("#sectionMenu").toggleClass('hidden')
                $("#sectionMenu").toggleClass('flex')
               // countnotif()
        for (let s = 0; s < nav.length; s++) {
            const elements = nav[s];
            const m = elements.getAttribute('data')
            if (d != m) {
                e.preventDefault()
                elements.classList.remove('font-bold')
                elements.classList.remove('bg-[#8259fd]')
                elements.classList.remove('text-white')
                elements.classList.add('text-black')
            }

        }


        for (let g = 0; g < navsvg.length; g++) {
            const elem = navsvg[g];
            const k = elem.getAttribute('data')
            if (d != k) {
                elem.classList.remove('text-white')

            } else {
                if (element.classList.contains('font-bold')) {
                    elem.classList.add('text-white')
                    elem.classList.remove('text-black')
                } else {
                    elem.classList.remove('text-white')
                    elem.classList.add('text-black')
                }

            }
        }

    })
}




  $('#menu').click(function(){
    $(this).children().eq(0).toggleClass('hidden')
    $(this).children().eq(1).toggleClass('hidden')
    $("#sectionMenu").toggleClass('hidden')
    $("#sectionMenu").toggleClass('flex')
    //$("#body").toggleClass('overflow-hidden')
 })

 