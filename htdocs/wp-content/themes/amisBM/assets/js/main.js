



function init() {
    console.log('hello');


    
    /*
     * Active filter for publications template
     * get an array of elements
     */
    function get_filters( els ) {

        for (const el of els) {
            el.addEventListener('click', function (e) {
                console.log('please do filter');

                els.forEach(element => {
                    element.classList.remove('active');
                });
                this.classList.add('active');

                const data = new FormData();
                const term = this.getAttribute('data-term');
                const termID = this.getAttribute('data-termID');
                console.log(term);

                data.append( 'action', 'loadpublications' );
                data.append( 'nonce', ajax_var.nonce );
                data.append( 'term', term);
                data.append( 'termID', termID);

                console.log(data);

                fetch(ajax_var.ajax_url, {
                  method: "POST",
                  credentials: 'same-origin',
                  body: data
                })
                .then((response) => {
                    console.log(response);
                    return response.json()
                })
                .then((data) => {
                    console.log(data);
                    document.querySelector('#publications_posts').innerHTML = data;
                })
                .catch((error) => {
                  console.log(error);
                });

            })
        }
    }

    const filter_buttons = document.querySelectorAll('.publication-filter');
    get_filters(filter_buttons);




    /*
     * Slide on fade
     */
    const slides = document.querySelectorAll(".slide");
    const timer = document.querySelector('.home_hero').dataset.timer;
    console.log(timer);
    if(slides.length !== 0 ) {
        let current = 0;

        setInterval(function() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.opacity = 0;
        }
        current = (current != slides.length - 1) ? current + 1 : 0;
        slides[current].style.opacity = 1;
        }, timer);
    }





} // end init()

document.addEventListener('DOMContentLoaded', function(e) {
    init() 
});



// Header size change on scroll
document.addEventListener('wheel', findScrollDirectionOtherBrowsers);

function findScrollDirectionOtherBrowsers(event){
    const headerSearch = document.querySelector('.header_searchForm')        
    const logo = document.querySelector('.custom-logo')        
    let delta;
    if (event.wheelDelta){
    	delta = event.wheelDelta;
    }else{
    	delta = -1 * event.deltaY;
    }
    if (delta < 0){
        // console.log("down");
        headerSearch.style.display = "none"
        logo.style.height = "40px"
    }else if (delta > 0){
        // console.log("up");
        headerSearch.style.display = "block"
        logo.style.height = "100px"
    }
}



// Header nav menu display switch
const burger = document.querySelector('.header_burger')
const close = document.querySelector('.header_nav_close')
const nav = document.querySelector('.header_nav')

function headerDisplay() {
    console.log("Function loads");
    if (nav.dataset.display == "hidden") {
        console.log("Function gets condition to open nav");
        nav.classList.replace("header_nav", "header_nav--displayed")
        nav.dataset.display = "displayed"
    } else if (nav.dataset.display == "displayed") {
        console.log("Function gets condition to close nav");
        nav.classList.replace("header_nav--displayed", "header_nav")
        nav.dataset.display = "hidden"
    }
}
burger.addEventListener('click', headerDisplay)
close.addEventListener('click', headerDisplay)