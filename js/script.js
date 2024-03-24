
/*
    target data
*/

let main_data_container = document.getElementById('main_data_container')

let searchbar = document.getElementById('searchbar')

let data_list = document.getElementsByClassName('article')

/*
    { layout function } =====================================================
*/
function layout(elements) {
    return (`
    
        <article class="d-flex justify-content-between align-items-center py-3 article">
        
            <div class="h4"> ${elements.university} </div>

            <div class="h4"> ${elements.subject} </div>
            
            <div class="h4"> ${elements.stream} </div>
            <div class="h4"> ${elements.semester} </div>
            <div class="h4"> ${elements.month} </div>
            <div class="h4"> ${elements.year} </div>
            
            <a href="${elements.url}" class="btn btn-outline-success"> Download </a>
            
        </article>

    `)
}

/*
    -----------------------------------------------------------------------------
        set layout with data iteration
    -----------------------------------------------------------------------------
*/

for (let i = 0; i < data.length; i++) {
    main_data_container.insertAdjacentHTML("afterend", `${layout(data[i])}`)
}

/*
    [ searching functionality  ]
*/

searchbar.onkeyup = () => {

    search = searchbar.value.toLowerCase()

    if (search == "") window.location.reload()
     else for (let o = 0; o < data_list.length; o++)
    
        (data_list[o].innerText.toLowerCase().includes(search))? data_list[o].classList.add('d-block') : data_list[o].classList.add('d-none')
}
