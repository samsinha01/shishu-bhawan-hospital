var gelAll=[
    {
        galUrl:"hos1.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"hos2.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"hos3.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"hos4.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"hos5.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery1.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery2.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery3.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery4.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery5.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery6.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery7.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery8.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery9.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery10.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery11.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery12.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery13.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery14.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"gallery15.JPG",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g1.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g2.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g3.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g4.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g5.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g6.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"g7.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu1.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu2.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu3.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu4.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu5.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu6.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu7.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu8.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu9.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu1.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu2.jpeg",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu3.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu4.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu5.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu6.jpeg",
        galAlt:"gallery-img"
    }

];

gelAll.forEach(function(item, index){
    var gelAllParent=document.querySelector(".inner-sec-2");
    gelAllParent.innerHTML+=`
        <div class="gelImg">
            <a href="img/gallery/${item.galUrl}" target="_blank">
                <img src=img/gallery/${item.galUrl} alt=${item.galAlt}>
            </a>
        </div>
    `;
});