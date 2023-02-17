



function init() {
    console.log('hello');

    const load_more = document.querySelector('#loadMore');

    
    /*
     * Active filter for publications template
     * get an array of elements
     */
    function get_filters( els ) {

        for (const el of els) {
            el.addEventListener('click', function (e) {
                //console.log('please do filter');

                els.forEach(element => {
                    element.classList.remove('active');
                });
                this.classList.add('active');

                const posts_nav = document.querySelector('#posts_nav');
                const grid = document.querySelector('#publications_posts');
                const query_data = new FormData();
                const term = this.getAttribute('data-term');
                const termID = this.getAttribute('data-termID');
                const step = grid.getAttribute('data-step');

                console.log('term: ', term);

                query_data.append( 'action', 'loadpublications' );
                query_data.append( 'nonce', ajax_var.nonce );
                query_data.append( 'term', term);
                query_data.append( 'termID', termID);
                query_data.append( 'offset', 0);

                console.log('data: ', query_data);

                fetch(ajax_var.ajax_url, {
                  method: "POST",
                  credentials: 'same-origin',
                  body: query_data
                })
                .then((response) => {
                    return response.json()
                })
                .then((data) => {
                    grid.innerHTML = data;

                    if( term !== 'all' ) {
                        posts_nav.classList.add('hidden');                    
                        load_more.classList.remove('hidden'); 
                    }
                    else {
                        posts_nav.classList.remove('hidden');                    
                        load_more.classList.add('hidden');   
                    }

                    load_more.addEventListener('click', function() {

                        grid.style.opacity = '.5';

                        let current_offset = parseInt(query_data.get('offset'));
                        let new_offset = parseInt(current_offset + step)
                        query_data.set('offset', new_offset);

                        fetch(ajax_var.ajax_url, {
                                method: "POST",
                                credentials: 'same-origin',
                                body: query_data
                            })
                            .then((response) => {
                                return response.json()
                            })
                            .then((data) => {
                                if(data === '') {
                                    load_more.classList.add('hidden'); 
                                }
                                else {
                                    grid.insertAdjacentHTML("beforeend", data);
                                }
                                grid.style.opacity = '1';
                            })
                            .catch((error) => {
                                console.log(error);
                            });

                    });

                })
                .catch((error) => {
                  console.log(error);
                });

            });
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
    //const logo = document.querySelector('.custom-logo')        
    let delta;
    if (event.wheelDelta){
    	delta = event.wheelDelta;
    }else{
    	delta = -1 * event.deltaY;
    }
    if (delta < 0){
        // console.log("down");
        headerSearch.style.maxHeight = "0"
        headerSearch.style.opacity = "0"
        //logo.style.height = "40px"
    }else if (delta > 0){
        // console.log("up");
        headerSearch.style.maxHeight = "50px"
        headerSearch.style.opacity = "1"
        //logo.style.height = "75px"
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