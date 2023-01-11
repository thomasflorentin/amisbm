



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



}



document.addEventListener('DOMContentLoaded', function(e) {
    init() 
});