let films = [
    {
        title :"Transformers",
        year : 2007
    },
    {
        title: "Frozen",
        year: 2013
    },
    {
        title :"Tangled",
        year : 2010
    },
    {
        title:"Toy Story 3",
        year: 2010
    },
    {
        title:"Monsters University",
        year: 2013
    },
    {
        title:"La La Land",
        year: 2016
    },
    {
        title:"The Amazing Spider-Man",
        year: 2012
    },
    {
        title:"Captain America: Civil War",
        year: 2016
    },
    {
        title:"The Avengers",
        year: 2012
    },
    {
        title:"Captain America: The First Avenger",
        year: 2011
    },
    {
        title:"Avengers: Age of Ultron",
        year: 2015
    },
    {
        title:"A Beautiful Mind",
        year: 2001
    },
    {
        title:"imitation game",
        year: 2014
    }

];

let hotfilms = [
    {
        title :"Ghost in the Shell",
        year : 2017
    },
    {
        title: "Justice League",
        year: 2017
    },
    {
        title :"The Song of Sparrows",
        year : 2008
    },
    {
        title:"Muhammad: The Messenger of God",
        year: 2015
    },
    {
        title:"The Willow Tree",
        year: 2005
    },
    {
        title:"Thor: Ragnarok",
        year: 2017
    },
    {
        title:"Star Wars: The Last Jedi",
        year: 2017
    }

];


function click_image(object){
    console.log(object);
    // var newWindow = window.open('./download.html?id='+object.id);
    window.location.href = '/download?id='+object.id
}

function mouse_over_image() {

}


$(document).ready(function(){


    // Log::info('Showing user profile for user: '.$id);
    //
    // // url for myapi
     let my_api_url = "http://localhost:8000/movies/recent/10";
     $.get(my_api_url).done(function (object){
         for (let i=0;i<object.length ;i++){
            let my_id = object[i].id;
            let temp_api_url = "http://localhost:8000/movies/"+my_id+"/details";
             $.get(temp_api_url).done(function (object2){
                 let addr_cover = "/posters/" + object2[0].cover;

                 let new_img = document.createElement("img");
                 new_img.setAttribute("src",addr_cover);
                 let div_of_img = document.createElement("div");
                 div_of_img.className = "item";
                 div_of_img.appendChild(new_img);
                 $('#owl-carousel-father-div')
                     .owlCarousel('add', div_of_img)
                     .owlCarousel('update');

                 div_of_img.addEventListener("click", function () {
                     click_image(object2[0]);
                 });
                 div_of_img.onmouseover = mouse_over_image;



             });
         }
     });






    let owl = $("#owl-carousel-father-div");
    owl.owlCarousel({

        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        rtl: true
    });
    let mamad = document.getElementsByClassName("angle-point-to-right")[0];
    let mahdi = document.getElementsByClassName("angle-point-to-left")[0];
    mamad.onclick = function (e) {
        console.log("mamad 1");
        owl.trigger('prev.owl.carousel');
    };
    mahdi.onclick = function (e) {
        console.log("mamad 1");
        owl.trigger('next.owl.carousel');
    };


    let hotfilms_owl = $("#owl-carousel-hotfilms");
    hotfilms_owl.owlCarousel({

        autoplay: false,
        autoplayTimeout: 1800,
        autoplayHoverPause: true,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        rtl: true
    });
    let hotfilms_right = document.getElementsByClassName("angle-point-to-right")[1];
    let hotfilms_left = document.getElementsByClassName("angle-point-to-left")[1];
    hotfilms_right.onclick = function (e) {
        console.log("mamad 1");
        hotfilms_owl.trigger('prev.owl.carousel');
    };
    hotfilms_left.onclick = function (e) {
        console.log("mamad 1");
        hotfilms_owl.trigger('next.owl.carousel');
    };








    // for (let i=0;i<films.length ;i++){
    //
    //     //url for theimdb api
    //     // url = "http://www.theimdbapi.org/api/find/movie?title="+films[i].title+"&year="+films[i].year;
    //
    //     omdbapi_key = "9d16e1f7";
    //     // url for omdbapi
    //     url = "http://www.omdbapi.com/?t="+films[i].title+"&apikey="+omdbapi_key+"&plot=full";
    //
    //     $.get(url).done(function (object){
    //         let new_img = document.createElement("img");
    //         new_img.setAttribute("src",object["Poster"]);
    //         let div_of_img = document.createElement("div");
    //         div_of_img.className = "item";
    //         div_of_img.appendChild(new_img);
    //         $('#owl-carousel-father-div')
    //              .owlCarousel('add', div_of_img)
    //              .owlCarousel('update');
    //
    //         div_of_img.addEventListener("click", function () {
    //             click_image(object);
    //         });
    //         div_of_img.onmouseover = mouse_over_image;
    //
    //         // let content = '<div class="item"> <img src='+object["Poster"]+'alt="Owl Image"> </div>';
    //         // $('#owl-carousel-father-div')
    //         //     .owlCarousel('add', content)
    //         //     .owlCarousel('update')
    //
    //     });
    //
    // }



    // for (let i=0;i<hotfilms.length ;i++){
    //
    //     //url for theimdb api
    //     // url = "http://www.theimdbapi.org/api/find/movie?title="+films[i].title+"&year="+films[i].year;
    //
    //     omdbapi_key = "9d16e1f7";
    //     // url for omdbapi
    //     url = "http://www.omdbapi.com/?t="+hotfilms[i].title+"&apikey="+omdbapi_key+"&plot=full";
    //
    //     $.get(url).done(function (object){
    //
    //         let new_img = document.createElement("img");
    //         new_img.setAttribute("src",object["Poster"]);
    //
    //         let div_of_img = document.createElement("div");
    //         div_of_img.className = "item";
    //         div_of_img.appendChild(new_img);
    //         $('#owl-carousel-hotfilms')
    //             .owlCarousel('add', div_of_img)
    //             .owlCarousel('update');
    //
    //         div_of_img.addEventListener("click", function () {
    //             click_image(object);
    //         });
    //         div_of_img.onmouseover = mouse_over_image;
    //
    //         // let content = '<div class="item"> <img src='+object["Poster"]+'alt="Owl Image"> </div>';
    //         // $('#owl-carousel-father-div')
    //         //     .owlCarousel('add', content)
    //         //     .owlCarousel('update')
    //
    //     });
    //
    // }

    $.get(my_api_url).done(function (object){
        for (let i=0;i<object.length ;i++){
            let my_id = object[i].id;
            let temp_api_url = "http://localhost:8000/movies/"+my_id+"/details";
            $.get(temp_api_url).done(function (object2){
                let addr_cover = "/posters/" + object2[0].cover;
                let new_img = document.createElement("img");
                new_img.setAttribute("src",addr_cover);

                let div_of_img = document.createElement("div");
                div_of_img.className = "item";
                div_of_img.appendChild(new_img);
                $('#owl-carousel-hotfilms')
                    .owlCarousel('add', div_of_img)
                    .owlCarousel('update');

                div_of_img.addEventListener("click", function () {
                    click_image(object2[0]);
                });
                div_of_img.onmouseover = mouse_over_image;



            });
        }
    });







});

