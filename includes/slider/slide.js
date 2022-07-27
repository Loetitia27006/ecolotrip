let slider = tns({
    container : ".my-slider",
    "slideBy" : "1",
    "speed" : 100,
    "nav" : false,
    autoplay : false,
    controls : true,
    autoplayButtonOutput : false,
    responsive : {
        1600: {
            items : 4,
            gutter : 20,
        },
        1024: {
            items : 3,
            gutter : 20,
        },
        768: {
            items : 2,
            gutter : 20,
        },
        480: {
            items : 1
        }
    }
})